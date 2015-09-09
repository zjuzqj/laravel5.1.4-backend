@extends('template')

@section('BeaticianSelected')
    <span class="selected"></span>
@stop

@section('title')
    Admin | Beautician Details
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
                        美容师 <small>此页显示美容师详情</small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index">后台管理</a>
                            <i class="icon-angle-right"></i>
                        </li>

                        <li>
                            <a href="#">美容师</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">美容师详情</a></li>
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
                            <div class="caption"><i class="icon-reorder"></i>美容师资料</div>

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
                                        <td>从业年份</td>
                                        <td>
                                            <div id="slider-range-max" class="slider bg-purple"></div>
                                            <div class="slider-value">
                                                3
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>出生年月</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-yellow"></div>
                                            <div class="slider-value">
                                                1991-8
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>所在城市</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-green"></div>
                                            <div class="slider-value">
                                                杭州
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>加入时间</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-purple"></div>
                                            <div class="slider-value">
                                                2015/08/12 12:32:01
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>个人简介</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-blue"></div>
                                            <div class="slider-value">
                                                大家好，我是高级美容师陈静，拥有三年以上的美容经验，手法娴熟，渗透力好，十分热爱美容行业，希望您能够预约我，给你最佳的服务体验
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
                                        <td>收入</td>
                                        <td>
                                            <div id="slider-range" class="slider bg-blue"></div>
                                            <div class="slider-value">
                                                2210
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>已到账</td>
                                        <td>
                                            <div id="slider-range-max" class="slider bg-purple"></div>
                                            <div class="slider-value">
                                                1800
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>评价数</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-yellow"></div>
                                            <div class="slider-value">
                                                18
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>评价得分</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-green"></div>
                                            <div class="slider-value">
                                                4.8
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>服务范围</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-purple"></div>
                                            <div class="slider-value">
                                                杭州-西湖区、下城区、上城区、拱墅区
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>服务内容</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-blue"></div>
                                            <div class="slider-value">
                                                腿部苏活塑形、雪颜滋润颈部护理
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>支付宝账号</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-blue"></div>
                                            <div class="slider-value">
                                                9110976553@qq.com
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>开户银行</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-blue"></div>
                                            <div class="slider-value">
                                                中国工商银行杭州华星路支行
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>银行账号</td>

                                        <td>
                                            <div id="slider-range-min" class="slider bg-blue"></div>
                                            <div class="slider-value">
                                                5218 9901 7308 1828
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
        var zqj_li = document.getElementById('zqj_beauticianSidebar');
        zqj_li.setAttribute('class', 'active');
    </script>

    <!-- END JAVASCRIPTS -->
@stop