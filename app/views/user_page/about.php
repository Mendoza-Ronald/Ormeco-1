<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <?php include_once('app/views/inc/user/user-profile.php') ?>

                        <div class="col-lg-4 col-md-4">
                            <aside class="sidebar">
                                <div class="central-meta stick-widget">
                                    <span class="create-post">Personal Info</span>
                                    <div class="personal-head">
                                        <span class="f-title"><i class="fa fa-user"></i> About Me:</span>
                                        <p>
                                            Hi, I’m <?= ucfirst($_SESSION['username']) ?>, I work as a
                                            Digital
                                            Designer for the
                                            “dewwater” Agency in Ontario, Canada
                                        </p>
                                        <span class="f-title"><i class="fa fa-birthday-cake"></i> Birthday:</span>
                                        <p>
                                            December 17, 1985
                                        </p>
                                        <span class="f-title"><i class="fa fa-phone"></i> Phone Number:</span>
                                        <p>
                                            <?= $_SESSION['phone'] ?>
                                        </p>
                                        <span class="f-title"><i class="fa fa-medkit"></i> Blood group:</span>
                                        <p id="blood-type">
                                            -
                                        </p>
                                        <span class="f-title"><i class="fa fa-male"></i> Gender:</span>
                                        <p>
                                            Male
                                        </p>
                                        <span class="f-title"><i class="fa fa-globe"></i> Country:</span>
                                        <p id="region">

                                        </p>
                                        <span class="f-title"><i class="fa fa-briefcase"></i> Occupation:</span>
                                        <p id="occupation">

                                        </p>
                                        <span class="f-title"><i class="fa fa-handshake-o"></i> Joined:</span>
                                        <p>
                                            <?= $_SESSION['join_date'] ?>
                                        </p>

                                        <span class="f-title"><i class="fa fa-envelope"></i> Email & Website:</span>
                                        <p>
                                            <a title=""><?= $_SESSION['useremail'] ?></a>
                                        </p>

                                        <div id="count"></div>
                            </aside>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="central-meta">
                                <span class="create-post">General Info<a href="#" title="">See All</a></span>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="gen-metabox">
                                            <span><i class="fa fa-puzzle-piece"></i> Hobbies</span>
                                            <p>
                                                I like to ride the bicycle, swimming, and working out. I also like
                                                reading design magazines, and searching on internet, and also binge
                                                watching a good hollywood Movies while it’s raining outside.
                                            </p>
                                        </div>
                                        <div class="gen-metabox">
                                            <span><i class="fa fa-plus"></i> Others Interests</span>
                                            <p>
                                                Swimming, Surfing, Uber Diving, Anime, Photography, Tattoos, Street Art.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="gen-metabox">
                                            <span><i class="fa fa-mortar-board"></i> Education</span>
                                            <p>
                                                Master of computer science, sixteen years degree From <a href="#"
                                                    title="">Oxford Uniersity, London</a>
                                            </p>
                                        </div>
                                        <div class="gen-metabox">
                                            <span><i class="fa fa-certificate"></i> Work and experience</span>
                                            <p>
                                                Currently working in the "color hands" web development agency from the
                                                last 5 five years as <a href="#" title="">Senior UI/UX Designer</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="gen-metabox no-margin">
                                            <span><i class="fa fa-sitemap"></i> Social Networks</span>
                                            <ul class="sociaz-media">
                                                <li><a class="facebook" href="#" title=""><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href="#" title=""><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li><a class="google" href="#" title=""><i
                                                            class="fa fa-google-plus"></i></a></li>
                                                <li><a class="vk" href="#" title=""><i class="fa fa-vk"></i></a></li>
                                                <li><a class="instagram" href="#" title=""><i
                                                            class="fa fa-instagram"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="gen-metabox no-margin">
                                            <span><i class="fa fa-trophy"></i> Badges</span>
                                            <ul class="badged">
                                                <li><img src="images/badges/badge2.png" alt=""></li>
                                                <li><img src="images/badges/badge19.png" alt=""></li>
                                                <li><img src="images/badges/badge21.png" alt=""></li>
                                                <li><img src="images/badges/badge3.png" alt=""></li>
                                                <li><img src="images/badges/badge4.png" alt=""></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="central-meta">
                                <span class="create-post">Favourit Movies & TV Shows (33) <a href="#" title="">See
                                        All</a></span>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="fav-play">
                                            <figure>
                                                <img src="images/resources/tvplay1.jpg" alt="">
                                            </figure>
                                            <span class="tv-play-title">Attaturk Tv Series 2017 </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="fav-play">
                                            <figure>
                                                <img src="images/resources/tvplay2.jpg" alt="">
                                            </figure>
                                            <span class="tv-play-title">Thor Hollywood Movie 2017 </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="fav-play">
                                            <figure>
                                                <img src="images/resources/tvplay3.jpg" alt="">
                                            </figure>
                                            <span class="tv-play-title">Spider Men 2015 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="central-meta">
                                <span class="create-post">Friend's (320) <a href="timeline-friends2.html" title="">See
                                        All</a></span>
                                <ul class="frndz-list">
                                    <li>
                                        <img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/recent1.jpg"
                                            alt="">
                                        <div class="sugtd-frnd-meta">
                                            <a href="#" title="">Olivia</a>
                                            <span>1 mutual friend</span>
                                            <ul class="add-remove-frnd">
                                                <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                        title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                            class="fa fa-user-times"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/resources/recent2.jpg" alt="">
                                        <div class="sugtd-frnd-meta">
                                            <a href="#" title="">Emma watson</a>
                                            <span>2 mutual friend</span>
                                            <ul class="add-remove-frnd">
                                                <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                        title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                            class="fa fa-user-times"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/resources/recent3.jpg" alt="">
                                        <div class="sugtd-frnd-meta">
                                            <a href="#" title="">Isabella</a>
                                            <span><a href="#" title="">Emmy</a> is mutual friend</span>
                                            <ul class="add-remove-frnd">
                                                <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                        title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                            class="fa fa-user-times"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/resources/recent4.jpg" alt="">
                                        <div class="sugtd-frnd-meta">
                                            <a href="#" title="">Amelia</a>
                                            <span>5 mutual friend</span>
                                            <ul class="add-remove-frnd">
                                                <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                        title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                            class="fa fa-user-times"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/resources/recent5.jpg" alt="">
                                        <div class="sugtd-frnd-meta">
                                            <a href="#" title="">Sophia</a>
                                            <span>1 mutual friend</span>
                                            <ul class="add-remove-frnd">
                                                <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                        title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                            class="fa fa-user-times"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="images/resources/recent6.jpg" alt="">
                                        <div class="sugtd-frnd-meta">
                                            <a href="#" title="">Amelia</a>
                                            <span>3 mutual friend</span>
                                            <ul class="add-remove-frnd">
                                                <li class="add-tofrndlist"><a class="send-mesg" href="#"
                                                        title="Send Message"><i class="fa fa-commenting"></i></a></li>
                                                <li class="remove-frnd"><a href="#" title="remove friend"><i
                                                            class="fa fa-user-times"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- friends list -->
                            <div class="central-meta">
                                <span class="create-post">Photos (580) <a href="timeline-photos.html" title="">See
                                        All</a></span>
                                <ul class="photos-list">
                                    <li>
                                        <div class="item-box">
                                            <a class="strip" href="images/resources/photo-22.jpg" title=""
                                                data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img src="images/resources/photo2.jpg" alt=""></a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>15</span></div>
                                                <span>20 hours ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a class="strip" href="images/resources/photo-33.jpg" title=""
                                                data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img src="images/resources/photo3.jpg" alt=""></a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>20</span></div>
                                                <span>20 days ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a class="strip" href="images/resources/photo-44.jpg" title=""
                                                data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img src="images/resources/photo4.jpg" alt=""></a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>155</span></div>
                                                <span>Yesterday</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a class="strip" href="images/resources/photo-55.jpg" title=""
                                                data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img src="images/resources/photo5.jpg" alt=""></a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>201</span></div>
                                                <span>3 weeks ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a class="strip" href="images/resources/photo-66.jpg" title=""
                                                data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img src="images/resources/photo6.jpg" alt=""></a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>81</span></div>
                                                <span>2 months ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a class="strip" href="images/resources/photo-77.jpg" title=""
                                                data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img src="images/resources/photo7.jpg" alt=""></a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>98</span></div>
                                                <span>1 day</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a class="strip" href="images/resources/photo-88.jpg" title=""
                                                data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img src="images/resources/photo8.jpg" alt=""></a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>87</span></div>
                                                <span>23 hours ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="central-meta">
                                <span class="create-post">Videos (33) <a href="timeline-videos.html" title="">See
                                        All</a></span>
                                <ul class="videos-list">
                                    <li>
                                        <div class="item-box">
                                            <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title=""
                                                data-strip-group="mygroup" class="strip"
                                                data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                    src="images/resources/vid-11.jpg" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        height="50px" width="50px" viewBox="0 0 100 100"
                                                        enable-background="new 0 0 100 100" xml:space="preserve">
                                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                        <path class="icon" fill=""
                                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>15</span></div>
                                                <span>20 hours ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title=""
                                                data-strip-group="mygroup" class="strip"
                                                data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                    src="images/resources/vid-12.jpg" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        height="50px" width="50px" viewBox="0 0 100 100"
                                                        enable-background="new 0 0 100 100" xml:space="preserve">
                                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                        <path class="icon" fill=""
                                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>20</span></div>
                                                <span>20 hours ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title=""
                                                data-strip-group="mygroup" class="strip"
                                                data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                    src="images/resources/vid-10.jpg" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        height="50px" width="50px" viewBox="0 0 100 100"
                                                        enable-background="new 0 0 100 100" xml:space="preserve">
                                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                        <path class="icon" fill=""
                                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>49</span></div>
                                                <span>20 days ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title=""
                                                data-strip-group="mygroup" class="strip"
                                                data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                    src="images/resources/vid-9.jpg" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        height="50px" width="50px" viewBox="0 0 100 100"
                                                        enable-background="new 0 0 100 100" xml:space="preserve">
                                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                        <path class="icon" fill=""
                                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>156</span></div>
                                                <span>Yesterday</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <a href="https://www.youtube.com/watch?v=fF382gwEnG8&amp;t=1s" title=""
                                                data-strip-group="mygroup" class="strip"
                                                data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                                    src="images/resources/vid-6.jpg" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        height="50px" width="50px" viewBox="0 0 100 100"
                                                        enable-background="new 0 0 100 100" xml:space="preserve">
                                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5" />
                                                        <path class="icon" fill=""
                                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                                    </svg>
                                                </i>
                                            </a>
                                            <div class="over-photo">
                                                <div class="likes heart" title="Like/Dislike">❤ <span>202</span></div>
                                                <span>3 weeks ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- content -->

