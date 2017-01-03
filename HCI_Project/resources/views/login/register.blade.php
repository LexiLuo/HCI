<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>Register | Nadhif - Responsive Admin Template</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


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



</head>

<body>
<!-- Start: Content -->
<div class="container-fluid content">
    <div class="row">
        <!-- Main Page -->
        <div class="body-register">
            <div class="center-register">
                <a href="#" class="logo pull-left hidden-xs">
                    {{--<img src="assets/img/logo.png" height="45" alt="NADHIF Admin" />--}}
                </a>

                <div class="panel panel-register" style="">
                    <div class="panel-title-register text-right" style="margin-left: -100px;">
                        <h2 class="title text-uppercase" style="width: 575px;text-align: center;"><i class="fa fa-user" style=""></i> Register</h2>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>E-mail Address</label>
                                <input name="email" type="email" class="form-control" />
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Password</label>
                                        <input name="pwd" type="password" class="form-control" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Password Confirmation</label>
                                        <input name="pwd_confirm" type="password" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 text-right">
                                    <button href="index.html" type="submit" class="btn btn-primary hidden-xs bk-margin-top-10" style="width: 510px;height:45px;">Register</button>
                                    <button href="index.html" type="submit" class="btn btn-primary btn-block btn-lg visible-xs bk-margin-top-10" >Register</button>
                                </div>
                            </div>

                            <div class="text-with-hr">
                                <span></span>
                            </div>
                            <br />
                            <p class="text-center">Already have an account? <a href="/login"><small>Login!</small></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Page -->


    </div>
</div><!--/container-->



</body>

</html>