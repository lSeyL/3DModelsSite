<?php


if (isset($_POST["submit"])) {

}
    $uname = $_POST["uname"];
    $psw = $_POST["psw"];
    include "database-connection.php";
    include "login.php";
    include "login-contr.classes.php";

    $login = new LoginControl($uname, $psw);

    $login->loginUser();

    header("location: ../../index.php?error=none");