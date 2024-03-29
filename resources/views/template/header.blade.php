<!doctype html>
<html>

<!-- Mirrored from www.lab.westilian.com/matmix-admin/list-view/dashboard-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Nov 2020 07:39:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Components Mix Bootstarp 3 Admin Dashboard Template">
    <meta name="author" content="Westilian">
    <title>MatMix - A Components Mix Admin Dashboard Template</title>
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/waves.html" type="text/css">
    <link rel="stylesheet" href="css/layout.css" type="text/css">
    <link rel="stylesheet" href="css/components.css" type="text/css">
    <link rel="stylesheet" href="css/plugins.css" type="text/css">
    <link rel="stylesheet" href="css/common-styles.css" type="text/css">
    <link rel="stylesheet" href="css/pages.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/matmix-iconfont.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-container list-menu-view">
    <!--Leftbar Start Here -->
    <div class="left-aside desktop-view">
        <div class="aside-branding">
            <a href="index.html" class="iconic-logo"><img src="images/logo-iconic.png" alt="Matmix Logo">
            </a>
            <a href="index.html" class="large-logo"><img src="images/logo-large.png" alt="Matmix Logo">
            </a><span class="aside-pin waves-effect"><i class="fa fa-thumb-tack"></i></span>
            <span class="aside-close waves-effect"><i class="fa fa-times"></i></span>
        </div>
        <div class="left-navigation">
            <ul class="list-accordion">
                <li><a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-home"></i></span><span class="nav-label">Dashboard</span></a>

                </li>
                <li><a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa fa-briefcase"></i></span><span class="nav-label">Master Data</span></a>
                    <ul>
                        <li><a href="basic-forms.html">Kategori</a>
                        </li>
                        <li><a href="advanced-form-elements.html">Barang</a>
                        </li>

                    </ul>
                </li>
                <li><a href="#"><span class="nav-icon"><i class="fa fa fa-cubes"></i></span><span class="nav-label">Stok</span></a>

                </li>
                <li><a href="ui-elements-components.html"><span class="nav-icon"><i class="fa fa fa-shopping-cart"></i></span><span class="nav-label">Penjualan</span></a>
                </li>
                <li><a href="#"><span class="nav-icon"><i class="fa fa fa-file-text-o"></i></span><span class="nav-label">Laporan</span></a>
                    <ul>
                        <li><a href="buttons-icons.html">Laporan Harian</a>
                        </li>
                        <li><a href="blank-widgets.html">Laporan Bulanan</a>
                        </li>
                        <li><a href="bootstrap-elements.html">Laporan Pembayaran</a>
                        </li>
                    </ul>
                </li>
                           </ul>
        </div>
    </div>
    <div class="page-content">
        <!--Topbar Start Here -->
        <header class="top-bar">
            <div class="container-fluid top-nav">
                <div class="search-form search-bar">
                    <form>
                        <input name="searchbox" value="" placeholder="Search Topic..." class="search-input">
                    </form>
                    <span class="search-close waves-effect"><i class="ico-cross"></i></span>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="clearfix top-bar-action">
                            <span class="leftbar-action-mobile waves-effect"><i class="fa fa-bars "></i></span>
                            <span class="leftbar-action desktop waves-effect"><i class="fa fa-bars "></i></span>
                            <span class="waves-effect search-btn mobile-search-btn">
						<i class="fa fa-search"></i>
						</span>
{{--                            <span class="rightbar-action waves-effect"><i class="fa fa-bars"></i></span>--}}
                        </div>
                    </div>
                    <div class="col-md-4 responsive-fix top-mid">
                        <div class="notification-nav">
                            <ul class="clearfix">

                            </ul>
                        </div>
                        <div class="pull-left mobile-search">
						<span class=" waves-effect search-btn">
						<i class="fa fa-search"></i>
						</span>
                        </div>
                    </div>
                    <div class="col-md-6 responsive-fix">
                        <div class="top-aside-right">
                            <div class="user-nav">
                                <ul>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" href="#" class="clearfix dropdown-toggle waves-effect waves-block waves-classic">
                                            <span class="user-info">Westilian Jaman <cite>jaman@mymail.com</cite></span>
                                            <span class="user-thumb"><img src="images/avatar/jaman.jpg" alt="image"></span>
                                        </a>
                                        <ul role="menu" class="dropdown-menu fadeInUp">

                                            <li class="nav-item">
                                                <a href="{{ route('logout') }}" class="nav-link"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{--                                            {{ __('Logout') }}--}}
                                                    <i data-feather="log-out"></i>
                                                    <span>Log Out</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right desktop-search">
{{--							<span class="waves-effect search-btn">--}}
{{--							<i class="fa fa-search"></i>--}}
{{--							</span>--}}
                            </div>
{{--                            <span class="rightbar-action waves-effect"><i class="fa fa-bars"></i></span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="main-container">
            <div class="container-fluid">
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="page-breadcrumb-wrap">
                                <div class="page-breadcrumb-info">
                                    <h2 class="breadcrumb-titles">Dashboard <small>Web Application Backend</small></h2>
                                    <ul class="list-page-breadcrumb">
                                        <li><a href="#">Home</a>
                                        </li>
                                        <li class="active-page"> Dashboard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="mini-stats-widget full-block-mini-chart">
                            <div class="mini-stats-top">
                                <span class="mini-stats-value">6,000</span>
                                <span class="mini-stats-label">Visitors Today</span>
                            </div>
                            <div class="mini-stats-chart">
                                <div class="sparkline" data-type="line" data-resize="true" data-height="80" data-width="100%" data-line-width="2" data-min-spot-color="#e65100" data-max-spot-color="#ffb300" data-line-color="#26a69a" data-spot-color="#00838f" data-fill-color="#26a69a" data-highlight-line-color="#00acc1" data-highlight-spot-color="#ff8a65" data-spot-radius="false" data-data="[450,480,500,590,600,640,560,530,500,540, 570,600,550,520,510,500,510,540,580,590,580,564,600,700]">
                                </div>
                            </div>
                            <div class="mini-stats-bottom w_bg_teal">
                                <span><i class="ico-arrow-up"></i></span> Increase <span>10% </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="mini-stats-widget">
                            <div class="mini-stats-top">
                                <span class="mini-stats-value">4,000</span>
                                <span class="mini-stats-label">Unique Visitors</span>
                            </div>
                            <div class="mini-stats-chart">
                                <div class="sparkline" data-type="bar" data-resize="true" data-height="80" data-width="90%" data-bar-color="#26c6da" data-bar-spacing="3" data-bar-width="4" data-data="[5,10,15,20,25,30,25,20,30,50,40,30,20,10,5]">
                                </div>
                            </div>
                            <div class="mini-stats-bottom">
                                <span><i class="ico-arrow-up"></i></span> Increase <span>20% </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="mini-stats-widget">
                            <div class="mini-stats-top">
                                <span class="mini-stats-value">2,000</span>
                                <span class="mini-stats-label">Repeated Visitors</span>
                            </div>
                            <div class="mini-stats-chart">
                                <div class="sparkline" data-type="bar" data-resize="true" data-height="80" data-width="90%" data-bar-color="#303f9f" data-bar-spacing="3" data-bar-width="4" data-data="[10,15,20,25,30,40,50,60,70,60,40,30,40,50,40]">
                                </div>
                            </div>
                            <div class="mini-stats-bottom">
                                <span><i class="ico-arrow-up"></i></span> Increase <span>30% </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="mini-stats-widget full-block-mini-chart">
                            <div class="mini-stats-top">
                                <span class="mini-stats-value">12,200</span>
                                <span class="mini-stats-label">New Downloads</span>
                            </div>
                            <div class="mini-stats-chart">
                                <div class="sparkline" data-type="line" data-resize="true" data-height="80" data-width="100%" data-line-width="2" data-min-spot-color="#e65100" data-max-spot-color="#ffb300" data-line-color="#b388ff" data-spot-color="#00838f" data-fill-color="#b388ff" data-highlight-line-color="#00acc1" data-highlight-spot-color="#ff8a65" data-spot-radius="false" data-data="[450,480,500,590,600,640,560,530,500,540, 570,600,550,520,510,500,510,540,580,590,580,564,600,700]">
                                </div>
                            </div>
                            <div class="mini-stats-bottom w_bg_deep_purple">
                                <span><i class="ico-arrow-up"></i></span> Increase <span>10% </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="box-widget widget-module">
                            <div class="widget-head clearfix">
                                <span class="h-icon"><i class="fa fa-bar-chart-o"></i></span>
                                <h4>Combine Chart</h4>
                            </div>
                            <div class="widget-container">
                                <div class="widget-block">
                                    <div id="main-chart-legend">
                                    </div>
                                    <div id="main-chart">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-widget widget-module">
                            <div class="widget-head clearfix">
                                <span class="h-icon"><i class="fa fa-pie-chart"></i></span>
                                <h4>Pie Chart</h4>
                            </div>
                            <div class="widget-container">
                                <div class="widget-block">
                                    <div id="pie-chart-legend">
                                    </div>
                                    <div id="pie-chart">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-widget widget-module">
                    <div class="widget-head clearfix">
                        <span class="h-icon"><i class="fa fa-th"></i></span>
                        <h4>Exportable Data Table</h4>
                        <ul class="widget-action-bar pull-right">
                            <li><span class="widget-collapse waves-effect w-collapse"><i class="fa fa-angle-down"></i></span>
                            </li>
                            <li><span class="widget-remove waves-effect w-remove"><i class="ico-cross"></i></span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-container">
                        <div class=" widget-block">
                            <table class="table dt-table-export">
                                <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Position
                                    </th>
                                    <th>
                                        Office
                                    </th>
                                    <th>
                                        Age
                                    </th>
                                    <th>
                                        Start date
                                    </th>
                                    <th>
                                        Salary
                                    </th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Position
                                    </th>
                                    <th>
                                        Office
                                    </th>
                                    <th>
                                        Age
                                    </th>
                                    <th>
                                        Start date
                                    </th>
                                    <th>
                                        Salary
                                    </th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>
                                        Tiger Nixon
                                    </td>
                                    <td>
                                        System Architect
                                    </td>
                                    <td>
                                        Edinburgh
                                    </td>
                                    <td>
                                        61
                                    </td>
                                    <td>
                                        2011/04/25
                                    </td>
                                    <td>
                                        $320,800
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Garrett Winters
                                    </td>
                                    <td>
                                        Accountant
                                    </td>
                                    <td>
                                        Tokyo
                                    </td>
                                    <td>
                                        63
                                    </td>
                                    <td>
                                        2011/07/25
                                    </td>
                                    <td>
                                        $170,750
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ashton Cox
                                    </td>
                                    <td>
                                        Junior Technical Author
                                    </td>
                                    <td>
                                        San Francisco
                                    </td>
                                    <td>
                                        66
                                    </td>
                                    <td>
                                        2009/01/12
                                    </td>
                                    <td>
                                        $86,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Cedric Kelly
                                    </td>
                                    <td>
                                        Senior Javascript Developer
                                    </td>
                                    <td>
                                        Edinburgh
                                    </td>
                                    <td>
                                        22
                                    </td>
                                    <td>
                                        2012/03/29
                                    </td>
                                    <td>
                                        $433,060
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Airi Satou
                                    </td>
                                    <td>
                                        Accountant
                                    </td>
                                    <td>
                                        Tokyo
                                    </td>
                                    <td>
                                        33
                                    </td>
                                    <td>
                                        2008/11/28
                                    </td>
                                    <td>
                                        $162,700
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Brielle Williamson
                                    </td>
                                    <td>
                                        Integration Specialist
                                    </td>
                                    <td>
                                        New York
                                    </td>
                                    <td>
                                        61
                                    </td>
                                    <td>
                                        2012/12/02
                                    </td>
                                    <td>
                                        $372,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Herrod Chandler
                                    </td>
                                    <td>
                                        Sales Assistant
                                    </td>
                                    <td>
                                        San Francisco
                                    </td>
                                    <td>
                                        59
                                    </td>
                                    <td>
                                        2012/08/06
                                    </td>
                                    <td>
                                        $137,500
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Rhona Davidson
                                    </td>
                                    <td>
                                        Integration Specialist
                                    </td>
                                    <td>
                                        Tokyo
                                    </td>
                                    <td>
                                        55
                                    </td>
                                    <td>
                                        2010/10/14
                                    </td>
                                    <td>
                                        $327,900
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Colleen Hurst
                                    </td>
                                    <td>
                                        Javascript Developer
                                    </td>
                                    <td>
                                        San Francisco
                                    </td>
                                    <td>
                                        39
                                    </td>
                                    <td>
                                        2009/09/15
                                    </td>
                                    <td>
                                        $205,500
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sonya Frost
                                    </td>
                                    <td>
                                        Software Engineer
                                    </td>
                                    <td>
                                        Edinburgh
                                    </td>
                                    <td>
                                        23
                                    </td>
                                    <td>
                                        2008/12/13
                                    </td>
                                    <td>
                                        $103,600
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jena Gaines
                                    </td>
                                    <td>
                                        Office Manager
                                    </td>
                                    <td>
                                        London
                                    </td>
                                    <td>
                                        30
                                    </td>
                                    <td>
                                        2008/12/19
                                    </td>
                                    <td>
                                        $90,560
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Quinn Flynn
                                    </td>
                                    <td>
                                        Support Lead
                                    </td>
                                    <td>
                                        Edinburgh
                                    </td>
                                    <td>
                                        22
                                    </td>
                                    <td>
                                        2013/03/03
                                    </td>
                                    <td>
                                        $342,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Charde Marshall
                                    </td>
                                    <td>
                                        Regional Director
                                    </td>
                                    <td>
                                        San Francisco
                                    </td>
                                    <td>
                                        36
                                    </td>
                                    <td>
                                        2008/10/16
                                    </td>
                                    <td>
                                        $470,600
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Haley Kennedy
                                    </td>
                                    <td>
                                        Senior Marketing Designer
                                    </td>
                                    <td>
                                        London
                                    </td>
                                    <td>
                                        43
                                    </td>
                                    <td>
                                        2012/12/18
                                    </td>
                                    <td>
                                        $313,500
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tatyana Fitzpatrick
                                    </td>
                                    <td>
                                        Regional Director
                                    </td>
                                    <td>
                                        London
                                    </td>
                                    <td>
                                        19
                                    </td>
                                    <td>
                                        2010/03/17
                                    </td>
                                    <td>
                                        $385,750
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Michael Silva
                                    </td>
                                    <td>
                                        Marketing Designer
                                    </td>
                                    <td>
                                        London
                                    </td>
                                    <td>
                                        66
                                    </td>
                                    <td>
                                        2012/11/27
                                    </td>
                                    <td>
                                        $198,500
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Paul Byrd
                                    </td>
                                    <td>
                                        Chief Financial Officer (CFO)
                                    </td>
                                    <td>
                                        New York
                                    </td>
                                    <td>
                                        64
                                    </td>
                                    <td>
                                        2010/06/09
                                    </td>
                                    <td>
                                        $725,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Gloria Little
                                    </td>
                                    <td>
                                        Systems Administrator
                                    </td>
                                    <td>
                                        New York
                                    </td>
                                    <td>
                                        59
                                    </td>
                                    <td>
                                        2009/04/10
                                    </td>
                                    <td>
                                        $237,500
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Bradley Greer
                                    </td>
                                    <td>
                                        Software Engineer
                                    </td>
                                    <td>
                                        London
                                    </td>
                                    <td>
                                        41
                                    </td>
                                    <td>
                                        2012/10/13
                                    </td>
                                    <td>
                                        $132,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Dai Rios
                                    </td>
                                    <td>
                                        Personnel Lead
                                    </td>
                                    <td>
                                        Edinburgh
                                    </td>
                                    <td>
                                        35
                                    </td>
                                    <td>
                                        2012/09/26
                                    </td>
                                    <td>
                                        $217,500
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jenette Caldwell
                                    </td>
                                    <td>
                                        Development Lead
                                    </td>
                                    <td>
                                        New York
                                    </td>
                                    <td>
                                        30
                                    </td>
                                    <td>
                                        2011/09/03
                                    </td>
                                    <td>
                                        $345,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Yuri Berry
                                    </td>
                                    <td>
                                        Chief Marketing Officer (CMO)
                                    </td>
                                    <td>
                                        New York
                                    </td>
                                    <td>
                                        40
                                    </td>
                                    <td>
                                        2009/06/25
                                    </td>
                                    <td>
                                        $675,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Caesar Vance
                                    </td>
                                    <td>
                                        Pre-Sales Support
                                    </td>
                                    <td>
                                        New York
                                    </td>
                                    <td>
                                        21
                                    </td>
                                    <td>
                                        2011/12/12
                                    </td>
                                    <td>
                                        $106,450
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Doris Wilder
                                    </td>
                                    <td>
                                        Sales Assistant
                                    </td>
                                    <td>
                                        Sidney
                                    </td>
                                    <td>
                                        23
                                    </td>
                                    <td>
                                        2010/09/20
                                    </td>
                                    <td>
                                        $85,600
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Angelica Ramos
                                    </td>
                                    <td>
                                        Chief Executive Officer (CEO)
                                    </td>
                                    <td>
                                        London
                                    </td>
                                    <td>
                                        47
                                    </td>
                                    <td>
                                        2009/10/09
                                    </td>
                                    <td>
                                        $1,200,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Gavin Joyce
                                    </td>
                                    <td>
                                        Developer
                                    </td>
                                    <td>
                                        Edinburgh
                                    </td>
                                    <td>
                                        42
                                    </td>
                                    <td>
                                        2010/12/22
                                    </td>
                                    <td>
                                        $92,575
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jennifer Chang
                                    </td>
                                    <td>
                                        Regional Director
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        28
                                    </td>
                                    <td>
                                        2010/11/14
                                    </td>
                                    <td>
                                        $357,650
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Brenden Wagner
                                    </td>
                                    <td>
                                        Software Engineer
                                    </td>
                                    <td>
                                        San Francisco
                                    </td>
                                    <td>
                                        28
                                    </td>
                                    <td>
                                        2011/06/07
                                    </td>
                                    <td>
                                        $206,850
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Fiona Green
                                    </td>
                                    <td>
                                        Chief Operating Officer (COO)
                                    </td>
                                    <td>
                                        San Francisco
                                    </td>
                                    <td>
                                        48
                                    </td>
                                    <td>
                                        2010/03/11
                                    </td>
                                    <td>
                                        $850,000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Shou Itou
                                    </td>
                                    <td>
                                        Regional Marketing
                                    </td>
                                    <td>
                                        Tokyo
                                    </td>
                                    <td>
                                        20
                                    </td>
                                    <td>
                                        2011/08/14
                                    </td>
                                    <td>
                                        $163,000
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Start Here -->
        <footer class="footer-container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-left">
                            <span>&copy; 2015 <a href="http://themeforest.net/user/westilian">westilian</a></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-right">
                            <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian">westilian</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--Rightbar Start Here -->
<div class="right-aside">
    <div class="aside-branding">
        <div class="aside-tab">
            <ul class="nav nav-tabs pull-left">
                <li class="active"><a href="#coversetaion" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Chat" class="waves-effect"><i class="fa fa-comments"></i></a>
                </li>
                <li><a href="#server-stats" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Stats" class="waves-effect"><i class="fa fa-pie-chart"></i></a>
                </li>
                <li><a href="#notifications" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Notifications" class="waves-effect aside-notifications"><i class="fa fa-bell"></i><span class="alert-bubble">10</span></a>
                </li>
            </ul>
        </div>
        <span class="rightbar-action waves-effect"><i class="fa fa-times"></i></span>
    </div>
    <div class="aside-tab-wigets">
        <div class="tab-content">
            <div class="tab-pane active" id="coversetaion">
                <div class="chat-search-form">
                    <form>
                        <input name="searchbox" value="" placeholder="Chat With" class="chat-u-search form-control">
                    </form>
                </div>
                <div class="block-content chat-user-list">
                    <span class="piechart"></span>
                    <h3 class="clearfix"><span class="pull-left">Friends</span><span class="pull-right online-counter">3 Online</span></h3>
                    <ul class="chat-list">
                        <li>
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/adellecharles.jpg" alt="Avatar"></span><span class="chat-u-info">Adellecharles<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                        <li class="chat-u-online">
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/allisongrayce.jpg" alt="Avatar"></span><span class="chat-u-info">Allisongrayce<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                        <li class="chat-u-online">
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/bobbyjkane.jpg" alt="Avatar"></span><span class="chat-u-info">Bobbyjkane<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                        <li class="chat-u-online">
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/littlenono.jpg" alt="Avatar"></span><span class="chat-u-info">Littlenono<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                    </ul>
                    <h3 class="clearfix"><span class="pull-left">Family</span><span class="pull-right online-counter">1 Online</span></h3>
                    <ul class="chat-list">
                        <li>
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/geeftvorm.jpg" alt="Avatar"></span><span class="chat-u-info">Geeftvorm<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                        <li class="chat-u-online">
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/amarkdalen.jpg" alt="Avatar"></span><span class="chat-u-info">Amarkdalen<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                        <li>
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/mko.jpg" alt="Avatar"></span><span class="chat-u-info">Mko<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                        <li>
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/marktimemedia.jpg" alt="Avatar"></span><span class="chat-u-info">Marktimemedia<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                        <li>
                            <a href="#"><span class="chat-avatar"><img src="images/avatar/oykun.html" alt="Avatar"></span><span class="chat-u-info">Oykun<cite>New York</cite></span></a>
                            <span class="chat-u-status"><i class="fa fa-circle"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane" id="server-stats">
                <div class="block-content">
                    <div class="server-stats-content">
                        <h3>Work Progress</h3>
                        <div class="progress-wrap">
                            <div class="clearfix progress-meta">
                                <span class="pull-left progress-label">Daily Backup</span><span class="pull-right progress-percent label label-primary"></span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" data-progress="80">
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <div class="clearfix progress-meta">
                                <span class="pull-left progress-label">My Sql Backup</span><span class="pull-right progress-percent label label-primary"></span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" data-progress="60">
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <div class="clearfix progress-meta">
                                <span class="pull-left progress-label">Vps Configure </span><span class="pull-right progress-percent label label-primary"></span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" data-progress="90">
                                </div>
                            </div>
                        </div>
                        <h3>Usage</h3>
                        <div class="uasge-wrap">
                            <ul>
                                <li>
                                    <h4>Bandwidth</h4>
                                    <span class="uasge-intro">950GB of 1.95 TB Used</span>
                                </li>
                                <li class="usage-chart">
								<span class="epie-chart" data-percent="60" data-barcolor="#e64a19" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
								</span>
                                </li>
                            </ul>
                        </div>
                        <div class="uasge-wrap">
                            <ul>
                                <li>
                                    <h4>Memory </h4>
                                    <span class="uasge-intro">3 GB of 6 GB Used</span>
                                </li>
                                <li class="usage-chart">
								<span class="epie-chart" data-percent="50" data-barcolor="#00acc1" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
								</span>
                                </li>
                            </ul>
                        </div>
                        <div class="uasge-wrap">
                            <ul>
                                <li>
                                    <h4>HDD </h4>
                                    <span class="uasge-intro">18 GB of 30 GB Used </span>
                                </li>
                                <li class="usage-chart">
								<span class="epie-chart" data-percent="60" data-barcolor="#43a047" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt" data-linewidth="3" data-size="55" data-animate="2000"><span class="percent"></span>
								</span>
                                </li>
                            </ul>
                        </div>
                        <h3>Used Services</h3>
                        <div class="progress-wrap">
                            <div class="clearfix progress-meta">
                                <span class="pull-left progress-label">Email</span><span class="pull-right progress-percent-multiple label label-primary">90%</span>
                            </div>
                            <div class="progress multi-progress">
                                <div class="progress-bar progress-bar-success" data-progress="40">
                                </div>
                                <div class="progress-bar progress-bar-warning progress-bar-striped" data-progress="30">
                                </div>
                                <div class="progress-bar progress-bar-danger" data-progress="20">
                                </div>
                            </div>
                            <span class="progress-intro">27 of 30 Email Used</span>
                        </div>
                        <div class="progress-wrap">
                            <div class="clearfix progress-meta">
                                <span class="pull-left progress-label">Credits</span><span class="pull-right progress-percent-multiple label label-primary">70%</span>
                            </div>
                            <div class="progress multi-progress">
                                <div class="progress-bar progress-bar-success" data-progress="40">
                                </div>
                                <div class="progress-bar progress-bar-warning progress-bar-striped" data-progress="20">
                                </div>
                                <div class="progress-bar progress-bar-danger" data-progress="10">
                                </div>
                            </div>
                            <span class="progress-intro">700 of 1000 Credits Used</span>
                        </div>
                        <h3>Task Pending</h3>
                        <div class="progress-wrap">
                            <div class="clearfix progress-meta">
                                <span class="pull-left progress-label">Tickets</span><span class="pull-right progress-percent label label-primary"></span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" data-progress="60">
                                </div>
                            </div>
                            <span class="progress-intro">60 of 100 Replied / 40 Pending</span>
                        </div>
                        <div class="progress-wrap">
                            <div class="clearfix progress-meta">
                                <span class="pull-left progress-label">Payments</span><span class="pull-right progress-percent label label-primary"></span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" data-progress="90">
                                </div>
                            </div>
                            <span class="progress-intro">90 of 100 Paid / 10 Unpaid</span>
                        </div>
                        <div class="progress-wrap">
                            <div class="clearfix progress-meta">
                                <span class="pull-left progress-label">Review</span><span class="pull-right progress-percent label label-primary"></span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" data-progress="50">
                                </div>
                            </div>
                            <span class="progress-intro">5 of 10 Reviewed / 5 Pending</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="notifications">
                <div class="block-content">
                    <div class="aside-notifications-wrap">
                        <div class="message-wrap">
                            <h4>You have 15 new messages</h4>
                            <ul class="clearfix">
                                <li class="clearfix">
                                    <a href="#" class="message-thumb"><img src="images/avatar/adellecharles.jpg" alt="image">
                                    </a><a href="#" class="message-intro"><span class="message-meta">Adellecharles </span>Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" class="message-thumb"><img src="images/avatar/allisongrayce.jpg" alt="image">
                                    </a><a href="#" class="message-intro"><span class="message-meta">Allisongrayce </span>In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" class="message-thumb"><img src="images/avatar/amarkdalen.jpg" alt="image">
                                    </a><a href="#" class="message-intro"><span class="message-meta">Amarkdalen </span>Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" class="message-thumb"><img src="images/avatar/annapickard.jpg" alt="image">
                                    </a><a href="#" class="message-intro"><span class="message-meta">Annapickard </span>Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" class="message-thumb"><img src="images/avatar/bobbyjkane.jpg" alt="image">
                                    </a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Donec vel iaculis ... <span class="message-time">1 month ago</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" class="message-thumb"><img src="images/avatar/chexee.jpg" alt="image">
                                    </a><a href="#" class="message-intro"><span class="message-meta">Chexee </span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="#" class="message-thumb"><img src="images/avatar/coreyweb.jpg" alt="image">
                                    </a><a href="#" class="message-intro"><span class="message-meta">Coreyweb </span>Etiam molestie nulla... <span class="message-time">1 year ago</span></a>
                                </li>
                            </ul>
                            <a class="btn btn-primary btn-block notification-btn waves-effect clearfix" href="#"><span>View All</span></a>
                        </div>
                        <div class="notification-wrap">
                            <h4>You have 10 new notifications</h4>
                            <ul>
                                <li><a href="#" class="clearfix"><span class="ni w-green"><i class="fa fa-bullhorn"></i></span><span class="notification-message">Pellentesque semper posuere. <span class="notification-time clearfix">3 Min Ago</span></span></a>
                                </li>
                                <li><a href="#" class="clearfix"><span class="ni w-orange"><i class="fa fa-life-ring"></i></span><span class="notification-message">Nulla commodo sem at purus. <span class="notification-time clearfix">1 Hours Ago</span></span></a>
                                </li>
                                <li><a href="#" class="clearfix"><span class="ni w-bondi-blue"><i class="fa fa-star-o"></i></span><span class="notification-message">Fusce condimentum turpis. <span class="notification-time clearfix">3 Hours Ago</span></span></a>
                                </li>
                                <li><a href="#" class="clearfix"><span class="ni w-blue"><i class="fa fa-trophy"></i></span><span class="notification-message">Pellentesque habitant morbi. <span class="notification-time clearfix">Yesterday</span></span></a>
                                </li>
                                <li><a href="#" class="clearfix"><span class="ni w-brown"><i class="fa fa-bolt"></i></span><span class="notification-message">Fusce bibendum lacus mauris.<span class="notification-time clearfix">1 Month Ago</span></span></a>
                                </li>
                                <li><a href="#" class="clearfix"><span class="ni w-dark-yellow"><i class="fa fa-bookmark-o"></i></span><span class="notification-message">Donec id mi placerat, scelerisque.<span class="notification-time clearfix">3 Months Ago</span></span></a>
                                </li>
                            </ul>
                            <a class="btn btn-primary btn-block notification-btn clearfix waves-effect " href="#"><span>View All</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="conv-container">
        <div class="conv-u-info chat-u-online">
            <ul>
                <li class="chat-avatar"><img src="images/avatar/adellecharles.jpg" alt="Avatar">
                </li>
                <li class="chat-u-info">adellecharles<span>New York</span>
                </li>
                <li><span data-tooltip="tooltip" data-placement="bottom" title="Call" class="waves-effect chat-u-call"><i class="fa fa-phone"></i></span>
                </li>
                <li><span data-tooltip="tooltip" data-placement="bottom" title="Exit" class="waves-effect chat-close"><i class="fa fa-angle-right"></i></span>
                </li>
            </ul>
        </div>
        <div class="converstaion-list">
            <div class="conversation-back">
                <div class="conv-thumb">
                    <img src="images/avatar/uxceo.jpg" alt="user">
                </div>
                <div class="conv-text">
                    Hello John, thank you for calling Provide Support. How may I help you?
                </div>
            </div>
            <div class="conversation-front">
                <div class="conv-text">
                    Hello Mary. I understand the problem and will be happy to help you. Let’s see what I can do.
                </div>
            </div>
            <div class="conversation-front">
                <div class="conv-text">
                    Let me see if I have this correct, you want me to…” or “You would like for me to…?
                </div>
            </div>
            <div class="conversation-back">
                <div class="conv-thumb">
                    <img src="images/avatar/uxceo.jpg" alt="user">
                </div>
                <div class="conv-text">
                    I’m not sure, but let me find out for you.
                </div>
            </div>
        </div>
        <div class="chat-input-form">
            <form>
                <input name="chatbox" value="" class="form-control chat-input">
            </form>
        </div>
    </div>
</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jRespond.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/nav-accordion.js"></script>
<script src="js/hoverintent.js"></script>
<script src="js/waves.js"></script>
<script src="js/switchery.js"></script>
<script src="js/jquery.loadmask.js"></script>
<script src="js/icheck.js"></script>
<script src="js/bootbox.js"></script>
<script src="js/animation.js"></script>
<script src="js/colorpicker.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/select2.js"></script>
<script src="js/sweetalert.js"></script>
<script src="js/moment.js"></script>
<script src="js/calendar/fullcalendar.js"></script>
<!--CHARTS-->
<script src="js/chart/sparkline/jquery.sparkline.js"></script>
<script src="js/chart/easypie/jquery.easypiechart.min.js"></script>
<script src="js/chart/flot/excanvas.min.js"></script>
<script src="js/chart/flot/jquery.flot.min.js"></script>
<script src="js/chart/flot/jquery.flot.pie.min.js"></script>
<script src="js/chart/flot/jquery.flot.stack.min.js"></script>
<script src="js/chart/flot/jquery.flot.axislabels.js"></script>
<script src="js/chart/flot/jquery.flot.time.min.js"></script>
<script src="js/chart/flot/jquery.flot.resize.min.js"></script>
<script src="js/chart/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/chart/flot/jquery.flot.spline.js"></script>
<script src="js/chart.init.js"></script>
<!--Data Tables-->
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.responsive.js"></script>
<script src="js/dataTables.tableTools.js"></script>
<script src="js/dataTables.bootstrap.js"></script>
<script src="js/stacktable.js"></script>
<script src="js/smart-resize.js"></script>
<script src="js/layout.init.js"></script>
<script src="js/matmix.init.js"></script>
<script src="js/retina.min.js"></script>
</body>

<!-- Mirrored from www.lab.westilian.com/matmix-admin/list-view/dashboard-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Nov 2020 07:44:06 GMT -->
</html>
