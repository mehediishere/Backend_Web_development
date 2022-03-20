<?php
    include 'db.php';
    
    $heading = $_POST['title'];
    $description = $_POST['quote'];

    $sql = "INSERT INTO quote (title, quotes) VALUES ('$heading','$description')";

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

    header("location:dataInsert.php?msg=$output");

    mysqli_close($conn);
?>