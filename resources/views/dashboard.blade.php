<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Tables - Basic Tables | Materio - Bootstrap Material Design Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/materialdesignicons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />


    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets') }}/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets') }}/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo me-1">
                            <span style="color: var(--bs-primary)">
                                <svg width="30" height="24" viewBox="0 0 250 196" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z"
                                        fill="currentColor" />
                                    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
                                    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z"
                                        fill="currentColor" />
                                    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
                                    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                                        fill="white" fill-opacity="0.15" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                                        fill="white" fill-opacity="0.3" />
                                </svg>
                            </span>
                        </span>
                        <span class="app-brand-text demo menu-text fw-semibold ms-2">Materio</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                            <div class="badge bg-danger rounded-pill ms-auto">5</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/dashboards-crm.html"
                                    target="_blank" class="menu-link">
                                    <div data-i18n="CRM">CRM</div>
                                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <div data-i18n="Analytics">Analytics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html"
                                    target="_blank" class="menu-link">
                                    <div data-i18n="eCommerce">eCommerce</div>
                                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-logistics-dashboard.html"
                                    target="_blank" class="menu-link">
                                    <div data-i18n="Logistics">Logistics</div>
                                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-academy-dashboard.html"
                                    target="_blank" class="menu-link">
                                    <div data-i18n="Academy">Academy</div>
                                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                            <div data-i18n="Layouts">Layouts</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="layouts-without-menu.html" class="menu-link">
                                    <div data-i18n="Without menu">Without menu</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-without-navbar.html" class="menu-link">
                                    <div data-i18n="Without navbar">Without navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-container.html" class="menu-link">
                                    <div data-i18n="Container">Container</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-fluid.html" class="menu-link">
                                    <div data-i18n="Fluid">Fluid</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-blank.html" class="menu-link">
                                    <div data-i18n="Blank">Blank</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                            <div data-i18n="Front Pages">Front Pages</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/landing-page.html"
                                    class="menu-link" target="_blank">
                                    <div data-i18n="Landing">Landing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/pricing-page.html"
                                    class="menu-link" target="_blank">
                                    <div data-i18n="Pricing">Pricing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/payment-page.html"
                                    class="menu-link" target="_blank">
                                    <div data-i18n="Payment">Payment</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/checkout-page.html"
                                    class="menu-link" target="_blank">
                                    <div data-i18n="Checkout">Checkout</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/front-pages/help-center-landing.html"
                                    class="menu-link" target="_blank">
                                    <div data-i18n="Help Center">Help Center</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-header fw-medium mt-4">
                        <span class="menu-header-text">Apps &amp; Pages</span>
                    </li>
                    <!-- Apps -->
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
                            <div data-i18n="Email">Email</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-chat.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-message-outline"></i>
                            <div data-i18n="Chat">Chat</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-calendar.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
                            <div data-i18n="Calendar">Calendar</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-kanban.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
                            <div data-i18n="Kanban">Kanban</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <!-- Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                            <div data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="pages-account-settings-account.html" class="menu-link">
                                    <div data-i18n="Account">Account</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-notifications.html" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-connections.html" class="menu-link">
                                    <div data-i18n="Connections">Connections</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
                            <div data-i18n="Authentications">Authentications</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Login</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Register</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Forgot Password</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                            <div data-i18n="Misc">Misc</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="pages-misc-error.html" class="menu-link">
                                    <div data-i18n="Error">Error</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-misc-under-maintenance.html" class="menu-link">
                                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Components -->
                    <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Components</span></li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                            <div data-i18n="Basic">Cards</div>
                        </a>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
                            <div data-i18n="User interface">User interface</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="ui-accordion.html" class="menu-link">
                                    <div data-i18n="Accordion">Accordion</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-alerts.html" class="menu-link">
                                    <div data-i18n="Alerts">Alerts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-badges.html" class="menu-link">
                                    <div data-i18n="Badges">Badges</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-buttons.html" class="menu-link">
                                    <div data-i18n="Buttons">Buttons</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-carousel.html" class="menu-link">
                                    <div data-i18n="Carousel">Carousel</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-collapse.html" class="menu-link">
                                    <div data-i18n="Collapse">Collapse</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-dropdowns.html" class="menu-link">
                                    <div data-i18n="Dropdowns">Dropdowns</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-footer.html" class="menu-link">
                                    <div data-i18n="Footer">Footer</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-list-groups.html" class="menu-link">
                                    <div data-i18n="List Groups">List groups</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-modals.html" class="menu-link">
                                    <div data-i18n="Modals">Modals</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-navbar.html" class="menu-link">
                                    <div data-i18n="Navbar">Navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-offcanvas.html" class="menu-link">
                                    <div data-i18n="Offcanvas">Offcanvas</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                                    <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-progress.html" class="menu-link">
                                    <div data-i18n="Progress">Progress</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-spinners.html" class="menu-link">
                                    <div data-i18n="Spinners">Spinners</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tabs-pills.html" class="menu-link">
                                    <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-toasts.html" class="menu-link">
                                    <div data-i18n="Toasts">Toasts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tooltips-popovers.html" class="menu-link">
                                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-typography.html" class="menu-link">
                                    <div data-i18n="Typography">Typography</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Extended components -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-star-outline"></i>
                            <div data-i18n="Extended UI">Extended UI</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                                    <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-text-divider.html" class="menu-link">
                                    <div data-i18n="Text Divider">Text Divider</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Icons -->
                    <li class="menu-item">
                        <a href="icons-mdi.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                            <div data-i18n="Icons">Icons</div>
                        </a>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Forms &amp; Tables</span>
                    </li>
                    <!-- Forms -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                            <div data-i18n="Form Elements">Form Elements</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="forms-basic-inputs.html" class="menu-link">
                                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-input-groups.html" class="menu-link">
                                    <div data-i18n="Input groups">Input groups</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                            <div data-i18n="Form Layouts">Form Layouts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="form-layouts-vertical.html" class="menu-link">
                                    <div data-i18n="Vertical Form">Vertical Form</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-layouts-horizontal.html" class="menu-link">
                                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Form Validation -->
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/form-validation.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                            <div data-i18n="Form Validation">Form Validation</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <!-- Tables -->
                    <li class="menu-item active">
                        <a href="tables-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-table"></i>
                            <div data-i18n="Tables">Tables</div>
                        </a>
                    </li>
                    <!-- Data Tables -->
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/tables-datatables-basic.html"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-grid"></i>
                            <div data-i18n="Datatables">Datatables</div>
                            <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <!-- Misc -->
                    <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Misc</span></li>
                    <li class="menu-item">
                        <a href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
                            <div data-i18n="Support">Support</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                            <div data-i18n="Documentation">Documentation</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="mdi mdi-menu mdi-24px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none bg-body"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/materio-bootstrap-html-admin-template-free on GitHub">Star</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('assets') }}/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                                    <li>
                                        <a class="dropdown-item pb-2 mb-1" href="#">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2 pe-1">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('assets') }}/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">John Doe</h6>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="mdi mdi-cog-outline me-1 mdi-20px"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                                                <span class="flex-grow-1 align-middle ms-1">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="mdi mdi-power me-1 mdi-20px"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">


                        <div class="card">
                            <div class="card-datatable table-responsive">
                                <div id="DataTables_Table_0_wrapper"
                                    class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row me-1 my-2">
                                        <div
                                            class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                <label><input type="search" class="form-control"
                                                        placeholder="Search Invoice"
                                                        aria-controls="DataTables_Table_0"></label></div>
                                        </div>
                                        <div
                                            class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-end gap-3 mb-3 mb-md-0">
                                            <div class="invoice_status"><select id="UserRole" class="form-select">
                                                    <option value=""> Invoice Status </option>
                                                    <option value="Downloaded" class="text-capitalize">Downloaded
                                                    </option>
                                                    <option value="Draft" class="text-capitalize">Draft</option>
                                                    <option value="Paid" class="text-capitalize">Paid</option>
                                                    <option value="Partial Payment" class="text-capitalize">Partial
                                                        Payment</option>
                                                    <option value="Past Due" class="text-capitalize">Past Due</option>
                                                    <option value="Sent" class="text-capitalize">Sent</option>
                                                </select></div>
                                            <div
                                                class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start">
                                                <div class="dt-buttons"><button
                                                        class="dt-button btn btn-primary waves-effect waves-light"
                                                        tabindex="0" aria-controls="DataTables_Table_0"
                                                        type="button"><span><i class="mdi mdi-plus me-lg-1"></i><span
                                                                class="d-lg-inline-block d-none">Create
                                                                Invoice</span></span></button> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="invoice-list-table table dataTable no-footer dtr-column collapsed"
                                        id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                                        style="width: 1135px;">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="control sorting" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    style="width: 0px;"
                                                    aria-label=": activate to sort column ascending"></th>
                                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                                    rowspan="1" colspan="1" style="width: 18px;"
                                                    data-col="1" aria-label=""><input type="checkbox"
                                                        class="form-check-input"></th>
                                                <th class="sorting sorting_desc dtr-hidden" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    style="width: 61px; display: none;"
                                                    aria-label="#ID: activate to sort column ascending"
                                                    aria-sort="descending">#ID</th>
                                                <th class="sorting dtr-hidden" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    style="width: 43px; display: none;"
                                                    aria-label=": activate to sort column ascending"><span
                                                        class="mdi mdi-arrow-up ms-1"></span></th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1" style="width: 306px;"
                                                    aria-label="Client: activate to sort column ascending">Client</th>
                                                <th class="sorting dtr-hidden" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    style="width: 64px; display: none;"
                                                    aria-label="Total: activate to sort column ascending">Total</th>
                                                <th class="text-truncate sorting dtr-hidden" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    style="width: 120px; display: none;"
                                                    aria-label="Issued Date: activate to sort column ascending">Issued
                                                    Date</th>
                                                <th class="sorting dtr-hidden" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    style="width: 90px; display: none;"
                                                    aria-label="Balance: activate to sort column ascending">Balance
                                                </th>
                                                <th class="cell-fit sorting_disabled dtr-hidden" rowspan="1"
                                                    colspan="1" style="width: 81px; display: none;"
                                                    aria-label="Actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4877</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> $407<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 11/22/2020</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> $407<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 11/22/2020</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><span
                                                                    class="avatar-initial rounded-circle bg-label-info">CH</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html" class="text-truncate">
                                                                <h6 class="mb-0">Cristy Hewson</h6>
                                                            </a><small
                                                                class="text-truncate">chewson6@japanpost.jp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">2713</span>$2713</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20201122</span>22 Nov 2020</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="text-heading">$407</span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4831</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> $815<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 06/30/2020</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> $815<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 06/30/2020</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><img
                                                                    src="../../assets/img/avatars/10.png"
                                                                    alt="Avatar" class="rounded-circle"></div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html" class="text-truncate">
                                                                <h6 class="mb-0">Kerrie Anstey</h6>
                                                            </a><small
                                                                class="text-truncate">kanstey4@devhub.com</small></div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">4056</span>$4056</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20200630</span>30 Jun 2020</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="text-heading">$815</span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4651</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 10/22/2020</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 10/22/2020</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><img
                                                                    src="../../assets/img/avatars/4.png"
                                                                    alt="Avatar" class="rounded-circle"></div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html" class="text-truncate">
                                                                <h6 class="mb-0">Spence De Domenicis</h6>
                                                            </a><small class="text-truncate">sde13@nasa.gov</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">2783</span>$2783</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20201022</span>22 Oct 2020</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="badge rounded-pill bg-label-success"> Paid </span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4632</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 03/06/2021</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 03/06/2021</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><span
                                                                    class="avatar-initial rounded-circle bg-label-warning">KM</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html" class="text-truncate">
                                                                <h6 class="mb-0">Karee McTrustam</h6>
                                                            </a><small
                                                                class="text-truncate">kmctrustam17@mashable.com</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">5565</span>$5565</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20210306</span>06 Mar 2021</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="badge rounded-pill bg-label-success"> Paid </span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4593</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> $361<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 03/02/2021</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> $361<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 03/02/2021</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><span
                                                                    class="avatar-initial rounded-circle bg-label-primary">JR</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html" class="text-truncate">
                                                                <h6 class="mb-0">Jorgan Remer</h6>
                                                            </a><small
                                                                class="text-truncate">jremer15@tripadvisor.com</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">3325</span>$3325</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20210302</span>02 Mar 2021</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="text-heading">$361</span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4567</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> -$205<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 09/25/2020</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> -$205<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 09/25/2020</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><img
                                                                    src="../../assets/img/avatars/2.png"
                                                                    alt="Avatar" class="rounded-circle"></div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html" class="text-truncate">
                                                                <h6 class="mb-0">Kacey Etchingham</h6>
                                                            </a><small
                                                                class="text-truncate">ketchingham1d@alibaba.com</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">3171</span>$3171</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20200925</span>25 Sep 2020</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="text-heading">-$205</span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4538</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 07/10/2020</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 07/10/2020</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><img
                                                                    src="../../assets/img/avatars/2.png"
                                                                    alt="Avatar" class="rounded-circle"></div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html"
                                                                class="text-truncate">
                                                                <h6 class="mb-0">Bird Pedlar</h6>
                                                            </a><small
                                                                class="text-truncate">bpedlarv@flickr.com</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">2483</span>$2483</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20200710</span>10 Jul 2020</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="badge rounded-pill bg-label-success"> Paid </span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4456</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 07/23/2020</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 07/23/2020</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><img
                                                                    src="../../assets/img/avatars/4.png"
                                                                    alt="Avatar" class="rounded-circle"></div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html"
                                                                class="text-truncate">
                                                                <h6 class="mb-0">Natasha Nichols</h6>
                                                            </a><small
                                                                class="text-truncate">nnichols10@seattletimes.com</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">5578</span>$5578</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20200723</span>23 Jul 2020</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="badge rounded-pill bg-label-success"> Paid </span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4446</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 04/01/2020</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> 0<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 04/01/2020</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><img
                                                                    src="../../assets/img/avatars/5.png"
                                                                    alt="Avatar" class="rounded-circle"></div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html"
                                                                class="text-truncate">
                                                                <h6 class="mb-0">Barbi Gibbe</h6>
                                                            </a><small
                                                                class="text-truncate">bgibbes@blogger.com</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">2477</span>$2477</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20200401</span>01 Apr 2020</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="badge rounded-pill bg-label-success"> Paid </span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="even">
                                                <td class="control" tabindex="0" style=""></td>
                                                <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                        class="dt-checkboxes form-check-input"></td>
                                                <td class="sorting_1 dtr-hidden" style="display: none;"><a
                                                        href="app-invoice-preview.html"><span>#4439</span></a></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-inline-flex" data-bs-toggle="tooltip"
                                                        data-bs-html="true"
                                                        aria-label="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> $762<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 06/12/2020</span>"
                                                        data-bs-original-title="<span>Draft<br> <span class=&quot;fw-medium&quot;>Balance:</span> $762<br> <span class=&quot;fw-medium&quot;>Due Date:</span> 06/12/2020</span>">
                                                        <span class="avatar avatar-sm"> <span
                                                                class="avatar-initial rounded-circle bg-label-primary"><i
                                                                    class="mdi mdi-folder-outline"></i></span></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-2"><span
                                                                    class="avatar-initial rounded-circle bg-label-info">JB</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-1"><a
                                                                href="pages-profile-user.html"
                                                                class="text-truncate">
                                                                <h6 class="mb-0">Jacqui Benning</h6>
                                                            </a><small
                                                                class="text-truncate">jbenning1c@dailymotion.com</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">4263</span>$4263</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="d-none">20200612</span>12 Jun 2020</td>
                                                <td class="dtr-hidden" style="display: none;"><span
                                                        class="text-heading">$762</span></td>
                                                <td class="dtr-hidden" style="display: none;">
                                                    <div class="d-flex align-items-center"><a href="javascript:;"
                                                            data-bs-toggle="tooltip" class="text-body delete-record"
                                                            data-bs-placement="top" aria-label="Delete Invoice"
                                                            data-bs-original-title="Delete Invoice"><i
                                                                class="mdi mdi-delete-outline mdi-20px mx-1"></i></a><a
                                                            href="app-invoice-preview.html" data-bs-toggle="tooltip"
                                                            class="text-body" data-bs-placement="top"
                                                            aria-label="Preview Invoice"
                                                            data-bs-original-title="Preview Invoice"><i
                                                                class="mdi mdi-eye-outline mdi-20px mx-1"></i></a>
                                                        <div class="dropdown"><a href="javascript:;"
                                                                class="btn dropdown-toggle hide-arrow text-body p-0"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="mdi mdi-dots-vertical mdi-20px"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end"><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Download</a><a
                                                                    href="app-invoice-edit.html"
                                                                    class="dropdown-item">Edit</a><a
                                                                    href="javascript:;"
                                                                    class="dropdown-item">Duplicate</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mx-1">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_info" id="DataTables_Table_0_info"
                                                role="status" aria-live="polite">Showing 1 to 10 of 13 entries
                                                (filtered from 50 total entries)</div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="DataTables_Table_0_previous"><a
                                                            aria-controls="DataTables_Table_0" aria-disabled="true"
                                                            role="link" data-dt-idx="previous" tabindex="0"
                                                            class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="DataTables_Table_0" role="link"
                                                            aria-current="page" data-dt-idx="0" tabindex="0"
                                                            class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="DataTables_Table_0" role="link"
                                                            data-dt-idx="1" tabindex="0" class="page-link">2</a>
                                                    </li>
                                                    <li class="paginate_button page-item next"
                                                        id="DataTables_Table_0_next"><a href="#"
                                                            aria-controls="DataTables_Table_0" role="link"
                                                            data-dt-idx="next" tabindex="0"
                                                            class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bordered Table -->
                        <div class="card">
                            <h5 class="card-header">Bordered Table</h5>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Project</th>
                                                <th>Client</th>
                                                <th>Users</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i
                                                        class="mdi mdi-wallet-travel mdi-20px text-danger me-3"></i><span
                                                        class="fw-medium">Tours Project</span>
                                                </td>
                                                <td>Albert Cook</td>
                                                <td>
                                                    <ul
                                                        class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Lilian Fuller">
                                                            <img src="{{ asset('assets') }}/img/avatars/5.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Sophia Wilkerson">
                                                            <img src="{{ asset('assets') }}/img/avatars/6.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Christina Parker">
                                                            <img src="{{ asset('assets') }}/img/avatars/7.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td><span
                                                        class="badge rounded-pill bg-label-primary me-1">Active</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="mdi mdi-trash-can-outline me-1"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="mdi mdi-basketball mdi-20px text-info me-3"></i><span
                                                        class="fw-medium">Sports Project</span>
                                                </td>
                                                <td>Barry Hunter</td>
                                                <td>
                                                    <ul
                                                        class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Lilian Fuller">
                                                            <img src="{{ asset('assets') }}/img/avatars/5.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Sophia Wilkerson">
                                                            <img src="{{ asset('assets') }}/img/avatars/6.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Christina Parker">
                                                            <img src="{{ asset('assets') }}/img/avatars/7.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td><span
                                                        class="badge rounded-pill bg-label-success me-1">Completed</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="mdi mdi-trash-can-outline me-1"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="mdi mdi-greenhouse mdi-20px text-success me-3"></i><span
                                                        class="fw-medium">Greenhouse Project</span>
                                                </td>
                                                <td>Trevor Baker</td>
                                                <td>
                                                    <ul
                                                        class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Lilian Fuller">
                                                            <img src="{{ asset('assets') }}/img/avatars/5.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Sophia Wilkerson">
                                                            <img src="{{ asset('assets') }}/img/avatars/6.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Christina Parker">
                                                            <img src="{{ asset('assets') }}/img/avatars/7.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td><span
                                                        class="badge rounded-pill bg-label-info me-1">Scheduled</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="mdi mdi-trash-can-outline me-1"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="mdi mdi-bank mdi-20px text-primary me-3"></i><span
                                                        class="fw-medium">Bank Project</span>
                                                </td>
                                                <td>Jerry Milton</td>
                                                <td>
                                                    <ul
                                                        class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Lilian Fuller">
                                                            <img src="{{ asset('assets') }}/img/avatars/5.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Sophia Wilkerson">
                                                            <img src="{{ asset('assets') }}/img/avatars/6.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                            title="Christina Parker">
                                                            <img src="{{ asset('assets') }}/img/avatars/7.png"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td><span
                                                        class="badge rounded-pill bg-label-warning me-1">Pending</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="mdi mdi-trash-can-outline me-1"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/ Bordered Table -->
                        <!--/ Responsive Table -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                                <div class="text-body mb-2 mb-md-0">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with <span class="text-danger"><i
                                            class="tf-icons mdi mdi-heart"></i></span> by
                                    <a href="https://themeselection.com" target="_blank"
                                        class="footer-link fw-medium">ThemeSelection</a>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <a href="https://themeselection.com/license/" class="footer-link me-3"
                                        target="_blank">License</a>
                                    <a href="https://themeselection.com/" target="_blank"
                                        class="footer-link me-3">More Themes</a>

                                    <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/"
                                        target="_blank" class="footer-link me-3">Documentation</a>

                                    <a href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues"
                                        target="_blank" class="footer-link">Support</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
        <a href="https://themeselection.com/item/materio-bootstrap-html-admin-template/" target="_blank"
            class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets') }}/vendor/libs/jquery/jquery.js"></script>

    <script src="{{ asset('assets') }}/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('assets') }}/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('assets') }}/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('assets') }}/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- Main JS -->
    <script src="{{ asset('assets') }}/js/main.js"></script>


    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
