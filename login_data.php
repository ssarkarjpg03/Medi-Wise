<?php
    include 'dbconnect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from users where email='$email' and password='".md5($password)."'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num == 1)
    {
        session_start();
        $_SESSION['email']=$email;
        header("Location:home.php");
    }
    else
    {
            echo '<script>';
			echo 'alert("user not found");';
			echo 'window.location="login.php";';
			echo '</script>';
    }
?>