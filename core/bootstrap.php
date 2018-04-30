<?php
require 'functions.php';
require 'core/config.php';
require 'core/Router.php';




if(HAS_DATABASE){
  require 'core/db/Connection.php';
  require 'core/db/QueryBuilder.php';
  // $pdo = Connection::dbConnect();

  return new QueryBuilder(
    Connection::dbConnect()
  );
}
 ?>
