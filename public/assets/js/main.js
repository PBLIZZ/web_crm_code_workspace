// public/assets/js/main.js

// --- SCROLL TO WAITLIST AND FOCUS EMAIL FUNCTION ---
function scrollToWaitlistAndFocus() {
    // Get the waitlist form element
    const waitlistForm = document.getElementById('footerWaitlistForm');
    const emailInput = waitlistForm?.querySelector('input[type="email"]');
    
    if (waitlistForm) {
        // Smooth scroll to the form
        waitlistForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Focus the email input after scrolling is complete (with a small delay)
        setTimeout(() => {
            if (emailInput) {
                emailInput.focus();
            }
        }, 800); // Adjust the delay as needed to ensure scrolling is complete
    }
}

// Handle clicks on pricing buttons that link to #waitlist-footer
document.addEventListener('DOMContentLoaded', function() {
    // Find all links with href="#waitlist-footer"
    const waitlistLinks = document.querySelectorAll('a[href="#waitlist-footer"]');
    
    // Add click event listener to each link
    waitlistLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            scrollToWaitlistAndFocus();
        });
    });
});


// --- UTILITY FUNCTIONS (Defined at the top level so they are globally accessible within this script) ---

// --- Utility: Set current year in elements with ID 'year' ---
function setFooterYear() {
    const yearElements = document.querySelectorAll('#year'); 
    if (yearElements.length > 0) {
        const currentYear = new Date().getFullYear();
        yearElements.forEach(el => el.textContent = currentYear);
    }
}

// --- Utility: Generic Fetch-based Form Handler ---
async function handleFormSubmit(formId, endpoint, successId, errorId) {
    const form = document.getElementById(formId);
    if (!form) {
        // console.warn(`Form with ID "${formId}" not found for handleFormSubmit.`);
        return;
    }

    const successMessageElement = successId ? document.getElementById(successId) : null;
    const errorMessageElement = errorId ? document.getElementById(errorId) : null;
    const submitButton = form.querySelector('button[type="submit"], input[type="submit"]');
    const originalButtonText = submitButton ? (submitButton.tagName === 'INPUT' ? submitButton.value : submitButton.textContent) : 'Submit';

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        if (errorMessageElement) {
            errorMessageElement.textContent = '';
            errorMessageElement.classList.add('hidden');
        }
        form.querySelectorAll('.form-error-message-inline').forEach(el => el.remove());

        if (submitButton) {
            submitButton.disabled = true;
            if (submitButton.tagName === 'INPUT') submitButton.value = 'Submitting...';
            else submitButton.textContent = 'Submitting...';
        }

        const formData = new FormData(form);
        const apiKey = window.OMNIPOTENCY_AI_CONFIG?.apiKey || '';
        console.log('Attempting to send API Key to PHP:', apiKey);
        
        try {
            const response = await fetch(endpoint, {
                method: 'POST',
                headers: {
                    'X-API-KEY': apiKey,
                    'Accept': 'application/json'
                },
                body: formData
            });

            if (response.ok) {
                if (successMessageElement) {
                    successMessageElement.classList.remove('hidden');
                    setTimeout(() => {
                        successMessageElement.classList.add('hidden');
                    }, 5000);
                }
                form.reset();
                if (submitButton) {
                     if (submitButton.tagName === 'INPUT') submitButton.value = originalButtonText;
                     else submitButton.textContent = originalButtonText;
                     submitButton.disabled = false;
                }
            } else {
                let errorData;
                try { errorData = await response.json(); } 
                catch (e) { errorData = { message: await response.text() || `Submission failed: ${response.status}` }; }
                const errorMessage = errorData?.message || `Error: ${response.statusText}`;

                if (errorMessageElement) {
                    errorMessageElement.textContent = errorMessage;
                    errorMessageElement.classList.remove('hidden');
                } else if (submitButton) {
                   const errorP = document.createElement('p');
                   errorP.className = 'text-red-400 text-sm mt-2 form-error-message-inline';
                   errorP.textContent = errorMessage;
                   submitButton.parentNode.insertBefore(errorP, submitButton.nextSibling);
                } else { alert(`Submission failed: ${errorMessage}`); }

                if (submitButton) {
                    const tempErrorText = 'Submission Failed';
                    if (submitButton.tagName === 'INPUT') submitButton.value = tempErrorText;
                    else submitButton.textContent = tempErrorText;
                    setTimeout(() => {
                        if (submitButton.tagName === 'INPUT') submitButton.value = originalButtonText;
                        else submitButton.textContent = originalButtonText;
                        submitButton.disabled = false;
                    }, 3000);
                }
            }
        } catch (error) {
            const networkErrorMessage = 'A network error occurred. Please try again.';
            if (errorMessageElement) {
                errorMessageElement.textContent = networkErrorMessage;
                errorMessageElement.classList.remove('hidden');
            } else if (submitButton) {
                const errorP = document.createElement('p');
                errorP.className = 'text-red-400 text-sm mt-2 form-error-message-inline';
                errorP.textContent = networkErrorMessage;
                submitButton.parentNode.insertBefore(errorP, submitButton.nextSibling);
            } else { alert(networkErrorMessage); }

            if (submitButton) {
                const tempErrorText = 'Network Error';
                if (submitButton.tagName === 'INPUT') submitButton.value = tempErrorText;
                else submitButton.textContent = tempErrorText;
                setTimeout(() => {
                    if (submitButton.tagName === 'INPUT') submitButton.value = originalButtonText;
                    else submitButton.textContent = originalButtonText;
                    submitButton.disabled = false;
                }, 3000);
            }
        }
    });
}

