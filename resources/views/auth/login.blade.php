<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Login Options - Login Form 1</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ url('adminstration') }}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('adminstration') }}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('adminstration') }}/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">




<link href="{{ url('adminstration') }}/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ url('adminstration') }}/assets/admin/pages/css/login-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="{{ url('adminstration') }}/assets/global/css/components-rtl.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ url('adminstration') }}/assets/global/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('adminstration') }}/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('adminstration') }}/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ url('adminstration') }}/assets/admin/layout/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="javascript:;">
    <img src="{{ asset('adminstration') }}/assets/admin/layout/img/logo.png" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ url('/login') }}" method="post">
        <h3 class="form-title">تسجيل دخول</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
            ادخل البريد الالكتروني او كلمه المرور. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
               <!-- display validation errors -->
              @if (Session::has('bad'))
                  <div class="alert alert-danger">
                      بب
                 </div>
              @endif
              <!-- end display errors -->

               <!-- display validation errors -->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  
            <!-- end display errors -->

            <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
            <input class="form-control form-control-solid placeholder-no-fix {{ $errors->has('email') ? ' has-error' : '' }}" type="text" autocomplete="off" value="{{ old('email') }}" placeholder="البريد الالكتروني" name="email"/>
           

        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">رقم المرور</label>
            <input class="form-control form-control-solid placeholder-no-fix {{ $errors->has('password') ? ' has-error' : '' }}" type="password" value="{{ old('password') }}" autocomplete="off" placeholder="رقم المرور" name="password"/>

        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success btn-block uppercase">تسجيل الدخول</button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->


    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->


    <!-- END REGISTRATION FORM -->
</div>
<div class="copyright">
     2017 © <a href="javascript:;">CodeCamping</a>.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ url('adminstration') }}/assets/global/plugins/respond.min.js"></script>
<script src="{{ url('adminstration') }}/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{ url('adminstration') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{ url('adminstration') }}/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="{{ url('adminstration') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ url('adminstration') }}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{ url('adminstration') }}/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="{{ url('adminstration') }}/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ url('adminstration') }}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ url('adminstration') }}/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="{{ url('adminstration') }}/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="{{ url('adminstration') }}/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="{{ url('adminstration') }}/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>












