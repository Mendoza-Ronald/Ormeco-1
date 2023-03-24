<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/pitnik/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 15:07:05 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Pitnik Social Network Toolkit</title>
    <link rel="icon" href="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/favico.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/css/main.min.css">
    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/css/weather-icon.css">
    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/css/style.css">
    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/css/responsive.css">

</head>

<body>
    <div class="www-layout">
        <section>
            <div class="gap no-gap signin whitish medium-opacity register">
                <div class="bg-image"
                    style="background-image:url(<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/theme-bg.jpg)">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="big-ad">
                                <figure><img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/logo.png" alt="">
                                </figure>
                                <h1>Welcome to the O R M E C O</h1>
                                <p style="text-align: justify;">
                                    Oriental Mindoro Electric Cooperative, Inc. (ORMECO, Inc.) is a non-stock,
                                    non-profit and service-oriented rural electric cooperative, duly organized under
                                    existing Philippine laws, rule and regulation. The National Electrification
                                    Administration (NEA) divided ORMECO coverage area – Oriental Mindoro – into seven
                                    (7) district namely: District I – Baco, San Teodoro and Puerto Galera; District II –
                                    Calapan City; District III – Naujan and Victoria; District IV – Socorro and Pola;
                                    District V – pinamalayan and Gloria; District VI – Bansud and Bongabong; & District
                                    VII – Roxas, Mansalay, Bulalacao. Its mission is to carry out the dream of total
                                    electrification of Oriental Mindoro along with and affordable, reliable and
                                    efficient quality of service.
                                </p>
                                <!-- <div class="barcode">
                                    <figure><img src="images/resources/Barcode.jpg" alt=""></figure>
                                    <div class="app-download">
                                        <span>Download Mobile App and Scan QR Code to login</span>
                                        <ul class="colla-apps">
                                            <li><a title="" href="https://play.google.com/store?hl=en"><img
                                                        src="images/android.png" alt="">android</a></li>
                                            <li><a title="" href="https://www.apple.com/lae/ios/app-store/"><img
                                                        src="images/apple.png" alt="">iPhone</a></li>
                                            <li><a title="" href="https://www.microsoft.com/store/apps"><img
                                                        src="images/windows.png" alt="">Windows</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="we-login-register">
                                <div class="form-title">
                                    <i class="fa fa-key"></i>Forgot Password
                                    <span>Sign Up now </span>
                                </div>

                                <br><br><br><br><br><br> <br><br><br>
                                <?php flash_alert(); ?>
                                <form class="we-form" method="post" action="<?= site_url('forgot-password') ?>">
                                    <input name="user_email" type="email" placeholder="Email">
                                    <!-- <input type="text" placeholder="Username"> -->
                                    <!-- <input type="password" placeholder="Password"> -->

                                    <!-- <input type="text" placeholder="09 253 9756 812"> -->
                                    <!-- <input type="checkbox"><label>Send code to Mobile</label> -->

                                    <br><br>
                                    <button type="submit" data-ripple="">Send Reset Code</button>
                                    <!-- <a class="forgot underline" href="#" title="">forgot password?</a> -->
                                </form>
                                <!-- <a data-ripple="" title="" href="#" class="with-smedia facebook"><i
                                        class="fa fa-facebook"></i></a>
                                <a data-ripple="" title="" href="#" class="with-smedia twitter"><i
                                        class="fa fa-twitter"></i></a>
                                <a data-ripple="" title="" href="#" class="with-smedia instagram"><i
                                        class="fa fa-instagram"></i></a>
                                <a data-ripple="" title="" href="#" class="with-smedia google"><i
                                        class="fa fa-google-plus"></i></a> -->
                                <span>Back to login? <a class="we-account underline"
                                        href="<?= site_url('user-authentication') ?>" title="">Sign
                                        in</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/main.min.js"></script>
    <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/script.js"></script>
</body>

<!-- Mirrored from wpkixx.com/html/pitnik/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 15:07:05 GMT -->

</html>