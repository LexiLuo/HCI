<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="fitness manager 运动网站" />
    <meta name="author" content="" />

    <title>Fitness Manager - Home</title>


    <script src="{{URL::asset('assets/js/highcharts.js')}}"></script>
    {{--<link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">--}}
    <link rel="stylesheet" href="{{URL::asset('assets/css/fonts/linecons/css/linecons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/xenon-core.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/xenon-forms.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/xenon-components.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">

    {{--<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">--}}

    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/activity.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/moment.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/wealth.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/friend.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/mail.css')}}">

    <script src="{{URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/echarts.common.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
    <!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
    <!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
    <div class="sidebar-menu toggle-others fixed" >

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <h2 style="color: white">Fitness Manager</h2>
                    {{--<a href="dashboard-1.html" class="logo-expanded">--}}
                    {{--<img src="{{URL::asset('assets/images/logo@2x.png')}}" width="80" alt="" />--}}
                    {{--</a>--}}

                    {{--<a href="dashboard-1.html" class="logo-collapsed">--}}
                    {{--<img src="{{URL::asset('assets/images/logo-collapsed@2x.png')}}" width="40" alt="" />--}}
                    {{--</a>--}}
                </div>
                <ul class="Sprites">
                    <li><span class="a1"></span><a href="#">WORD文章标题</a></li>
                    <li><span class="a2"></span><a href="#">PPT内容标题</a></li>
                    <li><span class="a3"></span><a href="#">Excel内容标题</a></li>
                    <li><span class="a4"></span><a href="#">PDF内容标题</a></li>
                    <li><span class="a5"></span><a href="#">文本文档标题</a></li>
                </ul>

            </header>



            <ul id="main-menu" class="main-menu" style="">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li class="active opened active" style="font-size: 21px;">
                    <a href="/sport">
                        <i class="linecons-cog"></i>
                        <span class="title">Exercises</span>
                    </a>
                </li>
                <li style="font-size: 21px;margin-top: 15px;">
                    <a href="layout-variants.html">
                        <i class="linecons-desktop"></i>
                        <span class="title">Activities</span>
                    </a>
                    <ul>
                        <li style="font-size: 21px;margin-top: 15px;">
                            <a href="/allActivities">
                                <span class="title">All Activities</span>
                            </a>
                        </li>
                        <li style="font-size: 21px;margin-top: 15px;">
                            <a href="/myActivities">
                                <span class="title">My Activities</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li style="font-size: 21px;margin-top: 15px;">
                    <a href="/moments">
                        <i class="linecons-note"></i>
                        <span class="title">Blogs</span>
                    </a>
                    <ul>
                        <li style="font-size: 24px;margin-top: 15px;">
                            <a href="/moments">
                                <span class="title">All Blogs</span>
                            </a>
                        </li>
                        <li style="font-size: 21px;margin-top: 15px;">
                            <a href="/myMoments">
                                <span class="title">My Blogs</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li style="font-size: 21px;margin-top: 15px;">
                    <a href="/message">
                        <i class="linecons-mail"></i>
                        <span class="title">Information</span>
                        <span class="label label-success pull-right">5</span>
                    </a>
                </li>
                <li style="font-size: 21px;margin-top: 15px;">
                    <a href="/wealth">
                        <i class="linecons-database"></i>
                        <span class="title">Experiences</span>
                    </a>
                </li>
            </ul>

        </div>

    </div>

    <div class="main-content">

        <!-- User Info, Notifications and Menu Bar -->
        <nav class="navbar user-info-navbar" role="navigation">

            <!-- Left links for user info navbar -->
            <ul class="user-info-menu left-links list-inline list-unstyled">

                {{--左侧收缩栏--}}
                <li class="hidden-sm hidden-xs">
                    <a href="#" data-toggle="sidebar">
                        <i class="fa-bars"></i>
                    </a>
                </li>

                <li class="dropdown hover-line">
                    <a href="#" data-toggle="dropdown">
                        <i class="fa-envelope-o"></i>
                        <span class="badge badge-green">150</span>
                    </a>

                    <ul class="dropdown-menu messages">
                        <li>

                            <ul class="dropdown-menu-list list-unstyled ps-scrollbar">

                                <li class="active"><!-- "active" class means message is unread -->
                                    <a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

                                        <span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

                                        <span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="external">
                            <a href="blank-sidebar.html">
                                <span>All Messages</span>
                                <i class="fa-link-ext"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown hover-line">
                    <a href="#" data-toggle="dropdown">
                        <i class="fa-bell-o"></i>
                        <span class="badge badge-purple">7</span>
                    </a>

                    <ul class="dropdown-menu notifications">
                        <li class="top">
                            <p class="small">
                                <a href="#" class="pull-right">Mark all Read</a>
                                You have <strong>3</strong> new notifications.
                            </p>
                        </li>

                        <li>
                            <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                <li class="active notification-success">
                                    <a href="#">
                                        <i class="fa-user"></i>

                                        <span class="line">
												<strong>New user registered</strong>
											</span>

                                        <span class="line small time">
												30 seconds ago
											</span>
                                    </a>
                                </li>


                                <li class="notification-info">
                                    <a href="#">
                                        <i class="fa-database"></i>

                                        <span class="line">
												The server is status is stable
											</span>

                                        <span class="line small time">
												yesterday at 10:30am
											</span>
                                    </a>
                                </li>

                                <li class="notification-warning">
                                    <a href="#">
                                        <i class="fa-envelope-o"></i>

                                        <span class="line">
												New comments waiting approval
											</span>

                                        <span class="line small time">
												last week
											</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="external">
                            <a href="#">
                                <span>View all notifications</span>
                                <i class="fa-link-ext"></i>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>


            <!-- Right links for user info navbar -->
            <ul class="user-info-menu right-links list-inline list-unstyled">

                <li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

                    <form method="post" action="/searchActivity">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

                        <button type="submit" class="btn btn-link">
                            <i class="linecons-search"></i>
                        </button>
                    </form>

                </li>

                <li class="dropdown user-profile">
                    <a href="#" data-toggle="dropdown">
                        <img src="{{URL::asset('assets/images/user-4.png')}}" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
                        <span>
								{{Auth::user()->name}}
                            <i class="fa-angle-down"></i>
							</span>
                    </a>

                    <ul class="dropdown-menu user-profile-menu list-unstyled">
                        <li>
                            <a href="/setting">
                                <i class="fa-wrench"></i>
                                Personal Settings
                            </a>
                        </li>
                        <li>
                            <a href="/friends">
                                <i class="fa-user"></i>
                                My Friends
                            </a>
                        </li>
                        <li>
                            <a href="/logout">
                                <i class="fa-lock"></i>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

        </nav>

        @yield('content')

    </div>


</div>



<!-- Bottom Scripts -->
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/TweenMax.min.js')}}"></script>
<script src="{{URL::asset('assets/js/resizeable.js')}}"></script>
<script src="{{URL::asset('assets/js/joinable.js')}}"></script>
<script src="{{URL::asset('assets/js/xenon-api.js')}}"></script>
<script src="{{URL::asset('assets/js/xenon-toggles.js')}}"></script>


<!-- Imported scripts on this page -->
<script src="{{URL::asset('assets/js/xenon-widgets.js')}}"></script>
<script src="{{URL::asset('assets/js/devexpress-web-14.1/js/globalize.min.js')}}"></script>
<script src="{{URL::asset('assets/js/devexpress-web-14.1/js/dx.chartjs.js')}}"></script>
<script src="{{URL::asset('assets/js/toastr/toastr.min.js')}}"></script>


<!-- JavaScripts initializations and stuff -->
<script src="{{URL::asset('assets/js/xenon-custom.js')}}"></script>


<!-- Imported styles on this page -->
<link rel="stylesheet" href="{{URL::asset('assets/js/daterangepicker/daterangepicker-bs3.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/js/select2/select2.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/js/select2/select2-bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/js/multiselect/css/multi-select.css')}}">


<!-- Imported scripts on this page -->
<script src="{{URL::asset('assets/js/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{URL::asset('assets/js/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::asset('assets/js/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{URL::asset('assets/js/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('assets/js/selectboxit/jquery.selectBoxIt.min.js')}}"></script>
<script src="{{URL::asset('assets/js/tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{URL::asset('assets/js/typeahead.bundle.js')}}"></script>
<script src="{{URL::asset('assets/js/handlebars.min.js')}}"></script>
<script src="{{URL::asset('assets/js/multiselect/js/jquery.multi-select.js')}}"></script>

</body>
</html>