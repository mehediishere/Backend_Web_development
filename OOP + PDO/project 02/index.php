<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <section>
        <h3>REGISTRATION.</h3>
        <form action="include/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="name"><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="pwd" placeholder="password"><br>
            <input type="password" name="pwdRepeat" placeholder="password repeat"><br>
            <input type="submit" value="submit" name="submit_data">
        </form>
    </section>

    <section>
        <h3>LOGIN.</h3>
        <form action="include/login.inc.php" method="post">
            <input type="text" name="user" placeholder="name / email"><br>
            <input type="password" name="pwd" placeholder="password"><br>
            <input type="submit" value="submit" name="submit_login">
        </form>
    </section>

    <section>
        <h3>PROFILE.</h3>
<!--         <h3>Session ID : <?php echo session_id(); ?></h3> -->
        <?php
            if(isset($_SESSION['name'])){
        ?>
            <p>-------------</p>
            <h3>Name : <?php echo $_SESSION['name']; ?></h3>
            <h3>Email : <?php echo $_SESSION['email']; ?></h3>
            <h3>Hashed Password : <?php echo $_SESSION['pwd']; ?></h3>
            <a href='include/logout.inc.php'>Logout</a>
        <?php
            }
        ?>

    </section>
</body>
</html>
