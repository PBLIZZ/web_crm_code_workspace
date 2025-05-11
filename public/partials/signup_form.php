<?php // views/partials/signup_form.php ?>

<div class="mt-8 p-6 md:p-8 bg-white shadow-xl rounded-lg max-w-lg mx-auto">
    <h2 class="text-2xl font-semibold text-slate-700 mb-3 text-center">Sign Up for Updates</h2>
    <p class="text-slate-600 mb-6 text-center">Enter your email address to receive news and updates from Omnipotency.ai.</p>
    
    <form action="process_signup.php" method="POST" class="space-y-6">
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email Address:</label>
            <input type="email" id="email" name="email" required 
                   class="mt-1 block w-full px-4 py-3 border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                   placeholder="you@example.com">
        </div>
        
        <div>
            <button type="submit" 
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 transition-colors duration-150">
                Subscribe
            </button>
        </div>
    </form>
</div>
