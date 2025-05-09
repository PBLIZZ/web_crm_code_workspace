document.addEventListener('DOMContentLoaded', function() {
    // Function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
    
    // Check for message parameter in URL
    const message = getUrlParameter('message');
    const status = getUrlParameter('status');
    
    if (message) {
        // Create message element
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message');
        messageDiv.classList.add(status);
        messageDiv.textContent = message;
        
        // Insert message at the top of container
        const container = document.querySelector('.container');
        container.insertBefore(messageDiv, container.firstChild);
        
        // Auto-remove message after 5 seconds
        setTimeout(function() {
            messageDiv.style.opacity = '0';
            setTimeout(function() {
                messageDiv.remove();
            }, 500);
        }, 5000);
    }
    
    // Form validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            let isValid = true;
            
            // Check required fields
            const requiredFields = form.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error-field');
                } else {
                    field.classList.remove('error-field');
                }
            });
            
            // Validate email format if present
            const emailFields = form.querySelectorAll('input[type="email"]');
            emailFields.forEach(field => {
                if (field.value.trim() && !isValidEmail(field.value.trim())) {
                    isValid = false;
                    field.classList.add('error-field');
                }
            });
            
            if (!isValid) {
                event.preventDefault();
            }
        });
    });
    
    // Email validation function
    function isValidEmail(email) {
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return regex.test(email);
    }
});
