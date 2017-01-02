<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fitness Manager - Exercises Manager</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_adminpreferences.html
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">
    <link href="../css/mystyle.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Left column -->
<div class="templatemo-flex-row">
    <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
            <h1>Fitness Manager</h1>
        </header>
        <!--<div class="profile-photo-container">-->
        <!--<img src="../images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">-->
        <!--<div class="profile-photo-overlay"></div>-->
        <!--</div>      -->
        <!-- Search box -->
        <form class="templatemo-search-form">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Username : Lexi" name="srch-term" id="srch-term" contenteditable="false">
            </div>
        </form>
        <!--<form>-->
        <!--<nav>-->
        <!--<ul>-->
        <!--<li><a style="margin-top:-20px;margin-left:10px; font-size:14px;color:lightgrey; ">User Name: Lexi</a></li>-->
        <!--&lt;!&ndash;<li><a>Grades: 3</a></li>&ndash;&gt;-->
        <!--</ul>-->
        <!--</nav>-->
        <!--</form>-->
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav" style="margin-top:5px;">
            <ul>
                <li><a href="home.html" ><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li><a href="#" class="active"><i class="fa fa-bar-chart fa-fw"></i>Exercises Manager</a></li>
                <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Data Visualization</a></li>
                <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Activities Manager</a></li>
                <li><a href="userCenter.html"><i class="fa fa-users fa-fw"></i>User Center</a></li>
                <li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>My Blog</a></li>
                <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
            </ul>
        </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
            <div class="row">
                <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <ul class="text-uppercase">
                        <li><a href="" class="active">My Exercises</a></li>
                        <li><a href="">My Health</a></li>
                        <li><a href="">Today's Exercises</a></li>
                        <li><a href="login.html">Sign in form</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="templatemo-content-container">
            <div class="templatemo-flex-row flex-content-row">
                <div class="templatemo-content-widget white-bg col-2">
                    <i class="fa fa-times"></i>
                    <!--<div class="square"></div>-->
                    <h2 class="templatemo-inline-block">Cumulative exercise time</h2><hr>
                    <a style="margin-left:40px;" class="font-num-green">100 </a>
                    <a>days</a>
                </div>
                <div class="templatemo-content-widget white-bg col-1 text-center">
                    <i class="fa fa-times"></i>
                    <h2 class="text-uppercase">Cumulative exercise distances</h2>
                    <h3 class="text-uppercase margin-bottom-10">Design Project</h3>
                    <a style="margin-left:40px;" class="font-num-green">3241 </a>
                    <a>miles</a>
                    <img src="../images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail">
                </div>
                <div class="templatemo-content-widget white-bg col-1">
                    <i class="fa fa-times"></i>
                    <h2 class="text-uppercase">Cumulative heat consumption</h2>
                    <h3 class="text-uppercase">Sedvel Erat Non</h3><hr>
                    <a style="margin-left:40px;" class="font-num-green">98765 </a>
                    <a>calories</a>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                    </div>
                </div>
            </div>
            <!--<div class="templatemo-flex-row flex-content-row">-->
            <!--<div class="col-1">              -->
            <!--<div class="templatemo-content-widget orange-bg">-->
            <!--<i class="fa fa-times"></i>                -->
            <!--<div class="media">-->
            <!--<div class="media-left">-->
            <!--<a href="#">-->
            <!--<img class="media-object img-circle" src="../images/sunset.jpg" alt="Sunset">-->
            <!--</a>-->
            <!--</div>-->
            <!--<div class="media-body">-->
            <!--<h2 class="media-heading text-uppercase">Consectur Fusce Enim</h2>-->
            <!--<p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  -->
            <!--</div>        -->
            <!--</div>                -->
            <!--</div>            -->
            <!--<div class="templatemo-content-widget white-bg">-->
            <!--<i class="fa fa-times"></i>-->
            <!--<div class="media">-->
            <!--<div class="media-left">-->
            <!--<a href="#">-->
            <!--<img class="media-object img-circle" src="../images/sunset.jpg" alt="Sunset">-->
            <!--</a>-->
            <!--</div>-->
            <!--<div class="media-body">-->
            <!--<h2 class="media-heading text-uppercase">Consectur Fusce Enim</h2>-->
            <!--<p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  -->
            <!--</div>-->
            <!--</div>                -->
            <!--</div>            -->
            <!--</div>-->
            <div class="col-1">
                <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                    <i class="fa fa-times"></i>
                    <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Users Rankings</h2></div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>No.</td>
                                <td>Username</td>
                                <td>Cumulative Hours</td>
                                <td>Cumulative Calories</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>John</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Bill</td>
                                <td>888</td>
                                <td>888</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Mary</td>
                                <td>777</td>
                                <td>777</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Steve</td>
                                <td>666</td>
                                <td>666</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Paul</td>
                                <td>555</td>
                                <td>555</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- Second row ends -->
        <!--<div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden"> &lt;!&ndash; overflow hidden for iPad mini landscape view&ndash;&gt;-->
        <!--<div class="col-1 templatemo-overflow-hidden">-->
        <!--<div class="templatemo-content-widget white-bg templatemo-overflow-hidden">-->
        <!--<i class="fa fa-times"></i>-->
        <!--<div class="templatemo-flex-row flex-content-row">-->
        <!--<div class="col-1 col-lg-6 col-md-12">-->
        <!--<h2 class="text-center">Modular<span class="badge">new</span></h2>-->
        <!--<div id="pie_chart_div" class="templatemo-chart"></div> &lt;!&ndash; Pie chart div &ndash;&gt;-->
        <!--</div>-->
        <!--<div class="col-1 col-lg-6 col-md-12">-->
        <!--<h2 class="text-center">Interactive<span class="badge">new</span></h2>-->
        <!--<div id="bar_chart_div" class="templatemo-chart"></div> &lt;!&ndash; Bar chart div &ndash;&gt;-->
        <!--</div>  -->
        <!--</div>                -->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <footer class="text-right">
            <p>Copyright &copy; LexiLuo
                | Designed by <a href="http://www.templatemo.com" target="_parent">LexiLuo</a></p>
        </footer>
    </div>
</div>
</div>

<!-- JS -->
<script src="../js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script src="../js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
<script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
<script>
    /* Google Chart
     -------------------------------------------------------------------*/
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1.0', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night'};

        // Instantiate and draw our chart, passing in some options.
        var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
        pieChart.draw(data, options);

        var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
        barChart.draw(data, options);
    }

    $(document).ready(function(){
        if($.browser.mozilla) {
            //refresh page on browser resize
            // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
            $(window).bind('resize', function(e)
            {
                if (window.RT) clearTimeout(window.RT);
                window.RT = setTimeout(function()
                {
                    this.location.reload(false); /* false to get page from cache */
                }, 200);
            });
        } else {
            $(window).resize(function(){
                drawChart();
            });
        }
    });

</script>
<script type="text/javascript" src="../js/templatemo-script.js"></script>      <!-- Templatemo Script -->

</body>
</html>