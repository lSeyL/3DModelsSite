<?php

class RegisterControl extends Signup {
    private $uname;
    private $email;
    private $psw;
    private $pswRepeat;

    public function __construct($uname, $email, $psw, $pswRepeat)
    {
        $this->uname = $uname;
        $this->email = $email;
        $this->psw = $psw;
        $this->pswRepeat = $pswRepeat;
    }

    public function signupUser() {
        if (!$this->emptyInput()) {
            // echo "Empty username"
            header("location: ../../index.php?error=emptyInput");
            exit();
        }
        if (!$this->invalidUsername()) {
            // echo "Invalid username"
            header("location: ../../index.php?error=invalidUsername");
            exit();
        }
        if (!$this->invalidEmail()) {
            // echo "Invalid email"
            header("location: ../../index.php?error=invalidEmail");
            exit();
        }
        if (!$this->passwordMatch()) {
            // echo "Invalid password"
            header("location: ../../index.php?error=passwordMatch");
            exit();
        }
        if (!$this->usernameTakenCheck()) {
            // echo "Username taken"
            header("location: ../../index.php?error=usernameTaken");
            exit();
        }
        $this->setUser($this->uname, $this->psw, $this->email, 0);
    }
    private function emptyInput() {
        if(empty($this->uname) || empty($this->email) || empty($this->psw) || empty($this->pswRepeat))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername() {
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uname))
            {
                $result = false;
            }
        else
            {
                $result = true;
            }
        return $result;

    }

    private function invalidEmail() {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function passwordMatch() {
        if($this->psw !== $this->pswRepeat)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function usernameTakenCheck() {
        if(!$this->checkUser($this->uname, $this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
}