<a title="Your Cart Items" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip">Cart <i
        class="fa fa-shopping-bag"></i><span>02</span></a>


<?php include_once('app/views/inc/user/bootom-bar.php')  ?>
<!-- BOTTOM BAR  -->
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

<div class="popup-wraper1">
    <div class="popup direct-mesg">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5>Send Message</h5>
            </div>
            <div class="send-message">
                <form method="post" class="c-form">
                    <input type="text" placeholder="Sophia">
                    <textarea placeholder="Write Message"></textarea>
                    <button type="submit" class="main-btn">Send</button>
                </form>
                <div class="add-smiles">
                    <div class="uploadimage">
                        <i class="fa fa-image"></i>
                        <label class="fileContainer">
                            <input type="file">
                        </label>
                    </div>
                    <span title="add icon" class="em em-expressionless"></span>
                    <div class="smiles-bunch">
                        <i class="em em---1"></i>
                        <i class="em em-smiley"></i>
                        <i class="em em-anguished"></i>
                        <i class="em em-laughing"></i>
                        <i class="em em-angry"></i>
                        <i class="em em-astonished"></i>
                        <i class="em em-blush"></i>
                        <i class="em em-disappointed"></i>
                        <i class="em em-worried"></i>
                        <i class="em em-kissing_heart"></i>
                        <i class="em em-rage"></i>
                        <i class="em em-stuck_out_tongue"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div><!-- send message popup -->

<div class="popup-wraper3">
    <div class="popup">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5>Report Post</h5>
            </div>
            <div class="Rpt-meta">
                <span>We're sorry something's wrong. How can we help?</span>
                <form method="post" class="c-form">
                    <div class="form-radio">
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio" checked="checked"><i class="check-box"></i>It's spam or
                                abuse
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio"><i class="check-box"></i>It breaks r/technology's rules
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio"><i class="check-box"></i>Not Related
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="radio"><i class="check-box"></i>Other issues
                            </label>
                        </div>
                    </div>
                    <div>
                        <label>Write about Report</label>
                        <textarea placeholder="write someting about Post" rows="2"></textarea>
                    </div>
                    <div>
                        <button data-ripple="" type="submit" class="main-btn">Submit</button>
                        <a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- report popup -->