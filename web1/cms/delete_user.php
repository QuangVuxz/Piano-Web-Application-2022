<?php
    include '../config.php';
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $sql= mysqli_query($conn,"DELETE from `user_form` WHERE id='$id'");
        if($sql){
            mysqli_query($conn,"ALTER TABLE `user_form` AUTO_INCREMENT 1");
            header('location:users.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>