// --- Reusable Carousel Controller Factory ---
function createCarousel(options) {
    const { 
        sliderId, 
        slideClassName, 
        prevBtnId, 
        nextBtnId, 
        dotsContainerId,
        defaultSlidesPerView = { sm: 1, md: 2, lg: 3 }, 
        dotActiveClass = 'bg-brand-orange-500 w-3 h-3 opacity-100', 
        dotInactiveClass = 'bg-slate-600 w-2 h-2 opacity-60'    
    } = options;

    const slider = document.getElementById(sliderId);
    const prevBtn = prevBtnId ? document.getElementById(prevBtnId) : null;
    const nextBtn = nextBtnId ? document.getElementById(nextBtnId) : null;
    const dotsContainer = dotsContainerId ? document.getElementById(dotsContainerId) : null;

    if (!slider) {
        return { goToSlideByIndex: () => {}, recalculate: () => {} }; 
    }

    const slides = Array.from(slider.querySelectorAll('.' + slideClassName));
    if (!slides.length) {
        return { goToSlideByIndex: () => {}, recalculate: () => {} };
    }

    let currentIndex = 0; 
    let currentSlidesPerView = defaultSlidesPerView.lg; 
    let slideWidthPercentage = 100 / currentSlidesPerView;

    function updateDots() {
        if (!dotsContainer) return;
        const dotButtons = dotsContainer.querySelectorAll('button');
        const activeGroup = Math.floor(currentIndex / currentSlidesPerView); 

        dotButtons.forEach((dot, i) => {
            const isActive = i === activeGroup;
            dot.className = 'rounded-full focus:outline-none transition-all duration-300 ease-in-out mx-1 opacity-75 hover:opacity-100'; 
            if (isActive) {
                dot.classList.add(...dotActiveClass.split(' '));
            } else {
                dot.classList.add(...dotInactiveClass.split(' '));
            }
            dot.setAttribute('aria-current', isActive ? 'true' : 'false');
        });
    }

    function createDots() {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = ''; 
        const totalGroups = Math.ceil(slides.length / currentSlidesPerView);
        if (totalGroups <= 1) {
            dotsContainer.innerHTML = ''; 
            return;
        }
        for (let i = 0; i < totalGroups; i++) {
            const btn = document.createElement('button');
            btn.className = `rounded-full focus:outline-none transition-all duration-300 ease-in-out mx-1 opacity-75 hover:opacity-100 ${dotInactiveClass}`;
            btn.setAttribute('aria-label', `Go to group ${i + 1}`);
            btn.setAttribute('aria-current', 'false');
            btn.addEventListener('click', () => {
                goToSlideByIndex(i * currentSlidesPerView);
            });
            dotsContainer.appendChild(btn);
        }
        updateDots(); 
    }
    
    function calculateResponsiveSettings() {
        const windowWidth = window.innerWidth;
        
        // Updated breakpoints based on user requirements
        if (windowWidth < 640) {
            // Extra small screens (mobile): 1 card
            currentSlidesPerView = defaultSlidesPerView.sm;
        } else if (windowWidth < 774) {
            // Small screen range: show 2 cards in stacked layout
            currentSlidesPerView = defaultSlidesPerView.md;
        } else if (windowWidth < 1200) {
            // Medium to large screens: 2 cards with horizontal layout
            currentSlidesPerView = defaultSlidesPerView.md;
        } else {
            // Extra large screens: 3 cards
            currentSlidesPerView = defaultSlidesPerView.lg;
        }
        
        currentSlidesPerView = Math.min(currentSlidesPerView, slides.length); 
        if (currentSlidesPerView === 0 && slides.length > 0) currentSlidesPerView = 1; 

        slideWidthPercentage = currentSlidesPerView > 0 ? (100 / currentSlidesPerView) : 100;
        slides.forEach(s => (s.style.flex = `0 0 ${slideWidthPercentage}%`));
    }

    function goToSlideByIndex(slideIdx, smooth = true) {
        if (!slides.length) return;
        const maxPossibleStartIndex = Math.max(0, slides.length - currentSlidesPerView);
        currentIndex = Math.max(0, Math.min(slideIdx, maxPossibleStartIndex));
        slider.style.transition = smooth ? 'transform 0.45s cubic-bezier(0.25, 0.1, 0.25, 1)' : 'none'; 
        slider.style.transform = `translateX(${-currentIndex * slideWidthPercentage}%)`;
        updateDots();
    }

    function recalculateAndGo(slideIdx, smooth = false) {
        calculateResponsiveSettings(); 
        createDots(); 
        goToSlideByIndex(slideIdx, smooth);
    }

    function init() {
        if (!slides.length) return; 
        calculateResponsiveSettings();
        createDots();
        goToSlideByIndex(0, false); 

        prevBtn?.addEventListener('click', () => goToSlideByIndex(currentIndex - currentSlidesPerView));
        nextBtn?.addEventListener('click', () => goToSlideByIndex(currentIndex + currentSlidesPerView));

        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                const firstVisibleSlideIndexBeforeResize = currentIndex;
                recalculateAndGo(firstVisibleSlideIndexBeforeResize, false);
            }, 250);
        });
    }

    // The init function itself is now called from DOMContentLoaded
    init();

    return { // Expose methods
        goToSlideByIndex,
        recalculate: () => recalculateAndGo(currentIndex, false) 
    };
}


