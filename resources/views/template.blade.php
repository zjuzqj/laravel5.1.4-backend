<!DOCTYPE html>

<!--

Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1

Version: 1.3

Author: KeenThemes

Website: http://www.keenthemes.com/preview/?theme=metronic

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    @yield('extendCss')
    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="media/image/favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed">

    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="container-fluid">

                <!-- BEGIN LOGO -->
                <a class="brand" href="index">
                    <img src="media/image/logo_zhoudao.png" alt="logo"/>
                </a>
                <!-- END LOGO -->

                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                    <img src="media/image/menu-toggler.png" alt="" />
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->

                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav pull-right">

                    <!-- BEGIN USER LOGIN DROPDOWN -->

                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--<img alt="" src="media/image/avatar1_small.jpg" />-->
                            <span class="username">Admin</span>
                            <i class="icon-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="detailaccount"><i class="icon-user"></i> 我的资料</a></li>
                            <li class="divider"></li>
                            <li><a href="lockscreen"><i class="icon-lock"></i>锁屏</a></li>
                            <li><a href="/"><i class="icon-key"></i>登出</a></li>
                        </ul>
                    </li>

                    <!-- END USER LOGIN DROPDOWN -->

                </ul>
                <!-- END TOP NAVIGATION MENU -->

            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->

    <!-- BEGIN CONTAINER -->

    <div class="page-container">

        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar nav-collapse collapse">

            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu">
                <li>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone"></div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>

                <li>
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <form class="sidebar-search">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..." />
                            <input type="button" class="submit" value=" " />
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>

                <!-- BEGIN BACKEND -->
                <li id="zqj_manageSidebar">
                    <a href="index">
                        <i class="icon-home"></i>
                        <span class="title">后台管理</span>
                        @yield('DashboardSelected')
                    </a>
                </li>
                <!-- END BACKEND -->

                <!-- BEGIN SERVICE -->
                <li id="zqj_serviceSidebar" class="">
                    <a href="javascript:;">
                        <i class="icon-cogs"></i>
                        <span class="title">服务</span>
                        <span class="arrow "></span>
                        @yield('ServiceSelected')
                    </a>

                    <ul class="sub-menu">
                        <li >
                            <a href="service">
                                所有服务
                            </a>
                        </li>
                        <li >
                            <a href="newservice">
                                新增服务
                            </a>
                        </li>
                    </ul>
                </li>
                <!--SERVICE END -->

                <!--  BEGIN BEAUTICIAN -->
                <li id="zqj_beauticianSidebar" class="">
                    <a href="javascript:;">
                        <i class="icon-eye-close"></i>
                        <span class="title">美容师</span>
                        <span class="arrow "></span>
                        @yield('BeauticianSelected')
                    </a>

                    <ul class="sub-menu">
                        <li >
                            <a href="beautician">
                                所有美容师</a>
                        </li>
                        <li >
                            <a href="newbeautician">
                                新增美容师</a>
                        </li>
                    </ul>
                </li>
                <!-- END BEAUTICIAN -->

                <!-- BEIGN ORDER -->
                <li id="zqj_orderSidebar" class="">
                    <a href="javascript:;">
                        <i class="icon-money"></i>
                        <span class="title">订单</span>
                        <span class="arrow "></span>
                        @yield('OrderSelected')
                    </a>

                    <ul class="sub-menu">
                        <li >
                            <a href="order">
                                所有订单
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END ORDER -->

                <!-- BEGIN USER -->
                <li id="zqj_userSidebar" class="">
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                        <span class="title">用户</span>
                        <span class="arrow "></span>
                        @yield('UserSelected')
                    </a>
                    <ul class="sub-menu">
                        <li >
                            <a href="user">
                                <i class="icon-time"></i>
                                所有用户</a>
                        </li>

                        <li >
                            <a href="newuser">
                                <i class="icon-cogs"></i>
                                新增用户</a>
                        </li>

                    </ul>
                </li>
                <!-- END USER -->

                <!-- BEGIN CITY -->
                <li id="zqj_citySidebar">
                    <a class="active" href="javascript:;">
                        <i class="icon-globe"></i>
                        <span class="title">城市</span>
                        <span class="arrow "></span>
                        @yield('CitySelected')
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                已开通城市
                                <span class="arrow"></span>
                            </a>

                            <ul class="sub-menu">
                                <li><a href="city">杭州</a></li>
                                <li><a href="city">上海</a></li>
                                <li><a href="city">南京</a></li>
                                <li><a href="city">宁波</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="newcity">
                                新增城市
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END CITY -->

                <!-- BEGIN ACCOUNT -->
                <li id="zqj_accountSidebar" class="">
                    <a href="javascript:;">
                        <i class="icon-user-md"></i>
                        <span class="title">账户</span>
                        <span class="arrow "></span>
                        @yield('AccountSelected')
                    </a>

                    <ul class="sub-menu">
                        <li >
                            <a href="account">
                                所有账户
                            </a>
                        </li>

                        <li >
                            <a href="newaccount">
                                新增管理员账号
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END ACCOUNT -->

            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->

        <!-- BEGIN PAGE -->

        @yield('pageContent')

        <!-- END PAGE -->

    </div>

    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->

    <div class="footer">

        <div class="footer-inner">
            2015 &copy; Qingmei by Michael Zhou.
        </div>

        <div class="footer-tools">
                <span class="go-top">
                <i class="icon-angle-up"></i>
                </span>
        </div>

    </div>

    <!-- END FOOTER -->

    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

    <!-- BEGIN CORE PLUGINS -->
    <script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

    <script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="media/js/bootstrap.min.js" type="text/javascript"></script>

    <!--[if lt IE 9]>
    <script src="media/js/excanvas.min.js"></script>
    <script src="media/js/respond.min.js"></script>

    <![endif]-->

    <script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS | SCRIPTS -->
    @yield('extendJs')
    <!-- END PAGE LEVEL PLUGINS | SCRIPTS -->


    <script type="text/javascript">
        var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);
        _gaq.push(['_setDomainName', 'keenthemes.com']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);
        (function() {    var ga = document.createElement('script');
            ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);  })();
    </script>

</body>

<!-- END BODY -->

</html>