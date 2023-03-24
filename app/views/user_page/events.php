<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <?php include_once('app/views/inc/user/user-profile.php') ?>


                        <div class="col-lg-3">
                            <aside class="sidebar static left">
                                <div class="widget">
                                    <h4 class="widget-title">Your page</h4>
                                    <div class="your-page">

                                        <?php if (!empty($_SESSION['image'])) { ?>
                                        <figure>
                                            <a href="#" title=""><img
                                                    src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/friend-avatar9.jpg"
                                                    alt=""></a>
                                        </figure>

                                        <?php } else { ?>
                                        <figure>
                                            <a href="#" title=""><img
                                                    src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/user.png"
                                                    alt=""></a>
                                        </figure>
                                        <?php } ?>

                                        <div class="page-meta">
                                            <a href="#" title="" class="underline">My Creative Page</a>
                                            <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em
                                                        class="bg-blue">9</em></a></span>
                                            <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications
                                                    <em class="bg-purple">2</em></a></span>
                                        </div>
                                        <ul class="page-publishes">
                                            <li>
                                                <span><i class="ti-pencil-alt"></i>Publish</span>
                                            </li>
                                            <li>
                                                <span><i class="ti-camera"></i>Photo</span>
                                            </li>
                                            <li>
                                                <span><i class="ti-video-camera"></i>Live</span>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-user-plus"></i>Invite</span>
                                            </li>
                                        </ul>
                                        <div class="page-likes">
                                            <ul class="nav nav-tabs likes-btn">
                                                <li class="nav-item"><a class="active" href="#link1" data-toggle="tab"
                                                        data-ripple="">likes</a></li>
                                                <li class="nav-item"><a class="" href="#link2" data-toggle="tab"
                                                        data-ripple="">views</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active fade show " id="link1">
                                                    <span><i class="ti-heart"></i>884</span>
                                                    <a href="#" title="weekly-likes">35 new likes this week</a>
                                                    <div class="users-thumb-list">
                                                        <a href="#" title="Anderw" data-toggle="tooltip">
                                                            <img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/userlist-1.jpg"
                                                                alt="">
                                                        </a>
                                                        <a href="#" title="frank" data-toggle="tooltip">
                                                            <img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/mages/resources/userlist-2.jpg"
                                                                alt="">
                                                        </a>
                                                        <a href="#" title="Sara" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-3.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Amy" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-4.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Ema" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-5.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sophie" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-6.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Maria" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="link2">
                                                    <span><i class="fa fa-eye"></i>440</span>
                                                    <a href="#" title="weekly-likes">440 new views this week</a>
                                                    <div class="users-thumb-list">
                                                        <a href="#" title="Anderw" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-1.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="frank" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-2.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sara" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-3.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Amy" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-4.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Ema" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-5.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Sophie" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-6.jpg" alt="">
                                                        </a>
                                                        <a href="#" title="Maria" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- page like widget -->
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Page Community</h4>
                                    <ul class="fav-community">
                                        <li><i class="fa fa-address-card"></i> About <p>We are motel hotel from Los
                                                Angeles, now based in San Francisco, come and enjoy!</p>
                                        </li>
                                        <li><i class="fa fa-users"></i><a href="#" title="">invite friends</a> to like
                                            this page</li>
                                        <li><i class="fa fa-thumbs-up"></i>13,33,454 People like this</li>
                                        <li><i class="fa fa-rss"></i>13,33,454 People follow this</li>
                                        <li><i class="fa fa-share-alt"></i>13,540 People share this</li>
                                        <li><i class="fa fa-bookmark"></i><a href="#" title="">category</a>
                                            Entertainment</li>
                                        <li><i class="fa fa-globe"></i><a href="https://wpkixx.com/"
                                                title="">www.wpkixx.com</a></li>
                                        <li><i class="fa fa-map-marker"></i><a
                                                href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="cb84a8aeaaa594a6a4bfaea78bb2a4beb9a6aaa2a7e5a8a4a6">[email&#160;protected]</a>
                                        </li>
                                    </ul>
                                </div><!-- Page Community-->

                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-9">
                            <div class="central-meta">
                                <div class="title-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="align-left">
                                                <h5>Ocean Motel Events</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-7 col-md-7 col-sm-7">
                                                    <form method="post">
                                                        <input type="text" placeholder="Search..">
                                                        <button type="submit"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="select-options">
                                                        <select class="select">
                                                            <option>Sort by</option>
                                                            <option>A to Z</option>
                                                            <option>See All</option>
                                                            <option>Newest</option>
                                                            <option>oldest</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1">
                                                    <div class="option-list">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                        <ul>
                                                            <li><a title="" href="#">Show Friends Public</a></li>
                                                            <li><a title="" href="#">Show Friends Private</a></li>
                                                            <li><a title="" href="#">Mute Notifications</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- title block -->
                            <div class="central-meta">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="event-box">
                                            <div class="row merged20">
                                                <div class="col-lg-4 col-md-4 col-sm-5">
                                                    <figure class="event-thumb"><img
                                                            src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/event4.jpg"
                                                            alt=""></figure>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-5">
                                                    <div class="event-title">
                                                        <span><i class="fa fa-clock-o"></i> 12:30PM to 02:30PM</span>
                                                        <h4><a href="#" title="">Ocean Motel good night event in
                                                                columbia for the youngests only.</a></h4>
                                                        <ul class="sociaz-media">
                                                            <li><a title="" href="#" class="facebook"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a title="" href="#" class="twitter"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                            <li><a title="" href="#" class="instagram"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="event-time">
                                                        <span class="event-date">29 Jul</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-box">
                                            <div class="row merged20">
                                                <div class="col-lg-4 col-md-4 col-sm-5">
                                                    <figure class="event-thumb"><img src="images/resources/event5.jpg"
                                                            alt=""></figure>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-5">
                                                    <div class="event-title">
                                                        <span><i class="fa fa-clock-o"></i> 02:30PM to 04:30PM</span>
                                                        <h4><a href="#" title="">International Conference in
                                                                Frankfurt</a></h4>
                                                        <ul class="sociaz-media">
                                                            <li><a title="" href="#" class="facebook"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a title="" href="#" class="twitter"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                            <li><a title="" href="#" class="instagram"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="event-time">
                                                        <span class="event-date">22 Sep</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-box">
                                            <div class="row merged20">
                                                <div class="col-lg-4 col-md-4 col-sm-5">
                                                    <figure class="event-thumb"><img src="images/resources/event3.jpg"
                                                            alt=""></figure>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-5">
                                                    <div class="event-title">
                                                        <span><i class="fa fa-clock-o"></i> 11:00AM to 02:30PM</span>
                                                        <h4><a href="#" title="">What is R3 Move Business
                                                                Conference?</a></h4>
                                                        <ul class="sociaz-media">
                                                            <li><a title="" href="#" class="facebook"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a title="" href="#" class="twitter"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                            <li><a title="" href="#" class="instagram"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="event-time">
                                                        <span class="event-date">09 Oct</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-box">
                                            <div class="row merged20">
                                                <div class="col-lg-4 col-md-4 col-sm-5">
                                                    <figure class="event-thumb"><img src="images/resources/event1.jpg"
                                                            alt=""></figure>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-5">
                                                    <div class="event-title">
                                                        <span><i class="fa fa-clock-o"></i> 11:20AM to 01:30PM</span>
                                                        <h4><a href="#" title="">2016 The 3rd International Conference
                                                                on Advances in Business.</a></h4>
                                                        <ul class="sociaz-media">
                                                            <li><a title="" href="#" class="facebook"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a title="" href="#" class="twitter"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                            <li><a title="" href="#" class="instagram"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="event-time">
                                                        <span class="event-date">10 Nov</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-box">
                                            <div class="row merged20">
                                                <div class="col-lg-4 col-md-4 col-sm-5">
                                                    <figure class="event-thumb"><img src="images/resources/event2.jpg"
                                                            alt=""></figure>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-5">
                                                    <div class="event-title">
                                                        <span><i class="fa fa-clock-o"></i> 10:00AM to 12:00AM</span>
                                                        <h4><a href="#" title="">Bring More Customer Traffic to Your
                                                                Store or Website</a></h4>
                                                        <ul class="sociaz-media">
                                                            <li><a title="" href="#" class="facebook"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a title="" href="#" class="twitter"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                            <li><a title="" href="#" class="instagram"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="event-time">
                                                        <span class="event-date">30 Jan</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lodmore">
                                    <button class="btn-view btn-load-more"></button>
                                </div>
                            </div>
                        </div><!-- centerl meta -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- content -->

<a title="Your Cart Items" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip">Cart <i
        class="fa fa-shopping-bag"></i><span>02</span></a>

<div class="bottombar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">© Pitnik 2020. All rights reserved.</span>
                <i><img src="images/credit-cards.png" alt=""></i>
            </div>
        </div>
    </div>
</div><!-- bottom bar -->
</div>
<div class="side-panel">
    <h4 class="panel-title">General Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>use night mode</span>
            <input type="checkbox" id="nightmode1" />
            <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notifications</span>
            <input type="checkbox" id="switch22" />
            <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notification sound</span>
            <input type="checkbox" id="switch33" />
            <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>My profile</span>
            <input type="checkbox" id="switch44" />
            <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show profile</span>
            <input type="checkbox" id="switch55" />
            <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
    <h4 class="panel-title">Account Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>Sub users</span>
            <input type="checkbox" id="switch66" />
            <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>personal account</span>
            <input type="checkbox" id="switch77" />
            <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Business account</span>
            <input type="checkbox" id="switch88" />
            <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show me online</span>
            <input type="checkbox" id="switch99" />
            <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Delete history</span>
            <input type="checkbox" id="switch101" />
            <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Expose author name</span>
            <input type="checkbox" id="switch111" />
            <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
</div><!-- side panel -->

<div class="popup-wraper7">
    <div class="popup events">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5></h5>
            </div>
            <div class="event-detail">
                <figure><img src="images/resources/event-detail1.jpg" alt=""></figure>
                <div class="event-detailmeta">
                    <h4>Ocean Motel good night event in columbia for the youngests only.</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="location-map">
                        <span>Venu Location</span>
                        <p>Confrence Hall street 34 lasal Ontario, Canada.</p>
                        <div id="map-canvas"></div>
                    </div>
                    <a class="main-btn event" href="#" title="">Add Calendar</a>
                    <a class="main-btn event" href="#" title="">Invite Friends</a>
                </div>
            </div>
        </div>
    </div>
</div>