<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coinvit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style type="text/css">

  ::-webkit-scrollbar {
    width: 10px;
    height: 10px;
    background-color: #F5F5F5;
  }

  /* Track */
  ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      border-radius: 10px;
      background-color: #F5F5F5;
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
      border-radius: 10px;
     -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
     background-color: #d2d6de;
  }

    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
      background-color: #9ea29e;
      border-color: #9ea29e;
    }

    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
      background-color: #9ea29e;
    }

    body{
      background-color: #000;
      width: 1790px;
      overflow-x: scroll;
    }

    .etc{
        margin-left: -20px;
        width: 300px;
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    .submenu{
      padding-top: 5px;
    }
    .logo-socmed{
      margin-top: 20px;
      padding: 5px;
      font-size: 28px;
    }

    .main-footer {
      background: #27323a;
      color: #c3c1c1;
    }
    
  
    div.scrollmenu {
    background-color: #232e32;
    }

    div.scrollmenu a {
        font-size: 12px;
        display: inline-block;
        color: white;
        text-align: center;
        padding: 8px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }

    .skin-blue .main-header .logo {
      background-color: #020203;
      color: #fff;
      padding-top: 5px;
      border-bottom: 0 solid transparent;
    }

    .view-pager{
      margin-top: -20px;
    }

    .box-header{
      background-color: #2B3441;
      color: #fff;
    }

    .box{
      background-color: #2B3441;
      color: #fff;
    }

    .products-list > .item {
      background: #2b3341;
    }

  </style>

  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini sidebar-collapse">
  <div class="wrapper">

    <header class="main-header">
      <nav>
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="collapse navbar-collapse" style="background-color: #000;">

          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="balance.php">Markets</a></li>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
               Decentralize <span class="caret"></span>
              </a>

              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Generate new wallet</a></li>
                <li><a tabindex="-1" href="#">Login with your own private key</a></li>
              </ul>

            </li>
            

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Centralize <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a class="submenu" tabindex="-1" href="#">
                      Coinvit Deposit Withdrawal <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">BUY CRYPTO with CREDIT CARD</a></li>
                    </ul>

                  </li>

                </ul>
            </li>
            
            
            <li>
              <a href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/db/Google_Translate_Icon.png" width="20" height="20">    
              </a>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-moon-o"></i>    
              </a>
            </li>
            
            <li>
              <a href="#" data-toggle="modal" data-target="#modal-lr">
                  Login / Register 
              </a>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-wifi text-green"></i>    
              </a>
            </li>
                 <!--  <li>
                   <a role="menuitem" tabindex="-1" href="#">
                     Coinvit Balance History
                   </a>
                 </li>
                 
                 <li>
                   <a role="menuitem" tabindex="-1" href="#">
                     Open Orders + Trade History
                   </a>
                 </li>
                 
                 <li>
                   <a role="menuitem" tabindex="-1" href="#">
                     Open Orders + Trade History
                   </a>
                 </li>
                 
                 <li class="dropdown-submenu">
                   <a class="submenu" tabindex="-1" href="#">
                     ACCOUNTS <span class="caret"></span>
                   </a>
                 
                   <ul class="dropdown-menu">
                     <li><a tabindex="-1" href="#">Profile</a></li>
                     <li><a tabindex="-1" href="#">Password</a></li>
                     <li><a tabindex="-1" href="#">2FA Two-Factor-Authentication</a></li>
                     <li><a tabindex="-1" href="#">API keys</a></li>
                     <li><a tabindex="-1" href="#">Whitelist</a></li>
                     <li><a tabindex="-1" href="#">Notifications</a></li>
                     <li><a tabindex="-1" href="#">Refferal Bonus</a></li>
                   </ul>
                 
                 </li>
                  -->
           

          </ul>
        
        </nav>

        <nav class="navbar navbar-static-top" style="background-color: #232e32; z-index: -1;  min-height: 40px;">

          <div class="scrollmenu" id="coin-slider">
          <?php
            for ($i=0; $i <20 ; $i++) { 
          ?>
            <a href="#home">ETH</a>
            <a href="#news">BTC</a>
            <a href="#contact">XLM</a>
            <a href="#about">IGN</a>
          <?php
            }
          ?>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
            <!-- Content Header (Page header) -->
            <aside class="main-sidebar">
              <!-- sidebar: style can be found in sidebar.less -->
              <!-- Sidebar user panel -->
                <div class="user-panel">
                  <div class="pull-left">
                    <img src="https://bittrexblobstorage.blob.core.windows.net/public/c41db2ef-2635-4438-a1c1-0a680c8857e1.png" style="width: 100%; max-width: 45px; height: auto;">
                  </div>
                  <div class="pull-left info">
                    <p style="font-size: 28px; font-style: italic;">STELLAR</p>
                    <b>Lumens</b>
                  </div>
                </div>
              
              <!-- search form -->
              <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>

                <div class="checkbox text-right" style="color: white; margin-right: 10px; margin-left: 15px;">
                  <label>
                    <input type="checkbox" id="fav">
                    Show
                    <i class="fa fa-star text-yellow"></i>
                    Only  
                  </label>
                </div>
              </form>
              <!-- /.search form -->
              <section>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree"  id="asset">
                  <li class="cc" id="cc">
                    <a href="#" style="height: 60px;">
                        <i style="font-size: 18px;">XLM</i>
                        <span style="font-size: 12px; font-color: grey;">Stellar | Bitcoin.com</span>
                        <span class="pull-right-container">
                          <i class="fa fa-star-o text-yellow pull-right"></i>
                        </span>
                        <br>

                          <i class="text-red">0.09890</i>
                          <span class="text-red" style="margin-left: 5px;"> -37.278%</span>
                          <span style="margin-left: 5px;">297.0876</span>
                    </a>
                    
                  </li>

                <?php
                    for ($i=1; $i <20 ; $i++) { 
                      echo '
                       <li class="cc" id="cc">
                          <a href="#" style="height: 60px;">
                              <i style="font-size: 18px;">XLM</i>
                              <span style="font-size: 12px; font-color: grey;">Stellar | Bitcoin.com</span>
                              <span class="pull-right-container">
                                <i class="fa fa-star-o text-yellow pull-right"></i>
                              </span>
                              <br>

                                <i class="text-green">0.09890</i>
                                <span class="text-green" style="margin-left: 5px;"> -37.278 %</span>
                                <span style="margin-left: 5px;">297.0876</span>
                          </a>
                          
                        </li>';
                    }
                  ?>

                  <?php
                    for ($i=1; $i <20 ; $i++) { 
                      echo '
                      <li style="font-size: 15px; margin-top: 10px; margin-bottom: 10px;" class="cc" id="cc">
                        <a href="#">
                          <div class="pull-left">  
                            <span class="fa fa-caret-up text-green">
                            </span>
                            <span>BTC</span>
                          </div>
                          <span> | Bitcoin | Bitcoin.com | <i class="fa fa-star-o text-yellow"></i></span>
                        </a>
                        
                      </li>';
                    }
                  ?>
                </ul>
              <!-- /.sidebar -->
              <div class="" style="margin-right: 8px; margin-left: 8px;">
                <button type="button" class="btn btn-danger btn-block">TOKEN</button>
                <button type="button" class="btn btn-warning btn-block">FIAT</button>
              </div>
              </section>

            </aside>



        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
             




          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper"> 
          <section style="background-color: #2B3441; margin-top: 40px; width: 2000px;">
            <div style="float: left; width: 1250px; background-color: #2B3441; height: 2570px;"> 
              <div class="box">

                <div class="box-header">
                  <div class="row" style="margin-top: -15px;">
                    <div class="col-md-1" style="margin-top: 8px;"> 
                        <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png" width="50" height="50">
                      
                    </div>
                    <div class="col-md-1" style="margin-left: -40px;">  
                      <h4><b>BTC-XLM</b></h4>
                      <span class="info-box-text">Lumen</span>
                    </div>

                    
                    <div class="col-md-8">

                        <div class="col-md-3">
                         <div class="description-block">
                            <h6 class="description-header">0.4 USD</h6>
                            <h6 class="description-header">0.00004000 BTC</h6>
                            <span class="description-text">LAST PRICE</span>
                          </div>
                        </div>
                        <div class="col-md-3">
                         <div class="description-block">
                            <h6 class="description-header text-green" style="padding-top: 15px;"><i class="fa fa-caret-up text-green"></i> 17 %</h6>
                            <span class="description-text">% CHANGE</span>
                          </div>
                        </div>
                        <div class="col-md-3">
                         <div class="description-block">
                            <h6 class="description-header text-green">0.00008000 BTC</h6>
                            <h6 class="description-header text-red">0.00004000 BTC</h6>
                            <span class="description-text">HIGH & LOW</span>
                          </div>
                        </div>
                        <div class="col-md-3">
                         <div class="description-block">
                            <h6 class="description-header">0.4 USD</h6>
                            <h6 class="description-header">0.00004000 BTC</h6>
                            <span class="description-text">VOLUME</span>
                          </div>
                        </div>

                    </div>
                    <div class="col-md-2">
                      <img src="../logo/logocoinvit.png" width="auto" height="60">
                    </div>

                  </div>
                  <!-- End Row -->
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->

              <div class="box" style="margin-top: -25px;">
                <div class="box-header">
                  <div class="row">
                    <div class="col-md-6 text-right">
                      <span>Zoom : </span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-default">12h</button>
                        <button type="button" class="btn btn-xs btn-default">24h</button>
                        <button type="button" class="btn btn-xs btn-default">2d</button>
                        <button type="button" class="btn btn-xs btn-default">4d</button>
                        <button type="button" class="btn btn-xs btn-default">1w</button>
                        <button type="button" class="btn btn-xs btn-default">2w</button>
                        <button type="button" class="btn btn-xs btn-default">1m</button>
                        <button type="button" class="btn btn-xs btn-default">All</button>
                      </div>
                    </div>

                    <div class="col-md-6"> 
                    <span>Candlestick : </span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-default">1m</button>
                        <button type="button" class="btn btn-xs btn-default">5m</button>
                        <button type="button" class="btn btn-xs btn-default">15m</button>
                        <button type="button" class="btn btn-xs btn-default">30m</button>
                        <button type="button" class="btn btn-xs btn-default">1h</button>
                        <button type="button" class="btn btn-xs btn-default">4h</button>
                        <button type="button" class="btn btn-xs btn-default">1d</button>
                        <button type="button" class="btn btn-xs btn-default">1w</button>
                        <button type="button" class="btn btn-xs btn-default">1m</button>
                        <button type="button" class="btn btn-xs btn-default">All</button>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body" style="margin-top: -10px;">
                <iframe src="http://127.0.0.1:9090/" style="height: 600px; width: 100%;"></iframe>
                  <!-- <div id="chartContainer" style="height: 600px; width: 100%;"></div>
                  <div id="chartdiv" style="height: 600px; width: 100%;"></div>
                  <div id="frameChart" style="height: 200px; width: 100%;"></div> -->
                </div>
                <!-- ./box-body -->
              </div>
              <!-- /.box -->

              <div class="row" style="margin-top: -15px;"> 
                <div class="col-md-4">  
                  <!-- general form elements -->
                  <div class="box box-success">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="form-horizontal">
                      <div class="box-body" style="height: auto;">
                      <h3 class="box-title text-green">BUY STR</h3>
                      <div class="text-right">
                        <h5 style="margin-top: -30px;"><b>0.00000000 BTC</b> : Lowest Ask</h5>
                      </div>
                        <div class="form-group" style="margin-top: 20px;">
                          <label class="col-sm-2 control-label">AMOUNT</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control">
                              <span class="input-group-addon">XLM</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">PRICE</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control text-right">
                              <span class="input-group-addon">BTC</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">TOTAL</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control text-right">
                              <span class="input-group-addon">BTC</span>
                            </div>
                          </div>
                        </div>

                         <div class="text-right">
                            <button type="button" class="btn btn-default">Buy</button>
                        </div>
                      </div>
                      <!-- /.box-body -->

                    </form>
                  </div>
                  <!-- /.box -->
                </div> 
                <div class="col-md-4"> 
                 <!-- general form elements -->
                  <div class="box box-warning">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="form-horizontal">
                      <div class="box-body" style="height: auto;">
                      <h3 class="box-title text-orange">LIMIT</h3>
                      <div class="text-right">
                        <h5 style="margin-top: -30px;"><b>0.00000000 BTC</b> : Lowest Ask</h5>
                      </div>
                        <div class="form-group" style="margin-top: 20px;">
                          <label class="col-sm-2 control-label">AMOUNT</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control">
                              <span class="input-group-addon">XLM</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">PRICE</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control text-right">
                              <span class="input-group-addon">BTC</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">TOTAL</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control text-right">
                              <span class="input-group-addon">BTC</span>
                            </div>
                          </div>
                        </div>

                         <div class="text-right">
                            <button type="button" class="btn btn-default">Buy</button>
                        </div>
                      </div>
                      <!-- /.box-body -->

                    </form>
                  </div>
                  <!-- /.box -->
                 
                </div> 
                <div class="col-md-4">  
                  <!-- general form elements -->
                  <div class="box box-danger">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="form-horizontal">
                      <div class="box-body" style="height: auto;">
                      <h3 class="box-title text-red">SELL STR</h3>
                      <div class="text-right">
                        <h5 style="margin-top: -30px;"><b>0.00000000 BTC</b> : Highest Ask</h5>
                      </div>
                        <div class="form-group" style="margin-top: 20px;">
                          <label class="col-sm-2 control-label">AMOUNT</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control">
                              <span class="input-group-addon">XLM</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">PRICE</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control text-right">
                              <span class="input-group-addon">BTC</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">TOTAL</label>
                          <div class="col-sm-10">  
                            <div class="input-group">
                              <input type="number" class="form-control text-right">
                              <span class="input-group-addon">BTC</span>
                            </div>
                          </div>
                        </div>

                         <div class="text-right">
                            <button type="button" class="btn btn-default">Sell</button>
                        </div>
                      </div>
                      <!-- /.box-body -->

                    </form>
                  </div>
                  <!-- /.box -->
                </div>
              </div>

              <div class="row">
                   <!-- col -->
                   <div class="col-md-6">

                    <!-- BIDS -->
                    <table class="table" id="bid" width="100%" cellspacing="0" style="color: #fff;">
                      <thead>
                        <tr>
                          <th>SUM</th>
                          <th>TOTAL</th>
                          <th>SIZE (XLM)</th>
                          <th>BID (BTC)</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                          for ($i=0; $i <200 ; $i++) {?> 
                          <tr style="background: linear-gradient(to left, rgb(192, 232, 195) 94.1%, rgb(43, 51, 65) 94.1%);">
                            <td>1.1697</td>
                            <td>1.1697</td>
                            <td>35252.525</td>
                            <td>0.00003326</td>
                            <td class="text-blue">SELL</td>
                          </tr>   
                        <?php
                          }
                       ?>
                      </tbody>
                    </table>   
                    </div>
                    <!-- End Bids -->
                  <!-- End col-->

              <!-- col -->
              <div class="col-md-6">
              <!-- ASKS -->
                 <table class="table" id="ask" width="100%" cellspacing="0" style="color: #fff;">
                    <thead>
                      <tr>
                        <th></th>
                        <th>ASK (BTC)</th>
                        <th>SIZE (XLM)</th>
                        <th>TOTAL</th>
                        <th>SUM</th>
                      </tr>
                    </thead>
                  <tbody>
                    <?php
                          for ($i=0; $i <20 ; $i++) {?> 
                    <tr style="background: linear-gradient(to right, rgb(221, 165, 168) 89.7%, rgb(43, 51, 65) 89.7%);">
                    <td class="text-red">BUY</td>
                      <td>0.00003396</td>
                      <td>3949.866</td>
                      <td>0.1341</td>
                      <td>0.1341</td>
                    </tr>  
                        <?php
                          }
                       ?>
                  </tbody>
                </table>  
              </div>
              <!-- End Asks -->
            <!-- End col -->
      
  



            </div>
            <!-- End Row -->


            <div class="row">
            <!-- col -->
            <div class="col-md-12">
            <h3 class="text-left" style="margin-bottom: 8px; padding-left: 8px; color: #fff;">My Opens Order</h3>
            <!-- My Open Orders -->
            <table class="table table-hover" id="oo" width="100%" cellspacing="0" style="color: #fff;">
              <thead>
                <tr>
                  <th>TYPE</th>
                  <th>PRICE</th>
                  <th>AMOUNT</th>
                  <th>TOTAL</th>
                  <th>RATE/SHOP</th>
                  <th>DATE</th>
                  <th>ACTION</th>
                </tr>
              </thead>
               <tbody>
               <?php
                  for ($i=0; $i <3 ; $i++) {?> 
                  <tr>
                    <td class="text-left text-green">BUY</td>
                    <td class="text-right">0.00003348</td>
                    <td class="text-right">296.38443478</td>
                    <td class="text-right">0.00992295</td>
                    <td class="text-right">-</td>
                    <td><?php echo date("Y-m-d H:i:s"); ?></td>
                    <td><a href="">Cancel</a></td>
                  </tr>   
                <?php
                  }
               ?>
              </tbody>
            </table>
            <!-- My Open Orders -->
            </div>
            <!-- End Col -->

            <!-- col -->
            <div class="col-md-6">
            <h3 class="text-center" style="margin-bottom: 8px; color: #fff;">Market History</h3>
            <!-- Market History -->
            <table class="table table-hover" id="mh" width="100%" cellspacing="0" style="color: #fff;">
              <thead>
                <tr>
                  <th>DATE</th>
                  <th>ORDER</th>
                  <th>BID/ASK</th>
                  <th>TOTAL (XLM)</th>
                  <th>TOTAL (BTC)</th>
                </tr>
              </thead>
               <tbody>
               <?php
                  for ($i=0; $i <20 ; $i++) {?> 
                  <tr>
                    <td>13:39:05</td>
                    <td class="text-green">BUY</td>
                    <td>0.00003348</td>
                    <td>296.38443478</td>
                    <td>0.00992295</td>
                  </tr>   
                <?php
                  }
               ?>
              </tbody>
            </table>
            <!-- End Market History -->
            </div>
            <!-- End Col -->


            <!-- col -->
            <div class="col-md-6">
            <h3 class="text-center" style="margin-bottom: 8px; color: #fff;">Your Trade History</h3>
            <!-- Market History -->
            <table class="table table-hover" id="yth" width="100%" cellspacing="0"  style="color: #fff;">
              <thead>
                <tr>
                  <th>CLOSED</th>
                  <th>OPEN</th>
                  <th>BID/ASK</th>
                  <th>FILLED</th>
                  <th>RATE</th>
                  <th>COST</th>
                </tr>
              </thead>
               <tbody>
                <?php
                  for ($i=0; $i <20 ; $i++) {?> 
                  <tr>
                    <td>13:39:05</td>
                    <td class="text-green">BUY</td>
                    <td>0.00003348</td>
                    <td>296.38443478</td>
                    <td>0.00992295</td>
                    <td>0.00992295</td>
                  </tr>  
                   <?php
                  }
               ?> 
              </tbody>
            </table>
            <!-- End Market History -->
            </div>
            <!-- End Col -->
            </div>
            </div>
            <!-- LEFT -->

            <div style="float: left; width: 300px; margin-left: 5px;">
            <a href="">
              <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="100%" height="200">
            </a>
            <a href="">
              <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20stellar.png" width="100%" height="200">
            </a>
            <!-- DIRECT CHAT -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Chatroom Member</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages" style="height: 320px;">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        You better believe it!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Working with AdminLTE on a great new app! Wanna join?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        I would love to.
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                  </div>
                  <!--/.direct-chat-messages-->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-flat">Send</button>
                          </span>
                    </div>
                  </form>
                </div>
                <!-- /.box-footer-->
                <a class="twitter-timeline" data-height="500" href="https://twitter.com/StellarLumens?ref_src=twsrc%5Etfw" style="margin-left: -30px;">Tweets by StellarLumens</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
             
              <a href="">
                <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" width="100%" height="200">
              </a>
              <a href="">
                <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20stellar.png" width="100%" height="200">
              </a>


              <div class="box box-primary" style="height: 825px;">
            <div class="box-header with-border">
              <h3 class="box-title"><b>NOTICES</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <?php
                  for ($i=0; $i < 5 ; $i++) { ?>
                    
                    <li class="item">
                      <div class="product-img">
                        <img src="../dist/img/default-50x50.gif" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Samsung TV
                          <span class="label label-warning pull-right">$1800</span></a>
                        <span class="product-description">
                              Samsung 32" 1080p 60Hz LED Smart HDTV.
                            </span>
                      </div>
                    </li>
                    <!-- /.item -->
                <?php  
                }
                ?>
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
              <!--/.direct-chat --> 


            </div>
            <!-- RIGHT -->
            </section>
            
  


        </div>
        <!-- ./wrapper -->

        <footer class="main-footer">
          <div class="row">
            <div class="col-md-3">
              <h1>ABOUT COINVIT</h1>
              <h4><a href="#">Contact Us</a></h4>
              <h4><a href="#">Fees</a></h4>
              <h4><a href="#">Privacy Policy</a></h4>
              <h4><a href="#">Terms of Use</a></h4>
            </div>
            <div class="col-md-3">
              <h1>SUPPORT</h1>
              <h4><a href="#">++ Contact Support ++</a></h4>
              <h4><a href="#">Guides</a></h4>
              <h4><a href="#">++ SUBMIT A TOKEN ++</a></h4>
              <h4><a href="#">REPORT Abuse</a></h4>
              <h4><a href="#">API Documentation</a></h4>
            </div>
            <div class="col-md-3">
              <h1>NEWS</h1>
              <h4><a href="#">Press Release</a></h4>
              <h4><a href="#">Follow us on Twitter</a></h4>
            </div>
            <div class="col-md-3">
              <label>
                <a href="">
                  <i class="fa fa-telegram logo-socmed"></i>
                </a>
              </label>
              
              <label>
                <a href="">
                  <i class="fa fa-facebook-square logo-socmed"></i>
                </a>
              </label>
              
              <label>
                <a href="">
                  <i class="fa fa-twitter logo-socmed"></i>   
                </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fa fa-reddit logo-socmed"></i>
              </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fa fa-medium logo-socmed"></i>
              </a>
              </label>
                            
              <label>
              <a href="">
                <i class="fa fa-instagram logo-socmed"></i>
              </a>              
              </label>

            </div>
          </div>
        </footer>
        
        
        </div>
        <!-- End Tab_1 -->

        <div class="tab-pane" id="tab_2" style="background-color: white;">
          <table id="datatable" class="display  table table-hover" width="100%" cellspacing="0" style="color: #fff;">
          <thead>
            <tr>
              <th>Date</th>
              <th>Open</th>
              <th>High</th>
              <th>Low</th>
              <th>Close</th>
            </tr>
          </thead>
          <tbody>
                  <tr>
                <td>2012-01-01</td>
                <td>5198</td>
                <td>5629</td>
                <td>5159</td>
                <td>5385</td>
              </tr>
              <tr>
                <td>2012-02-01</td>
                <td>5366</td>
                <td>5499</td>
                <td>5135</td>
                <td>5295</td>
              </tr>
              <tr>
                <td>2012-03-01</td>
                <td>5296</td>
                <td>5378</td>
                <td>5154</td>
                <td>5248</td>
              </tr>
              <tr>
                <td>2012-04-01</td>
                <td>5254</td>
                <td>5279</td>
                <td>4788</td>
                <td>4924</td>
              </tr>
              <tr>
                <td>2012-05-01</td>
                <td>4910</td>
                <td>5286</td>
                <td>4770</td>
                <td>5278</td>
              </tr>
              <tr>
                <td>2012-06-01</td>
                <td>5283</td>
                <td>5348</td>
                <td>5032</td>
                <td>5229</td>
              </tr>
              <tr>
                <td>2012-07-01</td>
                <td>5220</td>
                <td>5448</td>
                <td>5164</td>
                <td>5258</td>
              </tr>
              <tr>
                <td>2012-08-01</td>
                <td>5276</td>
                <td>5735</td>
                <td>5215</td>
                <td>5703</td>
              </tr>
              <tr>
                <td>2012-09-01</td>
                <td>5704</td>
                <td>5815</td>
                <td>4888</td>
                <td>5619</td>
              </tr>
          </tbody>
        </table>
        <br/>
        <div id="chartContainer" style="height: 360px; width: 100%; border: 1px solid grey;"></div>



        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
          like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
   

     
        
 

<div class="modal fade" id="modal-lr">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
    <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
              <li><a href="#register" data-toggle="tab">Register</a></li>
              <li class="pull-right">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="login">
               <div class="register-box">
                  <div class="register-logo">
                    <a href="../../index2.html">Hello, friends</a>
                  </div>

                  <div class="register-box-body">
                   <form action="../../index.html" method="post">
                      <div class="form-group has-feedback">
                        <label>Email address</label>
                        <input type="text" class="form-control" placeholder="Your email address">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Remember me 
                            </label>
                            <label style="float: right;">
                              <a href="#" class="text-right"> Forgot password ?</a>
                            </label>
                          </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xs-12">
                          <button type="submit" class="btn btn-default btn-block" style="padding: 8px; margin-bottom: 10px; margin-top: 8px; font-size: 17px;">Login</button>
                          <span class="text-center">Not yet an account?<a href="register.html" class="text-center"> Register</a></span>
                        </div>
                        <!-- /.col -->
                        
                      </div>
                    </form>


                  </div>
                  <!-- /.form-box -->
                </div>
                <!-- /.register-box -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="register">
                <div class="register-box">
                  <div class="register-logo">
                    <a href="../../index2.html">Join with <b>We</b> are</a>
                  </div>

                  <div class="register-box-body">
                   <form action="../../index.html" method="post">
                      <div class="form-group has-feedback">
                        <label>Email address</label>
                        <input type="text" class="form-control" placeholder="Your email address">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Retype password">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="checkbox icheck text-center">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">Mystellar.org</a> Terms of Service
                            </label>
                          </div>
                              <p style="font-size: 12px; text-align: justify; margin-top: 8px; margin-bottom: 35px;">
                                We are committed to complying with all U.S. regulations that help prevent, detect and remediate unlawful behavior by customers and virtual currency developers when using the Bittrex trading platform or any of the company’s other services. 

                                Bittrex is not a regulated exchange under U.S. securities laws. More information can be found here . 
                              </p>
                        </div>
                        <!-- /.col -->

                        <div class="col-xs-12">
                          <button type="submit" class="btn btn-default btn-block" style="padding: 8px; font-size: 17px;">Register</button>
                          <span class="text-center">Already have an account?<a href="login.php" class="text-center"> Login</a></span>
                        </div>
                        <!-- /.col -->
                      </div>
                    </form>


                  </div>
                  <!-- /.form-box -->
                </div>
                <!-- /.register-box -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
      
    </div>
   
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Canvas JS -->
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- SlimScroll Vertical-->
<script src="../bower_components/jquery-slimscroll/vertical/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>


<script type="text/javascript">
  var chartData = [];
generateChartData();


function generateChartData() {
  var firstDate = new Date();
  firstDate.setHours( 0, 0, 0, 0 );
  firstDate.setDate( firstDate.getDate() - 2000 );

  for ( var i = 0; i < 2000; i++ ) {
    var newDate = new Date( firstDate );

    newDate.setDate( newDate.getDate() + i );

    var open = Math.round( Math.random() * ( 30 ) + 100 );
    var close = open + Math.round( Math.random() * ( 15 ) - Math.random() * 10 );

    var low;
    if ( open < close ) {
      low = open - Math.round( Math.random() * 5 );
    } else {
      low = close - Math.round( Math.random() * 5 );
    }

    var high;
    if ( open < close ) {
      high = close + Math.round( Math.random() * 5 );
    } else {
      high = open + Math.round( Math.random() * 5 );
    }

    var volume = Math.round( Math.random() * ( 1000 + i ) ) + 100 + i;
    var value = Math.round( Math.random() * ( 30 ) + 100 );

    chartData[ i ] = ( {
      "date": newDate,
      "open": open,
      "close": close,
      "high": high,
      "low": low,
      "volume": volume,
      "value": value
    } );
  }
}

var chart = AmCharts.makeChart( "chartdiv", {
  "type": "stock",
  "theme": "light",
  "dataSets": [ {
    "fieldMappings": [ {
      "fromField": "open",
      "toField": "open"
    }, {
      "fromField": "close",
      "toField": "close"
    }, {
      "fromField": "high",
      "toField": "high"
    }, {
      "fromField": "low",
      "toField": "low"
    }, {
      "fromField": "volume",
      "toField": "volume"
    }, {
      "fromField": "value",
      "toField": "value"
    } ],
    "color": "#7f8da9",
    "dataProvider": chartData,
    "title": "West Stock",
    "categoryField": "date"
  }, {
    "fieldMappings": [ {
      "fromField": "value",
      "toField": "value"
    } ],
    "color": "#fac314",
    "dataProvider": chartData,
    "compared": true,
    "title": "East Stock",
    "categoryField": "date"
  } ],


  "panels": [ {
      "title": "Value",
      "showCategoryAxis": false,
      "percentHeight": 70,
      "valueAxes": [ {
        "id": "v1",
        "dashLength": 5
      } ],

      "categoryAxis": {
        "dashLength": 5
      },

      "stockGraphs": [ {
        "type": "candlestick",
        "id": "g1",
        "openField": "open",
        "closeField": "close",
        "highField": "high",
        "lowField": "low",
        "valueField": "close",
        "lineColor": "#47f255",
        "fillColors": "#47f255",
        "negativeLineColor": "#db4c3c",
        "negativeFillColors": "#db4c3c",
        "fillAlphas": 1,
        "useDataSetColors": false,
        "comparable": true,
        "compareField": "value",
        "showBalloon": false,
        "proCandlesticks": true
      } ],

      "stockLegend": {
        "valueTextRegular": undefined,
        "periodValueTextComparing": "[[percents.value.close]]%"
      }
    },

    {
      "title": "Volume",
      "percentHeight": 30,
      "marginTop": 1,
      "showCategoryAxis": true,
      "valueAxes": [ {
        "dashLength": 5
      } ],

      "categoryAxis": {
        "dashLength": 5
      },

      "stockGraphs": [ {
        "valueField": "volume",
        "type": "column",
        "showBalloon": false,
        "fillAlphas": 1
      } ],

      "stockLegend": {
        "markerType": "none",
        "markerSize": 0,
        "labelText": "",
        "periodValueTextRegular": "[[value.close]]"
      }
    }
  ],

  "chartScrollbarSettings": {
    "graph": "g1",
    "graphType": "line",
    "usePeriod": "WW"
  },

  "chartCursorSettings": {
    "valueLineBalloonEnabled": true,
    "valueLineEnabled": true
  },

  "periodSelector": {
    "position": "bottom",
    "periods": [ {
      "period": "DD",
      "count": 10,
      "label": "10 days"
    }, {
      "period": "MM",
      "selected": true,
      "count": 1,
      "label": "1 month"
    }, {
      "period": "YYYY",
      "count": 1,
      "label": "1 year"
    }, {
      "period": "YTD",
      "label": "YTD"
    }, {
      "period": "MAX",
      "label": "MAX"
    } ]
  },
  "export": {
    "enabled": true
  }
} );
</script>

<script type="text/javascript">
  // DataTables
  $(function () {
    
    $('#bid').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'lengthChange': false,
      'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#ask').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#mh').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#oo').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
    $('#yth').DataTable({
      'paging'      : true,
      'searching'   : false,
      'info'        : false,
      'ordering'    : true,
      'lengthChange': false,
       'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })

  })

</script>
<script type="text/javascript">

// Scroll in Sidebar Asset
  $(function(){
  $('#asset').slimScroll({
    color: '#d2d6de',
    railOpacity: 0.3,
    width: '100%',
    height: 'calc(86vh - 220px)'
  });

  $('#coin-slider').slimscroll({
    color: '#d2d6de',
    railOpacity: 0.3,
    height: '40px',
    width: 'auto',
    axis: 'x'
  });
});
</script>

<script type="text/javascript">
  <!-- Chart code -->
/**
 * This demo uses direct URL to Poloniex exchance, which means that depending on your browser settings,
 * it may not work dure to CORS restrictions.
 * Please consult Poloniex API for further information:
 * https://poloniex.com/support/api/
 */

var chart = AmCharts.makeChart("frameChart", {
  "type": "serial",
  "theme": "light",
  "dataLoader": {
    "url": "https://poloniex.com/public?command=returnOrderBook&currencyPair=BTC_ETH&depth=50",
    "format": "json",
    "reload": 30,
    "postProcess": function(data) {
      
      // Function to process (sort and calculate cummulative volume)
      function processData(list, type, desc) {
        
        // Convert to data points
        for(var i = 0; i < list.length; i++) {
          list[i] = {
            value: Number(list[i][0]),
            volume: Number(list[i][1]),
          }
        }
       
        // Sort list just in case
        list.sort(function(a, b) {
          if (a.value > b.value) {
            return 1;
          }
          else if (a.value < b.value) {
            return -1;
          }
          else {
            return 0;
          }
        });
        
        // Calculate cummulative volume
        if (desc) {
          for(var i = list.length - 1; i >= 0; i--) {
            if (i < (list.length - 1)) {
              list[i].totalvolume = list[i+1].totalvolume + list[i].volume;
            }
            else {
              list[i].totalvolume = list[i].volume;
            }
            var dp = {};
            dp["value"] = list[i].value;
            dp[type + "volume"] = list[i].volume;
            dp[type + "totalvolume"] = list[i].totalvolume;
            res.unshift(dp);
          }
        }
        else {
          for(var i = 0; i < list.length; i++) {
            if (i > 0) {
              list[i].totalvolume = list[i-1].totalvolume + list[i].volume;
            }
            else {
              list[i].totalvolume = list[i].volume;
            }
            var dp = {};
            dp["value"] = list[i].value;
            dp[type + "volume"] = list[i].volume;
            dp[type + "totalvolume"] = list[i].totalvolume;
            res.push(dp);
          }
        }
       
      }
      
      // Init
      var res = [];
      processData(data.bids, "bids", true);
      processData(data.asks, "asks", false);
      
      //console.log(res);
      return res;
    }
  },
  "graphs": [{
    "id": "bids",
    "fillAlphas": 0.1,
    "lineAlpha": 1,
    "lineThickness": 2,
    "lineColor": "#0f0",
    "type": "step",
    "valueField": "bidstotalvolume",
    "balloonFunction": balloon
  }, {
    "id": "asks",
    "fillAlphas": 0.1,
    "lineAlpha": 1,
    "lineThickness": 2,
    "lineColor": "#f00",
    "type": "step",
    "valueField": "askstotalvolume",
    "balloonFunction": balloon
  }, {
    "lineAlpha": 0,
    "fillAlphas": 0.2,
    "lineColor": "#000",
    "type": "column",
    "clustered": false,
    "valueField": "bidsvolume",
    "showBalloon": false
  }, {
    "lineAlpha": 0,
    "fillAlphas": 0.2,
    "lineColor": "#000",
    "type": "column",
    "clustered": false,
    "valueField": "asksvolume",
    "showBalloon": false
  }],
  "categoryField": "value",
  "chartCursor": {},
  "balloon": {
    "textAlign": "left"
  },
  "valueAxes": [{
    "title": "Volume"
  }],
  "categoryAxis": {
    "title": "Price (BTC/ETH)",
    "minHorizontalGap": 100,
    "startOnAxis": true,
    "showFirstLabel": false,
    "showLastLabel": false
  },
  "export": {
    "enabled": true
  }
});

function balloon(item, graph) {
  var txt;
  if (graph.id == "asks") {
    txt = "Ask: <strong>" + formatNumber(item.dataContext.value, graph.chart, 4) + "</strong><br />"
      + "Total volume: <strong>" + formatNumber(item.dataContext.askstotalvolume, graph.chart, 4) + "</strong><br />"
      + "Volume: <strong>" + formatNumber(item.dataContext.asksvolume, graph.chart, 4) + "</strong>";
  }
  else {
    txt = "Bid: <strong>" + formatNumber(item.dataContext.value, graph.chart, 4) + "</strong><br />"
      + "Total volume: <strong>" + formatNumber(item.dataContext.bidstotalvolume, graph.chart, 4) + "</strong><br />"
      + "Volume: <strong>" + formatNumber(item.dataContext.bidsvolume, graph.chart, 4) + "</strong>";
  }
  return txt;
}

function formatNumber(val, chart, precision) {
  return AmCharts.formatNumber(
    val, 
    {
      precision: precision ? precision : chart.precision, 
      decimalSeparator: chart.decimalSeparator,
      thousandsSeparator: chart.thousandsSeparator
    }
  );
}
</script>

<script type="text/javascript">
  //Handle starring for glyphicon and font awesome
    $("span").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("i");
      var fa = $this.hasClass("fa");

      //Switch states
       if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }

    });

    $("li.cc").click(function (){
      var idx = $(this).index();
      $("li.cc").eq(idx).attr("id", "favo");
    });

    /*$("li").click(function (){
      var li = $("li a span i.fa-star");
      if (li.is("li a span i.fa-star")) {
            li.attr("id", "favo");
        }
    });*/

    $("#fav").change(function(){
      if (this.checked) {
        $("li#favo").show();
        $("li#cc").hide();
      }else{
        $("li#favo").show();
        $("li#cc").show();
      }

    });



  $(document).ready(function(){
    $('.dropdown-submenu a.submenu').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });

</script>

<script type="text/javascript">
  var ul = $('ul:first.sidebar-menu'),
    ulHeight = ul.outerHeight();

ul.on('mousemove',
            function(e){
                var win = $(window),
                    cST = win.scrollTop();
                if (e.pageY>=(ulHeight/2)){
                    win.scrollTop(cST + 20);
                }
                else {
                    win.scrollTop(cST - 20);
                }
            });
</script>
</body>
</html>
