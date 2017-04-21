<?php
    include('php/utility.php');
?>

    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">

    </head>

    <body>
        <div class="container-fluid" style="background-color: burlywood" id="page-height">
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



            <div class=" container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <h4 style="color: crimson;margin-top:50px;" class="pull-right">Hello, <?php 
                            $query = "SELECT email from users where id=".$_SESSION['id']." Limit 1";
                            $res = mysqli_query($conn, $query);
                            $ro= mysqli_fetch_array($res);
                            echo $ro['email'];
                         ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
                        <h3 style="font-weight:600">Create new Contact:</h3>

                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="form-horizontal" id="createform">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" id="address" cols="30" rows="3" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact" class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <textarea name="contact" id="contact" cols="30" rows="3" placeholder="Contacts"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contactemail" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="emailcontact" class="form-control" id="contactemail" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" class="btn btn-primary" value="Create" name="save" />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        <!-- first container-fluid  -->
        <div class="container-fluid footer">
            <p id="foot">&copy2017 <span>Smk Pobon</span> All Rights Reserved </p>
        </div>

        <script src="js/jquery-1.11.3.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>

    </html>