<div class="card mb-3 mb-lg-0">
    <?php flash_alert(); ?>
    <div class="card-header bg-light d-flex justify-content-between">
        <h5 class="mb-0">Events</h5>


        <form><select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected="selected">Select Category</option>
                <option>Health &amp; Wellness</option>
                <option>Business &amp; Professional</option>
                <option>Performing &amp; Visual Arts</option>
                <option>Science &amp; Technology</option>
                <option>Sports &amp; Fitness</option>
                <option>Charity &amp; Causes</option>
                <option>Film &amp; Media</option>
                <option>Fashion &amp; Beauty</option>
                <option>Travel &amp; Outdoor</option>
                <option>Entertainment</option>
                <option>Other</option>
            </select></form>
    </div>
    <div class="card-body fs--1">
        <div class="row">
            <?php if (!empty($getAllEvent)) {
                foreach ($data['getAllEvent'] as $event) { ?>
            <div class="col-md-6 h-100">
                <div class="d-flex btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Mar</span><span class="calendar-day">26</span>
                    </div>
                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-0 mb-0"><a href="<?= site_url(
                                                                    'event-detail/'
                                                                        .  $event['e_id'] . ''
                                                                ) ?>"><?= $event['e_title'] ?>
                                <!-- <span class="badge badge-soft-success rounded-pill">Free</span> -->
                            </a></h6>
                        <p class="mb-1">Organized by <a href="#!" class="text-700">AID MIT</a></p>
                        <p class="text-1000 mb-0">Sart Time: <?= $event['e_start_time'] ?></p>
                        <p class="text-1000 mb-0">End Time: <?= $event['e_end_time'] ?></p>

                        <p class="text-1000 mb-0">Duration: <?= $event['e_start_date'] ?> - <?= $event['e_end_date'] ?>
                        </p>The Liberty Warehouse, New Yourk<div class="border-dashed-bottom my-3"></div>
                    </div>
                </div>
            </div>
            <?php }
            } else { ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Oppsss sorry! </strong> Event not found.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php } ?>

        </div>
    </div>
</div>
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
<div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
    aria-labelledby="authentication-modal-label" aria-hidden="true">
    <div class="modal-dialog mt-6" role="document">
        <div class="modal-content border-0">
            <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                    <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                    <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4 px-5">
                <form>
                    <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input
                            class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                    <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input
                            class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                    <div class="row gx-2">
                        <div class="mb-3 col-sm-6"><label class="form-label"
                                for="modal-auth-password">Password</label><input class="form-control" type="password"
                                autocomplete="on" id="modal-auth-password" /></div>
                        <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm
                                Password</label><input class="form-control" type="password" autocomplete="on"
                                id="modal-auth-confirm-password" /></div>
                    </div>
                    <div class="form-check"><input class="form-check-input" type="checkbox"
                            id="modal-auth-register-checkbox" /><label class="form-label"
                            for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a
                                href="#!">privacy policy</a></label></div>
                    <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                            name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-5">
                    <hr class="bg-300" />
                    <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                    <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span
                                class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                    <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span
                                class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a>
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

<div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
    aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-index-1 py-1 light">
            <h5 class="text-white"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
            <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
        </div><button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body scrollbar-overlay px-card" id="themeController">
        <h5 class="fs-0">Color Scheme</h5>
        <p class="fs--1">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                        value="light" data-theme-control="theme" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                            class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                src="../../assets/img/generic/falcon-mode-default.jpg" alt="" /></span><span
                            class="label-text">Light</span></label></div>
                <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                        value="dark" data-theme-control="theme" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                            class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                src="../../assets/img/generic/falcon-mode-dark.jpg" alt="" /></span><span
                            class="label-text"> Dark</span></label></div>
            </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2"
                    src="../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0">RTL Mode</h5>
                    <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1"
                        href="../../documentation/customization/configuration.html">RTL Documentation</a>
                </div>
            </div>
            <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox"
                    data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/arrows-h.svg" width="20"
                    alt="" />
                <div class="flex-1">
                    <h5 class="fs-0">Fluid Layout</h5>
                    <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1"
                        href="../../documentation/customization/configuration.html">Fluid Documentation</a>
                </div>
            </div>
            <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox"
                    data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/paragraph.svg" width="20"
                alt="" />
            <div class="flex-1">
                <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                <div>
                    <div class="form-check form-check-inline"><input class="form-check-input"
                            id="option-navbar-vertical" type="radio" name="navbar" value="vertical"
                            data-theme-control="navbarPosition" /><label class="form-check-label"
                            for="option-navbar-vertical">Vertical</label></div>
                    <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-top"
                            type="radio" name="navbar" value="top" data-theme-control="navbarPosition" /><label
                            class="form-check-label" for="option-navbar-top">Top</label></div>
                    <div class="form-check form-check-inline me-0"><input class="form-check-input"
                            id="option-navbar-combo" type="radio" name="navbar" value="combo"
                            data-theme-control="navbarPosition" /><label class="form-check-label"
                            for="option-navbar-combo">Combo</label></div>
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
                <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio"
                        name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img
                            class="img-fluid img-prototype" src="../../assets/img/generic/default.png" alt="" /><span
                            class="label-text"> Transparent</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle"
                        value="inverted" data-theme-control="navbarStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img
                            class="img-fluid img-prototype" src="../../assets/img/generic/inverted.png" alt="" /><span
                            class="label-text"> Inverted</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle"
                        value="card" data-theme-control="navbarStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img
                            class="img-fluid img-prototype" src="../../assets/img/generic/card.png" alt="" /><span
                            class="label-text"> Card</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle"
                        value="vibrant" data-theme-control="navbarStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img
                            class="img-fluid img-prototype" src="../../assets/img/generic/vibrant.png" alt="" /><span
                            class="label-text"> Vibrant</span></label></div>
            </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="../../assets/img/icons/spot-illustrations/47.png" alt=""
                width="120" />
            <h5>Like What You See?</h5>
            <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a
                class="mb-3 btn btn-primary"
                href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                target="_blank">Purchase</a>
        </div>
    </div>
</div>