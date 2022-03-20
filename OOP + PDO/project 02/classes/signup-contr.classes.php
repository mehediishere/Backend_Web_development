<!-- This one can count as "CONTROLLER"  -->
<?php

class signupContr extends signup {
    private $uid;
    private $email;
    private $pwd;
    private $pwdRepeat;

    public function __construct($uid, $email, $pwd, $pwdRepeat)
    {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            // echo "empty input";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if($this->invalidUid() == false) {
            // echo "invalid username";
            header("location: ../index.php?error=username");
            exit();
        }

        if($this->invalidEmail() == false) {
            // echo "invalid email";
            header("location: ../index.php?error=email");
            exit();
        }

        if($this->pwdMatch() == false) {
            // echo "password don't match";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }

        if($this->uidTokenCheck() == false) {
            // echo "username or email taken";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->email, $this->pwd);
    }

    private function emptyInput() {
        if (empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdRepeat)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function uidTokenCheck() {
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }
    
}