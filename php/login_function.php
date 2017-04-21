<?php
    session_start();
    include('connection.php');
    $message = "";
    if(isset($_GET['logout']) && isset($_SESSION['id'])){
        if($_GET["logout"]==1 && $_SESSION['id']){
            session_destroy();
            global $message ;
            $message= "You've been logged out successfully.";
        }
    }
   // print_r($_SESSION);

    $error="";
    if(isset($_POST['submit'])){
    if($_POST['submit']=='Sign Up'){

        if(!$_POST['signupemail']) $error.="<br>Please enter your email";
        else if (!filter_var($_POST['signupemail'], FILTER_VALIDATE_EMAIL))
                 $error.="<br>Please enter a valid email address.";
             
        if(!$_POST['signuppassword'])
            $error .= "<br>Please enter your password.";
        else {
            if(strlen($_POST['signuppassword'])< 8)
                $error.="<br>Please enter a password with at least 8 character.";
            
            if(!preg_match('`[A-Z]`', $_POST['signuppassword']))
                $error.="<br>Please enter a password included at least one capital letter.";       
        }

        if($error) $error ="There were error(s) in your sign up details.".$error;
        else{
           
            $query = "Select email from users where email='".mysqli_real_escape_string($conn, $_POST['signupemail'])."'";

            $result = mysqli_query($conn, $query);
            $results= mysqli_num_rows($result);      
            if($results){
                $error.= "This email is already registered.Do you want to log in? <a href='index.php' style='font-weight: bold'>Log in</a>";
            }else{
               // echo "Hello";
                $query = "Insert into users (email, password) values ('".$_POST['signupemail']."','".md5($_POST['signuppassword'])."')";
                 mysqli_query($conn, $query);
                 //  echo "You have been signed up.";
                  $_SESSION['id']=mysqli_insert_id($conn);
                 // print_r ($_SESSION);

                  //redirect to any page
                  header("Location: addressbook.php");die;
            }
        }      
    }
}

if(isset($_POST['submit'])){
    if($_POST['submit']== "Log in"){
        $query = "Select * from users where email='".$_POST['loginemail']."' AND password='".md5($_POST['loginpassword'])."' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        if($row){
        $_SESSION['id'] = $row['id'];
        header("Location: addressbook.php");die;
        }else{
            $error.="<br>We could not find any matched account.";
        }

    }
}

?>