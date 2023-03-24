<div class="card mb-3" id="ordersTable"
    data-list='{"valueNames":["order","date","address","status","amount"],"page":10,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">User lists</h5>
            </div>
            <div class="col-8 col-sm-auto ms-auto text-end ps-0">
                <div class="d-none" id="orders-bulk-actions">
                    <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button></div>
                </div>
                <div id="orders-actions"><button class="btn btn-falcon-default btn-sm" type="button"><span
                            class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ms-1">New</span></button><button
                        class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter"
                            data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ms-1">Filter</span></button><button
                        class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt"
                            data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ms-1">Export</span></button></div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-900">
                    <tr>
                        <th>
                            <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input"
                                    id="checkbox-bulk-customers-select" type="checkbox"
                                    data-bulk-select='{"body":"table-orders-body","actions":"orders-bulk-actions","replacedElement":"orders-actions"}' />
                            </div>
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="order">User
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="date">Date
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address"
                            style="min-width: 12.5rem;">Ship To</th>
                        <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="status">Status</th>
                        <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="amount">Amount</th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-orders-body">
                    <tr class="btn-reveal-trigger">
                        <td class="align-middle" style="width: 28px;">
                            <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input"
                                    type="checkbox" id="checkbox-0" data-bulk-select-row="data-bulk-select-row" /></div>
                        </td>
                        <td class="order py-2 align-middle white-space-nowrap"><a href="order-details.html">
                                <strong>#181</strong></a> by <strong>Ricky
                                Antony</strong><br /><a href="mailto:ricky@example.com">ricky@example.com</a></td>
                        <td class="date py-2 align-middle">20/04/2019</td>
                        <td class="address py-2 align-middle white-space-nowrap">Ricky Antony, 2392 Main
                            Avenue, Penasauka, New Jersey 02149<p class="mb-0 text-500">Via Flat Rate
                            </p>
                        </td>
                        <td class="status py-2 align-middle text-center fs-0 white-space-nowrap"><span
                                class="badge badge rounded-pill d-block badge-soft-success">Verified<span
                                    class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                        <td class="amount py-2 align-middle text-end fs-0 fw-medium">$99</td>
                        <td class="py-2 align-middle white-space-nowrap text-end">
                            <div class="dropdown font-sans-serif position-static"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="order-dropdown-0">
                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">Verified</a><a
                                            class="dropdown-item" href="#!">Processing</a><a class="dropdown-item"
                                            href="#!">On Hold</a><a class="dropdown-item" href="#!">Pending</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>



                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex align-items-center justify-content-center"><button class="btn btn-sm btn-falcon-default me-1"
                type="button" title="Previous" data-list-pagination="prev"><span
                    class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
        <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600"> <span class="d-none d-sm-inline-block">|
                </span><br class="d-sm-none" /> 2023 &copy; O R M E C O</p>
        </div>
        <div class="col-12 col-sm-auto text-center">
            <!-- <p class="mb-0 text-600">v3.4.0</p> -->
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
                    <div class="mb-3"><label class="form-label" for="modal-auth-email">Email
                            address</label><input class="form-control" type="email" autocomplete="on"
                            id="modal-auth-email" /></div>
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
                                src="../../../assets/img/generic/falcon-mode-default.jpg" alt="" /></span><span
                            class="label-text">Light</span></label></div>
                <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                        value="dark" data-theme-control="theme" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                            class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                src="../../../assets/img/generic/falcon-mode-dark.jpg" alt="" /></span><span
                            class="label-text"> Dark</span></label></div>
            </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2"
                    src="../../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0">RTL Mode</h5>
                    <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1"
                        href="../../../documentation/customization/configuration.html">RTL Documentation</a>
                </div>
            </div>
            <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox"
                    data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2" src="../../../assets/img/icons/arrows-h.svg"
                    width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0">Fluid Layout</h5>
                    <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1"
                        href="../../../documentation/customization/configuration.html">Fluid Documentation</a>
                </div>
            </div>
            <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox"
                    data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="../../../assets/img/icons/paragraph.svg" width="20"
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
        <p> <a class="fs--1" href="../../../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See
                Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio"
                        name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img
                            class="img-fluid img-prototype" src="../../../assets/img/generic/default.png" alt="" /><span
                            class="label-text"> Transparent</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle"
                        value="inverted" data-theme-control="navbarStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img
                            class="img-fluid img-prototype" src="../../../assets/img/generic/inverted.png"
                            alt="" /><span class="label-text"> Inverted</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle"
                        value="card" data-theme-control="navbarStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img
                            class="img-fluid img-prototype" src="../../../assets/img/generic/card.png" alt="" /><span
                            class="label-text"> Card</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle"
                        value="vibrant" data-theme-control="navbarStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img
                            class="img-fluid img-prototype" src="../../../assets/img/generic/vibrant.png" alt="" /><span
                            class="label-text"> Vibrant</span></label></div>
            </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="../../../assets/img/icons/spot-illustrations/47.png" alt=""
                width="120" />
            <h5>Like What You See?</h5>
            <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a
                class="mb-3 btn btn-primary"
                href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                target="_blank">Purchase</a>
        </div>
    </div>
</div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover"><span class="ripple"><span
                        class="fa-spin position-absolute all-0 d-flex flex-center"><span
                            class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                    fill="#2A7BE4"></path>
                            </svg></span></span></span></div>
        </div><small
            class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
</a>