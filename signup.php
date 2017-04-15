<?php
    include('php/login_function.php');

    
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
    <div class="container-fluid grayback">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Address Book</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Sign Up</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        <div class=" container-fluid" id="signupform">
            <div class="row">

                <div class="col-lg-4 col-lg-offset-4" id="content_right">
                 <p class="bg-danger text-danger" ><?php if($error){echo $error;} ?></p>

                    <form class="form-horizontal" method="post" id="form" >
                        <div class="form-group">
                            <label for="signupEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="signupEmail" name="signupemail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="signupPassword" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="signuppassword" class="form-control" id="signupPassword" placeholder="Password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit"  name="submit" class="btn btn-default" value="Sign Up"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- first container-fluid  -->

    <script src="js/bootstrap.js"></script>
</body>

</html>