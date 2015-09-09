@extends('template')

@section('AccountSelected')
    <span class="selected"></span>
@stop

@section('title')
    Admin | Account Details
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
                        账户 <small>此页显示账户详情</small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index">后台管理</a>
                            <i class="icon-angle-right"></i>
                        </li>

                        <li>
                            <a href="#">账户</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">账户详情</a></li>
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
                                </i>账户资料
                            <span style = "font-size: 12px">
                                    <a href="account"><<返回</a> | <a href="newaccount">编辑</a> | <a href="deleteuser">删除</a>
                                </span>
                            </div>

                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                            </div>
                        </div>

                        <div class="portlet-body">
                            <table class="table sliders table-striped">
                                <tbody>

                                <!-- BEGIN ACCOUNT INFORMATION -->
                                <tr>
                                    <td style="width:15%"><span style="font-weight:bold;font-size: 25px">账户信息</span></td>
                                    <td>
                                        <div class="slider slider-basic bg-red"></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>用户名</td>

                                    <td>
                                        <div id="slider-snap-inc" class="slider bg-green"></div>
                                        <div class="slider-value">
                                            zjuzqj
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>账户权限</td>
                                    <td>
                                        <div id="slider-range" class="slider bg-blue"></div>
                                        <div class="slider-value">
                                            超级管理员
                                        </div>
                                    </td>
                                </tr>
                                <!-- END ACCOUNT INFORMATION -->

                                <!-- BEGIN PROFILE INFORMATION -->
                                <tr>
                                    <td style="width:15%"><span style="font-weight:bold; font-size:25px">个人资料</span></td>
                                    <td>
                                        <div class="slider slider-basic bg-red"></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>全名</td>

                                    <td>
                                        <div id="slider-snap-inc" class="slider bg-green"></div>
                                        <div class="slider-value">
                                            周启嘉
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>登陆手机</td>
                                    <td>
                                        <div id="slider-range" class="slider bg-blue"></div>
                                        <div class="slider-value">
                                            18990340007
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>邮箱</td>
                                    <td>
                                        <div id="slider-range-max" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            361046078@qq.com
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>备注</td>
                                    <td>
                                        <div id="slider-range-max" class="slider bg-purple"></div>
                                        <div class="slider-value">
                                            Hello, World!
                                        </div>
                                    </td>
                                </tr>
                                <!-- END PROFILE INFORMATION -->

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