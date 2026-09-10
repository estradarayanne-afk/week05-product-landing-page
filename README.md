# Le Savon - Responsive Product Landing Page

## ITST 302 – Client-Server Technologies

### Week 5 Laboratory Activity – Mini Project 04

---

# 1. Project Title

## Responsive Product Landing Page for Le Savon Laundry Shop

Le Savon is a local laundry shop that provides convenient and reliable laundry services for customers. This project is a responsive product landing page developed using **Laravel, Blade Components, and Tailwind CSS**.

The website presents Le Savon's laundry services, features, pricing plans, customer testimonials, and contact information in a modern and responsive interface.

---

# 2. Introduction

## What is a Product Landing Page?

A product landing page is a focused web page designed to introduce and promote a specific product, service, or business. It provides important information about what is being offered and encourages visitors to take an action such as purchasing a product, subscribing to a service, registering, or contacting the business.

For this project, the product landing page is designed for **Le Savon Laundry Shop**. Instead of promoting a physical product, the page promotes laundry services and allows customers to learn about the available services, pricing, and benefits.

## Why Landing Pages Are Important for Businesses

Landing pages are important for businesses because they provide customers with clear and organized information about a product or service. A well-designed landing page can help businesses:

- Create a strong first impression.
- Clearly communicate their products or services.
- Build customer trust through testimonials and business information.
- Display pricing and service options.
- Encourage visitors to take action.
- Improve the overall online presence of a business.
- Make important information easier to find.
- Provide a professional platform for promoting services.

For a local business such as Le Savon, a responsive landing page can help potential customers quickly understand the available laundry services and choose the service that best fits their needs.

## Purpose of the Project

The purpose of this project is to create a **responsive product landing page for Le Savon Laundry Shop** using Laravel, Tailwind CSS, and Blade Components.

The project demonstrates how modern web development technologies can be used to create a professional interface that works across desktop, tablet, and mobile devices.

The landing page includes:

- Navigation Bar
- Hero Section
- Features Section
- Product/Service Showcase
- Pricing Section
- Testimonials Section
- Call-to-Action Section
- Footer

---

# 3. Objectives

The objectives accomplished during this activity are:

- Develop a responsive product landing page using Laravel.
- Apply Tailwind CSS utility classes for styling.
- Understand and implement responsive web design principles.
- Use Mobile-First Design techniques.
- Apply Flexbox and CSS Grid for responsive layouts.
- Create reusable Blade Components.
- Improve code organization through modular components.
- Design a consistent and user-friendly interface.
- Apply responsive breakpoints for different screen sizes.
- Implement reusable buttons, cards, navigation, and footer components.
- Practice creating a modern business website.
- Improve understanding of Laravel Blade templating.
- Practice using Git and GitHub for version control.
- Document the development process through screenshots and project documentation.

---

# 4. Responsive Web Design

Responsive Web Design is an approach to web development where a website automatically adjusts its layout and content according to the screen size and device being used.

The Le Savon landing page was designed to provide a consistent experience across:

- Desktop computers
- Laptops
- Tablets
- Mobile phones

## Mobile-First Design

Mobile-First Design means designing the basic layout for smaller screens first and then expanding the layout for larger devices.

Tailwind CSS supports this approach by allowing developers to apply default styles for smaller screens and add responsive classes for larger screens.

For example:

```html
<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
```

This allows the content to display:

- One column on small screens.
- Two columns on small-to-medium screens.
- Three columns on large screens.

This approach helps ensure that the website remains usable on mobile devices.

### Responsive Breakpoints

Responsive breakpoints allow different styles to be applied depending on the screen size.

The project uses Tailwind CSS responsive prefixes such as:

sm: - Small screens
md: - Medium screens
lg: - Large screens
xl: - Extra-large screens

Example:

```html
<div class="hidden md:flex">
```

The element is hidden on smaller screens and becomes visible on medium and larger screens.

Another example is:

```html
<div class="px-6 py-20 lg:px-12 lg:py-28">
```

The padding changes when the page reaches the large-screen breakpoint.

### Flexbox

Flexbox is used to arrange elements in rows or columns while allowing the layout to adjust according to the available space.

Example from the project:

```html
<div class="flex items-center justify-between">
```

This is used in the navigation bar to position the logo, navigation links, and buttons.

Another example is:

```html
<div class="flex items-center gap-4">
```

This is used to arrange customer profile images and information in the testimonial cards.

