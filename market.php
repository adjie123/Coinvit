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
  <!-- Carousel Tiny -->
  <link rel="stylesheet" type="text/css" href="dist/css/tinycarousel.css" media="screen">
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
      <?php include 'menu-header.php';?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->


            <section style="width: 100%;">
              <div class="box">
                <div class="box-header" style="padding-left: 12%; padding-right: 12%;">
                  
                    <!--Four Column Layout-->

                  <div class="column-4-asset">
                     <div id="slider1">
                      <div class="viewport">
                        <ul class="overview">
                          <li><img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" /></li>
                          <li><img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20stellar.png" /></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="column-4-asset">
                    <div id="slider2">
                      <div class="viewport">
                        <ul class="overview">
                          <li><img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" /></li>
                          <li><img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20stellar.png" /></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="column-4-asset ">
                    <div id="slider3">
                      <div class="viewport">
                        <ul class="overview">
                          <li><img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" /></li>
                          <li><img src="dist/images/picture3.jpg" /></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="column-4-asset">
                    <div id="slider4">
                      <div class="viewport">
                        <ul class="overview">
                          <li><img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20stellar.png" eight="100%" width="100%"/></li>
                          <li><img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" /></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="background-color: #d92b60; color: #fff;">
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

                  <div class="column-4-asset ">
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
                   <div class="text-center" style="margin-right: 8px; margin-left: 8px;">
                    <button type="button" class="btn btn-danger" style="padding: 10px; margin: 8px;">TOKEN</button>
                    <button type="button" class="btn btn-warning" style="padding: 10px; margin: 8px; padding-right: 15px; padding-left: 15px;">FIAT</button>
                  </div> 
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation">
                      <a href="#fav" aria-controls="favorite" role="tab" data-toggle="tab">
                        <i class="fa fa-star text-yellow"></i>
                         Favorites
                      </a>
                    </li>
                    <li role="presentation" class="active"><a href="#usdt" aria-controls="usdt" role="tab" data-toggle="tab">USDT</a></li>
                    <?php 
                      for ($i=0; $i <10 ; $i++) { 
                    ?>
                    <li role="presentation"><a href="#btc" aria-controls="btc" role="tab" data-toggle="tab">BTC</a></li>
                    <?php } ?>

                    <li class="pull-right">
                      <input type="text" name="" style="margin: 3px; padding: 3px; border: 1px solid #999999;     border-radius: 4px;" placeholder="Search"> 
                    </li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="fav">
                      <!-- Market History -->
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th style="width: 25px;"></th>
                            <th style="width: 145px;">MARKET</th>
                            <th style="width: 150px;">CURRENCY</th>
                            <th style="width: 150px;">VOLUME</th>
                            <th style="width: 142px;">% CHANGE</th>
                            <th style="width: 145px;">LAST PRICE</th>
                            <th style="width: 165px;">24HR HIGH</th>
                            <th style="width: 160px;">24HR LOW</th>
                            <th style="width: 155px;">% SPREAD</th>
                            <th style="width: 150px;">ADDED</th>
                          </tr>
                        </thead>
                         <tbody>
                         <?php
                            for ($i=0; $i <20 ; $i++) {?> 
                            <tr id="fav-asset">
                              <td><i class="fa fa-star text-yellow"></i></td>
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

                    <div role="tabpanel" class="tab-pane active" id="usdt">
                      <!-- Market History -->
                      <table class="table table-hover" id="coin-asset">
                        <thead>
                          <tr>
                            <th style="width: 25px;"></th>
                            <th style="width: 145px;">MARKET</th>
                            <th style="width: 150px;">CURRENCY</th>
                            <th style="width: 150px;">VOLUME</th>
                            <th style="width: 142px;">% CHANGE</th>
                            <th style="width: 145px;">LAST PRICE</th>
                            <th style="width: 165px;">24HR HIGH</th>
                            <th style="width: 160px;">24HR LOW</th>
                            <th style="width: 155px;">% SPREAD</th>
                            <th style="width: 150px;">ADDED</th>
                          </tr>
                        </thead>
                         <tbody>
                         <?php
                            for ($i=0; $i <20 ; $i++) {?> 
                            <tr>
                              <td class="cc" id="cc"><span><i class="fa fa-star-o text-yellow"></i></span></td>
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
                <!-- ./box-body -->
                <div class="box-footer" style="padding-left: 12%; padding-right: 12%;">
                  
                  <!--Four Column Layout-->

                  <div class="column-4-asset">
                     <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" />
                  </div>

                  <div class="column-4-asset ">
                    <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" />
                  </div>

                  <div class="column-4-asset  border-right">
                    <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" />
                  </div>

                  <div class="column-4-asset">
                    <img src="https://www.mystellar.org/GALLERYALBUM/Stellar/Banner%206%20-%20RESERVED.png" height="100%" width="100%" />
                  </div>
                </div>
                <!-- /.box-footer -->   
            </section>
        
    <?php include 'footer.php' ?>


<!-- Canvas JS -->
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<!-- JS Carousel -->
<script src="dist/js/jquery.tinycarousel.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
       $("#slider1").tinycarousel({
          interval: true,
          axis   : "y"
        });
       $("#slider2").tinycarousel({
          interval: true,
          axis   : "y"
        });
       $("#slider3").tinycarousel({
          interval: true,
          axis   : "y"
        });
       $("#slider4").tinycarousel({
          interval: true,
          axis   : "y"
        });
    });
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

    $("td.cc").click(function (){
      var idx = $(this).index();
      $("tr#fav-asset").eq(idx).attr("id", "favo");
      $("tr#favo").css('display','');
    });

    /*$("li").click(function (){
      var li = $("li a span i.fa-star");
      if (li.is("li a span i.fa-star")) {
            li.attr("id", "favo");
        }
    });*/

    $("#fav").click(function(){
      $("tr#favo").show();
    });



  $(document).ready(function(){
    $("tr#fav-asset").hide();
    $("tr.favo").show();
    $('.dropdown-submenu a.submenu').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });

</script>

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
<script type="text/javascript">
  $('#coin-asset').DataTable({
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
</script>



</body>
</html>
