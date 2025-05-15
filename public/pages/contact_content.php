<?php
$pageTitle = 'Contact Us - Omnipotency AI';
$pageDescription = 'Get in touch with the Omnipotency AI team for support, inquiries, or feedback.';
$currentPage = 'contact';
?>
<div class="container mx-auto px-4 py-12">
    <header class="text-center mb-12">
        <h1 class="text-4xl font-bold text-brand-teal-400">Contact Omnipotency AI</h1>
        <p class="mt-4 text-lg text-slate-300">We'd love to hear from you! Please use the form below or email us directly.</p>
    </header>

    <div class="max-w-2xl mx-auto bg-slate-800/50 p-8 rounded-lg shadow-xl">
        <form id="contactUsForm" action="/api/contact.php" method="POST"> <!-- Action to be created later -->
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-slate-300">Full Name</label>
                <input type="text" id="name" name="name" class="bg-slate-700 border border-slate-600 text-slate-300 text-sm rounded-lg focus:ring-brand-orange-500 focus:border-brand-orange-500 block w-full p-2.5" placeholder="Your Name" required>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-slate-300">Email Address</label>
                <input type="email" id="email" name="email" class="bg-slate-700 border border-slate-600 text-slate-300 text-sm rounded-lg focus:ring-brand-orange-500 focus:border-brand-orange-500 block w-full p-2.5" placeholder="you@example.com" required>
            </div>
            <div class="mb-6">
                <label for="subject" class="block mb-2 text-sm font-medium text-slate-300">Subject</label>
                <input type="text" id="subject" name="subject" class="bg-slate-700 border border-slate-600 text-slate-300 text-sm rounded-lg focus:ring-brand-orange-500 focus:border-brand-orange-500 block w-full p-2.5" placeholder="Reason for contacting" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-slate-300">Message</label>
                <textarea id="message" name="message" rows="4" class="bg-slate-700 border border-slate-600 text-slate-300 text-sm rounded-lg focus:ring-brand-orange-500 focus:border-brand-orange-500 block w-full p-2.5" placeholder="Your message..." required></textarea>
            </div>
            <button type="submit" class="w-full text-white bg-brand-orange-500 hover:bg-brand-orange-600 focus:ring-4 focus:outline-none focus:ring-brand-orange-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Send Message</button>
            <p id="contactFormSuccess" class="text-center text-sm text-green-400 mt-3 hidden">🎉 Message sent! We'll get back to you soon.</p>
            <p id="contactFormError" class="text-center text-sm text-red-400 mt-3 hidden"></p>
        </form>
        <p class="text-center text-slate-400 mt-6">Alternatively, you can email us at: <a href="mailto:team@omnipotency.ai" class="text-brand-teal-400 hover:underline">team@omnipotency.ai</a></p>
    </div>
</div>
<script>
// Basic form handler placeholder for contact form - to be enhanced in main.js or a dedicated script
// For now, this uses the generic handleFormSubmit if available, assuming an API endpoint like /api/contact.php
document.addEventListener('DOMContentLoaded', function() {
    if (typeof handleFormSubmit === 'function') {
        handleFormSubmit('contactUsForm', '<?php echo BASE_URL; ?>/api/contact.php', 'contactFormSuccess', 'contactFormError');
    } else {
        // Fallback if generic handler isn't loaded or for testing
        const contactForm = document.getElementById('contactUsForm');
        if(contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Contact form submission placeholder. API endpoint needs to be created.');
                // document.getElementById('contactFormSuccess').classList.remove('hidden');
                // contactForm.reset();
            });
        }
    }
});
</script>
