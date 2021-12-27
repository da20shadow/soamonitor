<?php
Class Project{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
}