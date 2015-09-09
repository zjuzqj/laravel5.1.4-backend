@extends('template')

@section('UserSelected')
    <span class="selected"></span>
@stop

@section('title')
    Admin | User Details
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
                        用户 <small>此页显示用户详情</small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index">后台管理</a>
                            <i class="icon-angle-right"></i>
                        </li>

                        <li>
                            <a href="#">用户</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">用户详情</a></li>
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
                            <div class="caption"><i class="icon-reorder">
                                </i>用户资料
                            <span style = "font-size: 12px">
                                    <a href="user"><<返回</a> | <a href="newuser">编辑</a> | <a href="deleteuser">删除</a>
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
                                    <td style="width:15%"><span style="font-weight:bold;font-size: 25px">基本资料</span></td>
                                    <td>
                                        <div class="slider slider-basic bg-red"></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>姓名</td>

                                    <td>
                                        <div id="slider-snap-inc" class="slider bg-green"></div>
                                        <div class="slider-value">
                                            陈静
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>手机号码</td>
                                    <td>
                                        <div id="slider-range" class="slider bg-blue"></div>
                                        <div class="slider-value">
                                            17899023455
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>性别</td>
                                    <td>
                                        <div id="slider-range-max" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            女
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>照片</td>
                                    <td>
                                        <div id="slider-range-max" class="slider bg-purple"></div>
                                        <div class="slider-value fileupload-new thumbnail" style="width: 200px; height: 150px;">

                                            <img src="media/image/image2.jpg" alt="" />

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>所在城市</td>

                                    <td>
                                        <div id="slider-range-min" class="slider bg-yellow"></div>
                                        <div class="slider-value">
                                            杭州
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>常用地址</td>

                                    <td>
                                        <div id="slider-range-min" class="slider bg-green"></div>
                                        <div class="slider-value">
                                            【默认】杭州西湖区文三路477号华星科技大厦679号<br/>
                                            杭州西湖区文三路477号华星时代广场228号
                                        </div>
                                    </td>
                                </tr>

                                <!-- END BASIC INFORMATION -->

                                <!-- BEGIN WORKING DATA -->
                                <tr>
                                    <td style="width:15%"><span style="font-weight:bold; font-size:25px">工作数据</span></td>
                                    <td>
                                        <div class="slider slider-basic bg-red"></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>订单数</td>

                                    <td>
                                        <div id="slider-snap-inc" class="slider bg-green"></div>
                                        <div class="slider-value">
                                            23
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>评价数</td>
                                    <td>
                                        <div id="slider-range" class="slider bg-blue"></div>
                                        <div class="slider-value">
                                            18
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>优惠券</td>
                                    <td>
                                        <div id="slider-range-max" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            9
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
        var zqj_li = document.getElementById('zqj_userSidebar');
        zqj_li.setAttribute('class', 'active');
    </script>

    <!-- END JAVASCRIPTS -->
@stop