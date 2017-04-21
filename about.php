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
                                <li><a href="about.php">About</a></li>
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


            <div class="content about container" id="page-height">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12" >
                        <h1>About Me</h1>
                        <hr>
                        <p>Hello, I'm <span>S.M.Kamruzzaman (Pobon)</span>. Now I'm studying in Computer Science & Engineering department at University of Rajshahi. </p>
                        <p>My Id: 13055443</p>
                        <p>Email: smkpobonru@gmail.com</p>
                        <p>Phone no: 01714-601116</p>
                    </div>
                </div>
            </div>

         <div class="container footer">
            <p >&copy2017 <span>Smk Pobon</span> All Rights Reserved </p>
        </div>
        </div>
        <!-- first container-fluid  -->
        
       


        <script src="js/jquery-1.11.3.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>

    </html>