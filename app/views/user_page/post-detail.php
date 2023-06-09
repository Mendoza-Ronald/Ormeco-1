<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="post-title gry-bg">
                                <h6><i class="fa fa-link"></i> <?= $event_detail['e_title'] ?></h6>
                                <span>politics</span>
                                <div class="number">
                                    <span class="plus"><i class="fa fa-angle-up"></i></span>
                                    <input type="text" value="0" />
                                    <span class="minus"><i class="fa fa-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="central-meta item">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <figure>
                                            <img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/friend-avatar10.jpg"
                                                alt="">
                                        </figure>
                                        <div class="friend-name">
                                            <div class="more">
                                                <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                    <ul>
                                                        <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                                        <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                                        <li><i class="fa fa-flag"></i>Report</li>
                                                        <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                                                        <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                                        <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                                                        <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ins><a href="time-line.html"
                                                    title=""><?= $event_detail['username'] ?></a></ins>
                                            <span>published: <?php
                                                                $wop = $event_detail['created_date'];
                                                                print date(
                                                                    'd M Y h:i a',
                                                                    strtotime($wop)
                                                                );
                                                                ?></span>
                                        </div>

                                        <div class="post-meta">
                                            <figure>
                                                <img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/user-post.jpg"
                                                    alt="">
                                                <ul class="like-dislike">
                                                    <li><a class="bg-purple" href="#" title="Save to Pin Post"><i
                                                                class="fa fa-thumb-tack"></i></a></li>
                                                    <li><a class="bg-blue" href="#" title="Like Post"><i
                                                                class="ti-thumb-up"></i></a></li>
                                                    <li><a class="bg-red" href="#" title="dislike Post"><i
                                                                class="ti-thumb-down"></i></a></li>
                                                </ul>
                                            </figure>
                                            <div class="description">
                                                <!-- <p>
                                                    World's most beautiful car in Curabitur <a href="#" title="">#test
                                                        drive booking !</a> the most beatuiful car available in america
                                                    and the saudia arabia, you can book your test drive by our official
                                                    website. You need a USA citizenship to access the data there, it’s
                                                    walled off from most of O365. Hilariously, most of the good software
                                                    engineers at Microsoft don’t have USA citizenship, so whenever an
                                                    alert comes through for some issue on a server there, it gets passed
                                                    like a hot potato thru the office (nobody takes responsibility for
                                                    it). It also tends to be a pain in the access to elevate and get
                                                    access permissions for GCC/ITAR, so people prefer sitting back and
                                                    eating popcorn while stuff burns. To be fair to Microsoft, it's like
                                                    this for every tech corporation with govt contracts.
                                                </p> -->
                                                <p>
                                                    <?php $desc = $event_detail['e_description'];

                                                    if (!empty($desc)) {
                                                        echo $desc;
                                                    } else {
                                                        echo 'No description available';
                                                    }

                                                    ?>

                                                </p>
                                            </div>
                                            <!-- <ul class="smilez">
                                                <li>
                                                    <a class="incolor" href="#" title="Love" data-toggle="tooltip"
                                                        data-placement="top">
                                                        <i><img src="images/smiles/in-love.png" alt=""></i>
                                                    </a>
                                                    <span>225</span>
                                                </li>
                                                <li>
                                                    <a class="incolor" href="#" title="Bored" data-toggle="tooltip"
                                                        data-placement="top">
                                                        <i><img src="images/smiles/bored-1.png" alt=""></i>
                                                    </a>
                                                    <span>111</span>
                                                </li>
                                                <li>
                                                    <a class="incolor" href="#" title="Sad" data-toggle="tooltip"
                                                        data-placement="top">
                                                        <i><img src="images/smiles/sad.png" alt=""></i>
                                                    </a>
                                                    <span>209</span>
                                                </li>
                                                <li>
                                                    <a class="incolor" href="#" title="Crying" data-toggle="tooltip"
                                                        data-placement="top">
                                                        <i><img src="images/smiles/crying.png" alt=""></i>
                                                    </a>
                                                    <span>10</span>
                                                </li>
                                                <li>
                                                    <a class="incolor" href="#" title="Smart" data-toggle="tooltip"
                                                        data-placement="top">
                                                        <i><img src="images/smiles/smart.png" alt=""></i>
                                                    </a>
                                                    <span>21</span>
                                                </li>
                                            </ul> -->

                                            <div class="coment-area" style="display: block">
                                                <ul class="we-comet">




                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/resources/comet-2.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <?php flash_alert() ?>
                                                            <form class="submit-form" method="POST"
                                                                enctype="multipart/form-data">
                                                                <input type="hidden" class="pid"
                                                                    value="<?= $event_detail['e_id'] ?>">

                                                                <input type="hidden" class="uid"
                                                                    value="<?= $_SESSION['user_id'] ?>">
                                                                <textarea class="comment"
                                                                    placeholder="Post your comment"></textarea>

                                                                <span class="text-danger" id="error_comment"></span>
                                                                <div class="add-smiles">
                                                                    <div class="uploadimage">
                                                                        <i class="fa fa-image"></i>
                                                                        <label class="fileContainer">
                                                                            <input name="file" type="file">
                                                                        </label>
                                                                    </div>

                                                                    <span class="fa fa-send"
                                                                        title="Post Comment"><button class="addComment"
                                                                            type="submit"></button></span>
                                                                    <!-- <div class="smiles-bunch">
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
                                                                </div> -->
                                                                </div>

                                                                <button type="submit"></button>
                                                            </form>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>


                                            <div class="we-video-info">
                                                <ul>



                                                    <!-- <li>
                                                        <span class="views" title="views">
                                                            <i class="fa fa-eye"></i>
                                                            <ins>1.2k</ins>
                                                        </span>
                                                    </li> -->
                                                    <!-- <li>
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>2K</span>
                                                        </div>
                                                    </li> -->
                                                    <li>
                                                        <span class="comment" title="Comments">
                                                            <i class="fa fa-commenting"></i>
                                                            <ins><?= $countComment['comment'] ?></ins>
                                                        </span>
                                                    </li>

                                                    <!-- <li>
                                                        <span>
                                                            <a class="share-pst" href="#" title="Share">
                                                                <i class="fa fa-share-alt"></i>
                                                            </a>
                                                            <ins>20</ins>
                                                        </span>
                                                    </li> -->
                                                </ul>
                                                <div class="users-thumb-list">
                                                    <a data-toggle="tooltip" title="Anderw" href="#">
                                                        <img alt="" src="images/resources/userlist-1.jpg">
                                                    </a>
                                                    <a data-toggle="tooltip" title="frank" href="#">
                                                        <img alt="" src="images/resources/userlist-2.jpg">
                                                    </a>
                                                    <a data-toggle="tooltip" title="Sara" href="#">
                                                        <img alt="" src="images/resources/userlist-3.jpg">
                                                    </a>
                                                    <a data-toggle="tooltip" title="Amy" href="#">
                                                        <img alt="" src="images/resources/userlist-4.jpg">
                                                    </a>
                                                    <a data-toggle="tooltip" title="Ema" href="#">
                                                        <img alt="" src="images/resources/userlist-5.jpg">
                                                    </a>
                                                    <span><strong>You</strong>, <b>Sarah</b> and <a href="#"
                                                            title="">24+ more</a> liked</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="coment-area" style="display: block">
                                            <ul class="we-comet">


                                                <?php if (!empty($getAllComment)) {
                                                    foreach ($data['getAllComment'] as $comment) { ?>

                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/comet-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="we-comment">
                                                        <h5><a href="time-line.html"
                                                                title=""><?= $comment['username'] ?></a></h5><br>
                                                        <p><?= $comment['comments'] ?></p>
                                                        <div class="inline-itms">
                                                            <span><?php
                                                                            $wop = $comment['c_date'];
                                                                            print date(
                                                                                'd M Y h:i a',
                                                                                strtotime($wop)
                                                                            );
                                                                            ?></span>

                                                            <!-- <span>1 year ago</span> -->
                                                            <!-- <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a> -->
                                                            <!-- <a href="#" title=""><i
                                                                    class="fa fa-heart"></i><span>20</span></a> -->
                                                        </div>
                                                    </div>

                                                </li>

                                                <?php }
                                                } else { ?>
                                                <center>
                                                    <img style="height:100px"
                                                        src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/comment.svg">
                                                </center>
                                                <?php }


                                                ?>





                                                <li>
                                                    <?php if (!empty($getAllComment)) { ?>
                                                    <a href="#" title="" class="showmore underline">More comments+</a>
                                                    <?php } else { ?>
                                                    <a href="#" title="" class="showmore underline">No comments</a>

                                                    <?php } ?>
                                                </li>

                                            </ul>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div><!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static right">
                                <div class="widget">
                                    <div class="weather-widget low-opacity bluesh">
                                        <div class="bg-image"
                                            style="background-image: url(images/resources/weather.jpg)"></div>
                                        <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                                        <div class="weather-week">
                                            <div class="icon sun-shower">
                                                <div class="cloud"></div>
                                                <div class="sun">
                                                    <div class="rays"></div>
                                                </div>
                                                <div class="rain"></div>
                                            </div>
                                        </div>
                                        <div class="weather-infos">
                                            <span class="weather-tem">25</span>
                                            <h3>Cloudy Skyes<i>Sicklervilte, New Jersey</i></h3>
                                            <div class="weather-date skyblue-bg">
                                                <span>MAY<strong>21</strong></span>
                                            </div>
                                        </div>
                                        <div class="monthly-weather">
                                            <ul>
                                                <li>
                                                    <span>Sun</span>
                                                    <a href="#" title=""><i class="wi wi-day-sunny"></i></a>
                                                    <em>40°</em>
                                                </li>
                                                <li>
                                                    <span>Mon</span>
                                                    <a href="#" title=""><i class="wi wi-day-cloudy"></i></a>
                                                    <em>10°</em>
                                                </li>
                                                <li>
                                                    <span>Tue</span>
                                                    <a href="#" title=""><i class="wi wi-day-hail"></i></a>
                                                    <em>20°</em>
                                                </li>
                                                <li>
                                                    <span>Wed</span>
                                                    <a href="#" title=""><i class="wi wi-day-lightning"></i></a>
                                                    <em>34°</em>
                                                </li>
                                                <li>
                                                    <span>Thu</span>
                                                    <a href="#" title=""><i class="wi wi-day-showers"></i></a>
                                                    <em>22°</em>
                                                </li>
                                                <li>
                                                    <span>Fri</span>
                                                    <a href="#" title=""><i class="wi wi-day-windy"></i></a>
                                                    <em>26°</em>
                                                </li>
                                                <li>
                                                    <span>Sat</span>
                                                    <a href="#" title=""><i class="wi wi-day-sunny-overcast"></i></a>
                                                    <em>30°</em>
                                                </li>
                                            </ul>
                                        </div>

                                    </div><!-- Weather Widget -->
                                </div><!-- weather widget-->
                                <div class="widget">
                                    <h4 class="widget-title">Twitter feed</h4>
                                    <ul class="twiter-feed">
                                        <li>
                                            <i class="fa fa-twitter"></i>
                                            <span>
                                                <i>jhon william</i>
                                                @jhonwilliam
                                            </span>
                                            <p>tomorrow with the company we were working and 5 child run away from the
                                                working place. <a href="#" title="">#daydream5k</a> </p>
                                            <em>2 hours ago</em>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter"></i>
                                            <span>
                                                <i>Kelly watson</i>
                                                @kelly
                                            </span>
                                            <p>tomorrow with the company we were working and 5 child run away from the
                                                working place. <a href="#" title="">#daydream5k</a> </p>
                                            <em>2 hours ago</em>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter"></i>
                                            <span>
                                                <i>Jony bravo</i>
                                                @jonibravo
                                            </span>
                                            <p>tomorrow with the company we were working and 5 child run away from the
                                                working place. <a href="#" title="">#daydream5k</a> </p>
                                            <em>2 hours ago</em>
                                        </li>
                                    </ul>
                                </div><!-- twitter feed-->
                                <div class="widget">
                                    <div class="banner medium-opacity purple">
                                        <div class="bg-image"
                                            style="background-image: url(images/resources/baner-widgetbg.jpg)"></div>
                                        <div class="baner-top">
                                            <span><img alt="" src="images/book-icon.png"></span>
                                            <i class="fa fa-ellipsis-h"></i>
                                        </div>
                                        <div class="banermeta">
                                            <p>
                                                create your own favourit page.
                                            </p>
                                            <span>like them all</span>
                                            <a data-ripple="" title="" href="#">start now!</a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div><!-- sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bottombar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">© Pitnik 2020. All rights reserved.</span>
                <i><img src="images/credit-cards.png" alt=""></i>
            </div>
        </div>
    </div>
</div>
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