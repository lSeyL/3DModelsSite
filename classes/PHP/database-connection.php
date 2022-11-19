<?php
include "configuration.php";
class databaseConnect

{
    protected function connect()
    {
        try {
                return new PDO('mysql:dbname=' . Configuration::DB_NAME . ';host=' . Configuration::DB_HOST, Configuration::DB_USER, Configuration::DB_PASS);

            }
            //return new PDO("mysql:host=localhost;port=3306;dbname=db",$username, $password);

        catch (PDOException $e){
            print "Error!: " . $e-> getMessage() . "<br/>";
            die();
        }
    }

}
