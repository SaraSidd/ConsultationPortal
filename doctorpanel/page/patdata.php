<?php session_start();?>
<!DOCTYPE html>
<?php

include('config.php');

if(empty($_SESSION['id'])|| !isset($_SESSION['id']))
{
	//Header( 'Location: login.php');
	echo "<script>window.top.location='doclog.php'</script>";
}

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$name = $_SESSION['named'];
?>



<script type="text/javascript">
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
 <style type="text/css">
			.btn{
			    
				cursor:pointer;
				border:none;
				color:black;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				}
        </style>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Patient's Data</title>

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
                <a class="navbar-brand" href="patdata.php">Home</a>
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
                            <a href="patdata.php"><i class="fa fa-files-o fa-fw"></i> Patient's Data</a>
                        </li>
                       
                        <li>
                            <a href="dochistory.php"><i class="fa fa-table fa-fw"></i> My History</a>
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
                    <h1 class="page-header">Patients Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<center>
                           <form action="" method="POST" name="search">
						   Search: <input type="text" name="data" onkeypress='validate(event)'  placeholder="Enter Patient's Id" required><br>
						   <input type="submit" name = "search" class="btn">
						   </form>
						   </center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Patient Id</th>
                                        <th>Name</th>
                                        <th>Cnic</th>
                                        <th>Files</th>
										<th>Medicines</th>

                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								if ($_SERVER['REQUEST_METHOD'] == 'POST') 
								{
										$id = $_POST['data'];
										
										if (isset($_POST['search'])) 
										{
											$retval = mysqli_query($conn, "Select * from patient where PatientId =$id") or die(mysqli_error());
								while($row2 = mysqli_fetch_assoc($retval)) {
									
									$pId = $row2['PatientId'];
									?>
								
                                    <tr class="odd gradeX">
                                        <td><?php echo $pId;?></td>
                                        <td><?php echo $row2['Name'];?></td>
                                        <td><?php echo $row2['Cnic'];?></td>
										<td>
										<?php $retval2 = mysqli_query($conn, "SELECT * FROM files WHERE PatientId ='$id'") or die(mysqli_error());
								while($row = mysqli_fetch_assoc($retval2)) 
								{?>
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<a href="../../include/uploads/<?php echo $row['Url']; ?>" ><?php echo $row['Url']; ?></a>
							<br />
							
											
										 
											
									
								<?php }
                                    
                                 
											
											
											
										?>	
										</td> <td class="text-left">
										<?php $retval2 = mysqli_query($conn, "SELECT Medicines FROM prescription WHERE PatientId ='$id'") or die(mysqli_error());
								while($row = mysqli_fetch_assoc($retval2)) 
								{?>
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
							
							<?php

									echo $row['Medicines'].'<br/>';
									?>
											
										 
											
									
								<?php }
                                    
                                 }
											
											
											
										?>	
										</td>
										</tr>	
										<?php }
								}
								?>
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
