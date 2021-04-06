<?php session_start();?>
<!DOCTYPE html>
<?php

include('config.php');

if(empty($_SESSION['id'])|| !isset($_SESSION['id']))
{
	//Header( 'Location: login.php');
	echo "<script>window.top.location='adminlog.php'</script>";
}

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$name = $_SESSION['name'];
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Patients</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminPanel.php">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $id." Logged in as  ".$name; ?> </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="doctor.php"><i class="fa fa-stethoscope fa-fw"></i> Doctor</a>
                        </li>
                       
                        <li>
                            <a href="patient.php"><i class="fa fa-ambulance fa-fw"></i> Patients</a>
                        </li>
                        <li>
                            <a href="pharmacy.php"><i class="fa fa-medkit fa-fw"></i> Pharmacy</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Patients</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Patient Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
										<th>Mobile</th>
										<th>Address</th>
                                        <th>Cnic</th>
                                        <th>Email</th>
										<th>Password</th>                                        
                                        <th>Status</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								$retval = mysqli_query($conn, "Select * from patient where DeleteStatus=0") or die(mysqli_error());
								while($row2 = mysqli_fetch_assoc($retval)) {
									$del = $row2['DeleteStatus'];
									$status = $row2['Status'];
									$pId = $row2['PatientId'];
									?>
								
                                    <tr class="odd gradeX">
                                        <td><?php echo $pId;?></td>
                                        <td><?php echo $row2['Name'];?></td>
                                        <td><?php echo $row2['Age'];?></td>
										<td><?php echo $row2['Gender'];?></td>
										<td><?php echo $row2['Mobile'];?></td>
										<td><?php echo $row2['Address'];?></td>
										<td><?php echo $row2['Cnic'];?></td>
                                        <td><?php echo $row2['Email'];?></td>
                                        <td><?php echo $row2['Password'];?></td>
										
										
										
									         
                                         <?php
										   if($status == 0)
										   {
											?>
											   <td><a href= "verifypat.php?pId=<?php print $pId; ?>&status=<?php print $status; ?>">Not Verified</a></td>
											 
								      <?php }else if($status == 1) 
									  { ?>

                                        	<td><a href= "verifypat.php?pId=<?php print $pId; ?>&status=<?php print $status; ?>">Verified</a></td>							  
									  <?php } 
									  
									     
										   if($del == 0)
										   {
											?>
											   <td><a href= "deletepat.php?pId=<?php print $pId; ?>&delete=<?php print $del; ?>">Delete</a></td>
											 
								      <?php } ?>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.row -->
           
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
                
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
