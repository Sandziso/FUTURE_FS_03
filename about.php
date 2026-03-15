<?php
// Set page-specific variables
$page_title = 'About Us | Izenzo Outdoor Services Manzini';
$page_description = 'Learn about Izenzo Outdoor Services – your local lawn care experts in Manzini, Eswatini. Fresh, reliable, and committed to customer satisfaction.';

include 'includes/header.php';
?>

<!-- Additional inline styles for this page -->
<style>
    .team-placeholder {
        background: #f0f9f0;
        border-radius: 8px;
        padding: 40px;
        text-align: center;
        border: 2px dashed #28a745;
    }
    .team-placeholder i {
        font-size: 5rem;
        color: #28a745;
    }
    .values-icon {
        font-size: 2.5rem;
        color: #28a745;
    }
</style>

<!-- Page header -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/lawn_about_header.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">About Us</h1>
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home</a></span> <span>About</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="ftco-section">
    <div class="container">
        <!-- Story -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 heading-section text-center ftco-animate">
                <span class="subheading">Our story</span>
                <h2 class="mb-4">Izenzo Outdoor Services: A Local Team You Can Trust</h2>
                <p class="lead">We started in 2026 with a simple mission: to help our neighbours in Manzini keep their lawns beautiful without the hard work. Though we're new, our dedication is as strong as ever.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 ftco-animate">
                <p>Founded by Siya Khoza, Izenzo Outdoor Services brings a fresh approach to lawn care in Manzini, Farview, Tincatfwini, Ngwane Park and beyond. We may be new to the scene, but we're backed by modern equipment, a passion for landscaping, and a commitment to doing the job right the first time.</p>
                <p>We believe in honesty, reliability, and attention to detail. When you hire us, you're not just getting a lawn cut – you're getting peace of mind that the job will be done right, on time, and at a fair price.</p>
            </div>
            <div class="col-md-6 ftco-animate">
                <!-- Team photo placeholder -->
                <div class="team-placeholder">
                    <span class="icon-group"></span>
                    <i class="ion-ios-people values-icon"></i>
                    <h4 class="mt-3">Our Team</h4>
                    <p>Photo coming soon – but we're a friendly bunch!</p>
                    <p><small>(In the meantime, imagine a photo of our skilled team with big smiles and sharp mowers.)</small></p>
                </div>
            </div>
        </div>

        <!-- Values / why choose -->
        <div class="row mt-5 pt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">What sets us apart</span>
                <h2 class="mb-5">Why Manzini Chooses Us</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center mb-3" style="width: 80px; height: 80px; background: #e9f5e9; border-radius: 50%; margin: 0 auto;">
                        <span class="flaticon-vegetable values-icon"></span>
                    </div>
                    <div class="media-body">
                        <h5>Customer First</h5>
                        <p>Your satisfaction is our top priority. We listen, we adapt, and we deliver exactly what you need.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center mb-3" style="width: 80px; height: 80px; background: #e9f5e9; border-radius: 50%; margin: 0 auto;">
                        <span class="flaticon-truck values-icon"></span>
                    </div>
                    <div class="media-body">
                        <h5>Flexible Scheduling</h5>
                        <p>We work around your calendar – early mornings, weekends, whatever suits you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center mb-3" style="width: 80px; height: 80px; background: #e9f5e9; border-radius: 50%; margin: 0 auto;">
                        <span class="flaticon-price values-icon"></span>
                    </div>
                    <div class="media-body">
                        <h5>No Hidden Costs</h5>
                        <p>Our quotes are clear and honest – you'll know exactly what you're paying for.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Removed owner testimonial as requested -->
    </div>
</section>

<!-- Call to action strip -->
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Ready to experience the difference?</h2>
                <span>Get a free quote – no strings attached.</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="form-group d-flex">
                    <a href="tel:+26876554370" class="btn btn-success mr-2 px-4">Call Now</a>
                    <!-- Updated WhatsApp link text to reflect new business name -->
                    <a href="https://wa.me/26876554370?text=Hello%20Izenzo%20Outdoor%20Services%2C%20I'd%20like%20to%20know%20more%20about%20your%20team" class="btn btn-whatsapp px-4" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>