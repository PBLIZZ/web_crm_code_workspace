# Product Requirements Document (Simplified for This Project)

        ## 1. Introduction & Goals

        **Product Name:** Omnipotency.ai Website (Landing Page & Core Informational Pages)
        **Goal:** Serve as the primary online presence for Omnipotency.ai, effectively communicate its value proposition to wellness practitioners, drive sign-ups for waitlist/beta program, and build brand awareness.

        ### Target Audience

        - **Primary:**
          Solo or small-group wellness practitioners (Yoga Teachers, Massage Therapists, Acupuncturists, Coaches, etc.)
        - **Characteristics:**
          - May be newly qualified or looking to grow/streamline an existing practice
          - Often overwhelmed by admin/marketing
          - Value ease-of-use, affordability, and tools tailored to their needs


        ---

        ## 2. Project Scope & Key Pages/Sections

        - **Landing Page** (`index.php`)
          - Hero
          - Key Benefits
          - How It Works / Hub
          - Features Overview
          - Pricing
          - Social Proof
          - Testimonials
          - FAQ
          - Final CTA / Waitlist

        - **About Page** (`about.php`)
          Company story, mission, vision, team (if applicable), beta program details.

        - **Pricing Page** (`pricing.php` _or_ section on Landing Page)
          Clear tier descriptions (Inspire, Empower, Transform), features per tier, credit system explanation, call to action.

        - **Terms of Service** (`terms_of_service.php`)
          Legal terms.

        - **Privacy Policy** (`privacy_policy.php`)
          Data handling practices.

        - **Survey Page** (`survey.php`)
          For user feedback.

        - **Future:**
          Blog index & post pages, documentation pages.

        ---

        ## 3. Core Functionality Requirements

        1. **Responsive Design**
           Works seamlessly on desktop, tablet, and mobile.

        2. **Navigation**
           Clear header/footer menus for both desktop and mobile.

        3. **Lead Capture**
           - Waitlist signup form (Email only – in footer)
           - Beta Program application form (Name, Email, Practice Type, Message – on About page)
           - Survey submission form

        4. **API Integration**
           Forms submit data to backend PHP scripts:
           - `api/lead.php`
           - `api/survey.php`

        5. **Security**
           - Protection against directory listing
           - Secure handling of API keys and database credentials (via `.env`)
           - Server-side validation of form inputs
           - Basic XSS protection (e.g., `htmlspecialchars`)

        6. **Email Notifications**
           Admin notification on survey submission via PHP `mail()` (PHPMailer integration planned later).

        7. **Styling**
           Consistent dark theme with brand colors (teal, orange) via Tailwind CSS (built for production).

        ---

        ## 4. Technical Stack

        - **Frontend:** HTML, Tailwind CSS, Vanilla JavaScript
        - **Backend (Forms/API):** PHP
        - **Local Development:** MAMP
        - **Hosting:** Hostinger
        - **Version Control:** Git (GitHub)
        - **Future Backend App:** Supabase, Gemini API

        ---

        ## 5. Non-Functional Requirements

        - **Performance:** Fast load times (optimized images, pre-built CSS)
        - **Maintainability:**
          - Code organized into partials & sections
          - Clear, minimal comments
        - **Scalability:** Easily add new pages or sections

        ---

        ## 6. Assumptions & Constraints

        - Initial focus is the public-facing website; CRM app is separate.
        - Tailwind CSS is built for production (no CDN).
        - Email notifications use PHP `mail()` initially; SMTP via PHPMailer is a future enhancement.