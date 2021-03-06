<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    Admin | Dashboard
  </title>
  <meta name="description" content="Latest updates and statistic charts">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--begin::Web font -->
  <script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
  <script>
        WebFont.load({
          google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
          active: function() {
              sessionStorage.fonts = true;
          }
        });
  </script>
  <!--end::Web font -->
      <!--begin::Base Styles -->
      <!--begin::Page Vendors -->
  <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Page Vendors -->
  <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/demo/demo4/base/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Base Styles -->
  <link rel="shortcut icon" href="assets/demo/demo4/media/img/logo/favicon.ico" />
</head>

<body style="background-image: url(assets/app/media/img/bg/bg-1.jpg)"  class="m-page--boxed m-body--fixed m-header--static m-aside--offcanvas-default"  >
  <!-- begin:: Page -->
  <div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- begin::Header -->
    <header class="m-grid__item	m-grid m-grid--desktop m-grid--hor-desktop  m-header " >
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--hor-desktop m-container m-container--responsive m-container--xxl">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-header__wrapper">
          <!-- begin::Brand -->
          <div class="m-grid__item m-brand">
            <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
              <div class="m-stack__item m-stack__item--middle m-brand__logo">
                <a href="#" class="m-brand__logo-wrapper">
                  <img alt="" src="assets/demo/demo4/media/img/logo/logo.png"/>
                </a>
              </div>
              <div class="m-stack__item m-stack__item--middle m-brand__tools">
                
                <!-- begin::Responsive Header Menu Toggler-->
                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                  <span></span>
                </a>
                <!-- end::Responsive Header Menu Toggler-->
    <!-- begin::Topbar Toggler-->
                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                  <i class="flaticon-more"></i>
                </a>
                <!--end::Topbar Toggler-->
              </div>
            </div>
          </div>
          <!-- end::Brand -->                                        					<!-- begin::Topbar -->
          <div class="m-grid__item m-grid__item--fluid m-header-head" id="m_header_nav">
            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
              <div class="m-stack__item m-topbar__nav-wrapper">
                <ul class="m-topbar__nav m-nav m-nav--inline">
                  <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                    <a href="#" class="m-nav__link m-dropdown__toggle">
                      <span class="m-topbar__welcome m--hidden-tablet m--hidden-mobile">
                        Hello,&nbsp;
                      </span>
                      <span class="m-topbar__username m--hidden-tablet m--hidden-mobile m--padding-right-15">
                        <span class="m-link">
                          Nick
                        </span>
                      </span>
                      <span class="m-topbar__userpic">
                        <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                      </span>
                    </a>
                    <div class="m-dropdown__wrapper">
                      <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                      <div class="m-dropdown__inner">
                        <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                          <div class="m-card-user m-card-user--skin-dark">
                            <div class="m-card-user__pic">
                              <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                            </div>
                            <div class="m-card-user__details">
                              <span class="m-card-user__name m--font-weight-500">
                                Mark Andre
                              </span>
                              <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                mark.andre@gmail.com
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="m-dropdown__body">
                          <div class="m-dropdown__content">
                            <ul class="m-nav m-nav--skin-light">
                              <li class="m-nav__section m--hide">
                                <span class="m-nav__section-text">
                                  Section
                                </span>
                              </li>
                              <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-profile-1"></i>
                                  <span class="m-nav__link-title">
                                    <span class="m-nav__link-wrap">
                                      <span class="m-nav__link-text">
                                        My Profile
                                      </span>
                                      <span class="m-nav__link-badge">
                                        <span class="m-badge m-badge--success">
                                          2
                                        </span>
                                      </span>
                                    </span>
                                  </span>
                                </a>
                              </li>
                              <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-share"></i>
                                  <span class="m-nav__link-text">
                                    Change Password
                                  </span>
                                </a>
                              </li>
                              <li class="m-nav__separator m-nav__separator--fit"></li>
                              <li class="m-nav__item">
                                <a href="snippets/pages/user/login-1.html" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                  Logout
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end::Topbar -->
        </div>
      </div>
    </header>
    <!-- end::Header -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid m-grid--hor m-container m-container--responsive m-container--xxl" >
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body" >
        <div class="m-grid__item m-body__nav">
          <div class="m-stack m-stack--ver m-stack--desktop">
            <!-- begin::Horizontal Menu -->
            <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
              <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
                <i class="la la-close"></i>
              </button>
              <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                  <li class="m-menu__item  m-menu__item--active"  aria-haspopup="true">
                    <a  href="tours.php" class="m-menu__link ">
                      <span class="m-menu__item-here"></span>
                      <span class="m-menu__link-text">
                        Dashboard
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item  m-menu__item--active"  aria-haspopup="true">
                    <a  href="category.php" class="m-menu__link ">
                      <span class="m-menu__link-text">
                        Categories
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item  m-menu__item--active"  aria-haspopup="true">
                    <a  href="tours.php" class="m-menu__link ">
                      <span class="m-menu__link-text">
                        Tours
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item  m-menu__item--active"  aria-haspopup="true">
                    <a  href="packages.php" class="m-menu__link ">
                      <span class="m-menu__link-text">
                        packages
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item  m-menu__item--active"  aria-haspopup="true">
                    <a  href="cab_booking.php" class="m-menu__link ">
                      <span class="m-menu__link-text">
                        cab booking
                      </span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- end::Horizontal Menu -->
          </div>
        </div>
      </div>
    </div>

  </body>



  <script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
  <script src="assets/demo/demo4/base/scripts.bundle.js" type="text/javascript"></script>
  <!--end::Base Scripts -->
      <!--begin::Page Vendors -->
  <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
  <!--end::Page Vendors -->
      <!--begin::Page Snippets -->
  <script src="assets/app/js/dashboard.js" type="text/javascript"></script>
</body>
</html>

<!-- 

<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
                    <a  href="tours.php" class="m-menu__link m-menu__toggle">
                      <span class="m-menu__item-here"></span>
                      <span class="m-menu__link-text">
                        Tours
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
                    <a  href="tours.php" class="m-menu__link m-menu__toggle">
                      <span class="m-menu__item-here"></span>
                      <span class="m-menu__link-text">
                        Packages
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
                    <a  href="tours.php" class="m-menu__link m-menu__toggle">
                      <span class="m-menu__item-here"></span>
                      <span class="m-menu__link-text">
                        Cab Booking
                      </span>
                    </a>
                  </li>


 -->