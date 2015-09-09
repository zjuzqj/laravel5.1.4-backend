@extends('template')

@section('title')
    Admin | New Account
@stop

@section('AccountSelected')
    <span class="selected"></span>
@stop


@section('extendCss')
    <link rel="stylesheet" type="text/css" href="media/css/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="media/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="media/css/chosen.css" />
    <link rel="stylesheet" type="text/css" href="media/css/select2_metro.css" />
    <link rel="stylesheet" type="text/css" href="media/css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="media/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="media/css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="media/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="media/css/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="media/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="media/css/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="media/css/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="media/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="media/css/multi-select-metro.css" />
    <link href="media/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>

@stop

@section('pageContent')
    <!-- BEGIN PAGE -->
    <div class="page-content">

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
                                <span>Header</span>
                                <select class="header-option m-wrap small">
                                    <option value="fixed" selected>Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </label>

                            <label>
                                <span>Sidebar</span>
                                <select class="sidebar-option m-wrap small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected>Default</option>
                                </select>
                            </label>

                            <label>
                                <span>Footer</span>
                                <select class="footer-option m-wrap small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected>Default</option>
                                </select>
                            </label>

                        </div>
                    </div>

                    <!-- END BEGIN STYLE CUSTOMIZER -->

                    <h3 class="page-title">
                        新增账户
                        <small>此页显示新增账户</small>
                    </h3>

                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index">后台管理</a>
                            <span class="icon-angle-right"></span>
                        </li>

                        <li>
                            <a href="#">账户</a>
                            <span class="icon-angle-right"></span>
                        </li>

                        <li><a href="#">新增账户</a></li>
                    </ul>
                </div>
            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="row-fluid">
                <div class="span12">
                    <div class="portlet box blue" id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-reorder"></i> 新增账户 - <span class="step-title">Step 1 of 3</span>
                            </div>

                            <div class="tools hidden-phone">
                                <a href="javascript:;" class="collapse"></a>
                            </div>

                        </div>

                        <div class="portlet-body form">
                            <form action="#" class="form-horizontal" id="submit_form">
                                <div class="form-wizard">
                                    <div class="navbar steps">
                                        <div class="navbar-inner">
                                            <ul class="row-fluid">
                                                <li class="span4">
                                                    <a href="#tab1" data-toggle="tab" class="step active">
                                                        <span class="number">1</span>
                                                        <span class="desc"><i class="icon-ok"></i>账户信息</span>
                                                    </a>
                                                </li>

                                                <li class="span4">
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number">2</span>
                                                        <span class="desc"><i class="icon-ok"></i>个人资料</span>
                                                    </a>
                                                </li>


                                                <li class="span4">
                                                    <a href="#tab3" data-toggle="tab" class="step">
                                                        <span class="number">3</span>
                                                        <span class="desc"><i class="icon-ok"></i> 确认</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div id="bar" class="progress progress-success progress-striped">
                                        <div class="bar"></div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="alert alert-error hide">
                                            <button class="close" data-dismiss="alert"></button>
                                            此页信息尚不完整或有错误，请您再次检查
                                        </div>

                                        <div class="alert alert-success hide">
                                            <button class="close" data-dismiss="alert"></button>
                                            您的表信息填写完毕
                                        </div>

                                        <div class="tab-pane active" id="tab1">
                                            <h3 class="block">账户基本信息</h3>
                                            <div class="control-group">
                                                <label class="control-label">用户名<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="username"/>
                                                    <span class="help-inline">用户名至少5位</span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">密码<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="password" class="span6 m-wrap" name="password" id="submit_form_password"/>
                                                    <span class="help-inline">密码至少5位</span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">确认密码<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="password" class="span6 m-wrap" name="rpassword"/>
                                                    <span class="help-inline">重复输入密码</span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">用户权限</label>
                                                <div class="controls">
                                                    <select name="country" id="country_list" class="span6 required">
                                                        <option value="admin">超级管理员</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane" id="tab2">
                                            <h3 class="block">个人资料</h3>
                                            <div class="control-group">
                                                <label class="control-label">全名<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="fullname"/>
                                                    <span class="help-inline">提供你的全名</span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">登录手机<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="phone"/>
                                                    <span class="help-inline">提供你的手机号码</span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">邮箱<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="email"/>
                                                    <span class="help-inline">提供您的邮箱地址</span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">备注</label>
                                                <div class="controls">
                                                    <textarea class="span6 m-wrap" rows="3" name="remarks"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane" id="tab3">

                                            <h3 class="block">确认账户信息</h3>

                                            <h4 class="form-section">账户基本信息</h4>

                                            <div class="control-group">
                                                <label class="control-label">用户名:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="username"></span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">权限:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="country"></span>
                                                </div>
                                            </div>

                                            <h4 class="form-section">个人资料</h4>

                                            <div class="control-group">
                                                <label class="control-label">全名:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="fullname"></span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">登录手机:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="phone"></span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">邮箱:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="email"></span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">备注:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="remarks"></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-actions clearfix">
                                        <a href="javascript:;" class="btn button-previous">
                                            <i class="m-icon-swapleft"></i> 返回
                                        </a>

                                        <a href="javascript:;" class="btn blue button-next">
                                            继续 <i class="m-icon-swapright m-icon-white"></i>
                                        </a>

                                        <a href="javascript:;" class="btn green button-submit">
                                            提交 <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END PAGE CONTENT-->

        </div>

        <!-- END PAGE CONTAINER-->

    </div>

    <!-- END PAGE -->
@stop

@section('extendJs')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="media/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="media/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="media/js/jquery.bootstrap.wizard.min.js"></script>
    <script type="text/javascript" src="media/js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="media/js/select2.min.js"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="media/js/app.js"></script>
    <script src="media/js/form-wizard.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
            FormWizard.init();
        });
    </script>

    <script>
        var zqj_li = document.getElementById('zqj_accountSidebar');
        zqj_li.setAttribute('class', 'active');
    </script>


@stop