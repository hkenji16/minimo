<?php ob_start(); ?>

<div class="grid-container">
  <div class="grid-x grid-margin-x" id="content">

<?php
while ($data = $posts->fetch())
{
  $nbCharacters = 300;
if( strlen($data['post_content']) > $nbCharacters ) {
  $extContent['post_content'] = substr($data['post_content'], 0, $nbCharacters);
} else {
  $extContent['post_content'] = $data['post_content'];
}

?>
    <div class="cell small-12 medium-6">
      <div class="blog-post">
        <img src="assets/images/<?php echo htmlspecialchars(strtoupper($data['image_name'])); ?>">
        <h4>
          <?php echo htmlspecialchars(strtoupper($data['post_category'])); ?>
        </h4>
        <h3>
          <?php echo htmlspecialchars($data['post_title']); ?>
        </h3>
        <p>
          <?php echo htmlspecialchars($extContent['post_content']) . '...<a href="index.php?action=post&amp;id=' . $data['id'] . '">Voir la suite</a>'; ?>
        </p>
      </div>
    </div>

    <?php
}
$posts->closeCursor();
?>

  </div>
</div>

<div class="newsletter">
  <p>Sign up for our newsletter !</p>
  <input type="text" placeholder="Enter a valid email adress"> 
</div>

<div class="buttonAlign"><input type="button" value="Load more"></div>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
