<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section>
      <div class="container my-5">
        <div class="alert alert-secondary" role="alert">
          <?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; ?>
        </div>
      </div>
    </section>
    <section>
        <div class="container">
            <h2>Student Register Form</h2>
            <form class="row g-3" action="actions/studentRegister.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label class="form-label">Name*</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Email*</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Password*</label>
                    <input type="password" class="form-control" name="pwd" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Confirm Password*</label>
                    <input type="password" class="form-control" name="pwdConfirm" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Address*</label>
                    <input type="text" class="form-control" name="addr" required>
                </div>
                <div class="col-12">
                    <label class="form-label">Upload Image*</label>
                    <input class="form-control" type="file" id="formFile" name="img" required>
                  </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary" name="studentRegisterBtn">Save</button>
                  <a href="index.php" class="btn btn-primary">Home</a>
                </div>
            </form>
        </div>
    </section>

    <?php 
		unset($_SESSION['msg']);
	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>