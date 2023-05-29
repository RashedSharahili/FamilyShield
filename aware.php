<?php session_start(); ?>
<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Origin: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Origin: Content-Type, X-Auth-Token, Origin, Authorization");
 ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>درع العائلة السيبرانية</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/identity/familyShield33.png" rel="icon">
    <link href="assets/img/identity/familyShield33.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.rtl.min.css">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo">
                <a href="index.html">
                    <img src="assets/img/identity/familyShield55.png" alt="درع العائلة السيبرانية" srcset="">
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.html">الرئيسية</a></li>
                    <li><a class="nav-link scrollto" href="#services">خدماتنا</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">الباقات</a></li>
                    <li><a class="nav-link scrollto" href="#team">فريق العمل</a></li>
                    <li><a class="nav-link scrollto" href="#faq">الأسئلة الشائعة</a></li>
                    <li><a class="nav-link scrollto" href="#contact">تواصل معنا</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <div class="container mt-15">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="mb-3">
                    <h3 class="text-center">وعي أسرتك</h3>
                </div>
                <?php if (isset($_SESSION["msg"])) { ?>
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12 col-xs-12">
                        <span class="text-center"
                            style="background-color: green; color: white;"><?php echo $_SESSION["msg"]["message"]; ?></span>
                    </div>
                </div>
                <?php unset($_SESSION["msg"]); ?>
                <?php } ?>
                <form action="insert_af.php" method="post" class="shadow p-4">
                    <div class="mb-3">
                        <label for="name">الأسم</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="الأسم" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">البريد الالكتروني</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="البريد الالكتروني"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="appointment">المنصب</label>
                        <input type="text" class="form-control" name="position" id="position" placeholder="المنصب"
                            required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>

                </form>

                <!-- <button id="submit_btn">Click </button> -->
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            جميع الحقوق محفوظة &copy;<strong><span>درع العائلة السيبرانية</span></strong>
                        </div>
                    </div>
                </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>

    <script>
    // const axios = require('axios');

    const btn = document.getElementById('submit_btn');

    // API configuration
    const apiUrl = 'https://127.0.0.1:3333/api'; // Replace with your GoPhish instance URL
    const apiKey =
    'efca96710edf7599f327809424b75b3e43f6c615d8854bd013cab43ca83ffd6d'; // Replace with your GoPhish API key

    // Authorization headers
    const headers = {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${apiKey}`
    };

    btn.onclick = () => {

        // Call the API request
        createCampaign();

    }

    // Create a new campaign
    async function createCampaign() {
        try {
            const campaignData = {
                name: 'My Campaign',
                template: {
                    name: 'Phishing Template', // Replace with the name of your template
                    subject: 'Important Message', // Replace with the subject of your template
                    text: 'This is the body of the email.' // Replace with the body of your template
                },
                landing_page: {
                    name: 'Phishing Page', // Replace with the name of your landing page
                    url: 'https://www.seedprod.com/' // Replace with the URL of your landing page
                },
                sending_profile: {
                    name: 'Rashed' // Replace with the name of your sending profile
                },
                groups: [{
                    name: 'Family1'
                }]
            };

            const response = await axios.post(`${apiUrl}/campaigns`, campaignData, {
                headers
            });
            console.log('Campaign created successfully!');
            console.log(response.data);
        } catch (error) {
            console.error('Error:', error.response);
        }
    }
    </script>
</body>

</html>