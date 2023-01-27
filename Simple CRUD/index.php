<?php   session_start();    include('db/db.php'); ?>
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
            <h3>Students List</h3>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $sql = $conn->query("SELECT * FROM students");
                        while($row=mysqli_fetch_assoc($sql)){
                  ?>
                  <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
					<td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['addr']; ?></td>
                    <td>
                        <a href="studentRegister.php" class="btn btn-link">Add</a>
                        <span> / </span>
                        <a href="studentInfoUpdate.php?id=<?php echo base64_encode($row['id']);?>" class="btn btn-link" name="edit-btn">Edit</a>
                        <span> / </span>
                        <a href="actions/delete.php?removeStudent=<?php echo base64_encode($row['id']);?>" class="btn btn-link" name="delete-btn">Delete</a>
                    </td>
                  </tr>
                  <?php 
                    }
                  ?>
                </tbody>
              </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>