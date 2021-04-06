<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">

function AlphaOnly(e)
{
 var k;
 document.all ? k = e.keyCode : k = e.which;
 return((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8);
}



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



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registeration</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sign up</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registeration
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="register.php" method="post">
                                        <div class="form-group">
                                            <label>Pharmacy Name</label>
                                            <input type="text" name="pname" class="form-control" onkeypress="return AlphaOnly(event)" placeholder="Name : " required>
                                            <br>
                                            <label>User Name</label>
                                            <input type="text" name="uname" class="form-control"placeholder="User Name : " required>
                                            <br>
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>              
											<br>
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control" placeholder="Address  : " required>
											<br>	
                                            <label>Number</label>
                                            <input type="text" name="number" class="form-control" onkeypress='validate(event)' pattern=".{11,}" maxlength="11" title="Please Provide complete number of 11 digits" placeholder="Number  : " required>
											<br>
											<input type="submit" class="btn btn-primary btn-lg" value="SignUp">
											</form>
											
										</div>
										<button class="btn btn-primary btn-lg"><a href="login.php"></a> Cancel</button>

                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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

    <!-- Custom Theme JavaScript -->
    <script src="sb-admin-2.js"></script>

</body>

</html>
