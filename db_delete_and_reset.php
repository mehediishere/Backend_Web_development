<?php
    include 'db.php';
    
    $index = $_POST['id'];

    $sql = "DELETE FROM quote WHERE id = '$index'";

    if (mysqli_query($conn, $sql)) 
    {
        // echo "New record created successfully";
        //<//> This part will reset auto incremented index <//>
        $q1="SET @num := 0";
        $q2="UPDATE quote SET id = @num := (@num+1)"; //Note: here 'id' is auto incremented column name
        $q3="ALTER TABLE quote AUTO_INCREMENT = 1";
        mysqli_query($conn,$q1);
        mysqli_query($conn,$q2);
        mysqli_query($conn,$q3);
        //      <//>

        $output = "success";
    } 
    else 
    {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $output = "fail";
    }

    header("location:resetIndexAfterDelete.php?msg=$output");

    mysqli_close($conn);
?>