<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/pitnik/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 15:07:02 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>
        O R M E C O Social Network
    </title>
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
            <div class="gap no-gap signin whitish medium-opacity">
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


                                <!-- <div class="fun-fact">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-check-box"></i>
                                                <h6>Registered People</h6>
                                                <span>1,01,242</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-layout-media-overlay-alt-2"></i>
                                                <h6>Posts Published</h6>
                                                <span>21,03,245</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-user"></i>
                                                <h6>Online Users</h6>
                                                <span>40,145</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
                                    <i class="fa fa-key"></i>login
                                    <span>sign in now and meet the awesome Friends around the world.</span>
                                </div>

                                <?php flash_alert_login(); ?>
                                <form action="<?= site_url('user-authentication') ?>" class="we-form" method="post">
                                    <input type="text" name="user_email" placeholder="Email">
                                    <input onclick="toggle()" id="password" type="password" name="user_password"
                                        placeholder="Password">
                                    <input type="checkbox"><label>remember me</label>
                                    <button type="submit" data-ripple="">sign in</button>
                                    <a class="forgot underline" href="<?= site_url('forgot-password') ?>"
                                        title="">forgot password?</a>
                                </form>
                                <!-- <a class="with-smedia facebook" href="#" title="" data-ripple=""><i
                                        class="fa fa-facebook"></i></a>
                                <a class="with-smedia twitter" href="#" title="" data-ripple=""><i
                                        class="fa fa-twitter"></i></a>
                                <a class="with-smedia instagram" href="#" title="" data-ripple=""><i
                                        class="fa fa-instagram"></i></a>
                                <a class="with-smedia google" href="#" title="" data-ripple=""><i
                                        class="fa fa-google-plus"></i></a>-->
                                <span>don't have an account? <a class="we-account underline"
                                        href="<?= site_url('create-account') ?>" title="">register
                                        now</a></span>
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


        } else {
            document.getElementById('password').setAttribute('type', 'text');
            state = true;


        }


    }
    </script>
    <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/main.min.js">
    </script>
    <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/script.js"></script>
</body>



</html>



<div class="toast" style="position:relative;">
    <div class="toast-header">
        <i class="bi bi-wifi"></i>&nbsp;&nbsp;&nbsp;
        <strong class="mr-auto"><span class="text-success">You're online now</span></strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        Hurray! Internet is connected.
    </div>
</div>



<script>
var status = 'online';
var current_status = 'online';

function check_internet_connection() {
    if (navigator.onLine) {
        status = 'online';
    } else {
        status = 'offline';
    }

    if (current_status != status) {
        if (status == 'online') {
            $('i.bi').addClass('bi-wifi');
            $('i.bi').removeClass('bi-wifi-off');
            $('.mr-auto').html("<span class='text-success'>You are online now</span>");
            $('.toast-body').text('Hurray! Internet is connected.');
        } else {
            $('i.bi').addClass('bi-wifi-off');
            $('i.bi').removeClass('bi-wifi');
            $('.mr-auto').html("<span class='text-danger'>You are offline now</span>");
            $('.toast-body').text('Opps! Internet is disconnected.')
        }

        current_status = status;

        $('.toast').toast({
            autohide: false
        });

        $('.toast').toast('show');
    }
}

check_internet_connection();

setInterval(function() {
    check_internet_connection();
}, 1000);
</script>