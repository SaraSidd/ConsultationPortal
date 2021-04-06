<?php
session_start();
session_destroy ();

unset($_SESSION['id']);
unset($_SESSION['username']);


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body" >
                        <form action="alogin.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="username" type="text" autofocus required>
									<br>
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
									<br>
									<input type="submit" class="btn btn-primary btn-lg" value="Login">
                                </div>
								&nbsp&nbsp<a href="adprofile.php">SignUp</a>
                            </fieldset>
                        </form>
                    </div>
                
            </div>
        </div>
    </div>

    <!-- jQuery 
    <script src="jquery.min.js"></script>
-->
    <!-- Bootstrap Core JavaScript 
    <script src="bootstrap.min.js"></script>
-->
    <!-- Metis Menu Plugin JavaScript 
    <script src="metisMenu.min.js"></script>
-->
    <!-- Custom Theme JavaScript 
    <script src="sb-admin-2.js"></script> 
-->
</body>

</html>
