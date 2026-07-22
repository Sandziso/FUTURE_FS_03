markdown
<div align="center">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white" alt="jQuery">
  <img src="https://img.shields.io/badge/EmailJS-FF6C37?style=for-the-badge&logo=gmail&logoColor=white" alt="EmailJS">
  <img src="https://img.shields.io/badge/License-MIT-yellow?style=for-the-badge" alt="License">
  <img src="https://img.shields.io/badge/Status-Live-2ea44f?style=for-the-badge" alt="Status">
</div>

<br>

<div align="center">
  <img src="screenshots/izenzo-home.png" alt="Izenzo Outdoor Services Homepage" width="800">
  <p><em>Professional lawn care services in Manzini, Eswatini</em></p>
</div>

<h1 align="center">🌿 Izenzo Outdoor Services</h1>

<p align="center">
  <strong>A professional, mobile-friendly website for a lawn care business based in Manzini, Eswatini.</strong>
  <br>
  <a href="https://izenzoutdoorservices.unaux.com">🌐 Live Demo</a> ·
  <a href="#-features">📋 Features</a> ·
  <a href="#-installation">⚙️ Installation</a> ·
  <a href="#-tech-stack">🛠️ Tech Stack</a>
</p>

---

## 📌 Overview

**Izenzo Outdoor Services** is a real client website delivered as part of the Future Interns internship. I pitched to a local business owner in Manzini, designed the site, and built it in under two weeks. The site features a contact form powered by EmailJS, a photo gallery, service area maps, and WhatsApp integration.

> 🇸🇿 Built for a real client. Pitched in Manzini. Delivered live.

---

## ✨ Features

| Feature | Description |
|---------|-------------|
| 📱 **Fully Responsive** | Works on all devices (phones, tablets, desktops) |
| 📋 **Service Details** | Grass cutting (E100 per tank), optional extras |
| 📍 **Service Areas** | List of locations with embedded Google Map |
| 🖼️ **Gallery** | Before/after photos of completed work |
| 📧 **Contact Form** | EmailJS integration — messages sent directly to business |
| 💬 **WhatsApp Integration** | One-click chat links throughout the site |
| 📱 **Social Media Placeholders** | Facebook/Instagram links (ready to connect) |
| 🕐 **Business Hours** | Displayed in header, footer, and contact page |

---

## 📸 Screenshots

<div align="center">
  <table>
    <tr>
      <td><img src="screenshots/izenzo-services.png" alt="Services" width="400"></td>
      <td><img src="screenshots/izenzo-gallery.png" alt="Gallery" width="400"></td>
    </tr>
    <tr>
      <td><img src="screenshots/izenzo-contact.png" alt="Contact" width="400"></td>
      <td><img src="screenshots/izenzo-mobile.png" alt="Mobile View" width="400"></td>
    </tr>
  </table>
</div>

---

## 🛠️ Tech Stack

| Component | Technology |
|-----------|------------|
| **Frontend** | HTML5, CSS3, JavaScript (jQuery) |
| **Framework** | Bootstrap 4, Owl Carousel |
| **Email Handling** | EmailJS — no backend required |
| **Maps** | Google Maps Embed (no API key needed) |
| **Icons** | Font Awesome, Ionicons |
| **Template** | Customized from Colorlib (Vegefoods) |
| **Hosting** | InfinityFree |

---

## 📁 Project Structure
izenzo-outdoor/
├── about.php
├── areas.php
├── coming-soon.php
├── contact.php
├── gallery.php
├── index.php
├── services.php
├── includes/
│ ├── header.php
│ └── footer.php
├── images/ # All site images
├── css/ # Bootstrap, template, custom
├── js/ # jQuery, template scripts, custom
├── fonts/ # Icon fonts
└── README.md # This file

text

---

## 🚀 Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/Sandziso/FUTURE_FS_03.git
cd FUTURE_FS_03
Step 2: Upload Files
Upload all files to your web server's document root.

Step 3: Configure EmailJS
Sign up at EmailJS

Create an email service

Create an email template with variables:

{{name}}, {{email}}, {{phone}}, {{area}}, {{message}}, {{submitted_at}}

In contact.php, update:

javascript
emailjs.init("YOUR_PUBLIC_KEY");
emailjs.sendForm('SERVICE_ID', 'TEMPLATE_ID', this);
Step 4: Update Business Details
Phone numbers

Email address

WhatsApp number

Business hours

Social media links

Step 5: Update Images
Replace images in the images/ folder with your own photos.

📧 EmailJS Configuration
Template Variables:

Variable	Description
{{name}}	Customer's full name
{{email}}	Customer's email address
{{phone}}	Customer's phone number
{{area}}	Service area requested
{{message}}	Customer's message
{{submitted_at}}	Timestamp of submission
📄 License
This project is for the exclusive use of Izenzo Outdoor Services.
Redistribution or commercial use of the template code without permission is not allowed.

📬 Contact
Sandziso Mamba
📧 mlungisimamba01@gmail.com
🔗 GitHub · LinkedIn