Flexbox helps maintain proper alignment and spacing between elements.

### CSS Grid

CSS Grid is used to create organized multi-column layouts.

Example from the project:

```html
<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
```

This layout is useful for displaying the six Le Savon service features.

Another example:

```html
<div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
```

This type of layout is used to organize sections such as footer content into multiple columns.

CSS Grid makes it easier to create structured and responsive layouts.

### User Experience (UX)

User Experience refers to how easy, comfortable, and enjoyable a website is for visitors to use.

The Le Savon landing page considers UX by:

- Keeping navigation simple.
- Organizing information into clear sections.
- Using readable typography.
- Providing visible call-to-action buttons.
- Maintaining consistent spacing.
- Using cards to group related information.
- Providing responsive layouts.
- Making important information easy to find.
### Why Responsive Design Is Important

Responsive design is important in modern web applications because users access websites using many different devices and screen sizes. The responsiveness of each element, affects the experience of every user. 

A responsive website:

- Works on different screen sizes.
- Improves mobile usability.
- Provides a consistent user experience.
- Reduces the need for separate mobile and desktop websites.
- Improves accessibility.
- Makes content easier to read and interact with.
- Helps businesses reach more users.

For Le Savon, responsive design ensures that customers can view the laundry services and pricing whether they are using a desktop computer, tablet, or mobile phone.

# 5. Tailwind CSS

Tailwind CSS is a utility-first CSS framework used to create custom user interfaces directly within HTML and Blade templates.

The Le Savon project uses Tailwind CSS to create the layout, spacing, colors, typography, cards, buttons, and responsive behavior.

### Utility-First CSS

Utility-First CSS means using small, single-purpose CSS classes to style elements.

For example:

```html
<div class="rounded-2xl bg-white p-6 shadow-sm">
```

The classes provide different styling functions:

- `rounded-2xl` - rounded corners
- `bg-white` - white background
- `p-6` - padding
- `shadow-sm` - small shadow

Instead of creating a separate CSS class for every component, Tailwind allows styles to be applied directly to elements.

### Advantages of Tailwind CSS

Tailwind CSS provides several advantages:

- Faster UI development.
- Responsive utilities are built in.
- Consistent spacing and sizing.
- Easy customization.
- Less need to write custom CSS.
- Reusable utility classes.
- Supports modern responsive layouts.
- Makes component styling easier.
### Responsive Utility Classes

Tailwind provides responsive prefixes that allow developers to change styles based on screen size.

Example:

```html
<div class="px-6 lg:px-12">
```

The element uses px-6 on smaller screens and px-12 on large screens.

Another example:

```html
<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
```

This changes the number of columns based on the device width.

### Component Styling

Tailwind CSS is used to style the reusable Blade Components in the project.

Example of a feature card:

```html
<div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
```

This creates:

- Rounded corners
- A border
- A white background
- Padding
- A shadow
- A hover animation

### Tailwind CSS Examples From the Project

#### Responsive Grid
```html
<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
```

#### Flexbox
```html
<div class="flex items-center justify-between">
```

#### Rounded Cards
```html
<div class="rounded-2xl bg-white p-6 shadow-sm">
```

#### Responsive Padding
```html
<section class="px-6 py-20 lg:px-12 lg:py-28">
```

#### Hover Effects
```html
<a class="transition duration-300 hover:bg-blue-700">
```

These utility classes help create a responsive and visually consistent interface without requiring large amounts of custom CSS.

### Tailwind CSS Examples

The project uses Tailwind CSS utility classes to style and organize the responsive interface. Examples include:

- `flex` for flexible layouts.
- `grid` for arranging cards and sections.
- `px-6` and `py-20` for consistent spacing.
- `md:grid-cols-2` and `lg:grid-cols-4` for responsive layouts.
- `rounded-2xl` for rounded cards.
- `shadow-sm` for subtle card shadows.

These utility classes allow the interface to be styled directly in Blade templates without creating large amounts of custom CSS.

# 6. Blade Components
## What Are Blade Components?

Blade Components are reusable interface elements in Laravel Blade templates.

Instead of writing the same HTML structure repeatedly, a developer can create a component once and reuse it throughout the application.

The Le Savon project uses Blade Components for important parts of the landing page.

The project includes:

```text
resources/views/components/
├── button.blade.php
├── feature-card.blade.php
├── footer.blade.php
├── hero.blade.php
├── navbar.blade.php
├── pricing-card.blade.php
└── testimonial-card.blade.php
```

