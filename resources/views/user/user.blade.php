@extends('template')

@section('title')
    Admin | User
@stop

@section('UserSelected')
    <span class="selected"></span>
@stop


@section('extendCss')
    <link rel="stylesheet" type="text/css" href="media/css/select2_metro.css" />
    <link rel="stylesheet" href="media/css/DT_bootstrap.css" />
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
                                    <option value="default" selected>default</option>
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
                        所有用户 <small>此页显示所有用户</small>
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
                        <li>
                            <a href="#">所有用户</a>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-edit"></i>用户</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                            </div>
                        </div>
                        <div class="portlet-body">

                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                <thead>
                                </tr>
                                <th>姓名</th>
                                <th>手机号码</th>
                                <th>订单数</th>
                                <th>评价数</th>
                                <th>创建时间</th>
                                <th>编辑</th>
                                <th>删除</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="">
                                    <td>果冻</td>
                                    <td>17323230192</td>
                                    <td>88</td>
                                    <td>10</td>
                                    <td>20140711 12:23:43</td>
                                    <td><a class="edit" href="javascript:;">编辑</a></td>
                                    <td><a class="delete" href="javascript:;">删除</a></td>
                                </tr>

                                <tr class="">
                                    <td>赵冲</td>
                                    <td>17423230192</td>
                                    <td>99</td>
                                    <td>2</td>
                                    <td>20140711 12:23:43</td>
                                    <td><a class="edit" href="javascript:;">编辑</a></td>
                                    <td><a class="delete" href="javascript:;">删除</a></td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT -->
        </div>
    </div>
    <!-- END PAGE CONTAINER-->
    @stop

    @section('extendJs')

            <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="media/js/select2.min.js"></script>
    <script type="text/javascript" src="media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="media/js/DT_bootstrap.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL ΩCRIPTS -->
    <script src="media/js/app.js"></script>
    <script src="js/zqj_user.js"></script>
    <script>
        jQuery(document).ready(function() {
            App.init();
            TableEditable.init();
        });
    </script>

    <script>
        var zqj_li = document.getElementById('zqj_userSidebar');
        zqj_li.setAttribute('class', 'active');
    </script>
@stop