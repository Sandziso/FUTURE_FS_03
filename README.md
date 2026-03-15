# Izenzo Outdoor Services – Website

A professional, mobile-friendly website for **Izenzo Outdoor Services**, a lawn care business based in Manzini, Eswatini. The site showcases services, service areas, a gallery, and includes a contact form that sends inquiries directly via **EmailJS** – no database required.

## Features

- **Fully Responsive** – Works on all devices (phones, tablets, desktops).
- **Service Details** – Clear explanation of grass cutting (E100 per tank) and optional extras.
- **Service Areas** – List of covered locations with an embedded Google Map.
- **Gallery** – Before/after photos and examples of completed work.
- **Contact Form** – Visitors can request a free quote; messages are sent instantly via EmailJS.
- **WhatsApp Integration** – One‑click chat links throughout the site.
- **Social Media Placeholders** – Links to Facebook/Instagram point to a “Coming Soon” page (easily replaceable).
- **Business Hours & Contact Info** – Displayed in header, footer, and contact page.

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript (jQuery, Bootstrap 4, Owl Carousel)
- **Backend**: PHP (for page templating only – no database logic used)
- **Email Handling**: [EmailJS](https://www.emailjs.com/) – sends form submissions directly from the browser
- **Map**: Google Maps Embed API (no key required for basic embed)
- **Template Base**: Customized from [Colorlib](https://colorlib.com) template (Vegefoods)

## Project Structure

```
/
├── about.php
├── areas.php
├── coming-soon.php
├── contact.php
├── gallery.php
├── index.php
├── services.php
├── includes/
│   ├── header.php
│   └── footer.php
├── images/                   (all images used on the site)
├── css/                      (Bootstrap, template, custom styles)
├── js/                       (jQuery, template scripts, custom)
├── fonts/                    (icon fonts)
└── README.md                 (this file)
```

## Requirements

- Web server with PHP 7.4+ (any hosting environment)
- Modern web browser
- [EmailJS](https://www.emailjs.com/) account (free tier available)

## Installation

1. **Upload files** – Copy all files to your web server’s document root (e.g., `public_html`).

2. **Configure EmailJS**  
   - Sign up at [EmailJS](https://www.emailjs.com/).  
   - Create an **email service** (e.g., Gmail, Outlook, or SMTP).  
   - Create an **email template** with the following variables:  
     `{{name}}`, `{{email}}`, `{{phone}}`, `{{area}}`, `{{message}}`, `{{submitted_at}}`.  
   - Copy your **Public Key**, **Service ID**, and **Template ID**.  

3. **Update EmailJS credentials in `contact.php`**  
   - Locate the JavaScript block at the bottom of `contact.php` (around line 250).  
   - Replace `Hk6Xjzz70iGNxwSeI` with your actual **Public Key**.  
   - In the `emailjs.send()` call, replace `'service_nsl49kr'` with your **Service ID** and `'template_e08vaoa'` with your **Template ID**.

4. **Update business details**  
   - Phone numbers, email, WhatsApp number, business hours – search for `+268` and `izenziooutdoor@gmail.com` and replace with your own.  
   - Business name is “Izenzo Outdoor Services” – update if needed (appears in many files).  
   - Images in `images/` – replace with your own photos (keep same filenames or update paths).  
   - Social media links (footer and coming-soon.php) – replace `coming-soon.php` with your actual profile URLs.

5. **Google Maps**  
   The embedded map in `areas.php` uses a free iframe embed and does not require an API key.  
   *(If you want to use the advanced Google Map in `footer.php`, you'll need to replace the API key there.)*

6. **(Optional) Remove database code**  
   The `contact.php` file originally contained PHP code to store inquiries in a MySQL database. That code is **not required** because EmailJS handles the submissions directly. You may safely delete or comment out the PHP database logic (from `session_start();` to the line `include 'includes/header.php';`), or simply leave it – it will not affect the form if the database is not configured.

## Usage

- Navigate to your domain; the home page (`index.php`) will load.
- Use the navigation menu to explore services, areas, gallery, about, and contact.
- The contact form submits data directly to EmailJS, which sends an email to your inbox. No database setup is needed.
- WhatsApp links open a chat with the pre‑filled business number.
- Social media icons currently link to `coming-soon.php` – replace with actual profile URLs when available.

## Customization Tips

- **Changing colors**: Edit the CSS variables in `css/style.css` or override in the `<style>` blocks in individual pages.
- **Adding more gallery images**: Add new images to `images/` and copy the gallery item HTML in `gallery.php`.
- **Modifying service areas**: Update the list in `areas.php` and the dropdown in `contact.php`.
- **SEO**: Update the `$page_title` and `$page_description` variables at the top of each PHP page.

## Troubleshooting

- **Contact form not sending email**:  
  - Check browser console for JavaScript errors.  
  - Verify that your EmailJS Public Key, Service ID, and Template ID are correct.  
  - Ensure your email template variables match the ones sent in `templateParams`.  
  - Test the EmailJS service using their dashboard.

- **Images not loading**: Confirm that image files exist in the `images/` folder and that file names match the references (e.g., `lawn_hero_1.jpg`).

- **Map not displaying**: If you replaced the embed with an advanced map, ensure your API key is valid and the Maps JavaScript API is enabled.

- **Menu not working**: Make sure jQuery and Bootstrap scripts are loading correctly (check browser console).

## Credits

- Website template based on [Colorlib Vegefoods](https://colorlib.com/wp/template/vegefoods/).
- Icons from [Flaticon](https://www.flaticon.com/) and [Ionicons](https://ionicons.com/).
- Map integration by [Google Maps](https://developers.google.com/maps).
- Email service by [EmailJS](https://www.emailjs.com/).

## License

This project is for the exclusive use of Izenzo Outdoor Services. Redistribution or commercial use of the template code without permission is not allowed. All images and content are property of their respective owners.

---

**For any questions or support**, contact the developer or reach out to Izenzo Outdoor Services via the contact details on the website.
