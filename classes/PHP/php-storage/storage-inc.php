<?php
include "../database-connection.php";
include "model/model.class.php";
include "storage.classes.php";


if (isset($_POST['upload'])) {
    $name = $_POST["modelName"];
    $desc = $_POST["modelText"];
    $reg = new StorageContr($name, $desc);

    $reg->store();

    header("location: ../../index.php?error=none");
}

