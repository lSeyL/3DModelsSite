<?php
include "database-connection.php";
include "model.class.php";
include "storage.classes.php";


if (isset($_POST['upload'])) {
    $storage = new Storage();
    $name = $_POST["modelName"];
    $desc = $_POST["modelText"];
    $model = new Model($name, $desc);
    $storage->storeData($model);
    header("location: ../../Pages/3DModels.php?error=none");
}
if (isset($_POST['id'])) {
    $storage = new Storage();
    $storage->deleteData();
}


