<?php
    session_start();
    include('connection.php');
    if(!$_SESSION['id']){
        header("Location: index.php");
    }
    //contact Create scripts 
 //print_r($_SESSION);
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

//To read/Import  file as CSV format
if(isset($_POST['Import'])){
    $filename = $_FILES['file']['tmp_name'];
    
    if($_FILES['file']['size'] > 0){
        $file = fopen($filename, "r");
        while(($getdata= fgetcsv($file, 10000, ",")) !== FALSE){
            $sql = "insert into addresses(name,address,contact,emailcontact,user_id) values ('".$getdata[0]."','".$getdata[1]."','".$getdata[2]."','".$getdata[3]."','".$_SESSION['id']."')";
            $result = mysqli_query($conn, $sql);
            // if(!isset($result)){
            //     	echo "<script type=\"text/javascript\">
            //         alert(\"Invalid File:Please Upload CSV File.\");
            //         window.location = \"addressbook.php\"
            //         </script>";	
            //         }
            //         else {
            //         echo "<script type=\"text/javascript\">
            //         alert(\"CSV File has been successfully Imported.\");
            //         window.location = \"addressbook.php\"
            //         </script>";
            //         }
        }
        fclose($file);
    }
}
///////////////////////////////////////////////////////////////
// DB data Export to Excel 
if(isset($_POST['Export'])){
    header('Content-Type: text/csv; charset= utf-8');
    header('Content-Disposition: attachment; filename= data.csv');
    $output= fopen("php://output", "w");
    fputcsv($output, array('Id','Name','Address', 'Contact no.','Email'));
    $query = "Select id,name,address,contact,emailcontact from addresses where user_id='".$_SESSION['id']."' ORDER By id ASC";
    $result = mysqli_query($conn, $query);
    while($row= mysqli_fetch_assoc($result)){
        fputcsv($output, $row);
    }
    fclose($output);
}

?>