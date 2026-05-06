# Aluconmedix.lk — Phase 1: Brand Launch
## Project Instruction Document

---

## 1. Project Overview

**Project Name:** Aluconmedix Website — Phase 1  
**Domain:** aluconmedix.lk  
**Type:** Static public-facing marketing website (no authentication required)  
**Company:** Aluconmedix — Medical equipment production and supply company  
**Goal:** Establish a high-authority, professional digital presence to market products and services  

---

## 2. Tech Stack

| Layer | Technology |
|---|---|
| Backend Framework | Laravel (latest stable) |
| Frontend Styling | Tailwind CSS |
| Templating Engine | Laravel Blade |
| JavaScript | Vanilla JS / Alpine.js (lightweight interactions) |
| Analytics | Google Analytics 4 (GA4) |
| Build Tool | Vite (Laravel default) |

> **Note:** No authentication, no login system, no admin panel in Phase 1. This is a fully public-facing static website served via Laravel routes and Blade views.

---

## 3. Brand & Design Guidelines

### 3.1 Color Palette

| Role | Color Name | Hex Code | Usage |
|---|---|---|---|
| Primary Background | White | `#FFFFFF` | Page backgrounds, cards |
| Primary Brand | Deep Blue | `#1A3C6E` | Headers, nav, primary CTAs |
| Secondary Brand | Medium Blue | `#2563EB` | Buttons, links, accents |
| Accent — Neon Blue | Electric Blue | `#00BFFF` | Highlights, hover states, borders |
| Accent — Light Green | Soft Mint | `#A8D5BA` | Success indicators, small accents |
| Text Primary | Charcoal | `#1E293B` | Body copy |
| Text Secondary | Slate | `#64748B` | Subtitles, captions |
| Border / Divider | Light Gray | `#E2E8F0` | Section separators |

### 3.2 Typography

| Element | Font | Weight | Size (approx.) |
|---|---|---|---|
| Headings (H1) | Inter or Poppins | 700 Bold | 2.5rem–3.5rem |
| Headings (H2) | Inter or Poppins | 600 SemiBold | 1.875rem–2.25rem |
| Subheadings (H3) | Inter or Poppins | 500 Medium | 1.25rem–1.5rem |
| Body Text | Inter | 400 Regular | 1rem–1.125rem |
| Labels / Captions | Inter | 400 Regular | 0.875rem |

Load fonts via Google Fonts CDN in the main Blade layout.

### 3.3 Design Principles

- **Clean and clinical:** Whitespace-heavy layout, clean grid
- **Professional and trustworthy:** Consistent spacing, sharp edges with subtle rounded corners (`rounded-lg`)
- **Neon blue as a highlight only:** Use sparingly for hover effects, CTA borders, and icon accents — not as a dominant color
- **Light green as a trust signal:** Use for checkmarks, feature badges, and small decorative elements
- **Mobile-first:** All layouts designed for mobile viewport first, then scaled up

---

## 4. Project Structure

```
aluconmedix/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php        # Handles all static page routes
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php             # Master layout (nav + footer + GA4)
│       ├── components/
│       │   ├── navbar.blade.php          # Sticky responsive navigation
│       │   ├── footer.blade.php          # Footer with links & contact info
│       │   ├── hero.blade.php            # Reusable hero section component
│       │   └── cta-banner.blade.php      # Call-to-action banner component
│       └── pages/
│           ├── home.blade.php            # Home page
│           ├── about.blade.php           # About Us page
│           ├── history.blade.php         # Company History page
│           ├── contact.blade.php         # Contact page
│           └── products/
│               ├── index.blade.php       # Product Catalog (listing)
│               ├── product-1.blade.php   # Product 1 detail page
│               └── product-2.blade.php   # Product 2 detail page
├── public/
│   └── assets/
│       ├── images/                       # All website images
│       └── icons/                        # SVG icons
├── routes/
│   └── web.php                           # All page routes
├── tailwind.config.js                    # Tailwind custom theme config
└── vite.config.js                        # Vite asset bundler config
```

---

## 5. Pages & Content Scope

### 5.1 Home Page (`/`)

**Purpose:** First impression — establish credibility, introduce the brand, and drive visitors to products or contact.

