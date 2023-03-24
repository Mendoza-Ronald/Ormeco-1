<!DOCTYPE html>
<html lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>O R M E C O Social Network </title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/css/main.min.css">
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
                        <div class="col-lg-7">
                            <div class="big-ad">
                                <figure><img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/logo.png" alt="">
                                </figure>
                                <h1>Welcome to the O R M E C O</h1>
                                <p>
                                    O R M E C O is a social network that can be used to connect people. We helps you
                                    connect
                                    and share with the people in your life.
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

                        <div class="col-lg-5">
                            <br><br><br><br><br><br>
                            <div class="reg-from">

                                <span><i class="fa fa-lock"></i> Verification Account</span>
                                <p>Its quick and Easy</p>
                                <?php flash_alert(); ?>
                                <form action="<?= site_url('account-verification') ?>" class="c-form" method="POST">
                                    <div class="row merged10">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input class="mb-2" name="confirmation_code" type="text"
                                                placeholder="Verfication Code">
                                        </div>

                                        <div class="col-lg-8 col-md-6 mt-2">
                                            <!-- <span class="reg-with">Register With</span> -->
                                            <ul class="social-reg">
                                                <!-- <li><a class="facebook" href="#" title="" data-ripple=""><i
                                                            class="fa fa-facebook"></i> Facebook</a></li>
                                                <li><a class="twitter" href="#" title="" data-ripple=""><i
                                                            class="fa fa-twitter"></i> Twitter</a></li> -->
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mt-2">
                                            <button type="submit">Verify</button>
                                        </div>
                                    </div>

                                </form>
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



</html>