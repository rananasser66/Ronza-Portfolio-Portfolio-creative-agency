# Ronza WordPress Theme

Ronza is a custom WordPress theme for a modern portfolio and content-focused website.

This README is organized by task so it can be updated easily when the theme changes.

## 1. Requirements

- WordPress
- A current PHP version supported by the installed WordPress version
- Modern browser

Ronza uses standard WordPress functionality and does not require a page builder for its core templates.

## 2. Installation

1. Install WordPress.
2. Go to `Appearance → Themes → Add New Theme → Upload Theme`.
3. Upload the Ronza ZIP and activate it.
4. Go to `Settings → Permalinks` and click `Save Changes`.
5. Configure the homepage under `Settings → Reading`.
6. If using a separate blog page, assign it under `Settings → Reading → Posts page`.

## 3. Theme Customizer

Customizer registration is modular under `inc/customizer/`.

Current modules:

- `branding.php`
- `colors.php`
- `typography.php`
- `header.php`
- `footer.php`
- `home-hero.php`
- `home-services.php`
- `home-portfolio.php`
- `home-blog.php`
- `home-cta.php`
- `about.php`
- `contact.php`

### Maintenance rule

When adding, removing, or renaming a Customizer option:

1. Update the relevant module.
2. Update the template that reads the option.
3. Test default, custom, and empty values where applicable.
4. Test desktop and mobile.
5. Update this README and the changelog.

## 4. Global Branding

Customizer: `Appearance → Customize → Ronza Branding`

Current options:

- Logo
- Dark Logo

## 5. Global Colors

Customizer: `Appearance → Customize → Ronza Colors`

Current options:

- Primary Color
- Accent Color

## 6. Typography

Typography settings are managed through the Typography Customizer module.

When changing typography, test headings, body text, navigation, buttons, project titles, blog titles, and mobile layouts.

## 7. Header

The header includes:

- Logo
- Primary navigation
- Mobile navigation
- Optional search
- Optional CTA

Primary menu location: `primary`

The theme is designed to remain functional when no primary menu is assigned.

## 8. Footer

The footer includes:

- Site branding
- Footer navigation
- Footer widget area
- Legal navigation
- Copyright

Menu locations:

- `footer`
- `legal`

Widget area:

- `footer-1`

## 9. Homepage

Main template: `front-page.php`

Homepage sections:

- Hero
- Services
- Portfolio
- Blog
- CTA

Homepage Customizer modules:

- `home-hero.php`
- `home-services.php`
- `home-portfolio.php`
- `home-blog.php`
- `home-cta.php`

When adding a homepage section, update the Customizer module, template, relevant CSS/JS, responsive rules, tests, and this README.

## 10. Portfolio / Projects

Projects use the custom post type:

`ronza_project`

Create projects from the WordPress Projects area.

A Project can contain:

- Title
- Content
- Featured image

The featured image is optional.

### Projects Archive

Template: `archive-ronza_project.php`

Includes:

- Project listing
- Featured image or placeholder
- Project title
- Project link
- Empty-state handling
- Pagination

### Single Project

Template: `single-ronza_project.php`

Includes:

- Project title
- Featured image when available
- Project content
- Previous/next project navigation
- Back to Projects navigation
- Responsive layout

## 11. Blog

Blog content uses the standard WordPress `post` post type.

### Blog Archive

Template: `home.php`

Includes:

- Post listing
- Featured image or placeholder
- Date
- First category when available
- Excerpt
- Read Article link
- Pagination
- Empty-state handling

### Single Blog Post

The single-post template should provide:

- Title
- Featured image
- Metadata
- Content
- Previous/next navigation
- Responsive layout

## 12. Pages

Ronza includes dedicated handling/styling for pages such as:

- About
- Contact
- Search
- 404

If a page slug used by conditional asset loading changes, update the corresponding condition in the enqueue file.

## 13. Gutenberg / WordPress Editor

Ronza supports standard WordPress block-editor content.

Tested blocks include:

