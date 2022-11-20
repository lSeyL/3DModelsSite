<?php

class Storage extends databaseConnect
{

    public function __construct()
    {
    }

    public function storeData($name, $desc)
    {
        $stmt = $this->connect()->prepare('INSERT INTO databaza.models(name_model, desc_model) VALUES (?, ?);');

        if (!$stmt->execute(array($name,$$desc))) {
            $stmt = null;
            header("location: ../../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    public function getData(): array
    {
        $result = [];
        $getModels = $this->connect()->prepare("SELECT * FROM models");
        $getModels->execute();
        $models = $getModels->fetchAll();
        foreach ($models as $model) {
            $result[] = new Model($model['name_model'], $model['desc_model']);
        }
        return $result;
    }


    public function deleteData()
    {

        $del = $dbh->prepare('DELETE FROM models');
        $del->execute();

        print("Return number of rows that were deleted:\n");
        $count = $del->rowCount();
        print("Deleted $count rows.\n");
    }


}