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
    <div class="container" style="margin-top: 50px;">
        <!-- START <//>alert message<//> -->
            <?php
            if (isset($_GET['msg'])) {
                $message = $_GET['msg'];
                // echo $message;
                if($message == "success"){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                }
                if($message == "fail"){
                    ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed to upload!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                }
            }
            ?>
            <!-- END -->
            <form class="text-center" action="db_insert.php" method="POST">
                <input type="text" name="title" class="form-control" required><br>
                <textarea class="form-control" name="quote" style="margin-top: 5px;" required></textarea><br>
                <button class="btn btn-info" name="btn_insert" type="submit"
                    style="margin-top: 5px;">INSERT</button>
            </form>
    </div>
    <div class="container">
        <a style="margin-top: 5px; text-decoration: none;" href="index.php">Go Back</a>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col col-12">
                <div class="card-columns">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                                dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                                metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>