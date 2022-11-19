<?php

class Login extends databaseConnect
{

    protected function getUser($uname, $psw, $balance)
    {

        $stmt = $this->connect()->prepare('SELECT username FROM databaza.users WHERE username = ? OR email = ?;');

        if (!$stmt->execute(array($uname, $psw, $balance))) {
            $stmt = null;
            header("location: ../../index.php?error=stmtFailed");
            exit();
        }
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../../index.php?error=userNotFound");
            exit();
        }

        $pswHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pswCheck = password_verify($psw, $pswHashed[0]["password"]);
        if(!$pswCheck) {
            $stmt = null;
            header("location: ../../index.php?error=wrongPassword");
            exit();
        }
        elseif ($pswCheck == true)
        {
            $stmt = $this->connect()->prepare('SELECT * FROM databaza.users WHERE username = ? OR email = ? AND password = ?;');
            if (!$stmt->execute(array($uname, $uname, $psw, $balance))) {
                $stmt = null;
                header("location: ../../index.php?error=stmtFailed");
                exit();
            }
            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../../index.php?error=userNotFound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"] = $user[0]["username"];
            $_SESSION["useruid"] = $user[0]["username"];
        }
        else {
            $stmt = null;
            header("location: ../../index.php?error=wrongPassword");
            exit();
        }
        $stmt = null;

    }
}
