<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/pitnik/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 15:07:05 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>O R M E C O Social Network </title>
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
                                <figure><img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/logos.png" alt="">
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
                                    <i class="fa fa-key"></i>Sign Up
                                    <span>Sign Up now </span>
                                </div>
                                <?php flash_alert(); ?>
                                <form class="we-form" method="post" action="<?= site_url('create-account') ?>">
                                    <input type="email" name="user_email" placeholder="Email">
                                    <input type="text" name="username" placeholder="Username">
                                    <input type="password" id="password" onclick="toggle()" name="user_password"
                                        placeholder="Password">

                                    <input pattern="[0-9]{11}" type="text" name="phone" placeholder="09539756812">
                                    <input type="checkbox"><label>Send code to Mobile</label>
                                    <button type="submit" data-ripple="">Register</button>
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
                                <span>already have an account? <a class="we-account underline"
                                        href="<?= site_url('user-authentication') ?>" title="">Sign
                                        in</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>



    <script>

    </script>

    <script>
    var state = false;

    function toggle() {

        if (state) {
            document.getElementById('password').setAttribute('type', 'password');
            state = false;


        } else {
            document.getElementById('password').setAttribute('type', 'text');
            state = true;


        }


    }
    </script>

    <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/main.min.js"></script>
    <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/script.js"></script>
</body>

<!-- Mirrored from wpkixx.com/html/pitnik/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 15:07:05 GMT -->

</html>