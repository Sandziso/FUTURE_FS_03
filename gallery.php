<?php
// Set page-specific variables
$page_title = 'Gallery | Izenzo Outdoor Services Manzini';
$page_description = 'See examples of our work – before and after photos of lawns we’ve transformed in Manzini, Farview, Tincatfwini, Ngwane Park and surrounding areas.';

include 'includes/header.php';
?>

<!-- Additional inline styles for this page -->
<style>
    .gallery-item {
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    .gallery-item:hover {
        transform: scale(1.02);
    }
    .gallery-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        display: block;
    }
    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0,0,0,0.6);
        color: #fff;
        padding: 10px;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s;
    }
    .gallery-item:hover .gallery-caption {
        opacity: 1;
    }
</style>

<!-- Page header -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/lawn_gallery_header.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Gallery</h1>
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home</a></span> <span>Gallery</span></p>
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
                <span class="subheading">Our work</span>
                <h2 class="mb-4">Transforming Lawns Across Manzini</h2>
                <p>Take a look at some of the lawns we've had the pleasure of caring for. From overgrown to pristine – we take pride in every job.</p>
            </div>
        </div>

        <!-- Gallery grid -->
        <div class="row">
            <!-- Image 1 -->
            <div class="col-md-4 ftco-animate">
                <div class="gallery-item">
                    <img src="images/lawn_1.jpg" alt="Lawn before cutting in Manzini" class="img-fluid">
                    <div class="gallery-caption">MITC next to st Micheals</div>
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-md-4 ftco-animate">
                <div class="gallery-item">
                    <img src="images/lawn_2.jpg" alt="Neat lawn in Farview" class="img-fluid">
                    <div class="gallery-caption">Regular maintenance – Farview</div>
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-md-4 ftco-animate">
                <div class="gallery-item">
                    <img src="images/lawn_3.jpg" alt="Lawn edging in Tincatfwini" class="img-fluid">
                    <div class="gallery-caption">Edging & trimming – Tincatfwini</div>
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-md-4 ftco-animate">
                <div class="gallery-item">
                    <img src="images/lawn_4.jpg" alt="Commercial property in Ngwane Park" class="img-fluid">
                    <div class="gallery-caption">Commercial property – Ngwane Park</div>
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-md-4 ftco-animate">
                <div class="gallery-item">
                    <img src="images/lawn_5.jpg" alt="Lush green lawn in Manzini" class="img-fluid">
                    <div class="gallery-caption">Lush transformation – Ngwane Park</div>
                </div>
            </div>
            <!-- Image 6 -->
            <div class="col-md-4 ftco-animate">
                <div class="gallery-item">
                    <img src="images/lawn_6.jpg" alt="Our team at work" class="img-fluid">
                    <div class="gallery-caption">Our team in action</div>
                </div>
            </div>
        </div>

        <!-- Note about more photos -->
        <div class="row mt-5 ftco-animate">
            <div class="col-md-12 text-center">
                <p class="note">Want to see more? Follow us on Facebook or Instagram for regular updates and before/after shots.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to action strip -->
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Ready to see your lawn in our gallery?</h2>
                <span>Let us make it beautiful – get a free quote today.</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="form-group d-flex">
                    <a href="tel:+26876554370" class="btn btn-success mr-2 px-4">Call Now</a>
                    <a href="https://wa.me/26876554370?text=Hello%20Grass%20Cutting%20Services%2C%20I%20saw%20your%20gallery%20and%20would%20like%20a%20quote" class="btn btn-whatsapp px-4" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>