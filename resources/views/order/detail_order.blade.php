@extends('template')

@section('OrderSelected')
    <span class="selected"></span>
@stop

@section('title')
    Admin | Order Details
@stop

@section('extendCss')
    <link href="media/css/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
    <link href="media/css/jquery.ui.slider.css" rel="stylesheet"/>
    @stop

    @section('pageContent')
            <!-- BEGIN PAGE -->

    <div class="page-content">


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
                        订单详情 <small>此页显示订单详情</small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index">后台管理</a>
                            <i class="icon-angle-right"></i>
                        </li>

                        <li>
                            <a href="#">订单</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">订单详情</a></li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-reorder"></i>
                                订单详情
                                <span style = "font-size: 12px">
                                    <a href="backorder"><<返回</a> | <a href="deleteorder">删除</a>
                                </span>
                            </div>

                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                            </div>
                        </div>

                        <div class="portlet-body">
                            <table class="table sliders table-striped">
                                <tbody>

                                <!-- BEGIN BASIC INFORMATION -->

                                <tr>
                                    <td>编号</td>

                                    <td>
                                        <div id="slider-snap-inc" class="slider bg-green"></div>
                                        <div class="slider-value">
                                            <a href = "">10000233
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>服务</td>
                                    <td>
                                        <div id="slider-range" class="slider bg-blue"></div>
                                        <div class="slider-value">
                                            <a href="detailservice">腿部苏活塑形</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>成交价</td>
                                    <td>
                                        <div id="slider-range-max" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            88
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>使用优惠券</td>

                                    <td>
                                        <div id="slider-range-min" class="slider bg-yellow"></div>
                                        <div class="slider-value">
                                            -20
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>服务美容师</td>

                                    <td>
                                        <div id="slider-range-min" class="slider bg-green"></div>
                                        <div class="slider-value">
                                            <a href="detailbeautician">倪佳</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>购买用户</td>

                                    <td>
                                        <div id="slider-range-min" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            <a href="detailuser">赵冲</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>服务地点</td>

                                    <td>
                                        <div id="slider-range-min" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            杭州-西湖区-华星科技大厦679室
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>订单状态</td>

                                    <td>
                                        <div id="slider-range-min" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            <span style="color: #44ff0a">已付款但未确认</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>成交时间</td>

                                    <td>
                                        <div id="slider-range-min" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            20150612 12:23:34
                                        </div>
                                    </td>
                                </tr>

                                <!-- END WORKING DATA -->



                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- END PORTLET-->


                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>

    <!-- BEGIN PAGE -->
    @stop

    @section('extendJs')
            <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script src="media/js/jquery.knob.js"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="media/js/app.js"></script>
    <script src="media/js/ui-sliders.js"></script>

    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();  // set current page
            UISliders.initSliders();
            UISliders.initKnowElements();
        });
    </script>

    <script>
        var zqj_li = document.getElementById('zqj_orderSidebar');
        zqj_li.setAttribute('class', 'active');
    </script>

    <!-- END JAVASCRIPTS -->
@stop