**Sections:**
1. **Hero Section** — Full-width banner with company tagline, brief intro sentence, and two CTAs: "Explore Products" and "Contact Us"
2. **About Snippet** — 2–3 sentence company intro with a "Learn More" link to the About page
3. **Why Choose Us** — 3–4 feature cards (e.g., Quality Assurance, Certified Products, Expert Support, Trusted by Hospitals) using icons and short descriptions
4. **Product Highlights** — Preview cards for the 2 initial products with image, name, brief description, and "View Product" button
5. **Call-to-Action Banner** — Full-width section with "Get in Touch" prompt and a button linking to Contact page
6. **Footer**

---

### 5.2 About Us Page (`/about`)

**Purpose:** Build trust and communicate the company's mission, vision, and team.

**Sections:**
1. **Page Hero** — Title banner: "About Aluconmedix"
2. **Mission & Vision** — Two-column layout: Mission statement | Vision statement
3. **Who We Are** — 3–4 paragraphs about the company, its values, and its commitment to healthcare
4. **Core Values** — Icon grid (4–6 values): Integrity, Innovation, Quality, Patient-First, etc.
5. **CTA Banner** — Link to Contact or Products page

---

### 5.3 History Page (`/history`)

**Purpose:** Demonstrate heritage, credibility, and growth journey.

**Sections:**
1. **Page Hero** — Title banner: "Our Journey"
2. **Timeline Component** — Vertical or horizontal milestone timeline showing key company milestones (founding year, product launches, certifications, expansions)
3. **Closing Statement** — Short paragraph on the company's future direction
4. **CTA Banner**

---

### 5.4 Contact Page (`/contact`)

**Purpose:** Lead capture and communication channel.

**Sections:**
1. **Page Hero** — Title banner: "Get in Touch"
2. **Contact Form** — Fields: Full Name, Email, Phone (optional), Subject, Message, Submit button
   - Client-side validation (HTML5 + JS)
   - Laravel form submission handling (mail or log for Phase 1)
3. **Contact Details Card** — Address, phone, email, business hours
4. **Google Maps Embed** — Company location (iframe embed)

> **Phase 1 Note:** Form submissions can log to Laravel logs or send a basic mail via `Mail::to()`. A CRM or ticketing integration is out of scope for Phase 1.

---

### 5.5 Product Catalog Page (`/products`)

**Purpose:** Showcase the first 2 products professionally.

**Sections:**
1. **Page Hero** — Title: "Our Products"
2. **Product Grid** — 2-column responsive grid; each card shows: product image, product name, short description (1–2 lines), and "View Details" button

---

### 5.6 Individual Product Pages (`/products/product-name`)

**Purpose:** Dedicated page for each product with full details.

**Sections:**
1. **Product Hero** — Product name, high-quality image
2. **Product Description** — Full description, use cases, and key specifications
3. **Features List** — Bullet list with green checkmarks for key features
4. **Specifications Table** — Technical specs in a clean table
5. **CTA** — "Request a Quote" or "Contact Us About This Product" button linking to Contact page

---

## 6. Navigation Structure

```
Logo (left)                    [Home] [About] [History] [Products] [Contact]  (right)
```

- Sticky top navbar on scroll
- Mobile: hamburger menu with slide-down or overlay drawer
- Active page link highlighted with neon blue underline or indicator
- CTA button "Contact Us" styled distinctly in the navbar (outlined or filled button)

---

## 7. Routing (web.php)

```php
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/history', [PageController::class, 'history'])->name('history');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/products/{slug}', [PageController::class, 'productDetail'])->name('products.detail');
```

---

## 8. Master Layout (`layouts/app.blade.php`)

The master Blade layout must include:

- `<meta charset>`, `<meta viewport>`, `<meta description>` (SEO)
- `<title>` — Dynamic per page using `@yield('title')`
- Open Graph meta tags for social sharing
- Google Fonts link
- Tailwind CSS via Vite (`@vite`)
- Google Analytics 4 script (in `<head>`)
- `@yield('content')` for page body
- Navbar component: `@include('components.navbar')`
- Footer component: `@include('components.footer')`

---

## 9. SEO Foundation

