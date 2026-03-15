<?php
// contact.php - Handles contact form display and submission with EmailJS

session_start();
require_once 'config/db.php';

$name = $email = $phone = $area = $message = '';
$success = '';
$errors = [];

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $area = trim($_POST['area'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name)) $errors[] = 'Name is required';
    if (empty($email)) $errors[] = 'Email is required';
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email format';
    if (empty($phone)) $errors[] = 'Phone number is required';
    if (empty($area)) $errors[] = 'Service area is required';
    if (empty($message)) $errors[] = 'Message is required';

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO inquiries (name, email, phone, area, message, submitted_at, status) VALUES (?, ?, ?, ?, ?, NOW(), 'new')");
        $stmt->bind_param("sssss", $name, $email, $phone, $area, $message);
        
        if ($stmt->execute()) {
            // Store data in session and redirect to prevent resubmission
            $_SESSION['form_success'] = true;
            $_SESSION['form_data'] = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'area' => $area,
                'message' => $message,
                'submitted_at' => date('Y-m-d H:i:s')
            ];
            header('Location: contact.php?sent=1');
            exit;
        } else {
            $errors[] = "Database error: Unable to save your request. Please try again.";
        }
        $stmt->close();
    }
}

// If we have a success flag in session and 'sent' parameter, show the success message
if (isset($_GET['sent']) && $_GET['sent'] == '1' && isset($_SESSION['form_success'])) {
    $success = "Thank you! Your quote request has been sent. We'll get back to you soon.";
    // Keep session data for EmailJS, will unset after script runs
}

// Set page-specific variables for header
$page_title = 'Contact Us | Izenzo Outdoor Services Manzini';
$page_description = 'Contact Izenzo Outdoor Services for a free quote. Call, WhatsApp, or fill out our form. We serve Manzini, Farview, Tincatfwini, Ngwane Park.';

include 'includes/header.php';
?>

