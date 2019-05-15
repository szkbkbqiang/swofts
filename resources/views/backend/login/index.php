<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/backend/statics/images/favicon.png" type="image/png">
    <title>Meter - Responsive Admin Dashboard Template</title>
    <link href="/backend/statics/css/icons.css" rel="stylesheet">
    <link href="/backend/statics/css/bootstrap.min.css" rel="stylesheet">
    <link href="/backend/statics/css/style.css" rel="stylesheet">
    <link href="/backend/statics/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/backend/statics/js/html5shiv.min.js"></script>
    <script src="/backend/statics/js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sticky-header">


<!--Start login Section-->
<section class="login-section">
    <div class="container">
        <div class="row">
            <div class="login-wrapper">
                <div class="login-inner">

                    <div class="logo">
                        <img src="/backend/statics/images/logo-dark.png" alt="logo"/>
                    </div>

                    <h2 class="header-title text-center">Login</h2>

                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <div class="pull-left">
                                <div class="checkbox primary">
                                    <input id="checkbox-2" type="checkbox">
                                    <label for="checkbox-2">Remember me</label>
                                </div>
                            </div>

                            <div class="pull-right">
                                <a href="reset-password.php" class="a-link">
                                    <i class="fa fa-unlock-alt"></i> Forgot password?
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary btn-block">
                        </div>
                    </form>
                    <div class="copy-text">
                        <p class="m-0">2017 - <?= $copyRightYear?> &copy;</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--End login Section-->
<!--Begin core plugin -->
<script src="/backend/statics/js/jquery.min.js"></script>
<script src="/backend/statics/js/bootstrap.min.js"></script>
<!-- End core plugin -->
</body>
</html>
