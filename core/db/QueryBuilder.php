<?php

  class QueryBuilder{
    protected $pdo;
    public function __construct(PDO $pdo){
      $this->pdo = $pdo;
    }

  }

 ?>
