# Omnipotency.ai – Product Requirements Document

**Version:** 1.0  
**Date:** 2025-04-26  
**Author:** Peter Blizzard (Vision), AI Assistant (Documentation)  
**Status:** Draft  

---

## 1. Introduction

### 1.1 Purpose
This PRD defines the vision, goals, features, and requirements for the **public-facing website** of Omnipotency.ai, an AI-first CRM built for solo wellness practitioners. The website will serve as the brand’s primary online presence, lead-gen engine, community hub, and resource center, guiding design, development, content creation, and testing.

### 1.2 Project overview
The project delivers an **immersive, informative, and highly engaging** platform that:

- Communicates the unique value of Omnipotency.ai.  
- Provides educational content, downloadable resources, and community features.  
- Incorporates an AI-powered chatbot (via **OpenRouter**) for support and intelligent search.  

**Tech stack:** HTML + Tailwind CSS, vanilla JS, PHP backend (forms/API), hosted on Hostinger with a focus on UX, SEO, and scalability.

---

## 2. Product Overview

### 2.1 Vision
> *Democratize advanced AI-driven CRM and automation for solo wellness practitioners, freeing them from admin burdens so they can focus on client care and growth.*

### 2.2 Website roles
1. **Marketing & Sales Funnel** – Highlight “free-forever” CRM core and drive sign-ups.  
2. **Educational Hub** – Blog posts, guides, and actionable content.  
3. **Resource Center** – Gated downloadable templates, quizzes, cheat-sheets.  
4. **Community Platform** – Peer support and collaboration.  
5. **Support & Docs Portal** – CRM documentation, tutorials, FAQs.  
6. **Investor Gateway** – Information for potential partners and investors.

### 2.3 Key differentiators
- **AI-Powered Chatbot** for search, guidance, and support.  
- **Value-Driven Resources** to build trust.  
- **“Free Forever” Messaging** clearly communicated.  
- **Community Focus** beyond product sales.  
- **Empathy-Driven Design & Tone** tailored to wellness pros.

---

## 3. Goals & Objectives

### 3.1 Business goals
1. Drive CRM sign-ups / wait-list growth.  
2. Establish thought-leadership in AI-for-wellness.  
3. Cultivate an engaged community.  
4. Attract partners and investors.  
5. Generate leads for future premium services.

### 3.2 Product goals (MVP + Iterations)
- Crystal-clear value prop & seamless UX.  
- Functional blog with comments/moderation.  
- Gated resource section with initial downloads.  
- Basic AI chatbot for Q&A and search.  
- Foundation for community forum.  
- SEO-friendly, responsive, accessible site.  
- GDPR/US-compliant cookie & privacy practices.  
- Public docs & training content.  
- Simple investor-relations page.

### 3.3 Success metrics
- Traffic & bounce rate.  
- Visitor-to-sign-up conversion.  
- Resource downloads.  
- Blog engagement (views, time-on-page, comments).  
- Community activity.  
- Chatbot usage & satisfaction.  
- SERP rankings.  
- Investor-lead count.

---

## 4. Target Audience

### 4.1 Primary users
- Solo wellness practitioners (yoga, massage, holistic, alternative, personal training).  
- Small wellness studios/clinics.  
- Developers & AI enthusiasts.  
- Investors & strategic partners.

### 4.2 Needs & pain points

| Need | Pain Point |
| --- | --- |
| Evaluate if CRM fits their practice | Complex CRM market, unclear benefits |
| Learn to run business effectively | Scarce tailored advice |
| Obtain practical tools/templates | Re-creating marketing & comms assets |
| Connect with peers | Isolation of solo work |
| Access help & clear docs | Poor support elsewhere |

---

## 5. Features & Requirements

### 5.1 Core pages & structure

| ID | Page | Key elements |
| --- | --- | --- |
| REQ-WEB-101 | **Homepage** (`index.php`) | Hero with value prop & CTA, feature highlights, testimonials placeholder, *latest-posts* carousel, footer |
| REQ-WEB-102 | **About** | Mission, values, founder story |
| REQ-WEB-103 | **Product / Features** | Detailed CRM feature breakdown with visuals |
| REQ-WEB-104 | **Pricing** | “Free Forever” tier + future pay-as-you-scale overview |
| REQ-WEB-105 | **Blog index** | Paginated list of posts |
| REQ-WEB-106 | **Blog post** | Full article, author, date, comments |
| REQ-WEB-107 | **Resources** | List of downloadable assets (gated) |
| REQ-WEB-108 | **Documentation hub** | Entry plus individual doc pages |
| REQ-WEB-109 | **Community** | Forum placeholder |
| REQ-WEB-110 | **Contact / Support** | How-to-get-help info |
| REQ-WEB-111 | **Investor Relations** | Overview + contact form |
| REQ-WEB-112 | **Legal** | Privacy, Terms, Cookie Policy |

