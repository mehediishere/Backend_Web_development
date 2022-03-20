<!-- This one can count as "MODEL"  -->
<?php

class login extends dbh {

    protected function getUser($uname, $pwd) {
        $stmt = $this->connect()->prepare('SELECT `password` FROM `user` WHERE `name` = ? OR `email` = ?;');

        if(!$stmt->execute(array($uname, $uname))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound2");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]['password']);

        if($checkPwd == false) {
            $stmt = null;
            header("location: ../index.php?error=pwdnotmatched");
            exit();
        }
        elseif($checkPwd == true) {
            $stmt = $this->connect()->prepare("SELECT * FROM user WHERE (`name` = ? OR `email` = ?) AND `password` = ?;");

            if(!$stmt->execute(array($uname, $uname, $pwdHashed[0]['password']))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound3");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            session_regenerate_id();
            $_SESSION['email'] = $user[0]['email'];
            $_SESSION['name'] = $user[0]['name'];
            $_SESSION['pwd'] = $pwdHashed[0]['password'];

            $stmt = null;
        }

        $stmt = null;

    }
}