- Headings
- Paragraphs
- Bold/italic text
- Links
- Ordered and unordered lists
- Quotes
- Images
- Galleries
- Buttons
- Separators
- Tables

Keep Gutenberg-specific styling in the appropriate CSS file rather than adding unnecessary inline styles.

## 14. Assets

Main CSS:

`assets/css/main.css`

Page/component CSS includes files such as:

- `homepage.css`
- `about.css`
- `contact.css`
- `projects.css`
- `blog.css`
- `search.css`
- `404.css`

JavaScript is stored in `assets/js/`.

Current scripts include:

- `main.js`
- `navigation.js`
- `about.js`

### Asset maintenance rule

When adding an asset:

1. Add it under `assets/`.
2. Enqueue it only where needed.
3. Add correct dependencies.
4. Use the theme version for cache busting.
5. Test affected and unaffected pages.
6. Update this README.

## 15. PHP / WordPress Rules

When modifying the theme:

- Escape output.
- Sanitize user-controlled values.
- Use WordPress APIs where possible.
- Use translation functions for user-facing static text.
- Avoid hardcoded URLs when WordPress can generate them.
- Keep Customizer registration separate from template output.
- Avoid duplicated functionality.
- Keep page-specific logic in the appropriate template/module.

Common escaping/sanitization functions include:

- `esc_html()`
- `esc_attr()`
- `esc_url()`
- `absint()`
- Appropriate WordPress sanitization callbacks

## 16. CSS Organization

Keep CSS grouped by responsibility:

- `base.css` → global foundation
- `components.css` → reusable components
- `header.css` → header/navigation
- `footer.css` → footer
- `homepage.css` → homepage
- `projects.css` → Projects archive/single Project
- `blog.css` → Blog archive/single post
- Page-specific files → page-specific styling

Before adding CSS:

1. Search for an existing selector.
2. Reuse existing variables/components where possible.
3. Avoid duplicate declarations.
4. Avoid unnecessary global selectors.
5. Keep responsive rules with the relevant component.

## 17. JavaScript

Use JavaScript only when necessary.

When adding JS:

- Keep it modular.
- Avoid unnecessary global variables.
- Check that required elements exist.
- Respect `prefers-reduced-motion` for animations.
- Test keyboard and mobile behavior.

## 18. Responsive Design

Every new component must be tested on:

- Desktop
- Tablet
- Mobile

Check text wrapping, buttons, navigation, images, grids, spacing, long titles, empty states, and touch targets.

Long titles must never be clipped or hidden unintentionally.

## 19. Edge-Case Checklist

Before release, test:

- No featured image
- No projects
- No blog posts
- Long titles
- Empty optional Customizer fields
- Missing menus
- Empty footer widget area
- Search with no results
- 404 page
- Mobile navigation
- Gutenberg content

## 20. Permalinks

After changes involving custom post types, rewrite slugs, archive URLs, or relevant page slugs:

`Settings → Permalinks → Save Changes`

This refreshes WordPress rewrite rules.

## 21. Theme File Map

### Root

- `style.css` → theme metadata/global stylesheet entry
- `functions.php` → theme setup/included functionality
- `front-page.php` → homepage
- `header.php` → header/opening main landmark
- `footer.php` → footer/closing markup
- `home.php` → blog archive
- `single.php` → standard post template, if used
- `single-ronza_project.php` → single Project
- `archive-ronza_project.php` → Projects archive
- `404.php` → 404 page
- `search.php` → search results

### `inc/`

Theme functionality and modular PHP.

### `inc/customizer/`

Customizer registration modules.

### `assets/css/`

Stylesheets.

### `assets/js/`

JavaScript.

## 22. Safe Change Workflow

For every future change:

1. Identify the feature.
2. Find its Customizer/template/CSS/JS/enqueue source.
3. Make the smallest required change.
4. Test desktop and mobile.
5. Test default and empty states where relevant.
6. Test the relevant edge case.
7. Update this README.
8. Add a changelog entry.

## 23. Changelog