## Reusable Components Used in the Project
### Feature Card
```blade
<x-feature-card
    icon="🧺"
    title="Wash & Fold"
    description="Professional washing and folding service for everyday clothes."
/>
```

### Pricing Card
```blade
<x-pricing-card
    name="Wash & Fold"
    price="₱120"
    description="A convenient option for customers who want clean and neatly folded clothes."
    :features="[
        'Washing included',
        'Drying included',
        'Folding included'
    ]"
    :featured="true"
/>
```

### Testimonial Card
```blade
<x-testimonial-card
    name="Maria Santos"
    position="Customer"
    photo="https://i.pravatar.cc/100?img=47"
    review="The service is convenient and my clothes always come back fresh and clean."
/>
```

### Button Component
```blade
<x-button href="#pricing">
    Get Started
</x-button>
```

The button component can also accept different variants:

```blade
<x-button href="#features" variant="secondary">
    Explore Services
</x-button>
```
## Why Reusable Components Improve Maintainability

Reusable components make a project easier to maintain because developers do not need to repeatedly edit the same HTML structure in multiple files.

For example, if the design of a pricing card needs to be changed, the developer can update:

pricing-card.blade.php

instead of manually changing every pricing card on the page.

This provides:

Less duplicated code.
Easier maintenance.
Consistent design.
Faster development.
Easier debugging.
Better project organization.
## Benefits of Modular UI Development

Modular UI development divides a large interface into smaller reusable sections.

The Le Savon project uses separate components for:

- Navigation
- Hero
- Buttons
- Feature cards
- Pricing cards
- Testimonials
- Footer

This makes the project easier to understand and allows individual parts of the interface to be updated without affecting the entire page.

## Sample Blade Component Structure
```text
resources/views/
├── layouts/
│   └── app.blade.php
│
├── components/
│   ├── navbar.blade.php
│   ├── hero.blade.php
│   ├── feature-card.blade.php
│   ├── pricing-card.blade.php
│   ├── testimonial-card.blade.php
│   ├── button.blade.php
│   └── footer.blade.php
│
└── pages/
    └── home.blade.php
```
### Blade Component Examples

The project uses reusable Blade components to keep the interface organized and consistent.

Examples include:

- `feature-card.blade.php` – displays individual laundry service features.
- `pricing-card.blade.php` – displays pricing plans and included features.
- `testimonial-card.blade.php` – displays customer testimonials.
- `button.blade.php` – provides reusable styled buttons.
- `navbar.blade.php` – provides the main navigation.
- `footer.blade.php` – provides the website footer.

For example, the feature card component can be reused with different properties:

