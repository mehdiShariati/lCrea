<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ورود | کنترل پنل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/dist/css/bootstrap-theme.css">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/dist/css/rtl.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/ plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="height: 650px">
    <div class="login-logo">
        <a href="../../index2.html"><b>ورود به سایت</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" style="height: 400px">
        <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>

        <form action="<?= URL_ROOT ?>/users/login" method="post">
            <div class="form-group has-feedback">
                <input type="email" name="email" value="<?php if(isset($data['email'])){ echo $data['email']; } ?> " class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" placeholder="ایمیل">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span class="invalid-feedback text-warning"><?php echo (!empty($data['email_err'])) ? $data['email_err'] : '';?></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" placeholder="رمز عبور">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span class="invalid-feedback text-warning"><?php echo (!empty($data['password_err'])) ? $data['password_err'] : '';?></span>
            </div>

                <!-- /.col -->
                <div class="col-xs-12" style="margin-top: 20px">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <!-- /.social-auth-links -->



    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?=URL_ROOT?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=URL_ROOT?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=URL_ROOT?>/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
