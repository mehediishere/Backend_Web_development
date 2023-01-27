<?php
session_start();

if(!isset($_POST['studentRegisterBtn'])){
	echo "<script>window.history.back();</script>";
	exit();

}else{
    include('../db/db.php'); 

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $pwd = $conn->real_escape_string($_POST['pwd']);
    $pwdConfirm = $conn->real_escape_string($_POST['pwdConfirm']);
    $addr = $conn->real_escape_string($_POST['addr']);

    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "../assets/img/" . $filename;

    $chk=0;

    if(empty($email)){
        $chk=1;
        $_SESSION['msg']="Enter your email";
        echo "<script>window.history.back();</script>";
        exit();
    }

    if($pwd != $pwdConfirm){
        $chk=1;
        $_SESSION['msg']="Password do not match";
        echo "<script>window.history.back();</script>";
        exit();
    }

    $userCheck = mysqli_num_rows($conn->query("SELECT * FROM `students` where `email`='".$email."'"));
    if($userCheck > 0){
        $chk=1;
        $_SESSION['msg']="This student already exist in database";
        echo "<script>window.history.back();</script>";
        exit();
    }

    if(($chk==0) && ($userCheck==0)){
        $insertStudentInfo=$conn->query("INSERT INTO `students`(`name`, `email`, `pwd`, `addr`, `image`) VALUES ('".$name."','".$email."','".$pwd."','".$addr."','".$filename."')");
        if($insertStudentInfo){
            move_uploaded_file($tempname, $folder);
        }
        $_SESSION['msg'] ="Information submit successfully";
        header("location:../studentRegister.php");
        exit();
    }else{
        $_SESSION['msg'] ="Something went wrong. Try later !!!";
        header("location:../studentRegister.php");
        exit();
    }

}