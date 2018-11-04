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
  <!-- Jquery UI -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
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
      font-size: 13px;
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



        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <section style="width: 100%;">
                <div class="info-box" style="">

                <div class="info-box-content" style="margin-right: 90px;">
                 <h1 style="font-weight: 300; font-size: 34px;">YOUR TRADE HISTORY</h1>
                 <div class="box box-default"  style="margin-top: 35px;">
                    <div class="box-header with-border">
                      <h3 class="box-title">Trade Analysis</h3>

                      <div class="pull-right">
                        <input type="text" name="" style="width: 5em; padding: 3px; border: 1px solid #999999;     border-radius: 4px;" placeholder="Coin"> / 
                        <select style="width: 5em; border-radius: 4px; padding: 3px;">
                          <option style="padding: 0px 2px 1px; font-weight: normal; display: block; white-space: pre; min-height: 1.2em;">BTC</option>
                          <option style="padding: 0px 2px 1px; font-weight: normal; display: block; white-space: pre; min-height: 1.2em;">USDC</option>
                          <option style="padding: 0px 2px 1px; font-weight: normal; display: block; white-space: pre; min-height: 1.2em;">ETH</option>
                        </select>

                        <input type="submit" style="width: 5em; padding: 3px;" value="Analyze">
                        <input type="submit" style="width: 5em; padding: 3px;" value="Clear">
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                      <p style="margin-top: 5px; margin-bottom: 5px;">To analyze your trades, enter a Coin name, select a Market, and click Analyze.</p>
                      <p style="margin-top: 5px; margin-bottom: 5px;">
                        <small style="font-size: 80%; font-style: italic;">
                          Tip: Click a coin name in the table below to quickly analyze that coin.</small>
                      </p>
                    </div>
                    <!-- /.box-body -->
                  </div>
                 <div id="date_filter" style="float: right;">
                    <h3 style="font-size: 20px;">Date Range Filter</h3>
                    <span id="date-label-from" class="date-label">From: </span><input class="date_range_filter date" type="text" id="datepicker_from" />
                    <span id="date-label-to" class="date-label">To:<input class="date_range_filter date" type="text" id="datepicker_to" />
                  </div>
                 
                  <!-- Market History -->
                  <table class="table" id="tradeHistoryTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>MARKET</th>
                        <th>TYPE</th>
                        <th>CATEGORY</th>
                        <th>PRICE/SHARE</th>
                        <th>AMOUNT</th>
                        <th>FEE</th>
                        <th>TOTAL</th>
                        <th>TRANSACTION DATE</th>
                      </tr>
                    </thead>
                     <tbody>
                     <?php
                        for ($i=0; $i <1 ; $i++) {?> 
                        <tr>
                         <td colspan="8">
                           <p><b>No Results</b></p>
                           <p>We didn't find any transactions within the specified search parameters. Try again or Clear All Filters to start over.</p>
                         </td>
                        </tr>   
                      <?php
                        }
                     ?>
                    </tbody>
                  </table>
                  <!-- End Balance Table -->

                  <p class="pad">Looking for your <a href="/depositHistory" class="standard">Deposit &amp; Withdrawal History</a>?</p>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->       
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
        
        
        </div>
        <!-- End Tab_1 -->

   

     
        
 




<!-- Canvas JS -->
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Jquery UI -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

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

<script type="text/javascript">
   $(function () {
    
    $('#tradeHistoryTable').DataTable({
      'paging'      : false,
      "aLengthMenu": [[25, 50, 75, -1], ["Buys & Sells", "Buys Only", "Sells Only", "Loan Earning"]].,
      'searching'   : true,
      'info'        : false,
      'lengthChange': true,
      'pagingType'  : 'full_numbers',
      'responsive'  : true,
      "dom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
      'autoWidth'   : false
    })
  })

   $(function() {
  var oTable = $('#tradeHistoryTable').DataTable({
    "oLanguage": {
      "sSearch": "Filter Data"
    },
    "iDisplayLength": -1,
    "sPaginationType": "full_numbers",

  });




  $("#datepicker_from").datepicker({
    "onSelect": function(date) {
      minDateFilter = new Date(date).getTime();
      oTable.fnDraw();
    }
  }).keyup(function() {
    minDateFilter = new Date(this.value).getTime();
    oTable.fnDraw();
  });

  $("#datepicker_to").datepicker({
    "onSelect": function(date) {
      maxDateFilter = new Date(date).getTime();
      oTable.fnDraw();
    }
  }).keyup(function() {
    maxDateFilter = new Date(this.value).getTime();
    oTable.fnDraw();
  });

});

// Date range filter
minDateFilter = "";
maxDateFilter = "";

$.fn.dataTableExt.afnFiltering.push(
  function(oSettings, aData, iDataIndex) {
    if (typeof aData._date == 'undefined') {
      aData._date = new Date(aData[0]).getTime();
    }

    if (minDateFilter && !isNaN(minDateFilter)) {
      if (aData._date < minDateFilter) {
        return false;
      }
    }

    if (maxDateFilter && !isNaN(maxDateFilter)) {
      if (aData._date > maxDateFilter) {
        return false;
      }
    }

    return true;
  }
);
</script>

</body>
</html>
