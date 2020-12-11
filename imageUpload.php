<?php
$msg = "";
$db = mysqli_connect("localhost", "root", "", "testskill");

// when upload button is clicked
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/" . $filename; //root folder destination


    // Get all the submitted data from the form 
    $sql = "INSERT INTO quote_image (image) VALUES ('$filename')";

    if(empty($_FILES["uploadfile"]["name"])){
        $msg = "please select an image";
    }else{
        // Execute query to upload into database
        mysqli_query($db, $sql);

        // Now we move the uploaded image into the folder: images
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>mehediishere</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php
        echo $msg;
    ?>
    <div class="container shadow-bg">
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="file" name="uploadfile" value=""/>

            <div>
                <button type="submit" name="upload">
                    UPLOAD
                </button>
            </div>
        </form>
        <br>
        <a style="margin-top: 5px; text-decoration: none;" href="index.php">Go Back</a>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>