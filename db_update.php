<?php
    include 'db.php';
    
    $index = $_POST['id'];
    $header = $_POST['title'];
    $description = $_POST['quote'];

    $sql = "UPDATE quote SET title = '$header', quotes = '$description' WHERE id = '$index'";
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

    header("location:dataUpdate.php?msg=$output");

    mysqli_close($conn);
?>