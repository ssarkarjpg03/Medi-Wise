<?php
   session_start();
    if(!isset($_SESSION['hospitalid']))
    {
        echo'<script>';
		echo 'alert("You have to log in first");';
		echo 'window.location="admin.php";';
		echo '</script>';
        /*header("location:login.php");*/
        exit();
    }
   /* if(!isset($_SESSION['hospitalid']))
    {
        echo'<script>';
		echo 'alert("You have to log in first");';
		echo 'window.location="admin.php";';
		echo '</script>';
        /*header("location:login.php");
        exit();
    }*/
    else{
        $hospitalid = $_SESSION['hospitalid'];
    }
?>