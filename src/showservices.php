<?php
   require('db.php');
   $database = $factory->createDatabase();
   $reference = $database->getReference('Services');
   $snapshot = $reference->getSnapshot()->getValue();
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
                            <a href="Addservice.php"><i class="fa fa-plus"></i> Add service</a>
                        
                        </div><!--end page title-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-box">
                                    <div class="table-responsive">
                                          <table id="basic-datatables" class="table table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                        
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
                                         $i = 0;
                                        foreach ($snapshot as $val) {
 //                                           if($i == 0)
   ///                                         print_r($val);
                                        //  $val = $vall->getValue();
                                         $i++;
 //                                          echo "<script>console.log('Debug Objects: " . $val->Description . "' );</script>";

                                        ?>    
                                            <tr>
                                                <td><?php echo $i ; ?></td>
                                                <td><?php echo $val['Service'] ?></td>
                                                <td><?php echo $val['Description'] ?></td>
                                                
                                                <td>
                                                    <a href="#" class="btn btn-info btn-lg">View Details</a>
                                                    <a href="#" class="btn btn-warning btn-lg">Update</a>
                                                    <a onclick="return confirm('Are you sure to Delete')";  href="#" class="btn btn-danger btn-lg">Delete</a>
                                                </td>
                                            </tr>
                                          <?php }?> 
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
        <div class="sidebar">
            <div class='nicescroll'>
                <h4>Quick Support</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.
                </p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows='5' placeholder="Name"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class=" btn btn-theme btn-lg">Send</button>
                    </div>
                </form>
            </div>
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
