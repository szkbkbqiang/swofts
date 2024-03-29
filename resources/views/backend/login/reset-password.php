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

<body>


<!--Start login Section-->
<section class="login-section">
    <div class="container">
        <div class="row">
            <div class="login-wrapper">
                <div class="login-inner">

                    <div class="logo">
                        <img src="/backend/statics/images/logo-dark.png" alt="logo"/>
                    </div>

                    <h2 class="header-title text-center">Reset Password </h2>

                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        Enter your <b>Email</b> and instructions will be sent to you!
                    </div>

                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>


                        <div class="form-group">
                            <input type="submit" value="Reset" class="btn btn-primary btn-block">
                        </div>

                    </form>

                    <div class="copy-text">
                        <p class="m-0">2017 - <?= $copyRightYear ?> &copy;</p>
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
<script src="/backend/statics/plugins/moment/moment.js"></script>
<script src="/backend/statics/js/jquery.slimscroll.js "></script>
<script src="/backend/statics/js/jquery.nicescroll.js"></script>
<script src="/backend/statics/js/functions.js"></script>
<!-- End core plugin -->


</body>

</html>
