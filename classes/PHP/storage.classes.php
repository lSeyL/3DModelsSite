<?php

class Storage extends databaseConnect
{

    public function __construct()
    {
    }

    public function storeData(Model $model)
    {
        $stmt = $this->connect()->prepare('INSERT INTO databaza.models(name_model, desc_model) VALUES (?, ?);');
        $stmt->execute(array($model->getName(), $model->getDesc()));
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

    }


}