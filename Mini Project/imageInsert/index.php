<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Multiple Image Insertion</title>
    <link rel="icon" type="image/x-icon" href="img/favicon/favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section>
        <div class="container my-5">
            <h2>Product Register Form</h2>
            <form class="row g-3" action="actions/imageInsert.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label class="form-label">Product Name*</label>
                    <input type="text" class="form-control" name="productName" required>
                </div>
                <div class="col-12">
                    <label class="form-label">Upload Image*</label>
                    <input class="form-control" type="file" name="imageFile[]" multiple required>
                  </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary" name="saveProductBtn">Save</button>
                </div>
            </form>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>