```blade
    <x-feature-card
        icon="🧺"
        title="Wash & Fold"
        description="Clean and neatly folded clothes for your convenience."
    />

# 7. User Interface Design

The Le Savon landing page follows a simple and modern interface design focused on readability, consistency, and usability.

## Color Palette

The project uses a limited and harmonious color palette.

The primary colors include:

Soft white
Light gray
Slate gray
Blue
Dark text colors

The colors are used consistently across the navigation, hero section, buttons, cards, pricing section, and footer.

The limited color palette prevents the interface from becoming visually overwhelming.

## Typography

The website uses clear and readable typography.

Different font sizes and weights are used to establish hierarchy:

Large headings for important messages.
Medium headings for section titles.
Smaller text for descriptions.
Semibold and bold text for buttons and important information.

The Le Savon brand name uses a styled serif appearance to give the business a more elegant identity.

## Iconography

Icons and simple symbols are used to visually represent services and actions.

Examples include:

🧺 for Wash & Fold
👕 for Regular Laundry
🫧 for Wash & Dry
🛏️ for Bedding & Blankets
👔 for Delicate Clothes
📦 for Laundry Pickup

Icons help users quickly understand the purpose of each service.

## Button Styles

Buttons are designed to be clear and noticeable.

The project includes:

Primary buttons
Secondary buttons
Rounded corners
Hover effects
Consistent padding
Clear text labels

Example:

<x-button href="#pricing">
    Get Started
</x-button>

Buttons provide clear calls to action and help guide users through the page.

## Card Design

Cards are used throughout the landing page to organize information.

Cards are used for:

Laundry services
Pricing plans
Customer testimonials
How It Works steps

Example:

<div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm">

Cards use:

Rounded corners
Borders
Shadows
Consistent padding
Hover effects
## Layout Consistency

The website maintains consistent:

Spacing
Alignment
Typography
Card styles
Button styles
Section widths
Responsive behavior

Consistent design helps users understand the structure of the website and navigate it more easily.

## Contribution to User Experience

The user interface design contributes to a better user experience by making information:

Easy to read.
Easy to locate.
Visually organized.
Consistent across sections.
Accessible on different devices.
Simple to interact with.

### Design Consistency

The interface uses consistent spacing, typography, buttons, and card styles throughout the landing page. A limited blue, white, and slate color palette helps maintain visual consistency while providing sufficient contrast. Rounded cards, clear headings, and simple icons make the content easy to scan and understand.

# 8. Folder Structure

The project follows Laravel's standard folder organization.

```text
week05-product-landing-page/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── components/
│       │   ├── navbar.blade.php
│       │   ├── hero.blade.php
│       │   ├── feature-card.blade.php
│       │   ├── pricing-card.blade.php
│       │   ├── testimonial-card.blade.php
│       │   ├── button.blade.php
│       │   └── footer.blade.php
│       │
│       └── pages/
│           └── home.blade.php
│
├── screenshots/
├── documentation/
├── routes/
├── storage/
├── tests/
├── .env
├── package.json
├── composer.json
└── README.md
```

## `resources/views/layouts`

The resources/views/layouts folder contains the main Blade layout used by the website.

Example:

resources/views/layouts/app.blade.php

The layout contains the main HTML structure, metadata, page title, and Vite assets.

## `resources/views/components`

The resources/views/components folder contains reusable Blade Components.

These components allow the website to be divided into smaller and reusable interface elements.

Examples:

navbar.blade.php
hero.blade.php
feature-card.blade.php
pricing-card.blade.php
testimonial-card.blade.php
button.blade.php
footer.blade.php
## `resources/views/pages`

The resources/views/pages folder contains complete website pages.

The main page for this project is:

resources/views/pages/home.blade.php

The home page combines the different components to create the complete landing page.

## `public`

The public folder contains files that are publicly accessible by the Laravel application.

It is also used for publicly accessible assets generated or served by the application.

## `screenshots`

The screenshots folder contains screenshots captured during the development and documentation process.

These screenshots demonstrate the responsive layouts and important parts of the project.

## `documentation`

The documentation folder contains supporting project documentation and comparison images.

It can include:

Before-and-after comparison images.
Design documentation.
Diagrams.
Development notes.
Other supporting materials.

# 9. Landing Page Sections

The Le Savon landing page contains the following major sections:

## Navigation Bar

The navigation bar includes:

Le Savon logo and branding.
Home
Features
Pricing
Testimonials
Contact
Sign In
Get Started
## Hero Section

The hero section introduces Le Savon and includes:

Business name.
Main headline.
Service description.
Get Started button.
Explore Services button.
Laundry service dashboard illustration/mockup.
## Features Section

The features section contains six laundry services:

Wash & Fold
Regular Laundry
Wash & Dry
Bedding & Blankets
Delicate Clothes
Laundry Pickup

Each feature includes an icon, title, and description.

## Product/Service Showcase

The showcase section presents a visual representation of the Le Savon service experience using a laundry service/order dashboard mockup.

## Pricing Section

The pricing section contains three service plans:

Regular Wash
Wash & Fold
Full Service

Each plan contains:

Plan name.
Price.
Description.
Included features.
Choose Plan button.
## Testimonials

The testimonial section contains three customer reviews with:

Customer photo.
Customer name.
Customer position.
Review.
Rating.
## Call-to-Action

The CTA section encourages visitors to take action by booking a laundry service or exploring the available services.

## Footer

The footer contains:

Company information.
Quick links.
Contact information.
Social media links.
Copyright information.

# 10. Design Requirements

The project follows the recommended design requirements for the activity.

## Modern Design System

The website uses a modern design approach through:

Consistent card styles.
Rounded corners.
Subtle shadows.
Responsive layouts.
Clear typography.
Consistent buttons.
Organized sections.
## Consistent Spacing and Typography

The project uses Tailwind CSS spacing utilities to maintain consistent margins and padding.

Examples include:

px-6
py-20
gap-6
mt-4
mb-5

Typography is also kept consistent through Tailwind font size and weight utilities.

## Limited and Harmonious Color Palette

The interface uses a limited palette consisting primarily of:

White
Gray
Slate
Blue

This creates a clean and professional appearance for the laundry business.

## Color Contrast and Accessibility

Text and background colors are selected to provide sufficient contrast and improve readability.

Important content such as headings, descriptions, and buttons are designed to remain readable against their backgrounds.

## Original Design

The Le Savon interface was developed specifically for this project and was not directly copied from an existing website.

The design combines common modern web design principles while maintaining its own branding, content, layout, and structure.

# 11. Screenshots

Screenshots should be included to demonstrate the completed project and development process.

The following screenshots should be included:

Desktop View
Tablet View
Mobile View
Navigation Bar
Hero Section
Features Section
Pricing Section
Testimonials
Footer
Blade Components Folder
GitHub Repository

Screenshots should clearly show the responsive behavior and major sections of the website.

# 12. Screenshots Folder

The screenshots/ folder should contain screenshots documenting the project.

Recommended files include:

```text
screenshots/
├── before-design.jpe
├── after-design.jpe
├── desktop-layout.jpe
├── tablet-layout.jpe
├── mobile-layout.jpe
├── navigation-bar.jpe
├── hero-section.jpe
├── features-section.jpe
├── pricing-cards.jpe
├── testimonials.jpe
├── footer.jpe
├── vscode-project-structure.jpe
├── blade-components-folder.jpe
└── github-repository.jpe
```

## Before Design

The before-design screenshot should show the initial wireframe, prototype, or basic version of the interface before final styling.

## After Design

The after-design screenshot should show the final polished responsive interface.

## Responsive Screenshots

Screenshots should demonstrate how the interface changes between:

Desktop
Tablet
Mobile
## Section Screenshots

Individual screenshots can also be taken for:

Navigation Bar
Hero Section
Features Section
Pricing Cards
Testimonials
Footer
## Development Screenshots

Screenshots should also document:

VS Code Project Structure
Blade Components Folder
GitHub Repository
# 13. Before-and-After Comparison

The project documents the evolution of the interface from its initial design to the final responsive version.

## Before

The before version should include:

Initial wireframe or early prototype.
Basic layout before styling.
Initial placement of page sections.
Basic content structure.

Example:

Before Design
    ↓
Basic layout
    ↓
Basic typography
    ↓
Limited styling
    ↓
Initial prototype
## After

The final version should demonstrate:

Polished visual design.
Responsive layouts.
Improved visual hierarchy.
Consistent spacing.
Improved typography.
Styled cards.
Responsive navigation.
Improved buttons.
Better overall usability.

Example:

After Design
    ↓
Responsive layout
    ↓
Consistent typography
    ↓
Modern card design
    ↓
Improved visual hierarchy
    ↓
Better usability
## Comparison Images

Before-and-after comparison images should be saved inside:

```text
documentation/

