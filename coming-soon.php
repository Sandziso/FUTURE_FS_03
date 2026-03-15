<?php
// Set page-specific variables
$page_title = 'Coming Soon | Grass Cutting Services Manzini';
$page_description = 'We are working on something exciting. Stay tuned for updates from Grass Cutting Services.';

include 'includes/header.php';
?>

<!-- Additional inline styles -->
<style>
    .coming-soon-wrapper {
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 60px 20px;
    }
    .coming-soon-content {
        max-width: 700px;
    }
    .coming-soon-icon {
        font-size: 5rem;
        color: #28a745;
        margin-bottom: 20px;
    }
    .coming-soon-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
    }
    .coming-soon-text {
        font-size: 1.2rem;
        color: #777;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    .btn-coming-soon {
        padding: 12px 30px;
        font-size: 1.1rem;
        border-radius: 50px;
    }
    .social-placeholder {
        margin-top: 40px;
    }
    .social-placeholder a {
        display: inline-block;
        margin: 0 10px;
        font-size: 2rem;
        color: #aaa;
        transition: color 0.3s;
    }
    .social-placeholder a:hover {
        color: #28a745;
    }
</style>

<!-- Page header (optional – you can remove if you want a cleaner look) -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Coming Soon</h1>
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home</a></span> <span>Coming Soon</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="ftco-section">
    <div class="container">
        <div class="coming-soon-wrapper">
            <div class="coming-soon-content ftco-animate">
                <div class="coming-soon-icon">
                    <span class="flaticon-vegetable"></span>
                </div>
                <h2 class="coming-soon-title">We'll Be Back Soon</h2>
                <p class="coming-soon-text">
                    We're working hard to bring you something fresh. Our social media pages and new features are under construction. Stay tuned for updates!
                </p>
                <a href="index.php" class="btn btn-success btn-coming-soon px-5">Back to Home</a>

                <!-- Optional placeholder for social icons (they currently point to this same page) -->
                <div class="social-placeholder">
                    <a href="coming-soon.php"><span class="icon-facebook"></span></a>
                    <a href="coming-soon.php"><span class="icon-instagram"></span></a>
                    <a href="coming-soon.php"><span class="icon-whatsapp"></span></a>
                </div>
                <p class="mt-3"><small>Follow us for launch announcements</small></p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>