<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>

<body>

<div class="top-bar">
  <div class="top-bar-left">
    <a href="index.php?action=accueil"><img src="assets/images/logo_minimo"></a>
  </div>

  <div class="top-bar-right">
    <ul class="menu">
      <li><a href="index.php?action=category&amp;name=lifestyle">LIFESTYLE</a></li>
      <li><a href="index.php?action=category&amp;name=journal">JOURNAL</a></li>
      <li><a href="index.php?action=category&amp;name=musique">MUSIQUE</a></li>
      <li><a href="index.php?action=category&amp;name=visites">VISITES</a></li>
    </ul>
  </div>
</div>

<?= $content ?>

<div class="bottom-row">
  <ul>
    <li><a href="#">Terms and conditions</a></li>
    <li><a href="#">Privacy</a></li>
  </ul>
</div>

<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/what-input.js"></script>
<script src="assets/js/vendor/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>