 <form action="<?= site_url('createEvent') ?>" method="POST">

     <div class="card mb-3">
         <div class="card-body">
             <div class="row flex-between-center">
                 <div class="col-md">
                     <h5 class="mb-2 mb-md-0">Create Event</h5>
                 </div>
                 <div class="col-auto"><button class="btn btn-falcon-default btn-sm me-2" type="submit" role="button">Save</button><button class="btn btn-falcon-primary btn-sm" role="button">Make
                         your event live </button></div>
             </div>
         </div>
     </div>
     <div class="card cover-image mb-3"><img class="card-img-top" src="<?= BASE_URL . PUBLIC_DIR ?>/assets/admin/img/generic/13.jpg" alt="" /><input class="d-none" id="upload-cover-image" type="file" /><label class="cover-image-file-input" for="upload-cover-image"><span class="fas fa-camera me-2"></span><span>Change cover photo</span></label>
     </div>
     <div class="row g-0">
         <div class="col-lg-8 pe-lg-2">
             <div class="card mb-3">
                 <div class="card-header">
                     <h5 class="mb-0">Event Details</h5>
                 </div>
                 <div class="card-body bg-light">

                     <?php flash_alert(); ?>
                     <div class="row gx-2">
                         <input type="hidden" name="admin_id" id="" value="<?= $_SESSION['admin_id'] ?>">
                         <div class="col-12 mb-3"><label class="form-label" for="event-name">Event Title</label><input name="e_title" class="form-control" id="event-name" type="text" placeholder="Event Title" /></div>
                         <div class="col-sm-6 mb-3"><label class="form-label" for="start-date">Start Date</label><input name="e_start_date" class="form-control datetimepicker" id="start-date" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' /></div>
                         <div class="col-sm-6 mb-3"><label class="form-label" for="start-time">Start Time</label><input name="e_start_time" class="form-control datetimepicker" id="start-time" type="text" placeholder="H:i" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                         </div>
                         <div class="col-sm-6 mb-3"><label class="form-label" for="end-date">End Date</label><input name="e_end_date" class="form-control datetimepicker" id="end-date" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' /></div>
                         <div class="col-sm-6 mb-3"><label class="form-label" for="end-time">End Time</label><input name="e_end_time" class="form-control datetimepicker" id="end-time" type="text" placeholder="H:i" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                         </div>


                         <div class="col-12">
                             <div class="border-dashed-bottom my-3"></div>
                         </div>
                         <div class="col-sm-6 mb-3"><label class="form-label" for="event-venue">Venue</label><input name="e_venue" class="form-control" id="event-venue" type="text" placeholder="Venue" /><button class="btn btn-link btn-sm btn p-0" type="button">Online
                                 Event</button></div>
                         <div class="col-sm-6 mb-3"><label class="form-label" for="event-address">Address</label><input name="e_location" class="form-control" id="event-address" type="text" placeholder="Address" /></div>

                         <div class="col-12"><label class="form-label" for="event-description">Description</label><textarea name="e_description" class="form-control" id="event-description" rows="6"></textarea></div>
                     </div>

                 </div>
             </div>
 </form>

 <div class="card mb-3">
     <div class="card-header">
         <h5 class="mb-0">Upload Photos</h5>
     </div>
     <div class="card-body bg-light">
         <form class="dropzone dropzone-multiple p-0" id="my-awesome-dropzone" data-dropzone="data-dropzone" action="#!">
             <div class="fallback"><input name="file" type="file" multiple="multiple" /></div>
             <div class="dz-message" data-dz-message="data-dz-message"> <img class="me-2" src="../../assets/img/icons/cloud-upload.svg" width="25" alt="" />Drop your files here</div>
             <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                 <div class="d-flex media align-items-center mb-3 pb-3 border-bottom btn-reveal-trigger"><img class="dz-image" src="../../assets/img/generic/image-file-2.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                     <div class="flex-1 d-flex flex-between-center">
                         <div>
                             <h6 data-dz-name="data-dz-name"></h6>
                             <div class="d-flex align-items-center">
                                 <p class="mb-0 fs--1 text-400 lh-1" data-dz-size="data-dz-size"></p>
                                 <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span>
                                 </div>
                             </div>
                         </div>
                         <div class="dropdown font-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                             <div class="dropdown-menu dropdown-menu-end border py-2"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 </div>

 </div>
 <div class="col-lg-4 ps-lg-2">
     <div class="sticky-sidebar">
         <div class="card mb-lg-0">
             <div class="card-header">
                 <h5 class="mb-0">Other Info</h5>
             </div>
             <div class="card-body bg-light">
                 <div class="mb-3">
                     <div class="d-flex flex-between-center"><label class="form-label" for="organizer">Organizer</label><button class="btn btn-link btn-sm pe-0" type="button">Add
                             New</button></div><select class="form-select js-choice" id="organizer" multiple="multiple" size="1" name="organizer" data-options='{"removeItemButton":true,"placeholder":true}'>
                         <option value="">Select organizer...</option>
                         <option>Massachusetts Institute of Technology</option>
                         <option>University of Chicago</option>
                         <option>GSAS Open Labs At Harvard</option>
                         <option>California Institute of Technology</option>
                     </select>
                 </div>
                 <div class="mb-3">
                     <div class="d-flex flex-between-center"><label class="form-label" for="sponsors">Sponsors</label><button class="btn btn-link btn-sm pe-0" type="button">Add
                             New</button></div><select class="form-select js-choice" id="sponsors" multiple="multiple" size="1" name="sponsors" data-options='{"removeItemButton":true,"placeholder":true}'>
                         <option value="">Select sponsors...</option>
                         <option>Microsoft Corporation</option>
                         <option>Technext Limited</option>
                         <option>Hewlett-Packard</option>
                     </select>
                 </div>
                 <div class="mb-3"><label class="form-label" for="event-type">Event Type</label><select class="form-select" id="event-type" name="event-type">
                         <option>Select event type...</option>
                         <option>Class, Training, or Workshop</option>
                         <option>Concert or Performance</option>
                         <option>Conference</option>
                         <option>Convention</option>
                         <option>Dinner or Gala</option>
                         <option>Festival or Fair</option>
                     </select></div>
                 <div class="mb-3"><label class="form-label" for="event-topic">Event Topic</label><select class="form-select" id="event-topic" name="even-topic">
                         <option value="" selected="selected">Select a topic</option>
                         <option>Auto, Boat &amp; Air</option>
                         <option>Business &amp; Professional</option>
                         <option>Charity &amp; Causes</option>
                         <option>Community &amp; Culture</option>
                         <option>Family &amp; Education</option>
                         <option>Fashion &amp; Beauty</option>
                         <option>Film, Media &amp; Entertainment</option>
                         <option>Food &amp; Drink</option>
                         <option>Government &amp; Politics</option>
                     </select></div>
                 <div class="mb-3">
                     <div class="d-flex justify-content-between align-items-center"><label class="mb-0" for="event-tags">Tags</label><button class="btn btn-link btn-sm pe-0" type="button">Add
                             New</button></div><select class="form-select js-choice" id="event-tags" multiple="multiple" size="1" name="tags" data-options='{"removeItemButton":true,"placeholder":true}'>
                         <option value="">Select tags...</option>
                         <option>Concert</option>
                         <option>New Year</option>
                         <option>Party</option>
                     </select>
                 </div>
                 <div class="border-dashed-bottom my-3"></div>
                 <h6>Listing Privacy</h6>
                 <div class="mb-3 form-check"><input class="form-check-input" id="customRadio4" type="radio" name="listingPrivacy" checked="checked" /><label class="form-label mb-0" for="customRadio4">
                         <strong>Public page:</strong></label>
                     <div class="form-text mt-0">Discoverable by anyone on Falcon, our distribution partners, and
                         search engines.</div>
                 </div>
                 <div class="mb-3 form-check"><input class="form-check-input" id="customRadio5" type="radio" name="listingPrivacy" /><label class="form-label mb-0" for="customRadio5"> <strong>Private
                             page:</strong></label>
                     <div class="form-text mt-0">Accessible only by people you specify. </div>
                 </div>
                 <div class="border-dashed-bottom my-3"></div>
                 <h6>Remaining Tickets</h6>
                 <div class="form-check custom-checkbox mb-0"><input class="form-check-input" id="customRadio6" type="checkbox" /><label class="form-label mb-0" for="customRadio6">Show the number of
                         remaining tickets. </label></div>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!-- <div class="card mt-3">
     <div class="card-body">
         <div class="row justify-content-between align-items-center">
             <div class="col-md">
                 <h5 class="mb-2 mb-md-0">Nice Job! You're almost done</h5>
             </div>
             <div class="col-auto"><button class="btn btn-falcon-default btn-sm me-2">Save</button><button
                     class="btn btn-falcon-primary btn-sm">Make your event live </button></div>
         </div>
     </div>
 </div> -->


 <footer class="footer">
     <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
         <div class="col-12 col-sm-auto text-center">
             <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">|
                 </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
         </div>
         <div class="col-12 col-sm-auto text-center">
             <p class="mb-0 text-600">v3.4.0</p>
         </div>
     </div>
 </footer>
 </div>
 <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
     <div class="modal-dialog mt-6" role="document">
         <div class="modal-content border-0">
             <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                 <div class="position-relative z-index-1 light">
                     <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                     <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                 </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body py-4 px-5">
                 <form>
                     <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                     <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                     <div class="row gx-2">
                         <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                         <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm
                                 Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                     </div>
                     <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                     <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                 </form>
                 <div class="position-relative mt-5">
                     <hr class="bg-300" />
                     <div class="divider-content-center">or register with</div>
                 </div>
                 <div class="row g-2 mt-2">
                     <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                     <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>
 </main><!-- ===============================================-->
 <!--    End of Main Content-->
 <!-- ===============================================-->

 <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
     <div class="offcanvas-header settings-panel-header bg-shape">
         <div class="z-index-1 py-1 light">
             <h5 class="text-white"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
             <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
         </div><button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body scrollbar-overlay px-card" id="themeController">
         <h5 class="fs-0">Color Scheme</h5>
         <p class="fs--1">Choose the perfect color mode for your app.</p>
         <div class="btn-group d-block w-100 btn-group-navbar-style">
             <div class="row gx-2">
                 <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-default.jpg" alt="" /></span><span class="label-text">Light</span></label></div>
                 <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-dark.jpg" alt="" /></span><span class="label-text"> Dark</span></label></div>
             </div>
         </div>
         <hr />
         <div class="d-flex justify-content-between">
             <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                 <div class="flex-1">
                     <h5 class="fs-0">RTL Mode</h5>
                     <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="../../documentation/customization/configuration.html">RTL Documentation</a>
                 </div>
             </div>
             <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
         </div>
         <hr />
         <div class="d-flex justify-content-between">
             <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/arrows-h.svg" width="20" alt="" />
                 <div class="flex-1">
                     <h5 class="fs-0">Fluid Layout</h5>
                     <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="../../documentation/customization/configuration.html">Fluid Documentation</a>
                 </div>
             </div>
             <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
         </div>
         <hr />
         <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/paragraph.svg" width="20" alt="" />
             <div class="flex-1">
                 <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                 <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                 <div>
                     <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-vertical">Vertical</label></div>
                     <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-top">Top</label></div>
                     <div class="form-check form-check-inline me-0"><input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-combo">Combo</label></div>
                 </div>
             </div>
         </div>
         <hr />
         <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
         <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
         <p> <a class="fs--1" href="../../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See
                 Documentation</a></p>
         <div class="btn-group d-block w-100 btn-group-navbar-style">
             <div class="row gx-2">
                 <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="../../assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
                 <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="../../assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
                 <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="../../assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
                 <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="../../assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
             </div>
         </div>
         <div class="text-center mt-5"><img class="mb-4" src="../../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
             <h5>Like What You See?</h5>
             <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
         </div>
     </div>
 </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
     <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
         <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
             <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                             </svg></span></span></span></div>
         </div><small class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">customize</small>
     </div>
 </a>