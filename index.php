<?php
    
    include('php/login_function.php');
    
   
?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
    <div class="container-fluid grayback">
       <div class="container-fluid">
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
                        <li><a href="signup.php">Sign Up</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        </div>


        <div class="content container">
            <div class="row">
                <div class="col-lg-8" id="content_left">
                    <h1>Your Address book where you Go!</h1>
                    <p>This is an Online Address book. It will help you to keep update your Contacts. </p>
                </div>

                <div class="col-lg-4" id="content_right">
                   <p class="bg-success text-success"><?php if($message){echo $message;} ?></p>
                    <form class="form-horizontal" method="post" id="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="loginemail" value="<?php echo $_POST['loginemail'] ?>" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="loginpassword" value="<?php echo $_POST['loginpassword'] ?>" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit"  name="submit"class="btn btn-default" value="Log in"/>
                            </div>
                        </div>
                    </form>
                     <p class="bg-danger text-danger" ><?php echo $error ?></p>

                </div>
            </div>
        </div>
    </div>
    <!-- first container-fluid  -->

    <script src="js/bootstrap.js"></script>
</body>

</html>