<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Qingmei | Administer Login Page</title>
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
    <link href="media/css/login.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="media/image/favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <img src="media/image/logo_zhoudao.png" alt="" />
    </div>
    <!-- END LOGO -->

    <!-- BEGIN LOGIN -->
    <div class="content">

        <!-- BEGIN LOGIN FORM -->
        <form class="form-vertical login-form" method="post" action="/auth/login">
            <h3 class="form-title">Administer Login</h3>
            <div class="alert alert-error hide">
                <button class="close" data-dismiss="alert"></button>
                <span>Enter username and password.</span>
            </div>

            <!-- USERNAME INPUT -->
            <div class="control-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>
                    </div>
                </div>
            </div>

            <!-- PASSWORD INPUT -->
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-lock"></i>
                        <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>
                    </div>
                </div>
            </div>

            <!-- LOGIN BUTTON AND REMEMBER ME -->
            <div class="form-actions">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"/> Remember me
                </label>
                <button type="submit" class="btn green pull-right">
                    Login <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
        </form>
        <!-- END LOGIN FORM -->

    </div>
    <!-- END LOGIN -->

    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
        2015 &copy; Qingmei. Admin Backend.
    </div>
    <!-- END COPYRIGHT -->

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

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="media/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="media/js/app.js" type="text/javascript"></script>
    <script src="media/js/login.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>

        jQuery(document).ready(function() {
            App.init();
            Login.init();
        });

    </script>

    <!-- END JAVASCRIPTS -->

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-37564768-1']);
        _gaq.push(['_setDomainName', 'keenthemes.com']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>
<!-- END BODY -->

</html>