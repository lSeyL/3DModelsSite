<?php
class Signup extends databaseConnect {

    protected function setUser($uname, $psw, $email, $balance)
    {

        $stmt = $this->connect()->prepare('INSERT INTO databaza.users (username, password, email, balance) VALUES (?, ?, ?, ?);');

        $hashedPassword = password_hash($psw, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uname, $hashedPassword, $email, $balance))) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;

    }
    protected function checkUser($uname, $email)
    {
        $stmt = $this->connect()->prepare('SELECT username FROM databaza.users WHERE username = ? OR email = ?;');

        if (!$stmt->execute(array($uname, $email))) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else
        {
            $resultCheck = true;
        }
        return $resultCheck;


    }
}