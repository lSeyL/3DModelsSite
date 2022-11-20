<?php

class LoginControl extends classLogin {

    private $uname;
    private $psw;

    public function __construct($uname, $psw)
    {
        $this->uname = $uname;
        $this->psw = $psw;

    }

    public function loginUser() {
        if (!$this->emptyInput()) {
            // echo "Empty username"
            header("location: ../../Pages/LogIn.php?error=emptyInput");
            exit();
        }

        $this->getUser($this->uname, $this->psw, 0);
    }
    private function emptyInput() {
        if(empty($this->uname) || empty($this->psw) )
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