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
  </style>

  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
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
      </header>
      <!-- Left side column. contains the logo and sidebar -->



        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
           
          <section>
          <div class="row">
              <div class="col-md-12">
                <div class="box">
                  <!-- /.box-header -->
                  <div class="box-body" style="background-color: #d92b60; color: #fff; margin-top: -5px;">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <p style="font-size: 50px;">Bitcoin (BTC)</p>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4">
                        <div class="row" style="margin-top: 15px;"> 
                        <div class="col-md-6">  
                          <span style="font-size: 25px;">Last Price:</span>
                        </div>
                        <div class="col-md-6">  
                          <span style="font-size: 25px;">0.99600000 USD</span>
                        </div>
                      </div>

                      <div class="row"> 
                        <div class="col-md-6">  
                          <span style="font-size: 25px;">24hr Volume:</span>
                        </div>
                        <div class="col-md-6">  
                          <span style="font-size: 25px;">1295170.80 USD</span>
                        </div>
                      </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4 text-center">
                        <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                        width="100" height="100">
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- ./box-body -->
                  <div class="box-footer" style="background-color: #2b3341; color: #fff;">
                  <div class="container">
                    
                    <div class="row">
                      <div class="col-md-3">
                        <div class="col-md-4">
                          <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                          width="80" height="80">
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8 text-right border-right">
                          <p style="color: #c3c3c3;" class="asset-komp">Top Volume</p>
                          <p style="font-size: 20px; color: #c3c3c3;" class="asset-komp">Bitcon (BTC)</p>
                          <p style="font-size: 20px; font-style: bold;" class="asset-komp">625971.56 USD</p>
                          <p style="font-size: 15px;" class="text-red asset-komp">0.8 <i class="fa fa-caret-down"></i></p>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-3">
                        <div class="col-md-4">
                          <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                          width="80" height="80">
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8 text-right border-right">
                          <p style="color: #c3c3c3;" class="asset-komp">Top Volume</p>
                          <p style="font-size: 20px; color: #c3c3c3;" class="asset-komp">Bitcon (BTC)</p>
                          <p style="font-size: 20px; font-style: bold;" class="asset-komp">625971.56 USD</p>
                          <p style="font-size: 15px;" class="text-green asset-komp">0.12 <i class="fa fa-caret-up"></i></p>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-3">
                        <div class="col-md-4">
                          <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                          width="80" height="80">
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8 text-right border-right">
                          <p style="color: #c3c3c3;" class="asset-komp">Top Volume</p>
                          <p style="font-size: 20px; color: #c3c3c3;" class="asset-komp">Bitcon (BTC)</p>
                          <p style="font-size: 20px; font-style: bold;" class="asset-komp">625971.56 USD</p>
                          <p style="font-size: 15px;" class="text-green asset-komp">0.6 <i class="fa fa-caret-up"></i></p>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-3">
                        <div class="col-md-4">
                          <img src="https://bittrexblobstorage.blob.core.windows.net/public/ddbdafb2-e267-4114-abc3-06316cf3bef9.png"
                          width="80" height="80">
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8 text-right">
                          <p style="color: #c3c3c3;" class="asset-komp">Top Volume</p>
                          <p style="font-size: 20px; color: #c3c3c3;" class="asset-komp">Bitcon (BTC)</p>
                          <p style="font-size: 20px; font-style: bold;" class="asset-komp">625971.56 USD</p>
                          <p style="font-size: 15px;" class="text-red asset-komp">0.8 <i class="fa fa-caret-down"></i></p>
                        </div>
                      </div>
                      <!-- /.col -->
                     
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /. container -->
                  </div>
                  <!-- /.box-footer -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="info-box" style="margin-top: -20px; background-color: #2b3341; color: #c3c3c3;">

              <div class="info-box-content" style="margin-right: 90px;">

                <h3 style="margin-bottom: 20px;">USDT MARKET</h3>
                <!-- Market History -->
                <table class="table table-hover" id="mh" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>MARKET</th>
                      <th>CURRENCY</th>
                      <th>VOLUME</th>
                      <th>% CHANGE</th>
                      <th>LAST PRICE</th>
                      <th>24HR HIGH</th>
                      <th>24HR LOW</th>
                      <th>% SPREAD</th>
                      <th>ADDED</th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php
                      for ($i=0; $i <20 ; $i++) {?> 
                      <tr>
                        <td>USD-BTC</td>
                        <td>Bitcoin</td>
                        <td>1286578.70</td>
                        <td class="text-red">-0.1 <i class="fa fa-caret-down"></i></td>
                        <td>7154.88900000</td>
                        <td>7325.00000000</td>
                        <td>7011.00000000</td>
                        <td>0.0</td>
                        <td>05/31/2018</td>
                      </tr>   
                    <?php
                      }
                   ?>
                  </tbody>
                </table>
                <!-- End Market History -->

                <h3 style="margin-top: 50px; margin-bottom: 20px;">BITCOIN MARKET</h3>
                <!-- Market History -->
                <table class="table table-hover" id="mh" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>MARKET</th>
                      <th>CURRENCY</th>
                      <th>VOLUME</th>
                      <th>% CHANGE</th>
                      <th>LAST PRICE</th>
                      <th>24HR HIGH</th>
                      <th>24HR LOW</th>
                      <th>% SPREAD</th>
                      <th>ADDED</th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php
                      for ($i=0; $i <20 ; $i++) {?> 
                      <tr>
                        <td>USD-BTC</td>
                        <td>Bitcoin</td>
                        <td>1286578.70</td>
                        <td class="text-green">0.3 <i class="fa fa-caret-up"></i></td>
                        <td>7154.88900000</td>
                        <td>7325.00000000</td>
                        <td>7011.00000000</td>
                        <td>0.0</td>
                        <td>05/31/2018</td>
                      </tr>   
                    <?php
                      }
                   ?>
                  </tbody>
                </table>
                <!-- End Market History -->

                <h3 style="margin-top: 50px; margin-bottom: 20px;">ETHEREUM MARKET</h3>
                <!-- Market History -->
                <table class="table table-hover" id="mh" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>MARKET</th>
                      <th>CURRENCY</th>
                      <th>VOLUME</th>
                      <th>% CHANGE</th>
                      <th>LAST PRICE</th>
                      <th>24HR HIGH</th>
                      <th>24HR LOW</th>
                      <th>% SPREAD</th>
                      <th>ADDED</th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php
                      for ($i=0; $i <20 ; $i++) {?> 
                      <tr>
                        <td>USD-BTC</td>
                        <td>Bitcoin</td>
                        <td>1286578.70</td>
                        <td class="text-green">0.4 <i class="fa fa-caret-up"></i></td>
                        <td>7154.88900000</td>
                        <td>7325.00000000</td>
                        <td>7011.00000000</td>
                        <td>0.0</td>
                        <td>05/31/2018</td>
                      </tr>   
                    <?php
                      }
                   ?>
                  </tbody>
                </table>
                <!-- End Market History -->

                <h3 style="margin-top: 50px; margin-bottom: 20px;">USDT MARKET</h3>
                <!-- Market History -->
                <table class="table table-hover" id="mh" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>MARKET</th>
                      <th>CURRENCY</th>
                      <th>VOLUME</th>
                      <th>% CHANGE</th>
                      <th>LAST PRICE</th>
                      <th>24HR HIGH</th>
                      <th>24HR LOW</th>
                      <th>% SPREAD</th>
                      <th>ADDED</th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php
                      for ($i=0; $i <20 ; $i++) {?> 
                      <tr>
                        <td>USD-BTC</td>
                        <td>Bitcoin</td>
                        <td>1286578.70</td>
                        <td class="text-red">-0.2 <i class="fa fa-caret-down"></i></td>
                        <td>7154.88900000</td>
                        <td>7325.00000000</td>
                        <td>7011.00000000</td>
                        <td>0.0</td>
                        <td>05/31/2018</td>
                      </tr>   
                    <?php
                      }
                   ?>
                  </tbody>
                </table>
                <!-- End Market History -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </section>
         
        <footer>
        <div class="container"> 
          <div class="row">
            <div class="col-md-3">
              <h2 style="color: white;">ABOUT COINVIT</h2>
              <h4><a href="#">Contact Us</a></h4>
              <h4><a href="#">Fees</a></h4>
              <h4><a href="#">Privacy Policy</a></h4>
              <h4><a href="#">Terms of Use</a></h4>
            </div>
            <div class="col-md-3">
              <h2 style="color: white;">SUPPORT</h2>
              <h4><a href="#">++ Contact Support ++</a></h4>
              <h4><a href="#">Guides</a></h4>
              <h4><a href="#">++ SUBMIT A TOKEN ++</a></h4>
              <h4><a href="#">REPORT Abuse</a></h4>
              <h4><a href="#">API Documentation</a></h4>
            </div>
            <div class="col-md-3">
              <h2 style="color: white;">NEWS</h2>
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
        </div>
        </footer>
        
        
        </div>
        <!-- End Tab_1 -->

        <div class="tab-pane" id="tab_2" style="background-color: white;">
          <table id="datatable" class="display  table table-hover" width="100%" cellspacing="0">
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
<!-- jvectormap  -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/amstock.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

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


    $(".slide-toggle").click(function(){
    $(".chat").animate({
      width: "toggle"
    });
  });

  $(document).ready(function(){
    $('.dropdown-submenu a.submenu').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });



  
</script>


</body>
</html>
