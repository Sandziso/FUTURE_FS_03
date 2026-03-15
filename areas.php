<?php
// Set page-specific variables
$page_title = 'Service Areas | Izenzo Outdoor Services Manzini';
$page_description = 'We serve Manzini, Farview, Tincatfwini, Ngwane Park and surrounding areas in Eswatini. Check if your location is covered and get a free quote today.';

include 'includes/header.php';
?>

<!-- Additional inline styles for this page -->
<style>
    .area-list-large {
        columns: 2;
        list-style: none;
        padding: 0;
        font-size: 1.2rem;
    }
    .area-list-large li {
        padding: 8px 0;
        border-bottom: 1px dashed #ddd;
    }
    .area-list-large li:before {
        content: "✔️";
        margin-right: 10px;
        color: #28a745;
    }
    .map-container {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .coverage-note {
        background: #f0f9f0;
        border-left: 4px solid #28a745;
        padding: 20px;
        border-radius: 4px;
    }
</style>

<!-- Page header -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/lawn_area_header.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Service Areas</h1>
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home</a></span> <span>Areas We Serve</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="ftco-section">
    <div class="container">
        <!-- Introduction -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 heading-section text-center ftco-animate">
                <span class="subheading">Where we operate</span>
                <h2 class="mb-4">Covering Manzini & Surroundings</h2>
                <p>We provide professional grass cutting services across Manzini and nearby communities. If your area isn’t listed, just ask – we may still be able to help.</p>
            </div>
        </div>

        <div class="row">
            <!-- Left column: list of areas -->
            <div class="col-md-6 ftco-animate">
                <div class="coverage-note mb-4">
                    <h4><span class="icon-map-marker mr-2 text-success"></span>Primary Service Areas</h4>
                    <p>We regularly serve these locations and can typically schedule within 2-3 days.</p>
                </div>
                <ul class="area-list-large">
                    <li>Manzini (Central)</li>
                    <li>Farview</li>
                    <li>Tincatfwini</li>
                    <li>Ngwane Park</li>
                    <li>Matsapha</li>
                    <li>Zakhele</li>
                    <li>Msunduza</li>
                    <li>Moneni</li>
                    <li>Sidvwashini</li>
                    <li>Bhunya</li>
                </ul>
                <p class="mt-3"><strong>Not sure if we cover your area?</strong> Give us a call or send a WhatsApp – we’re happy to check.</p>
            </div>

            <!-- Right column: map -->
            <div class="col-md-6 ftco-animate">
                <div class="map-container">
                    <!-- Google Maps embed for Manzini, Eswatini (using iframe for simplicity) -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114982.14929690184!2d31.332481847104336!3d-26.498504974687003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee86b7b1f6e6e45%3A0x3b0b8b1c9c4e4f4!2sManzini%2C%20Eswatini!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
                <p class="mt-2 text-center"><small>Manzini and surrounding region – we come to you!</small></p>
            </div>
        </div>

        <!-- Additional surrounding areas note -->
        <div class="row mt-5 ftco-animate">
            <div class="col-md-12">
                <div class="pricing-table text-center p-5">
                    <h3>Also serving surrounding communities</h3>
                    <p>If you're just outside these areas, don't hesitate to contact us. We often travel to nearby locations and can provide a quote based on distance.</p>
                    <p>
                        <a href="contact.php" class="btn btn-primary px-4 py-3 mr-2">Check Availability</a>
                        <a href="tel:+26876554370" class="btn btn-success px-4 py-3">Call Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action strip -->
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Ready to book your lawn cutting?</h2>
                <span>We're just a call or message away.</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="form-group d-flex">
                    <a href="tel:+26876554370" class="btn btn-success mr-2 px-4">Call Now</a>
                    <!-- Updated WhatsApp link text to reflect new business name -->
                    <a href="https://wa.me/26876554370?text=Hello%20Izenzo%20Outdoor%20Services%2C%20I'd%20like%20a%20quote%20for%20my%20area" class="btn btn-whatsapp px-4" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>