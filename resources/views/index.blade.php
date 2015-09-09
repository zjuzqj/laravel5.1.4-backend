@extends('template')

@section('title')
    Admin | Index
@stop

@section('extendCss')
    <link href="media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="media/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
@stop

@section('DashboardSelected')
    <span class="selected"></span>
@stop

@section('pageContent')

    <div class="page-content">

        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Widget Settings</h3>
            </div>

            <div class="modal-body">
                Widget settings form goes here
            </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <div class="color-panel hidden-phone">
                        <div class="color-mode-icons icon-color"></div>
                        <div class="color-mode-icons icon-color-close"></div>
                        <div class="color-mode">
                            <p>主题颜色</p>
                            <ul class="inline">
                                <li class="color-black current color-default" data-style="default"></li>
                                <li class="color-blue" data-style="blue"></li>
                                <li class="color-brown" data-style="brown"></li>
                                <li class="color-purple" data-style="purple"></li>
                                <li class="color-grey" data-style="grey"></li>
                                <li class="color-white color-light" data-style="light"></li>
                            </ul>

                            <label>
                                <span>布局</span>
                                <select class="layout-option m-wrap small">
                                    <option value="fluid" selected>Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </label>

                            <label>
                                <span>头栏</span>
                                <select class="header-option m-wrap small">
                                    <option value="fixed" selected>Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </label>

                            <label>
                                <span>边栏</span>
                                <select class="sidebar-option m-wrap small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected>Default</option>
                                </select>
                            </label>

                            <label>
                                <span>页脚</span>
                                <select class="footer-option m-wrap small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected>Default</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <!-- END BEGIN STYLE CUSTOMIZER -->

                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        总体数据 <small>此页显示总体数据</small>
                    </h3>

                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index">后台管理</a>
                            <i class="icon-angle-right"></i>
                        </li>

                        <li><a href="#">总体数据</a></li>

                        <!--<li class="pull-right no-text-shadow">
                            <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                                <i class="icon-calendar"></i>
                                <span></span>
                                <i class="icon-angle-down"></i>
                            </div>
                        </li>-->
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>

            <!-- END PAGE HEADER-->

            <div id="dashboard">

                <!-- BEGIN DASHBOARD STATS -->
                <div class="row-fluid">
                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat blue">
                            <div class="visual">
                                <i class="icon-comments"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    233
                                </div>

                                <div class="desc">
                                    订单量
                                </div>
                            </div>
                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>

                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat blue">
                            <div class="visual">
                                <i class="icon-shopping-cart"></i>
                            </div>

                            <div class="details">
                                <div class="number">
                                    32466
                                </div>
                                <div class="desc">
                                    交易额
                                </div>
                            </div>

                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>

                    <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
                        <div class="dashboard-stat blue">
                            <div class="visual">
                                <i class="icon-globe"></i>
                            </div>

                            <div class="details">
                                <div class="number">
                                    168
                                </div>
                                <div class="desc">
                                    评价数
                                </div>
                            </div>

                            <a class="more" href="#">
                                View more
                                <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>

                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat blue">
                            <div class="visual">
                                <i class="icon-bar-chart"></i>
                            </div>

                            <div class="details">
                                <div class="number">
                                    4.9
                                </div>
                                <div class="desc">
                                    评价平均分
                                </div>
                            </div>

                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row-fluid">
                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat green">
                            <div class="visual">
                                <i class="icon-bar-chart"></i>
                            </div>

                            <div class="details">
                                <div class="number">
                                    2456
                                </div>
                                <div class="desc">
                                    注册用户数
                                </div>
                            </div>

                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>

                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat green">
                            <div class="visual">
                                <i class="icon-bar-chart"></i>
                            </div>

                            <div class="details">
                                <div class="number">
                                    18
                                </div>
                                <div class="desc">
                                    美容师数
                                </div>
                            </div>

                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>

                    <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
                        <div class="dashboard-stat green">
                            <div class="visual">
                                <i class="icon-bar-chart"></i>
                            </div>

                            <div class="details">
                                <div class="number">
                                    15
                                </div>
                                <div class="desc">
                                    服务数
                                </div>
                            </div>

                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>

                    <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                        <div class="dashboard-stat green">
                            <div class="visual">
                                <i class="icon-bar-chart"></i>
                            </div>

                            <div class="details">
                                <div class="number">
                                    1
                                </div>
                                <div class="desc">
                                    开通城市数
                                </div>
                            </div>

                            <a class="more" href="#">
                                View more <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- END DASHBOARD STATS -->
@stop

@section('extendJs')

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <<script src="media/js/jquery.vmap.js" type="text/javascript"></script>
    <script src="media/js/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="media/js/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="media/js/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="media/js/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="media/js/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="media/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="media/js/jquery.flot.js" type="text/javascript"></script>
    <script src="media/js/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="media/js/jquery.pulsate.min.js" type="text/javascript"></script>
    <script src="media/js/date.js" type="text/javascript"></script>
    <script src="media/js/daterangepicker.js" type="text/javascript"></script>
    <script src="media/js/jquery.gritter.js" type="text/javascript"></script>
    <script src="media/js/fullcalendar.min.js" type="text/javascript"></script>
    <script src="media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="media/js/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="media/js/app.js" type="text/javascript"></script>
    <script src="media/js/index.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        jQuery(document).ready(function() {
            App.init(); // initlayout and core plugins
            Index.init();
            Index.initJQVMAP(); // init index page's custom scripts
            Index.initCalendar(); // init index page's custom scripts
            Index.initCharts(); // init index page's custom scripts
            Index.initChat();
            Index.initMiniCharts();
            Index.initDashboardDaterange();
            Index.initIntro();
        });
    </script>

    <script type="text/javascript">
        var zqj_li = document.getElementById('zqj_manageSidebar');
        zqj_li.setAttribute("class","start active");
    </script>
@stop