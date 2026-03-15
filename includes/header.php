<?php
// Set default values for page title and description if not provided
$page_title = $page_title ?? 'Izenzo Outdoor Services | Professional Lawn Care in Manzini';
$page_description = $page_description ?? 'Professional grass cutting and lawn maintenance in Manzini, Farview, Tincatfwini, Ngwane Park and surrounding areas. Free quotes, experienced team.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <!-- Local CSS -->
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Custom overrides for lawn care business -->
    <style>
        .hero .overlay {
            background: rgba(0, 0, 0, 0.3);
        }
        .btn-whatsapp {
            background-color: #25d366;
            color: #fff;
        }
        .btn-whatsapp:hover {
            background-color: #128C7E;
            color: #fff;
        }
        .service-area-list {
            columns: 2;
            list-style: none;
            padding: 0;
        }
        .service-area-list li {
            padding: 5px 0;
            font-size: 1.1rem;
        }
        .service-area-list li:before {
            content: "✔️";
            margin-right: 8px;
            color: #28a745;
        }
        .pricing-card {
            border: 1px solid #e6e6e6;
            border-radius: 8px;
            padding: 30px 20px;
            text-align: center;
            background: #f9f9f9;
            transition: all 0.3s;
        }
        .pricing-card:hover {
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .pricing-card .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: #28a745;
        }
        .pricing-card .note {
            font-size: 0.9rem;
            color: #666;
        }
        .ftco-footer .block-23 ul li .icon {
            color: #28a745;
        }
    </style>
</head>
<body class="goto-here">

<!-- Top bar with contact info -->
<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+268 7655 4370 &nbsp; | &nbsp; +268 7907 0265</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">izenziooutdoor@gmail.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text"><span class="icon-whatsapp mr-2"></span> WhatsApp: 7655 4370</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Izenzo Outdoor Services</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'active' : ''; ?>"><a href="services.php" class="nav-link">Services</a></li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'areas.php') ? 'active' : ''; ?>"><a href="areas.php" class="nav-link">Service Areas</a></li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>"><a href="about.php" class="nav-link">About Us</a></li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'gallery.php') ? 'active' : ''; ?>"><a href="gallery.php" class="nav-link">Gallery</a></li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item cta cta-colored"><a href="contact.php" class="nav-link">Get Free Quote</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->