Recommended files:

documentation/
├── before-design.jpe
├── after-design.jpe
└── before-after-comparison.jpe
```

These images demonstrate how the interface evolved during development.

# Technologies Used

The project was developed using:

| Technology | Purpose |
| --- | --- |
| Laravel | PHP web application framework |
| PHP | Server-side programming language |
| Blade | Laravel templating engine |
| Tailwind CSS | Interface styling |
| Vite | Frontend asset development |
| HTML | Website structure |
| CSS | Styling through Tailwind utilities |
| JavaScript | Frontend functionality |
| Git | Version control |
| GitHub | Repository hosting |
| VS Code | Code editor |


# Conclusion

The Le Savon Responsive Product Landing Page demonstrates how Laravel, Blade Components, and Tailwind CSS can be combined to create a modern and responsive business website.

The project provided practical experience in responsive web design, Mobile-First Design, Flexbox, CSS Grid, Tailwind CSS utilities, reusable Blade Components, UI/UX design, and Git version control.

By separating the interface into reusable components, the project becomes easier to maintain and modify. Tailwind CSS also makes it easier to create consistent responsive layouts without writing large amounts of custom CSS.

The completed landing page provides Le Savon Laundry Shop with a professional online presence while demonstrating the importance of responsive design and modular web development.


Developer: Ray Anne S. Estrada

Course: ITST 302 – Client-Server Technologies

Activity: Week 5 Laboratory Activity – Mini Project 04

Project: Responsive Product Landing Page

Local Business: Le Savon Laundry Shop
