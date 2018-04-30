<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GitHosts</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#333">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">


  <!-- Styles -->
  <link rel="stylesheet" href="styles.css" type="text/css">
  <link rel="stylesheet" media="(max-width:600px)" href="small.css">
  <link rel="stylesheet" media="(min-width:601px)" href="large.css">
  </head>
  <body>

      <?= $this->partial('partials/header.php'); ?>

      <section role="main">
          <?= $this->yieldView(); ?>
      </section>

      <?= $this->partial('partials/footer.php'); ?>


      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
