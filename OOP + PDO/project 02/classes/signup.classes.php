<!-- This one can count as "MODEL"  -->
<?php

class signup extends dbh {

    protected function setUser($uid, $email, $pwd) {
        $stmt = $this->connect()->prepare('INSERT INTO user (name, email, password) VALUES (?, ?, ?)');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $email, $hashedPwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;

    }

    public function checkUser($uid, $email){
        $stmt = $this->connect()->prepare('SELECT * FROM user WHERE name = ? OR email = ?;');
        
        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}