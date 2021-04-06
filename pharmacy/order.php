<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php
include('config.php');

if(empty($_SESSION['id'])|| !isset($_SESSION['id']))
{
	//Header( 'Location: login.php');
	echo "<script>window.top.location='login.php'</script>";
}

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$name = $_SESSION['name'];

/**echo $id;
echo $username;
echo $name;
die();**/


?>

<head>
       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Orders</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">

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
              
            </div>
           

            <ul class="nav navbar-top-links navbar-right"> 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					<li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo "Logged in as ". $username;?></a>
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
        </nav>

        <div>
            <div class="row">
			<center>
                <div class="col-lg-12">
				<h1 class="page-header"><?php echo $name; ?> </>
                    <h1 class="page-header">Orders</h1>
                </div>
				</center>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Cnic Number</th>
                                        <th>Prescription</th>
										
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$query = "SELECT * FROM prescription pr INNER JOIN patient pa ON pa.PatientId = pr.PatientId WHERE PharmacyId =$id";
								$retval = mysqli_query($conn, $query);
								while($row2 = mysqli_fetch_array($retval)) {
									
									$pId = $row2['PrescriptionId'];
									$status = $row2['OrderStatus'];
								?> 
								   
								<tr class="odd gradeX">
                                        <td><?php echo $row2['Name'];?></td>
                                        <td><?php echo $row2['Address'];?></td>
                                        <td><?php echo $row2['Mobile'];?></td>
										<td><?php echo $row2['Cnic'];?></td>
                                        <td class="center"><?php echo $row2['Medicines'];?></td>
										<?php
										    if($row2['OrderStatus'] == "")
											{
										?>
                                        <td class="center"><button name="start"><a href= "status.php?pId=<?php print $pId;?>&status=<?php print $status?>">Start Process</a></button></td>
											<?php
											}else if($row2['OrderStatus'] == "InProcess")
											{?>
										
										<td class="center"><button name="inp"><a href= "status.php?pId=<?php print $pId;?>&status=<?php print $status?>">In Process</a></button></td>
											
											
											<?php }else if ($row2['OrderStatus'] == "Completed")
											{?>
										
										<td class="center"><button name="inp"><a href= "status.php?pId=<?php print $pId;?>&status=<?php print $status?>">Completed</a></button></td>
											<?php }?>
                                    </tr>
                                <?php }?>
                                    
                                </tbody>
								
                            </table>
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>  
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="jquery.dataTables.min.js"></script>
    <script src="dataTables.bootstrap.min.js"></script>
    <script src="dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
	
<?php mysqli_close($conn);?>
</body>

</html>
