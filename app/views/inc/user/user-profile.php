  <div class="user-profile">
      <figure>
          <div class="edit-pp">
              <label class="fileContainer">
                  <i class="fa fa-camera"></i>
                  <input type="file">
              </label>
          </div>


          <img src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/profile-image.jpg" alt="">


          <ul class="profile-controls">
              <li><a href="#" title="Add friend" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a></li>
              <li><a href="#" title="Follow" data-toggle="tooltip"><i class="fa fa-star"></i></a>
              </li>
              <li><a class="send-mesg" href="#" title="Send Message" data-toggle="tooltip"><i
                          class="fa fa-comment"></i></a></li>
              <li>
                  <div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
                      <ul class="more-dropdown">
                          <li><a href="setting.html" title="">Update Profile Photo</a></li>
                          <li><a href="setting.html" title="">Update Header Photo</a></li>
                          <li><a href="setting.html" title="">Account Settings</a></li>
                          <li><a href="support-and-help.html" title="">Find Support</a></li>
                          <li><a class="bad-report" href="#" title="">Report Profile</a></li>
                          <li><a href="#" title="">Block Profile</a></li>
                      </ul>
                  </div>
              </li>
          </ul>
          <ol class="pit-rate">
              <li class="rated"><i class="fa fa-star"></i></li>
              <li class="rated"><i class="fa fa-star"></i></li>
              <li class="rated"><i class="fa fa-star"></i></li>
              <li class="rated"><i class="fa fa-star"></i></li>
              <li class=""><i class="fa fa-star"></i></li>
              <li><span>4.7/5</span></li>
          </ol>
      </figure>

      <div class="profile-section">
          <div class="row">
              <div class="col-lg-2 col-md-3">
                  <div class="profile-author">
                      <div class="profile-author-thumb">
                          <?php if (!empty($_SESSION['image'])) { ?>

                          <img alt="author" src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/resources/author.jpg">
                          <?php } else { ?>
                          <img style="height:150px;width:50px"
                              src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/images/user.png" alt="" />

                          <?php } ?>
                          <div class="edit-dp">
                              <label class="fileContainer">
                                  <i class="fa fa-camera"></i>
                                  <input name="image" id="image" type="file">
                              </label>
                          </div>
                      </div>

                      <div class="author-content">
                          <a class="h4 author-name" href="about.html"><?php echo ucfirst($_SESSION['username'])  ?></a>
                          <div class="country" id="country"></div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-10 col-md-9">
                  <ul class="profile-menu">
                      <li>
                          <a class="" href="<?= site_url('timeline') ?>">Timeline</a>
                      </li>
                      <li>
                          <a class="active" href="about.html">About</a>
                      </li>
                      <li>
                          <a class="" href="timeline-friends.html">Friends</a>
                      </li>
                      <li>
                          <a class="" href="timeline-photos.html">Photos</a>
                      </li>
                      <li>
                          <a class="" href="timeline-videos.html">Videos</a>
                      </li>
                      <li>
                          <div class="more">
                              <i class="fa fa-ellipsis-h"></i>
                              <ul class="more-dropdown">
                                  <li>
                                      <a href="timeline-groups.html">Profile Groups</a>
                                  </li>
                                  <li>
                                      <a href="statistics.html">Profile Analytics</a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
                  <ol class="folw-detail">
                      <li><span>Posts</span><ins>101</ins></li>
                      <li><span>Followers</span><ins>1.3K</ins></li>
                      <li><span>Following</span><ins>22</ins></li>
                  </ol>
              </div>
          </div>
      </div>
  </div><!-- user profile banner  -->