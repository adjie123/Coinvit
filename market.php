<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coinvit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
   <!-- Fixed Column -->
  <link rel="stylesheet" type="text/css" href="dist/css/column-fixed.css">

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
      background-color: #373435;
    border-color: #373435;
    }

    body{
      width: 1590px;
      overflow-x: scroll;
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
      background-color: #373435;
    border-color: #373435;
    }

    .chat{
        display: none;
        width: 350px;
        left: 0;
        position: fixed;
        top: 50%;
        margin-top: -2.5em;
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

    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
      background-color: #9ea29e;
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

    .asset-komp{
      margin-bottom: 0px;
    }

    .box .border-right {
      border-right: 1px solid #848484;
    }

    .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; margin-right: 90px; margin-left: 90px;}


   .scroll-market tbody{
    height: 700px;
    display:block;
    overflow:auto;
    width: 100%;
  }
  .scroll-market thead tr{
  display:block;
  width: 100%;
  } 


  </style>

  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
  <div class="wrapper">

    <header class="main-header">
      <nav>    
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
      </header>
      <!-- Left side column. contains the logo and sidebar -->


            <section style="width: 100%;">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body" style="background-color: #d92b60; color: #fff; margin-top: -5px;">
                  <!--Three Column Layout-->
                  <div class="column-3-left-mh text-center">
                    <p style="font-size: 50px;">Bitcoin (BTC)</p>
                  </div>

                  <div class="column-3-middle-mh" style="margin-top: 15px;">
                    <!--Two Column Layout-->
                    <div class="column-2-left-mh">
                      <p style="font-size: 25px;">Last Price:</p>
                      <p style="font-size: 25px;">24hr Volume:</p>
                    </div>
                    <div class="column-2-right-mh">
                      <p style="font-size: 25px;">0.99600000 USD</p>
                      <p style="font-size: 25px;">1295170.80 USD</p>
                    </div>
                  </div>

                  <div class="column-3-right-mh text-center">
                    <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                      width="100" height="100">
                  </div>
                </div>
                <!-- ./box-body -->
                <div class="box-footer" style="padding-left: 12%; padding-right: 12%;">
                  
                  <!--Four Column Layout-->

                  <div class="column-4-asset border-right">
                     <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                          width="80" height="80" style="float: left; margin-right: 5px;">

                    <div class="text-right" style="margin-right: 8px;">
                      <p style="color: #c3c3c3;" class="asset-komp">Top Volume</p>
                      <p style="font-size: 20px; color: #c3c3c3;" class="asset-komp">Bitcon (BTC)</p>
                      <p style="font-size: 20px; font-style: bold;" class="asset-komp">625971.56 USD</p>
                      <p style="font-size: 15px;" class="text-red asset-komp">0.8 <i class="fa fa-caret-down"></i></p>
                    </div>
                  </div>

                  <div class="column-4-asset  border-right">
                    <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                          width="80" height="80" style="float: left; margin-right: 5px;">

                    <div class="text-right" style="margin-right: 8px;">
                      <p style="color: #c3c3c3;" class="asset-komp">Top Volume</p>
                      <p style="font-size: 20px; color: #c3c3c3;" class="asset-komp">Bitcon (BTC)</p>
                      <p style="font-size: 20px; font-style: bold;" class="asset-komp">625971.56 USD</p>
                      <p style="font-size: 15px;" class="text-red asset-komp">0.8 <i class="fa fa-caret-down"></i></p>
                    </div>
                  </div>

                  <div class="column-4-asset  border-right">
                    <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                          width="80" height="80" style="float: left; margin-right: 5px;">

                    <div class="text-right" style="margin-right: 8px;">
                      <p style="color: #c3c3c3;" class="asset-komp">Top Volume</p>
                      <p style="font-size: 20px; color: #c3c3c3;" class="asset-komp">Bitcon (BTC)</p>
                      <p style="font-size: 20px; font-style: bold;" class="asset-komp">625971.56 USD</p>
                      <p style="font-size: 15px;" class="text-red asset-komp">0.8 <i class="fa fa-caret-down"></i></p>
                    </div>
                  </div>

                  <div class="column-4-asset">
                    <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                          width="80" height="80" style="float: left; margin-right: 5px;">

                    <div class="text-right" style="margin-right: 8px;">
                      <p style="color: #c3c3c3;" class="asset-komp">Top Volume</p>
                      <p style="font-size: 20px; color: #c3c3c3;" class="asset-komp">Bitcon (BTC)</p>
                      <p style="font-size: 20px; font-style: bold;" class="asset-komp">625971.56 USD</p>
                      <p style="font-size: 15px;" class="text-red asset-komp">0.8 <i class="fa fa-caret-down"></i></p>
                    </div>
                  </div>
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
                <div class="card">  
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#usdt" aria-controls="usdt" role="tab" data-toggle="tab">USDT</a></li>
                    <li role="presentation"><a href="#btc" aria-controls="btc" role="tab" data-toggle="tab">BTC</a></li>
                    <li role="presentation"><a href="#eth" aria-controls="eth" role="tab" data-toggle="tab">ETH</a></li>
                    <li role="presentation"><a href="#xlm" aria-controls="xlm" role="tab" data-toggle="tab">XLM</a></li>

                    <li class="pull-right">
                      <input type="text" name="" style="margin: 3px; padding: 3px; border: 1px solid #999999;     border-radius: 4px;" placeholder="Search"> 
                    </li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="usdt">
                      <!-- Market History -->
                      <table class="table table-hover scroll-market">
                        <thead>
                          <tr>
                            <th style="width: 150px;">MARKET</th>
                            <th style="width: 150px;">CURRENCY</th>
                            <th style="width: 150px;">VOLUME</th>
                            <th style="width: 150px;">% CHANGE</th>
                            <th style="width: 160px;">LAST PRICE</th>
                            <th style="width: 160px;">24HR HIGH</th>
                            <th style="width: 160px;">24HR LOW</th>
                            <th style="width: 150px;">% SPREAD</th>
                            <th style="width: 150px;">ADDED</th>
                          </tr>
                        </thead>
                         <tbody>
                         <?php
                            for ($i=0; $i <20 ; $i++) {?> 
                            <tr>
                              <td style="width: 150px;">USD-BTC</td>
                              <td style="width: 150px;">Bitcoin</td>
                              <td style="width: 150px;">1286578.70</td>
                              <td class="text-red" style="width: 150px;">-0.1 <i class="fa fa-caret-down"></i></td>
                              <td style="width: 150px;">7154.88900000</td>
                              <td style="width: 165px;">7325.00000000</td>
                              <td style="width: 165px;">7011.00000000</td>
                              <td style="width: 160px;">0.0</td>
                              <td style="width: 160px;">05/31/2018</td>
                            </tr>   
                          <?php
                            }
                         ?>
                        </tbody>
                      </table>
                      <!-- End Market History -->
                    </div>
                    <!-- End tab-pane -->
                    
                    <div role="tabpanel" class="tab-pane" id="btc">
                      <!-- Market History -->
                      <table class="table table-hover scroll-market" id="mh" width="100%" cellspacing="0">
                         <thead>
                          <tr>
                            <th style="width: 150px;">MARKET</th>
                            <th style="width: 150px;">CURRENCY</th>
                            <th style="width: 150px;">VOLUME</th>
                            <th style="width: 150px;">% CHANGE</th>
                            <th style="width: 160px;">LAST PRICE</th>
                            <th style="width: 160px;">24HR HIGH</th>
                            <th style="width: 160px;">24HR LOW</th>
                            <th style="width: 150px;">% SPREAD</th>
                            <th style="width: 150px;">ADDED</th>
                          </tr>
                        </thead>
                         <tbody>
                         <?php
                            for ($i=0; $i <20 ; $i++) {?> 
                            <tr>
                              <td style="width: 150px;">USD-BTC</td>
                              <td style="width: 150px;">Bitcoin</td>
                              <td style="width: 150px;">1286578.70</td>
                              <td class="text-green" style="width: 150px;">-0.1 <i class="fa fa-caret-up"></i></td>
                              <td style="width: 150px;">7154.88900000</td>
                              <td style="width: 165px;">7325.00000000</td>
                              <td style="width: 165px;">7011.00000000</td>
                              <td style="width: 160px;">0.0</td>
                              <td style="width: 160px;">05/31/2018</td>
                            </tr>   
                          <?php
                            }
                         ?>
                        </tbody>
                        </table>
                        <!-- End Market History -->
                    </div>
                    <!-- End tab-pane -->

                    <div role="tabpanel" class="tab-pane" id="eth">
                    </div>
                    <!-- End tab-pane -->
                    <div role="tabpanel" class="tab-pane" id="xlm">
                    </div>
                    <!-- End tab-pane -->

                  </div>
                  <!-- End tab-content -->
                </div>
                <!-- End card -->               
            </section>
        
         <footer class="main-footer" style="margin-left: 0;">
          <div class="row">
            <div class="col-md-3 col-xs-3">
              <h2 style="color: white;">ABOUT COINVIT</h2>
              <h4><a href="#">Contact Us</a></h4>
              <h4><a href="#">Fees</a></h4>
              <h4><a href="#">Privacy Policy</a></h4>
              <h4><a href="#">Terms of Use</a></h4>
            </div>
            <div class="col-md-3 col-xs-3">
              <h2 style="color: white;">SUPPORT</h2>
              <h4><a href="#">++ Contact Support ++</a></h4>
              <h4><a href="#">Guides</a></h4>
              <h4><a href="#">++ SUBMIT A TOKEN ++</a></h4>
              <h4><a href="#">REPORT Abuse</a></h4>
              <h4><a href="#">API Documentation</a></h4>
            </div>
            <div class="col-md-3 col-xs-3">
              <h2 style="color: white;">NEWS</h2>
              <h4><a href="#">Press Release</a></h4>
              <h4><a href="#">Follow us on Twitter</a></h4>
            </div>
            <div class="col-md-3 col-xs-3">
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



<!-- Canvas JS -->
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/amstock.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>



</body>
</html>
