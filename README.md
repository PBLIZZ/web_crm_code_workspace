# Omnipotency.ai CRM Application Website

Last Updated: 2025-05-11

# Omnipotency.ai Website

This repository contains the source code for the public-facing website of Omnipotency.ai, an AI-powered CRM designed for wellness practitioners.

## Project Goal

To serve as the primary online presence for Omnipotency.ai, effectively communicate its value proposition, drive waitlist/beta sign-ups, and build brand awareness.

## Tech Stack

-   **Frontend:** HTML, Tailwind CSS, Vanilla JavaScript
-   **Backend (Forms/API):** PHP
-   **Local Development:** MAMP (or similar PHP-enabled local server)
-   **Hosting:** Hostinger
-   **CSS Framework:** Tailwind CSS (requires a build step for production)
-   **Version Control:** Git

## File Structure Overview (Key Directories)

/ (Project Root - web_crm_code_workspace)
├── public/                  # Web server's document root (Hostinger's public_html)
│   ├── index.php            # Landing page controller
│   ├── assets/              # CSS, JS, Images
│   │   ├── css/output.css   # **COMPILED/BUILT** Tailwind CSS
│   │   ├── js/main.js
│   │   └── img/
│   ├── partials/            # Reusable PHP components (header, footer, main_layout)
│   ├── sections/            # PHP files for individual landing page sections
│   ├── pages/               # PHP files for distinct pages (about.php, privacy.php, etc.)
│   └── api/                 # Backend PHP scripts for form processing
├── src/                     # Source files for development (e.g., Tailwind input CSS)
│   └── css/input.css        # Main CSS file with @tailwind directives
├── config/                  # Configuration files (NOT FOR PUBLIC DEPLOYMENT - if outside public/)
│   └── database.php         # (Example - if you have one)
├── utils/                   # Utility PHP functions (NOT FOR PUBLIC DEPLOYMENT - if outside public/)
│   └── mailer.php
├── .env                     # **IMPORTANT: Local environment variables. DO NOT COMMIT.**
├── .env.example             # Example .env file. Commit this.
├── tailwind.config.js       # Tailwind CSS configuration
├── package.json             # For npm dependencies (Tailwind, PostCSS)
├── postcss.config.js        # For PostCSS (used by Tailwind)
└── README.md                # This file

## Local Development Setup

1.  **Prerequisites:**
    *   MAMP (or XAMPP, WAMP, or local PHP server) installed and running.
    *   Node.js and npm (or pnpm/yarn) installed: [https://nodejs.org/](https://nodejs.org/)
2.  **Clone the Repository:**
    ```bash
    git clone https://github.com/PBLIZZ/web_crm_code_workspace.git
    cd web_crm_code_workspace
    ```
3.  **Install Dependencies:**
    ```bash
    npm install 
    # This will install Tailwind CSS, PostCSS, Autoprefixer based on package.json
    ```
4.  **Environment Variables:**
    *   Copy `.env.example` to a new file named `.env` in the project root: `cp .env.example .env`
    *   Edit `.env` and fill in your local database credentials (if applicable for local testing of API scripts) and any other required API keys (e.g., `API_KEY` for form submissions, `YOUR_NOTIFICATION_EMAIL`).
5.  **Configure MAMP (or similar):**
    *   Point MAMP's web server document root to the `public/` directory inside your cloned `web_crm_code_workspace` project.
    *   Ensure MAMP is using a compatible PHP version.
6.  **Build CSS & Watch for Changes:**
    *   Open a terminal in the project root (`web_crm_code_workspace/`).
    *   Run the Tailwind build command (ensure paths in `tailwind.config.js` and this command are correct):
        ```bash
        npx tailwindcss -i ./src/css/input.css -o ./public/assets/css/output.css --watch
        ```
    *   This command will compile your Tailwind CSS from `src/css/input.css` into `public/assets/css/output.css` and watch for changes in your template files (PHP, JS) and `input.css`. Keep this terminal window running while you develop.
7.  **Access Locally:** Open your web browser and navigate to the local URL provided by MAMP (e.g., `http://localhost:8888`).

## Deployment to Hostinger

1.  Ensure your local code is committed and pushed to the `main` (or deployment) branch of your GitHub repository (`web_crm_code_workspace.git`).
2.  In Hostinger hPanel, configure Git deployment to pull from this repository.
3.  Set Hostinger's **Document Root** for `studiodigitalmarketing.com` to point to the `public/` subdirectory of your deployed project.
4.  Ensure the `.env` file is created/managed on the Hostinger server (ideally outside `public_html` but accessible by PHP, or within `public_html` and protected by `.htaccess`). **Do not commit the actual `.env` file to Git.**
5.  **Important:** The Tailwind CSS build step (`npx tailwindcss ... -o ./public/assets/css/output.css`) should ideally be run as part of your deployment process on the server if Hostinger's Git deployment supports build hooks, OR you must build `output.css` locally and ensure it's committed and pushed with your changes so Hostinger pulls the latest built CSS. *For simplicity, committing the built `output.css` is often easier with basic Git deployments unless you have a CI/CD pipeline.*

## Key Configuration Points

-   **`.env`:** Contains sensitive credentials. See `.env.example` for required variables.
-   **`tailwind.config.js`:** Configure Tailwind theme, plugins, and content paths here.
-   **`public/partials/main_layout.php`:** Main HTML structure template.
-   **`public/index.php`:** Main controller for the landing page, includes sections.
-   **`public/api/*.php`:** Backend scripts for form submissions. Ensure database credentials here are sourced from `.env`.

## Vision & Purpose

This project is the official website for the **Omnipotency.ai CRM Application**. Our core mission is to empower wellness solopreneurs by democratizing advanced AI functions to automate their business and marketing efforts.

The website serves multiple key functions:

*   **Marketing & Education:**
    *   Introduce the free Omnipotency.ai CRM application to wellness professionals.
    *   Educate users on why they need the CRM and how to leverage its features effectively.
    *   Provide valuable content through a blog, including free resources like cheat sheets, how-to guides, and case studies.

*   **Community Hub:**
    *   Foster a community for developers, users, and interested parties passionate about AI in the wellness industry.
    *   Share insights and collaborate on advancing AI tools for solopreneurs.

*   **Application Resource:**
    *   Host comprehensive documentation for the Omnipotency.ai CRM application.
    *   Provide clear instructions and links for downloading and installing the application (note: the app itself is a separate project).

## Initial Project Goals

The immediate focus of this project is to:
1.  Consolidate and streamline the existing PHP codebase for this website.
2.  Establish a robust and maintainable foundation using our defined tech stack.
3.  Ensure a simple and efficient process for publishing and updating website content.

## Tech Stack (Initial - Subject to Evolution)

*   PHP
*   HTML, CSS, JavaScript
*   MySQL (via MAMP locally, Hostinger for deployment)
*   Git & GitHub for version control
*   (Further details to be added as components are integrated)

## Getting Started (Placeholder)

1.  Clone the repository: `git clone https://github.com/PBLIZZ/web_crm_code_workspace.git`
2.  Navigate to the project directory: `cd web_omnipotency_ai`
3.  Copy the example environment file: `cp .env.example .env`
4.  Update `.env` with your local database credentials and any other required API keys.
5.  (Instructions for running a local server - e.g., PHP built-in server or MAMP)

## License

This project is licensed under the GNU General Public License v3.0 - see the [LICENSE](LICENSE) file for details.