// --- MAIN DOMContentLoaded LISTENER (for all initializations) ---
document.addEventListener('DOMContentLoaded', function() {

    // --- Feature List Toggle ---
    document.querySelectorAll('.toggle-features-btn').forEach(button => {
        button.addEventListener('click', (event) => {
            // Find the closest parent '.p-8' which contains both the button and the list
            const cardContentDiv = event.target.closest('.p-8'); 
            if (!cardContentDiv) {
                console.error('Could not find parent .p-8 for feature list toggle.');
                return;
            }

            const featureList = cardContentDiv.querySelector('.feature-list');
            if (!featureList) {
                console.error('Could not find .feature-list within the card content.');
                return;
            }

            const hiddenFeatures = featureList.querySelectorAll('.feature-hidden');
            if (hiddenFeatures.length === 0) {
                // No hidden features to toggle, maybe hide the button?
                // Or button shouldn't have been rendered.
                console.warn('No .feature-hidden elements found for this button.');
                // event.target.style.display = 'none'; // Optionally hide button
                return;
            }

            // Check the current state based on the first hidden item
            // It's better to check for the 'hidden' class directly
            const isCurrentlyExpanded = !hiddenFeatures[0].classList.contains('hidden');

            hiddenFeatures.forEach(feature => {
                // If it's currently expanded, we want to hide them (add 'hidden')
                // If it's currently hidden, we want to show them (remove 'hidden')
                feature.classList.toggle('hidden', isCurrentlyExpanded);
            });

            // Update button text
            event.target.textContent = isCurrentlyExpanded ? 'See All Features' : 'See Fewer Features';
        });
    });
    
    // --- Initialize FAQ Accordion ---
    const faqContainer = document.getElementById('faqContainer');
    if (faqContainer) {
        const faqItems = faqContainer.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const button = item.querySelector('[data-faq-button]');
            const answer = item.querySelector('.faq-answer');
            const plusIcon = item.querySelector('.plus-icon');
            const minusIcon = item.querySelector('.minus-icon');
            
            if (!button || !answer) return;
            
            button.addEventListener('click', () => {
                const isExpanded = !answer.classList.contains('hidden');
                
                // Close all other FAQs
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        const otherPlusIcon = otherItem.querySelector('.plus-icon');
                        const otherMinusIcon = otherItem.querySelector('.minus-icon');
                        
                        if (otherAnswer) otherAnswer.classList.add('hidden');
                        if (otherPlusIcon) otherPlusIcon.classList.remove('hidden');
                        if (otherMinusIcon) otherMinusIcon.classList.add('hidden');
                    }
                });
                
                // Toggle current FAQ
                answer.classList.toggle('hidden');
                
                // Toggle icons
                if (isExpanded) {
                    plusIcon.classList.remove('hidden');
                    minusIcon.classList.add('hidden');
                } else {
                    plusIcon.classList.add('hidden');
                    minusIcon.classList.remove('hidden');
                }
            });
        });
        
        // Open the first FAQ item by default (optional)
        if (faqItems.length > 0) {
            const firstButton = faqItems[0].querySelector('[data-faq-button]');
            if (firstButton) firstButton.click();
        }
    }

    // Initialize Footer Year
    setFooterYear();

    // Initialize Form Handlers
    // Footer waitlist form
    handleFormSubmit('footerWaitlistForm', '/api/waitlist.php', 'footerWaitlistSuccess', 'footerWaitlistError');
    
    // Beta tester waitlist form
    handleFormSubmit('betaWaitlistForm', '/api/beta_lead.php', 'betaWaitlistSuccess', 'betaWaitlistError');

    // Initialize Mobile Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const iconOpen = document.getElementById('menuIconOpen'); 
    const iconClose = document.getElementById('menuIconClose'); 

    if (menuToggle && mobileMenu && iconOpen && iconClose) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            if (!isExpanded) { 
                mobileMenu.classList.remove('hidden');
                requestAnimationFrame(() => { 
                    mobileMenu.classList.remove('opacity-0'); 
                    mobileMenu.classList.add('opacity-100'); 
                });
                iconOpen.classList.add('hidden');
                iconClose.classList.remove('hidden');
            } else { 
                mobileMenu.classList.remove('opacity-100');
                mobileMenu.classList.add('opacity-0');
                mobileMenu.addEventListener('transitionend', function handler() {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.removeEventListener('transitionend', handler); 
                }, { once: true });
                 iconOpen.classList.remove('hidden');
                 iconClose.classList.add('hidden');
            }
        });
    }

    // Initialize Hero Waitlist Form
    const heroForm = document.getElementById('heroWaitlistForm');
    if (heroForm) {
        handleFormSubmit(
            'heroWaitlistForm',
            (window.OMNIPOTENCY_AI_CONFIG?.baseUrl || '') + '/api/lead.php',
            'heroWaitlistSuccess',
            'heroWaitlistError'
        );
    }

    // Initialize Footer Waitlist Form
    const footerWaitlist = document.getElementById('footerWaitlistForm'); 
    if (footerWaitlist) {
        handleFormSubmit(
            'footerWaitlistForm', 
            (window.OMNIPOTENCY_AI_CONFIG?.baseUrl || '') + '/api/lead.php', 
            'footerWaitlistSuccess', 
            'footerWaitlistError'    
        );
    }

    // Initialize Feature Overview Carousel
    createCarousel({
        sliderId: 'featureCardSlider',
        slideClassName: 'feature-card-slide',
        prevBtnId: 'prevFeatureCard',
        nextBtnId: 'nextFeatureCard',
        dotsContainerId: 'featureCardSliderDots',
        defaultSlidesPerView: { sm: 1, md: 2, lg: 3 }, 
        dotActiveClass: 'bg-brand-orange-500 w-3 h-3 opacity-100',
    });
    
    // Initialize Problems Carousel
    createCarousel({
        sliderId: 'problemsSlider',
        slideClassName: 'problems-slide',
        prevBtnId: 'prevProblem',
        nextBtnId: 'nextProblem',
        dotsContainerId: 'problemsSliderDots',
        defaultSlidesPerView: { sm: 1, md: 2, lg: 3 }, 
        dotActiveClass: 'bg-brand-orange-500 w-3 h-3 opacity-100',
        dotInactiveClass: 'bg-slate-600 w-2 h-2 opacity-60'
    });

    // Add initializations for other carousels here when their HTML is ready
    // createCarousel({ sliderId: 'problemsSlider', ... });
    // createCarousel({ sliderId: 'valuesSlider', ... });
    // createCarousel({ sliderId: 'techSlider', ... });

    // --- Back to Top Button Functionality ---
    const backToTopButton = document.getElementById('backToTopBtn');
    if (backToTopButton) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) { // Show button after scrolling 300px
                backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
                backToTopButton.classList.add('opacity-100');
            } else {
                backToTopButton.classList.add('opacity-0', 'pointer-events-none');
                backToTopButton.classList.remove('opacity-100');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

}); // End of MAIN DOMContentLoaded listener