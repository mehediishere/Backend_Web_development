<?php

	if(isset($_POST['saveProductBtn'])){
		include_once ('../config/db.php');

        $product = $_POST['productName'];

		$uploadFolder = '../img/product/';
        $allowTypes = array('jpg','png','jpeg','gif');

        $allOk = 0;

        foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) {

            $imageFile = $_FILES['imageFile']['tmp_name'][$key]; // file here
            $imageName = $_FILES['imageFile']['name'][$key]; // file name here
            $fileType = pathinfo($imageName, PATHINFO_EXTENSION); // file extension here
            
            echo "'.$imageFile.'"." || "."'$imageName'"." || "."'$fileType'"."<br>";

            // checking file type
            if(!in_array($fileType, $allowTypes)){
                $allOk = 1;
                echo "Only 'jpg','png','jpeg','gif' support.";
                exit();
            }

            // save to database
            $result = $conn->query("INSERT INTO products (`product`,`images`) VALUE ('$product','$imageName')") or die("Error in saving image".$conn->error);      
            
            if($result){
                move_uploaded_file($imageFile,$uploadFolder.$imageName); // move images to folder
            }
        }

        if ($allOk == 0) {
            echo "Images uploaded successfully !";
        }else{
            echo "Something went wrong";
        }
	}