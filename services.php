<?php
// Set page-specific variables
$page_title = 'Our Services | Izenzo Outdoor Services Manzini';
$page_description = 'Professional grass cutting and lawn maintenance services in Manzini. Transparent pricing: E100 per tank. Free quotes for larger areas.';

include 'includes/header.php';
?>

<!-- Additional inline styles for this page -->
<style>
    .service-detail {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 30px;
        margin-bottom: 30px;
    }
    .pricing-table {
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .price-highlight {
        font-size: 2.2rem;
        font-weight: 700;
        color: #28a745;
    }
    .note {
        color: #6c757d;
        font-style: italic;
    }
    .icon-green {
        color: #28a745;
        font-size: 2.5rem;
    }
</style>

<!-- Page header -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/lawn_service_header.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Our Services</h1>
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home</a></span> <span>Services</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="ftco-section">
    <div class="container">
        <!-- Introduction -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">What we offer</span>
                <h2 class="mb-4">Professional Lawn Care Tailored to You</h2>
                <p>Whether you need a one‑time clean‑up or regular maintenance, we have a plan that fits your schedule and budget. Our team uses quality equipment and pays attention to every detail.</p>
            </div>
        </div>

        <!-- Main service: Grass cutting -->
        <div class="row ftco-animate">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="service-detail w-100">
                    <div class="icon-green mb-3"><span class="flaticon-weed"></span></div>
                    <h3>Grass Cutting</h3>
                    <p>Our core service – we’ll make your lawn look neat and healthy. We adjust the cutting height based on grass type and season, and we always clean up after ourselves.</p>
                    <div class="pricing-table mt-4">
                        <h4>Pricing</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="price-highlight mb-0">E100</p>
                                <p class="note">per tank / lithange</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-1"><strong>What does "tank" mean?</strong></p>
                                <p class="note">A tank refers to a full tank of fuel used by our equipment – it typically covers a standard residential lawn. For larger properties, we’ll give you a custom quote based on the area size.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="service-detail w-100" style="background: #e9f5e9;">
                    <h3>Additional Services</h3>
                    <p>We also offer the following to give your lawn a polished look:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><span class="icon-check mr-2 text-success"></span> <strong>Edging</strong> – crisp, clean lines along driveways and walkways</li>
                        <li class="mb-2"><span class="icon-check mr-2 text-success"></span> <strong>Trimming</strong> – around trees, fences, and obstacles</li>
                        <li class="mb-2"><span class="icon-check mr-2 text-success"></span> <strong>Cleanup</strong> – removal of clippings and debris</li>
                        <li class="mb-2"><span class="icon-check mr-2 text-success"></span> <strong>Weed control</strong> (ask for details)</li>
                    </ul>
                    <p class="mt-3">These services are priced according to the work involved – just let us know what you need, and we’ll include it in your free quote.</p>
                </div>
            </div>
        </div>

        <!-- Custom quote callout -->
        <div class="row mt-5 ftco-animate">
            <div class="col-md-12">
                <div class="pricing-table text-center p-5">
                    <h3>Need a custom quote for a larger area?</h3>
                    <p>We offer competitive rates for commercial properties, large estates, or ongoing maintenance contracts. Contact us today and we’ll provide a no‑obligation estimate.</p>
                    <p>
                        <a href="contact.php" class="btn btn-primary px-4 py-3 mr-2">Request Free Quote</a>
                        <a href="tel:+26876554370" class="btn btn-success px-4 py-3">Call Now</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Why choose us (compact) - updated for new business (started 2026) -->
        <div class="row mt-5">
            <div class="col-md-12 heading-section ftco-animate text-center">
                <h3 class="mb-4">Why our customers trust us</h3>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center mb-3" style="width: 80px; height: 80px; background: #e9f5e9; border-radius: 50%; margin: 0 auto;">
                        <span class="flaticon-vegetable" style="font-size: 40px; color: #28a745;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Fresh & Dedicated</h5>
                        <p>We launched in 2026 with a passion for quality lawn care – serving Manzini with energy and commitment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center mb-3" style="width: 80px; height: 80px; background: #e9f5e9; border-radius: 50%; margin: 0 auto;">
                        <span class="flaticon-truck" style="font-size: 40px; color: #28a745;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Reliable & On Time</h5>
                        <p>We show up when we say we will and finish the job efficiently.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center mb-3" style="width: 80px; height: 80px; background: #e9f5e9; border-radius: 50%; margin: 0 auto;">
                        <span class="flaticon-price" style="font-size: 40px; color: #28a745;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Fair & Transparent</h5>
                        <p>No hidden fees – we explain our pricing upfront.</p>
                    </div>
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
                <h2 style="font-size: 22px;" class="mb-0">Ready to transform your lawn?</h2>
                <span>Get a free quote today – no obligation.</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="form-group d-flex">
                    <a href="tel:+26876554370" class="btn btn-success mr-2 px-4">Call Now</a>
                    <!-- Updated WhatsApp link text to reflect new business name -->
                    <a href="https://wa.me/26876554370?text=Hello%20Izenzo%20Outdoor%20Services%2C%20I'd%20like%20a%20quote%20please" class="btn btn-whatsapp px-4" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>