| Item | Implementation |
|---|---|
| Meta titles | Unique per page via `@yield('title')` |
| Meta descriptions | Unique per page via `@yield('meta_description')` |
| Open Graph tags | In master layout with `@yield` overrides |
| Semantic HTML | Use `<header>`, `<main>`, `<section>`, `<article>`, `<footer>` |
| Alt text | All images must have descriptive `alt` attributes |
| Heading hierarchy | One `<h1>` per page, logical H2/H3 nesting |
| Clean URLs | Laravel named routes, no query strings |
| sitemap.xml | Generate using `spatie/laravel-sitemap` package |
| robots.txt | Allow all crawlers, point to sitemap |
| Page speed | Minified CSS/JS via Vite, optimized images |

---

## 10. Google Analytics 4 Integration

- Create a GA4 property for `aluconmedix.lk`
- Add Measurement ID to `.env`:
  ```
  VITE_GA4_MEASUREMENT_ID=G-XXXXXXXXXX
  ```
- Embed GA4 script in master layout `<head>` conditionally (only in production):
  ```blade
  @production
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('VITE_GA4_MEASUREMENT_ID') }}"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('VITE_GA4_MEASUREMENT_ID') }}');
      </script>
  @endproduction
  ```

---

## 11. Tailwind Configuration (`tailwind.config.js`)

Extend Tailwind with custom brand colors:

```js
theme: {
  extend: {
    colors: {
      brand: {
        blue:       '#1A3C6E',
        'blue-mid': '#2563EB',
        'neon':     '#00BFFF',
        'green':    '#A8D5BA',
        charcoal:   '#1E293B',
        slate:      '#64748B',
      }
    },
    fontFamily: {
      sans: ['Inter', 'ui-sans-serif', 'system-ui'],
      heading: ['Poppins', 'ui-sans-serif'],
    }
  }
}
```

---

## 12. Responsiveness Requirements

| Breakpoint | Tailwind Prefix | Target Devices |
|---|---|---|
| Mobile | (default) | 320px – 639px |
| Small | `sm:` | 640px – 767px |
| Medium | `md:` | 768px – 1023px (tablets) |
| Large | `lg:` | 1024px – 1279px (laptops) |
| Extra Large | `xl:` | 1280px+ (desktops) |

All pages must be fully usable and visually correct at every breakpoint. Test all pages in Chrome DevTools at 375px (iPhone SE), 768px (iPad), and 1440px (desktop).

---

## 13. Phase 1 Deliverables Checklist

- [ ] Laravel project scaffolded with Tailwind CSS via Vite
- [ ] Custom Tailwind brand theme configured
- [ ] Master Blade layout with navbar, footer, SEO tags, and GA4
- [ ] Home page — all sections complete
- [ ] About Us page — all sections complete
- [ ] History page — timeline component complete
- [ ] Contact page — form with validation and submission handling
- [ ] Product Catalog page — 2-product grid
- [ ] Product Detail Page — for both products
- [ ] Mobile responsiveness verified across all pages
- [ ] GA4 integration live (production only)
- [ ] `sitemap.xml` and `robots.txt` in place
- [ ] SEO meta tags on all pages
- [ ] Cross-browser testing (Chrome, Firefox, Safari, Edge)
- [ ] Deployed to production server (aluconmedix.lk)

---

## 14. Out of Scope for Phase 1

The following features are **explicitly excluded** from Phase 1 and will be addressed in future phases:

- User authentication / login system
- Admin panel or CMS
- Blog / news section
- Client portal
- E-commerce / online ordering
- Live chat integration
- Multi-language support
- Product search and filtering (beyond 2 products)

---

## 15. Notes for Developers

- All Blade components must be reusable and accept props via `@props` where applicable
- Follow Laravel naming conventions: controllers in PascalCase, routes in kebab-case, views in snake_case
- Use Laravel's built-in CSRF protection on all POST forms (`@csrf`)
- Images should be stored in `/public/assets/images/` and optimized (WebP preferred, JPEG fallback)
- Keep JavaScript minimal — prefer Tailwind utility classes and HTML attributes over custom JS
- Add comments in Blade files for major section boundaries
- `.env` must never be committed to version control — use `.env.example`
- Use `php artisan optimize` before deployment

---

*Document Version: 1.0 | Phase: 1 — Brand Launch | Project: aluconmedix.lk*
