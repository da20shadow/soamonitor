<?php
Class Post{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
}