<?php
    include 'db.php';
    
    $label = $_POST['title'];
    $description = $_POST['quote'];

    $sql = "INSERT INTO quote (author, quotes) VALUES ('$label','$description')";

    if (mysqli_query($conn, $sql)) 
    {
        // echo "New record created successfully";
        $result = "success";
    } 
    else 
    {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $result = "fail";
    }

    header("location:dataInsert.php?msg=$result");

    mysqli_close($conn);
?>