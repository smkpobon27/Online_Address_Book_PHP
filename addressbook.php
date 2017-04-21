<?php
   include('php/utility.php');
    
?>

    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Address Book</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">

    </head>

    <body>
        <div class="container-fluid" id="table-page">
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
                        <form method="GET" class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" name="searchquery" class="form-control" placeholder="Search book">
                            </div>
                            <button type="submit" name="search" class="btn btn-primary">Search</button>
                        </form>
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
                            $result = mysqli_query($conn, $query);
                            $row= mysqli_fetch_array($result);
                            echo $row['email'];
                         ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
                        <h3 class="pull-left"><a href="create.php">Create new</a></h3>
                        <h3 class="pull-right"><a href="addressbook.php">Refresh</a></h3>

                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delate</th>
                                <th>Details</th>
                            </tr>

                            <?php
                        //code for search field
                            if(isset($_GET['search'])){
                                $query="SELECT * from addresses where name like '".$_GET['searchquery']."%' AND user_id=".$_SESSION['id'];

                                    $result = mysqli_query($conn, $query);
                                    $results= mysqli_num_rows($result);
                                    if($results){    
                                        while($row= mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                                echo  "<td>".$row['name']."</td>";
                                                echo  "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
                                                echo  "<td><a href='delete.php?id=".$row['id']."'>Delate</a></td>";
                                                echo  "<td><a href='Details.php?id=".$row['id']."'>Details</a></td>";
                                            echo "</tr>";
                                    }
                                }
                            }else{
                                //code for table of addresses 
                                if($_SESSION['id']){

                                $query = "SELECT * from addresses where user_id =".$_SESSION['id']; 
                                                                        //watch login_function.php signup/login func
                                    $result = mysqli_query($conn, $query);
                                    $results= mysqli_num_rows($result);
                                    if($results){    
                                        while($row= mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                                echo  "<td>".$row['name']."</td>";
                                                echo  "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
                                                echo  "<td><a href='delete.php?id=".$row['id']."'>Delate</a></td>";
                                                echo  "<td><a href='Details.php?id=".$row['id']."'>Details</a></td>";
                                            echo "</tr>";
                                    }
                                }
                                }
                            }
          ?>

                        </table>
                        <form method="post" name="upload_csv" class="pull-left" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="InputFile">Import File</label>
                                <input type="file" name="file" id="InputFile">
                            </div>

                            <button type="submit" name="Import" class="btn btn-primary  button-loading" data-loading-text="Loading...">Import</button>
                        </form>

                        <!-- this form for export excel -->
                        <form method="post" name="download_csv" class="pull-right" enctype="multipart/form-data">

                            <button type="submit" name="Export" class="btn btn-success">Export to excel</button>
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
        <script>
           
            $('#table-page').css("background-color","burlywood");
        </script>
    </body>

    </html>