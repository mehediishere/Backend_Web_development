<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mehediishere</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php
    include 'db.php';
    $sql = "SELECT * FROM quote";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){?>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col col-12">
                <div class="card-columns">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['title'] ?></h4>
                            <p class="card-text"><?php echo $row['quotes'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
            }
        }
    }

    ?>
    <a style="margin-top: 5px; margin-left:100px;text-decoration: none;" href="index.php">Go Back</a>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>