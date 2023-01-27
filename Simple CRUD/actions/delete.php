<?php

session_start();    include('../db/db.php');

if(isset($_GET['removeStudent'])){
    $id = base64_decode($_GET['removeStudent']);

    $check = mysqli_num_rows($conn->query("select * from `students` where `id`='".$id."'"));

	  if($check>0){
		$sql = $conn->query("DELETE FROM students WHERE `id` = '".$id."'");
		$_SESSION['msg']="Student removed successfully.";
		// echo "<script>window.history.back();</script>";
        header("location:../index.php");
		exit();
	  }else{
		$_SESSION['msg']="Data not found";
		// echo "<script>window.history.back();</script>";
        header("location:../index.php");
		exit();
	  }
}