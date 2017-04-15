<?php
    session_start();
    include('connection.php');
    if(!$_SESSION['id']){
        header("Location: index.php");
    }
    //contact Create scripts 
 print_r($_SESSION);
    if($_POST['save'] == "Create"){
        $current_user = intval($_SESSION['id']);
        $query = "insert into addresses(name,address,contact,emailcontact,user_id) values('".$_POST['name']."','".$_POST['address']."','".$_POST['contact']."','".$_POST['emailcontact']."','".$current_user."')";
        mysqli_query($conn, $query);
        header("Location: addressbook.php");
    }
//script for Details and Delete function
    if(isset($_GET['id'])){  //This function is for  Details and Delete and Edit
        $query = "select * from addresses where id=".$_GET['id']." Limit 1";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    }
    if($_POST['delete'] == 'Delete'){
        $query = "DELETE FROM addresses where id=".$_GET['id'];
        mysqli_query($conn, $query);
        header("Location: addressbook.php");
    }
//script for edit
 //here first the upper SELECT query occurs then this lower $_POST['save']=='Save' occurs
  if($_POST['save']=='Save'){
        $query = "UPDATE addresses SET name='".$_POST['name']."',address='".$_POST['address']."',contact='".$_POST['contact']."',emailcontact='".$_POST['emailcontact']."' where id=".intval($_GET['id']);
        $result = mysqli_query($conn, $query);
        header("Location: addressbook.php");
    }
?>