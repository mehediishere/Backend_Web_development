<?php
    include 'include/autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>SELECT data from database.</h3>
    <?php
        $productObj = new product();
        $data = $productObj->getCartItem();
        foreach($data as $item) {
            echo $item['id'] . ' ' . $item['name'] .'<br>';
        }
    ?>
</body>
</html>