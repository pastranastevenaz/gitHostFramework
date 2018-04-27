<?php

require 'functions.php';
require 'config.php';

if(HAS_DATABASE){
  require 'db/Connection.php';
  require 'db/QueryBuilder.php';
  $pdo = Connection::dbConnect();

  $query = new QueryBuilder($pdo);
}
require 'index.view.php';
 ?>
