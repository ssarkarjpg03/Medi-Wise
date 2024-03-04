<?php
    require 'dbconnect.php';
    if(isset($_POST['name'])){
        $hospital_name = $_POST['name'];
    }
    if(isset($_POST['city'])){
        $hospital_city = $_POST['city'];
    }
    if(isset($_POST['address'])){
        $hospital_address = $_POST['address'];
    }
    if(isset($_POST['hospitalid'])){
        $hospital_hospitalid = $_POST['hospitalid'];
    }
    if(isset($_POST['password'])){
        $hospital_password = $_POST['password'];
    }
    
    $sql = "insert into hospitals values('$hospital_name','$hospital_city','$hospital_address','$hospital_hospitalid','".md5($hospital_password)."')";

    if(mysqli_query($conn, $sql)){
        echo '<script>';
        echo 'alert("Registration Successful");';
        echo 'window.location="hospital-login.php";';
        echo '</script>';
    }
    else{
        echo '<script>';
        echo 'alert("Registration Unsuccessful");';
        echo 'window.location="hospital-registration.php";';
        echo '</script>';
    }

?>