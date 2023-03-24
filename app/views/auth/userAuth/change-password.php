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

                        <div class="col-lg-5">
                            <!-- <br><br><br><br><br><br> -->
                            <div class="reg-from">

                                <span><i class="fa fa-lock"></i> Change Password</span>
                                <p>Its quick and Easy</p>
                                <?php flash_alert(); ?>
                                <form action="<?= site_url('change-password') ?>" class="c-form" method="POST"
                                    oninput='password_confirm.setCustomValidity(password_confirm.value != user_password.value ? "Passwords do not match." : "")'>
                                    <div class="row merged10">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input onclick="toggle()" id="password" class="mb-2" name="user_password"
                                                type="text" placeholder="New Password">


                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input id="passwords" onclick="toggle()" class="mb-2"
                                                name="password_confirm" type="password" placeholder="Confirm Password">


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
                                        <div class="col-lg-4 col-md-6 mt-3 right">
                                            <button type="submit">Change </button>
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


    <script>
    var state = false;

    function toggle() {

        if (state) {
            document.getElementById('password').setAttribute('type', 'password');
            state = false;

            document.getElementById('passwords').setAttribute('type', 'password');
            state = false;
        } else {
            document.getElementById('password').setAttribute('type', 'text');
            state = true;


            document.getElementById('passwords').setAttribute('type', 'text');
            state = true;
        }


    }
    </script>
    <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/main.min.js"></script>
    <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/script.js"></script>
</body>



</html>