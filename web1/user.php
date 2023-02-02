<?php
	include './config.php';
	session_start();  
	$user_id = $_SESSION['user_id'];
    $sql = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
    if (mysqli_num_rows($sql)>0){
      $data = mysqli_Fetch_assoc($sql);
    }
    if(!isset($user_id)){
      header('location:login.php');
    }  
?>