<?php 
require('db.php');
if(isset($_POST['submit'])){  
     $Serv = $_POST['Service'];
     $Des = $_POST['Description']; 
     $Data = ['Service' => $Serv,
              'Description' => $Des,
          ];
     //  echo "<script>console.log('Debug Objects: " . $Data . "' );</script>";
     $database = $factory->createDatabase();
      $ServiceRef = $database->getReference('Services/')->push($Data);  
      $ServiceKey = $ServiceRef->getKey();
       if($ServiceKey){
                    echo '<script>window.location="AddService.php?msg=Service Added Successfull";</script>';
                }else{
                      echo '<script>window.location="AddServices.php?dgr=Service Added Fail Try Again";</script>';
                }     
       }
  //  echo "<script>console.log('Debug Objects: " . $ServiceKey . "' );</script>";
 
?>



<!DOCTYPE html>
<html>
    <head>
        <title>pink-desh</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/metisMenu.css" rel="stylesheet">
        <link href="../css/morris-0.4.3.min.css" rel="stylesheet">
        <!-- DATATABLES-->
        <link rel="stylesheet" href="../css/dataTables.colVis.css">
        <link rel="stylesheet" href="../css/dataTables.bootstrap.css">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/modernizr.js"></script>
        <style>
h6 {
  color: black;
  font-family: verdana;
  font-size: 100%;
  text-align:left;
}
p  {
  color: red;
  font-family: courier;
  font-size: 160%;
}
</style>
    </head>
    <body class="fixed-left">
        <div id="wrapper">

            <!--top bar-->
              <?php  require('components/topbar.php') ?>
            <!--end top bar-->

            <!--left menu start-->
            <?php  require('components/leftmenu.php') ?>
            <!--left menu end-->
            <div class="content-page  equal-height">
                <div class="content">
                    <div class="container">
                        <div class="page-title">
                            <h3>Services</h3>
                            <a href="#"><i class="fa fa-plus"></i> Add service</a>
                        
                        </div><!--end page title-->
                     <div class="container">
            <div class="row">
                <div class="locksreen-col text-center">
                    <h3>Add Service </h3>
                    <form class="m-t" role="form" action="AddService.php" method="POST">
                         <div class="form-group">
                            <H6>Add Serive TiTle</H6>
                            <input type="text" class="form-control" name="Service" placeholder="Enter Title" required="">
                        </div>
                        <div class="form-group">
                            <H6 style=>Add Serive Description</H6>
                            <TEXTAREA type="text" class="form-control" name="Description" placeholder="Passowrd" required=""> </TEXTAREA> 
                        </div>
                        <button type="submit" name="submit" class="btn btn-theme btn-lg btn-block ">Submit</button><br>
                        
                    </form>
                </div>
            </div>
        </div>
                    </div><!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
        </div>
         <div class="footer">
                <span>Copyright &copy; 2016. Pink-Desh.</span>
        </div>
        <!-- Plugins  -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.slimscroll.js"></script>
        <script src="../js/metisMenu.js"></script>
         <script src="../js/core.js"></script>
        <script src="../js/mediaquery.js"></script>
        <script src="../js/equalize.js"></script>
        <script src="../js/app.js"></script>
        <!-- DATATABLES-->
        <script src="../js/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables.colVis.js"></script>
        <script src="../js/dataTables.bootstrap.js"></script>
        <script src="../js/demo-datatable.js"></script>
    </body>
</html>
