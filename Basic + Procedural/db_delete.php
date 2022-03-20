<?php
    include 'db.php';
    
    $index = $_POST['id'];

    $sql = "DELETE FROM quote WHERE id = '$index'";

    if (mysqli_query($conn, $sql)) 
    {
        // echo "New record created successfully";
        $output = "success";
    } 
    else 
    {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $output = "fail";
    }

    header("location:dataDelete.php?msg=$output");

    mysqli_close($conn);
?>