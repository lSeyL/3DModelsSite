<?php

class StorageContr extends Storage {
    private $name;
    private $desc;
    public function __construct($name, $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }

    public function store() {
        $this->storeData($this->name,$this->desc);
    }

}