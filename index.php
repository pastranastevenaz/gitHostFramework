<?php
require 'functions.php';

require 'config.php';

if(HAS_DATABASE){
  dbConnect();
}

require 'index.view.php';
 ?>
