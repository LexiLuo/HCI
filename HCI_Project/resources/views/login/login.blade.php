<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>Login | Nadhif - Responsive Admin Template</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- start: CSS file-->

    <!-- Vendor CSS-->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <style>
        footer {
            display: none;
        }
    </style>

    <!-- end: CSS file-->

</head>

<body>
<!-- Start: Content -->
<div class="container-fluid content">
    <div class="row">
        <!-- Main Page -->
        <div class="body-login">
            <div class="center-login">
                <a href="#" class="logo pull-left hidden-xs">
                    {{--<img src="assets/img/logo.png" height="45" alt="NADHIF Admin" />--}}
                </a>

                <div class="panel panel-login" >
                    <div class="panel-title-login text-right" >
                        <h2 class="title text-uppercase" style="width: 100%;text-align: center;"><i class="fa fa-user"></i> Login</h2>
                    </div>
                    <div class="panel-body">
                        <form action="/login" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Username</label>
                                <div class="input-group input-group-icon">
                                    <input name="name" type="text" class="form-control bk-noradius" />
                                    <span class="input-group-addon">
												<span class="icon">
													<i class="fa fa-user"></i>
												</span>
											</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group input-group-icon">
                                    <input name="password" type="password" class="form-control bk-noradius" />
                                    <span class="input-group-addon">
												<span class="icon">
													<i class="fa fa-lock"></i>
												</span>
											</span>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="checkbox-custom checkbox-default bk-margin-bottom-10">
                                        <input id="RememberMe" name="rememberme" type="checkbox"/>
                                        <label for="RememberMe">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right"style="margin-top: 60px;margin-left: -358px;">
                                    <button href="index.html" type="submit" class="btn btn-primary hidden-xs" style="width: 505px;height: 45px;">Login</button>
                                    <button href="index.html" type="submit" class="btn btn-primary btn-block btn-lg visible-xs bk-margin-top-10" >Login</button>
                                </div>
                            </div>
                            <br />
                            <div class="text-with-hr">
                                <span></span>
                            </div>
                            <br />
                            <p class="text-center">Don't have an account yet? <a href="/register"><small>Register!</small></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Page -->


    </div>
</div><!--/container-->

<!-- end: JavaScript-->

</body>

</html>