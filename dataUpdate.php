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
    <!-- START <//>alert message<//> -->
    <div class="container">
        <?php
        if (isset($_GET['msg'])) {
            $message = $_GET['msg'];
            // echo $message;
            if ($message == "success") {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
            }
            if ($message == "fail") {
            ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed to update!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
            }
        }
        ?>
    </div>
    <!-- END -->
    <div class="container" style="margin-top: 50px;">
        <form class="text-center" action="db_update.php" method="POST">
            <input type="text" name="id" placeholder="id" class="form-control" required><br>
            <input type="text" name="title" class="form-control" required><br>
            <textarea class="form-control" name="quote" style="margin-top: 5px;" required></textarea><br>
            <button class="btn btn-light" name="btn_insert" type="submit" style="margin-top: 5px;">UPDATE</button>
        </form>
    </div>

    <div class="container">
        <a style="margin-top: 5px; text-decoration: none;" href="index.php">Go Back</a>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>