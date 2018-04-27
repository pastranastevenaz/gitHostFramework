<?php

class Connection{

  public static function dbConnect(){
    $host = '127.0.0.1';
    $db   = 'test';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
      return new PDO($dsn, $user, $pass, $opt);
    } catch (PDOException $e) {
      die('Could not connect to database');
    }

  }
}

 ?>
