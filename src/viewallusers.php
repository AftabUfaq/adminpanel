<?php 
require('auth.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-Mechnaic</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/metisMenu.css" rel="stylesheet">
        <link href="../css/morris-0.4.3.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/dataTables.colVis.css">
        <link rel="stylesheet" href="../css/dataTables.bootstrap.css">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/modernizr.js"></script>
                
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
                            <h3>All Users</h3>
                        </div><!--end page title-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-box">
                                    <div class="table-responsive">
                                          <table id="basic-datatables" class="table table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>View Details</th>
                                                 <th>Manage Account</th>
                                                <th>Delete Account</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                        
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>View Details</th>
                                                <th>Manange Account</th>
                                                <th>Delete Account</th>
                                            </tr>
                                         
                                        </tfoot>
                                        <tbody>

                                         <?php 
                                            $users = $auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);
                                             $i = 1 ;
                                             foreach ($users as $user) {
                                             
                                         ?>  

                                            <tr>
                                                 <td><?php echo $i++ ?></td>
                                                 <td>Name</td>
                                                 <td><?php echo $user->email ?></td>
                                                 <td> <a onclick="return confirm('Are you sure to Delete')"; href="#" class="btn btn-info btn-lg">View Details</a></td>
                                                 <?php if($user->disabled) { ?>
                                                     <td>  <a onclick="return confirm('Are you sure to Enable Account')"; href="enable_user.php?id=<?php echo $user->uid ?>" class="btn btn-success btn-lg">Enable Account</a></td>
                                                  <?php }else{  ?>   
                                                 <td> <a onclick="return confirm('Are you sure to Disable Account')"; href="disable_user.php?id=<?php echo $user->uid ?>" class="btn btn-warning btn-lg">Disable Account</a></td>
                                                  <?php }?>
                                                 <td> <a onclick="return confirm('Are you sure to Delete')"; href="del_user.php?id=<?php echo $user->uid ?>" class="btn btn-danger btn-lg">Delete User</a></td>
                                               
                                            </tr>
                                   <?php } ?>            
                                        </tbody>
                                    </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--content-->               
                </div><!--content page-->
            </div><!--end wrapper-->
       
        </div>
        <div class="footer">
            <span>Trust, Transparent and Conssitency With E-MEechanic @copyright 2020</span>
        </div>
        <!-- Plugins  -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.slimscroll.js"></script>
        <script src="../js/metisMenu.js"></script>
        <script src="../js/moment.js"></script>  
        <script src="../js/jquery.sparkline.min.js"></script>
        <script src="../js/jquery.flot.js"></script>
        <script src="../js/jquery.flot.time.js"></script>
        <script src="../js/jquery.flot.tooltip.min.js"></script>
        <script src="../js/jquery.flot.resize.js"></script>
        <script src="../js/jquery.flot.pie.js"></script>
        <script src="../js/jquery.flot.selection.js"></script>
        <script src="../js/jquery.flot.stack.js"></script>
        <script src="../js/jquery.flot.crosshair.js"></script>
        <script src="../js/raphael-2.1.0.min.js"></script>
        <script src="../js/morris.js"></script>
        <script src="../js/Chart.min.js"></script>
        <script src="../js/core.js"></script>
        <script src="../js/mediaquery.js"></script>
        <script src="../js/equalize.js"></script>
        <script src="../js/app.js"></script>
        
        <script src="../js/core.js"></script>
        

        <script src="../js/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables.colVis.js"></script>
        <script src="../js/dataTables.bootstrap.js"></script>
        <script src="../js/demo-datatable.js"></script>
    </body>
</html>
