<?php
    include '../config.php';
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $sql= mysqli_query($conn,"DELETE from `lesson_db` WHERE lesson_id='$id'");
        if($sql){
            mysqli_query($conn,"ALTER TABLE `lesson_db` AUTO_INCREMENT 1");
            header('location:exercises.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>