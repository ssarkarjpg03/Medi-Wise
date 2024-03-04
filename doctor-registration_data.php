<?php
    require 'dbconnect.php';
    if(isset($_POST['firstname'])){
        $user_firstname = $_POST['firstname'];
    }
    if(isset($_POST['lastname'])){
        $user_lastname = $_POST['lastname'];
    }
    if(isset($_POST['catagory'])){
        $user_catagory = $_POST['catagory'];
    }
    if(isset($_POST['username'])){
        $user_username = $_POST['username'];
    }
    if(isset($_POST['email'])){
        $user_email = $_POST['email'];
    }
    if(isset($_POST['password'])){
        $user_password = $_POST['password'];
    }
    
    $sql = "insert into doctors values('$user_firstname','$user_lastname','$user_catagory','$user_username','$user_email','".md5($user_password)."')";

    if(mysqli_query($conn, $sql)){
        echo '<script>';
        echo 'alert("Registration Successful");';
        echo 'window.location="doctor-registration.php";';
        echo '</script>';
    }
    else{
        echo '<script>';
        echo 'alert("Registration Unsuccessful");';
        echo 'window.location="doctor-registration.php";';
        echo '</script>';
    }

?>
