<?php

include "database-connection.php";
include "signup-classes.php";
include "signup-contr-classes.php";

if(isset($_POST["submit"]))
{
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $pswRepeat = $_POST["pswRepeat"];


    $reg = new RegisterControl($uname, $email, $psw, $pswRepeat);

    $reg->signupUser();

    header("location: ../index.php?error=none");
}
