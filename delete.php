<?php
    include('php/utility.php');
?>

    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Delete</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">

    </head>

    <body>
        <div class="container-fluid" style="background-color: burlywood" id="table-page">
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

                            <li><a href="addressbook.php">Address book</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php?logout=1">Log out</a></li>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>


            <div class=" container-fluid" id="details">
                <div class="row">
                    <div class="col-lg-10">
                        <h4 style="color: crimson;margin-top:-50px;" class="pull-right">Hello, <?php 
                            $query = "SELECT email from users where id=".$_SESSION['id']." Limit 1";
                            $res = mysqli_query($conn, $query);
                            $ro= mysqli_fetch_array($res);
                            echo $ro['email'];
                         ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <h4 style="font-weight: bold">Name:</h4></div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <h4><?php echo $row['name'] ?></h4></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <h4 style="font-weight: bold">Address:</h4></div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <h4><?php echo $row['address'] ?></h4></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <h4 style="font-weight: bold">Contacts:</h4></div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <h4><?php echo $row['contact'] ?></h4></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <h4 style="font-weight: bold">Email:</h4></div>
                                <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <h4><?php echo $row['emailcontact'] ?></h4></div>
                            </div>
                            <h3>Are you sure?</h3>
                            <input type="submit" name="delete" value="Delete" class="btn btn-primary" />
                        </form>
                    </div>

                </div>

            </div>
            <!--details ends here -->


        </div>
        <!-- first container-fluid  -->

        <script src="js/jquery-1.11.3.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>

    </html>