// public/assets/js/main.js

// --- Utility: Set current year in elements with ID 'year' ---
// Scope: Global (runs immediately)
(function setFooterYear() {
    // Defer finding elements until DOM is loaded, or ensure this script is at end of body
    document.addEventListener('DOMContentLoaded', () => {
        const yearElements = document.querySelectorAll('#year'); 
        if (yearElements.length > 0) {
            const currentYear = new Date().getFullYear();
            yearElements.forEach(el => el.textContent = currentYear);
        }
    });
})();


// --- Component: Mobile Menu Toggle ---
// Scope: Runs after DOM content is loaded to ensure elements exist
document.addEventListener('DOMContentLoaded', () => {
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
    } else {
        // Conditional console warnings
        // if (!menuToggle) console.warn("Mobile menu button ('menuToggle') not found.");
        // if (!mobileMenu) console.warn("Mobile menu element ('mobileMenu') not found.");
        // if (!iconOpen) console.warn("Mobile menu open icon ('menuIconOpen') not found.");
        // if (!iconClose) console.warn("Mobile menu close icon ('menuIconClose') not found.");
    }
});


// --- Utility: Generic Fetch-based Form Handler ---
// Scope: Global function, can be called from DOMContentLoaded
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

    // Remove any existing listener to prevent multiple submissions if this function is called multiple times on the same form by mistake
    // This requires a named function if we were to remove it properly.
    // For now, let's assume it's called once per form within DOMContentLoaded.

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
        // const apiKey = window.OMNIPOTENCY_AI_CONFIG?.apiKey || 'YOUR_FALLBACK_API_KEY_FOR_DEV_ONLY_IF_DOTENV_FAILS'; // OLD
        const apiKey = window.OMNIPOTENCY_AI_CONFIG?.apiKey || ''; // NEW - Use configured or empty

        console.log('Attempting to send API Key to PHP:', apiKey); // Keep this for debugging   
        try {
            const response = await fetch(endpoint, {
                method: 'POST',
                headers: {
                    'X-API-KEY': apiKey, // Is this 'apiKey' variable actually getting the correct value?
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
                // console.log(`Form "${formId}" submitted successfully to ${endpoint}`);
                if (submitButton) {
                     if (submitButton.tagName === 'INPUT') submitButton.value = originalButtonText;
                     else submitButton.textContent = originalButtonText;
                     submitButton.disabled = false;
                }
            } else {
                let errorData;
                try {
                    errorData = await response.json(); // Try to parse as JSON
                } catch (e) {
                    errorData = { message: await response.text() || `Submission failed: ${response.status}` };
                }
                const errorMessage = errorData?.message || `Error: ${response.statusText}`;
                // console.error(`Form "${formId}" submission failed: ${response.status}`, errorData);

                if (errorMessageElement) {
                    errorMessageElement.textContent = errorMessage;
                    errorMessageElement.classList.remove('hidden');
                } else if (submitButton) {
                   const errorP = document.createElement('p');
                   errorP.className = 'text-red-400 text-sm mt-2 form-error-message-inline';
                   errorP.textContent = errorMessage;
                   submitButton.parentNode.insertBefore(errorP, submitButton.nextSibling);
                } else {
                    alert(`Submission failed: ${errorMessage}`);
                }

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
            // console.error(`Network error or exception during form "${formId}" submission:`, error);
            const networkErrorMessage = 'A network error occurred. Please try again.';
            if (errorMessageElement) {
                errorMessageElement.textContent = networkErrorMessage;
                errorMessageElement.classList.remove('hidden');
            } else if (submitButton) {
                const errorP = document.createElement('p');
                errorP.className = 'text-red-400 text-sm mt-2 form-error-message-inline';
                errorP.textContent = networkErrorMessage;
                submitButton.parentNode.insertBefore(errorP, submitButton.nextSibling);
            } else {
                alert(networkErrorMessage);
            }

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


// --- Initialize Forms & Other DOM-Dependent UI on Load ---
document.addEventListener('DOMContentLoaded', function() {

    // Initialize Hero Waitlist Form (from hero.php)
    const heroForm = document.getElementById('heroWaitlistForm');
    if (heroForm) {
        handleFormSubmit(
            'heroWaitlistForm',
            (window.OMNIPOTENCY_AI_CONFIG?.baseUrl || '') + '/api/lead.php', // Use BASE_URL for endpoint
            'heroWaitlistSuccess',
            'heroWaitlistError'
        );
    }

    // Initialize Footer Waitlist Form (from footer.php) 
    const footerWaitlist = document.getElementById('footerWaitlistForm'); 
    if (footerWaitlist) {
        handleFormSubmit(
            'footerWaitlistForm', 
            (window.OMNIPOTENCY_AI_CONFIG?.baseUrl || '') + '/api/lead.php', 
            'footerWaitlistSuccess', // Ensure this ID exists in footer.php
            'footerWaitlistError'    // Ensure this ID exists in footer.php
        );
    }

    // Initialize Beta Program Form (from about.php, ID "early-adopters")
    //const betaForm = document.getElementById('early-adopters');
    //if (betaForm) {
    //    handleFormSubmit(
    //        'early-adopters', 
    //        (window.OMNIPOTENCY_AI_CONFIG?.baseUrl || '') + '/api/lead.php', 
    //        'betaWaitlistSuccess', // Ensure this ID exists near the beta form
    //        'betaWaitlistError'    // Ensure this ID exists near the beta form
    //    );
    //}

    // Initialize Survey Form (from survey.php)
    //const surveyFormEl = document.getElementById('surveyForm');
    //if (surveyFormEl) {
    //    handleFormSubmit(
    //        'surveyForm', 
    //        (window.OMNIPOTENCY_AI_CONFIG?.baseUrl || '') + '/api/survey.php', 
    //        'surveySuccess', // Ensure this ID exists in survey.php
    //        'surveyError'    // Ensure this ID exists in survey.php
    //    );
    //}

    // --- Feature List Toggle for Pricing Section ---
    document.querySelectorAll('.toggle-features-btn').forEach(button => {
        button.addEventListener('click', (event) => {
            // Try to find the feature list within the same card structure
            let parentCard = event.target.closest('.p-8'); // Assumes features and button are within this div
            if (!parentCard) { // Fallback if structure is slightly different
                parentCard = event.target.closest('div[class*="bg-slate-900"]'); // More generic card parent
            }
            if (!parentCard) return;

            const featureList = parentCard.querySelector('.feature-list');
            if (!featureList) return;

            const hiddenFeatures = featureList.querySelectorAll('.feature-hidden');
            if (!hiddenFeatures.length) return;

            const isCurrentlyHidden = hiddenFeatures[0].classList.contains('hidden');

            hiddenFeatures.forEach(feature => {
                feature.classList.toggle('hidden', !isCurrentlyHidden);
            });
            event.target.textContent = isCurrentlyHidden ? 'See Fewer Features' : 'See All Features';
        });
    });

    // Add other DOM-dependent initializations here
    // e.g., Carousels, FAQ accordions, Scroll reveal, Active Nav highlighting etc.
    // For now, keeping it focused on forms and the menu.

});