<!-- Additional inline styles for this page -->
<style>
    .contact-info {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        height: 100%;
    }
    .contact-info .icon {
        font-size: 2rem;
        color: #28a745;
    }
    .contact-form {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .map-container {
        border-radius: 8px;
        overflow: hidden;
        margin-top: 30px;
    }
    .btn-whatsapp {
        background-color: #25d366;
        color: #fff;
    }
    .btn-whatsapp:hover {
        background-color: #128C7E;
        color: #fff;
    }
    .error-message {
        color: #dc3545;
        font-size: 0.9rem;
        margin-top: 5px;
    }
    .success-message {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 20px;
    }
</style>

<!-- Page header -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/lawn_contact_header.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Contact Us</h1>
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <!-- Left column: Contact info and map -->
            <div class="col-md-5 ftco-animate">
                <div class="contact-info">
                    <h3 class="mb-4">Get in Touch</h3>
                    <p>We're here to answer your questions and provide free, no-obligation quotes. Reach out any way that's convenient for you.</p>
                    
                    <div class="d-flex mb-3">
                        <div class="icon mr-3"><span class="icon-phone"></span></div>
                        <div>
                            <h5>Call Us</h5>
                            <p class="mb-0"><a href="tel:+26876554370">+268 7655 4370</a><br><a href="tel:+26879070265">+268 7907 0265</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="icon mr-3"><span class="icon-whatsapp"></span></div>
                        <div>
                            <h5>WhatsApp</h5>
                            <p class="mb-0"><a href="https://wa.me/26876554370?text=Hello%20Izenzo%20Outdoor%20Services%2C%20I'd%20like%20a%20quote%20please" target="_blank">+268 7655 4370</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="icon mr-3"><span class="icon-envelope"></span></div>
                        <div>
                            <h5>Email</h5>
                            <p class="mb-0"><a href="mailto:izenziooutdoor@gmail.com">izenziooutdoor@gmail.com</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-3">
                        <div class="icon mr-3"><span class="icon-clock-o"></span></div>
                        <div>
                            <h5>Business Hours</h5>
                            <p class="mb-0">Mon-Fri: 7am - 6pm<br>Sat: 8am - 4pm<br>Sun: Closed (emergency calls only)</p>
                        </div>
                    </div>
                    
                    <!-- Map -->
                    <div class="map-container mt-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114982.14929690184!2d31.332481847104336!3d-26.498504974687003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee86b7b1f6e6e45%3A0x3b0b8b1c9c4e4f4!2sManzini%2C%20Eswatini!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s" 
                            width="100%" 
                            height="250" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    <p class="mt-2"><small>Manzini area – we come to you!</small></p>
                </div>
            </div>
            
            <!-- Right column: Contact form -->
            <div class="col-md-7 ftco-animate">
                <div class="contact-form">
                    <h3 class="mb-4">Request a Free Quote</h3>
                    
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach ($errors as $error): ?>
                                    <li><?php echo htmlspecialchars($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($success): ?>
                        <div class="success-message">
                            <?php echo htmlspecialchars($success); ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="area">Service Area *</label>
                            <select class="form-control" id="area" name="area" required>
                                <option value="">Select your area</option>
                                <option value="Manzini" <?php echo $area == 'Manzini' ? 'selected' : ''; ?>>Manzini</option>
                                <option value="Farview" <?php echo $area == 'Farview' ? 'selected' : ''; ?>>Farview</option>
                                <option value="Tincatfwini" <?php echo $area == 'Tincatfwini' ? 'selected' : ''; ?>>Tincatfwini</option>
                                <option value="Ngwane Park" <?php echo $area == 'Ngwane Park' ? 'selected' : ''; ?>>Ngwane Park</option>
                                <option value="Matsapha" <?php echo $area == 'Matsapha' ? 'selected' : ''; ?>>Matsapha</option>
                                <option value="Zakhele" <?php echo $area == 'Zakhele' ? 'selected' : ''; ?>>Zakhele</option>
                                <option value="Msunduza" <?php echo $area == 'Msunduza' ? 'selected' : ''; ?>>Msunduza</option>
                                <option value="Moneni" <?php echo $area == 'Moneni' ? 'selected' : ''; ?>>Moneni</option>
                                <option value="Other" <?php echo $area == 'Other' ? 'selected' : ''; ?>>Other (please specify in message)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message / Details *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required><?php echo htmlspecialchars($message); ?></textarea>
                            <small class="form-text text-muted">Tell us about your lawn size, frequency, or any special requests.</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary px-5">Send Request</button>
                    </form>
                    
                    <hr class="my-4">
                    
                    <div class="text-center">
                        <p>Prefer to talk now? Call or WhatsApp us directly:</p>
                        <a href="tel:+26876554370" class="btn btn-success mr-2 px-4">Call Now</a>
                        <a href="https://wa.me/26876554370?text=Hello%20Izenzo%20Outdoor%20Services%2C%20I'd%20like%20a%20quote%20please" class="btn btn-whatsapp px-4" target="_blank">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action strip (optional) -->
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">We're ready to transform your lawn</h2>
                <span>Fast, friendly service – just a message away.</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="form-group d-flex">
                    <a href="tel:+26876554370" class="btn btn-success mr-2 px-4">Call Now</a>
                    <a href="https://wa.me/26876554370?text=Hello%20Izenzo%20Outdoor%20Services%2C%20I'd%20like%20a%20quote%20please" class="btn btn-whatsapp px-4" target="_blank">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EmailJS integration - runs only after successful form submission -->
<?php if (isset($_GET['sent']) && $_GET['sent'] == '1' && isset($_SESSION['form_success'])): ?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">
    (function() {
        // REPLACE WITH YOUR ACTUAL PUBLIC KEY FROM EMAILJS (Account → API Keys)
        emailjs.init("Hk6Xjzz70iGNxwSeI");
    })();

    window.onload = function() {
        var templateParams = {
            name: "<?php echo addslashes($_SESSION['form_data']['name']); ?>",
            email: "<?php echo addslashes($_SESSION['form_data']['email']); ?>",
            phone: "<?php echo addslashes($_SESSION['form_data']['phone']); ?>",
            area: "<?php echo addslashes($_SESSION['form_data']['area']); ?>",
            message: "<?php echo addslashes($_SESSION['form_data']['message']); ?>",
            submitted_at: "<?php echo addslashes($_SESSION['form_data']['submitted_at']); ?>"
        };

        // Send email using your service ID and template ID
        emailjs.send('service_nsl49kr', 'template_e08vaoa', templateParams)
            .then(function(response) {
                console.log('Email sent successfully!', response.status, response.text);
            }, function(error) {
                console.log('Email failed to send...', error);
            })
            .finally(function() {
                // Clear session data so email isn't sent again on refresh
                <?php 
                unset($_SESSION['form_success']); 
                unset($_SESSION['form_data']); 
                ?>
            });
    };
</script>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>