### 5.2 AI Chatbot

- **REQ-AI-201** – Floating widget on all pages.  
- **REQ-AI-202** – OpenRouter API, pluggable LLM choice.  
- **REQ-AI-203** – Retrieval-Augmented Generation from site content.  
- **REQ-AI-204** – Intelligent site search & link suggestions.  
- **REQ-AI-205** – Troubleshoots common CRM tasks.  
- **REQ-AI-206** – (Optional) conversation history, privacy-aware.

### 5.3 Resource Center
- Secure download area (login required).  
- Explicit email-list opt-in on first download.  
- Organized asset list.  
- Manual admin upload process (MVP).

### 5.4 Blog & content
- Rich-text posts with images & embeds.  
- Commenting (login + CAPTCHA, moderation queue).  
- SEO-friendly URLs.  
- Recent-posts carousel on homepage.

### 5.5 Community Hub
- Self-hosted Reddit-style forum (preferred).  
- Single sign-on with main site.  
- AI-assisted moderation + human alerts.  
- Topics/sections, posting, replies, live Q&A promo.

### 5.6 Feedback & bug reporting
- Categorized feedback form.  
- Option for public display (moderated).  
- GitHub Issues integration for bugs/features.

### 5.7 Docs, training & support
- Comprehensive text docs with heavy cross-linking.  
- Tutorials (text + placeholder videos).  
- Embedded YouTube videos (Heygen/ElevenLabs).  
- Support via chatbot & docs; GitHub for technical issues.

### 5.8 Compliance & technical
- GDPR & US privacy compliance.  
- Cookie-consent banner blocking non-essential cookies until approval.  
- Privacy/ToS/Cookie pages outlining EU storage.  
- GTM for GA4 & pixels, UTM tracking.  
- Secure form handling (PHP).  
- SendGrid email (transactional + marketing with opt-in).

### 5.9 Investor relations
- Static “openness to collaboration” page.  
- Contact form or email link.  
- Optional high-level valuation/equity note.

---

## 6. User Stories & Acceptance Criteria (sample)

<details>
<summary>ST-WEB-CHAT-201 · AI chatbot Q&A</summary>

**As** a visitor  
**I want** to ask the chatbot about CRM features  
**So that** I quickly get answers  

- **AC1** – Chatbot widget visible.  
- **AC2** – I can submit “Does the CRM have email marketing?”  
- **AC3** – Bot returns relevant answer + links.  
- **AC4** – If uncertain, bot suggests docs or escalation.

</details>

<details>
<summary>ST-WEB-RES-301 · Download gated template</summary>

**As** a practitioner  
**I want** to download the *Client Intake Form Template*  
**So that** I can use it in my practice  

- Resource listed on resources page.  
- Click prompts login/create-account if needed.  
- First download shows email-list consent checkbox.  
- After consent, PDF downloads.

</details>

*…(additional stories for blog, comments, DB schema, etc.)*

---

## 7. Technical Stack

| Layer | Tech |
| --- | --- |
| **Frontend** | HTML 5, Tailwind CSS (v3/4, built to `public/assets/css`), vanilla JS (`public/assets/js/main.js`) |
| **Backend (forms/API/LLM)** | PHP (Hostinger-compatible) |
| **Local dev** | MAMP / XAMPP / WAMP |
| **Hosting** | Hostinger |
| **DB** | MySQL (Hostinger) |
| **AI Chat** | OpenRouter API (PHP wrapper) |
| **Email** | SendGrid API |
| **Version control** | Git / GitHub (`web_crm_code_workspace`) |
| **Analytics** | Google Tag Manager |
| **Cookie consent** | Custom / free widget via GTM |
| **Video hosting** | YouTube embeds |
| **AI tutorial tools** | Gydde, Heygen, ElevenLabs |

---

## 8. Design & UI

### 8.1 Principles
- **World-class UX:** simple, elegant, intuitive, calming.  
- **Flawless navigation:** minimal clicks, clear paths.  
- **Responsive:** mobile-first, fluid layouts.  
- **Brand identity:** deep green, calming blues, orange accents.  
- **Readability:** clean typography & contrast.  
- **Performance:** fast load.  
- **Accessibility:** WCAG-aligned.

### 8.2 Key elements
- High-quality imagery & subtle animations.  
- Consistent iconography.  
- Prominent CTAs.  
- Well-structured, validated forms.  
- Serene yet professional aesthetic aligning with wellness.

---

*End of Document – Version 1.0*