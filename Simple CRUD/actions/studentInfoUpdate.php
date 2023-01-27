<?php
session_start();

if(!isset($_POST['studentUpdateBtn'])){
	echo "<script>window.history.back();</script>";
	exit();

}else{
    include('../db/db.php'); 

    $id = $_POST['id'];
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $pwd = $conn->real_escape_string($_POST['pwd']);
    $newPwd = $conn->real_escape_string($_POST['newPwd']);
    $addr = $conn->real_escape_string($_POST['addr']);

    $chk=0;

    if(empty($email)){
        $chk=1;
        $_SESSION['msg']="Enter your email";
        echo "<script>window.history.back();</script>";
        exit();
    }

    if(empty($pwd)){
        $chk=1;
        $_SESSION['msg']="Enter your old password";
        echo "<script>window.history.back();</script>";
        exit();
    }

    if(!empty($pwd)){
        $checkPassword=mysqli_num_rows($conn->query("select * from `students` where `id`='".$id."' and `pwd`='".$pwd."'"));
        if($checkPassword==0){
            $chk=1;
            $_SESSION['msg']="Password do not match";
            echo "<script>window.history.back();</script>";
            exit();
        }
    }
    
    if(!empty($pwd) && empty($newPwd)){
        $chk=1;
        $_SESSION['msg']="Enter a new password";
        echo "<script>window.history.back();</script>";
        exit();
    }

    if($chk==0){
        $updateInfo=$conn->query("UPDATE `students` SET `name`='".$name."', `email`='".$email."', `addr`='".$addr."' WHERE `id`='".$id."'");
        if(!empty($pwd)){
            $updatePassword=$conn->query("UPDATE `students` SET `pwd`='".$newPwd."' WHERE `id`='".$id."'");
        }
        $_SESSION['msg'] ="Information updated successfully";
        echo "<script>window.history.back();</script>";
        exit();
    }else{
        $_SESSION['msg'] ="Something went wrong. Try later !!!";
        echo "<script>window.history.back();</script>";
        exit();
    }

}