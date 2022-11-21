<?php
include "database-connection.php";
include "model.class.php";
include "storage.classes.php";

class StorageLoader
{
    private $storage;

    public function __construct()
    {
        $this->storage = new Storage();
        if (isset($_POST['upload'])) {
            $this->storage->storeData(new Model($_POST["modelName"], $_POST["modelText"]));
            //header("location: ../../index.php?error=stmtfailed");
        }
        if (isset($_POST['edit'])) {
            $this->storage->storeData(new Model($_POST["modelName"], $_POST["modelText"]));
            header("location: ../../index.php?error=stmtfailed");
        }
        if (isset($_POST['delete'])) {
            $deleteID = $_GET['delete'];
            $stmt =  $this->connect()->prepare("DELETE FROM models WHERE id_model = $deleteID");
            $stmt->execute();

        }
    }

    public function getData()
    {
        return $this->storage->getData();
    }
}



