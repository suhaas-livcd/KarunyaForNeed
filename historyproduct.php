<?php
   session_start();
   error_reporting(0);
  //    if(!isset($_SESSION['loginuser'])){
  //      header('Location:login.php');
  //}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="G Suhaas Srinivas" content="KFN">

    <title>KFN</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box ">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="Seller.html" class="logo"><b>KFN</b></a>
            <!--logo end-->
            <div class="nav notify-row " id="top_menu">
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php>"<i class="fa fa-user"></i> &nbsp;&nbsp;Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="profile.html"><img src="assets/img/ui-suhaas.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered">Welcome Seller</h5>

                    <li class="mt">
                        <a class="active" href="Seller.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>



                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-binoculars"></i>
                            <span>Spec All</span>
                        </a>
                        <ul class="sub">
                            <li><a href="books.html"><i class="fa fa-book"></i>Books</a></li>
                            <li><a href="Transport.html"><i class="fa fa-bicycle"></i>Transport</a></li>
                            <li><a href="Comfort.html"><i class="fa fa-bed"></i>Comfort</a></li>
                            <li><a href="Wearables.html"><i class="fa fa-shopping-bag"></i>Wearables</a></li>
                            <li><a href="Electrical.html"><i class="fa fa-lightbulb-o"></i>Electrical</a></li>
                            <li><a href="Music.html"><i class="fa fa-music"></i>Music</a></li>
                            <li><a href="SoftProject.html"><i class="fa fa-code"></i>Soft Project</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span>Product</span>
                        </a>
                        <ul class="sub">
                            <li><a href="">View Products</a></li>
                            <li><a href="">History</a></li>
                            <li><a href="">Launch</a></li>
                        </ul>
                    </li>






                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i>Watch your History !</h3>
          	<hr>
		<div class="row mt">
		<div class="col-lg-12">
                
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Mr.Suhaas Srinivas Gandham</h4>
	                  	  	  <hr>  
                              <thead>
                                  <tr>
                                  <th><i class="fa fa-key"></i>ID</th>
                                  <th class="hidden-phone"><i class="fa fa-product-hunt"></i>Name</th>
                                  <th><i class=" fa fa-folder-open"></i>Category</th>
                                  <th><i class=" fa fa-bullhorn"></i>Status</th>
                                  <th><i class=" fa fa-calendar"></i>Used For</th>
                                  <th><i class=" fa fa-money"></i>Selling Price</th>
                                  <th></th>
                                    </tr>
                              </thead>
                              <tbody>
                                  <?php include './iconfig.php';
                                  $phonenohis=$_SESSION['phoneno'];
                                  $mailidhis=$_SESSION['emailid'];
                                  $sql = $db->query("SELECT * FROM `products` WHERE pphoneno='$phonenohis' && pmailid='$mailidhis'");
                                  if(isset($sql) && count($sql)) :  foreach ($sql as $key => $row) : ?>                              
                                  <tr class="show1">
                                  <td><a href="basic_table.html#"><?php echo $row['pid']; ?></a></td>
                                  <td class="hidden-phone"><?php echo $row['pname']; ?></td>
                                  <td><?php echo $row['pcategory']; ?></td>
                                  <td><span class="label label-<?php if($row['pstatus']=='In stock'){echo 'warning';}else{echo 'success';}?> label-mini"><?php echo $row['pstatus']; ?></span></td>
                                  <td><?php echo $row['puseddays']; ?></td>
                                  <td><?php echo $row['psp'].' '; ?><i class=" fa fa-inr"></i></td>
                                  <td>
                                      <button class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i><span class="action"><a href="#" id="<?php echo $row['pid']; ?>" class="delete" title="Delete"></a></span></button>
                                  </td>
                              </tr>
                              <?php endforeach; endif; ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
          	</div><!-- col-lg-12-->    
                 </div><!-- /row -->
                                

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2016 - KarunyaForNeed
                <a href="seller.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script type="application/javascript">
   $(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "delete.php",
   data: info,
   success: function(){
 }
});
  $(this).parents(".show1").animate({ backgroundColor: "#003" }, "slow")
  .animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
   
   
   
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


</body>
</html>
