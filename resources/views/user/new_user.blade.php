@extends('template')

@section('title')
    Admin | New User
@stop

@section('UserSelected')
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

                    <h3 class="page-title">
                        新增用户
                        <small>此页显示新增用户</small>
                    </h3>

                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.html">后台管理</a>
                            <span class="icon-angle-right"></span>
                        </li>

                        <li>
                            <a href="#">用户</a>
                            <span class="icon-angle-right"></span>
                        </li>

                        <li><a href="#">新增用户</a></li>
                    </ul>
                </div>
            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-reorder"></i>新增用户</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                            </div>
                        </div>

                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">姓名</label>
                                    <div class="controls">
                                        <input type="text" class="span6 m-wrap" />
                                        <span class="help-inline">不超过20个汉字</span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">手机号码</label>
                                    <div class="controls">
                                        <input class="span6 m-wrap" id="mask_phone" type="text"  />
                                        <span class="help-inline">11位手机号码</span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">性别</label>
                                    <div class="controls">
                                        <select class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="male">男</option>
                                            <option value="female">女</option>
                                            <option value="neutral">中性</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">一寸照</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
													<span class="btn btn-file"><span class="fileupload-new">上传文件</span>
													<span class="fileupload-exists">重选</span>
													<input type="file" class="default" /></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">取消</a>
                                                        <span>
                                                            jpg、png
                                                        </span>
                                            </div>
                                        </div>
                                        <span class="label label-important">注意!</span>
											<span>
                                                上传图像目前支持最新版的Chrome,Opera,Safari和IE10
											</span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">常用地址</label>
                                    <div class="controls">
                                        <input type="text" class="span6 m-wrap" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
            @stop

            @section('extendJs')

                    <!-- BEGIN PAGE LEVEL PLUGINS -->

            <script type="text/javascript" src="media/js/ckeditor.js"></script>
            <script type="text/javascript" src="media/js/bootstrap-fileupload.js"></script>
            <script type="text/javascript" src="media/js/chosen.jquery.min.js"></script>
            <script type="text/javascript" src="media/js/select2.min.js"></script>
            <script type="text/javascript" src="media/js/wysihtml5-0.3.0.js"></script>
            <script type="text/javascript" src="media/js/bootstrap-wysihtml5.js"></script>
            <script type="text/javascript" src="media/js/jquery.tagsinput.min.js"></script>
            <script type="text/javascript" src="media/js/jquery.toggle.buttons.js"></script>
            <script type="text/javascript" src="media/js/bootstrap-datepicker.js"></script>
            <script type="text/javascript" src="media/js/bootstrap-datetimepicker.js"></script>
            <script type="text/javascript" src="media/js/clockface.js"></script>
            <script type="text/javascript" src="media/js/date.js"></script>
            <script type="text/javascript" src="media/js/daterangepicker.js"></script>
            <script type="text/javascript" src="media/js/bootstrap-colorpicker.js"></script>
            <script type="text/javascript" src="media/js/bootstrap-timepicker.js"></script>
            <script type="text/javascript" src="media/js/jquery.inputmask.bundle.min.js"></script>
            <script type="text/javascript" src="media/js/jquery.input-ip-address-control-1.0.min.js"></script>
            <script type="text/javascript" src="media/js/jquery.multi-select.js"></script>
            <script src="media/js/bootstrap-modal.js" type="text/javascript" ></script>
            <script src="media/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
            <script src="js/tinymce/tinymce.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->

            <!-- BEGIN PAGE LEVEL SCRIPTS -->

            <script src="media/js/app.js"></script>
            <script src="media/js/form-components.js"></script>

            <!-- END PAGE LEVEL SCRIPTS -->
            <script>
                jQuery(document).ready(function() {
                    // initiate layout and plugins
                    App.init();
                    FormComponents.init();
                });
            </script>

            <!-- BEGIN TINYMCE EDITOR JAVASCRIPTS -->
            <script type="text/javascript">
                tinymce.init({
                    selector: "#mytextarea"
                });
            </script>
            <!-- END TINYMCE EDITOR JAVASCRIPT -->

            <script>
                var zqj_li = document.getElementById('zqj_userSidebar');
                zqj_li.setAttribute('class', 'active');
            </script>


@stop