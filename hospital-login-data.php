<?php
    include 'dbconnect.php';
    $hospitalid=$_POST['hospitalid'];
    $password=$_POST['password'];

    $sql="select * from hospitals where hospitalid='$hospitalid' and password='".md5($password)."'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num == 1)
    {
        session_start();
        $_SESSION['hospitalid']=$hospitalid;
        header("Location:hospital.php");
    }
    else
    {
            echo '<script>';
			echo 'alert("user not found");';
			echo 'window.location="hospital-login.php";';
			echo '</script>';
    }
?>