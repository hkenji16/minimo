<?php ob_start(); ?>

<div class="grid-container">
  <div class="grid-x grid-margin-x" id="content">

<?php
$row = 1;
while ($data = $posts->fetch())
{
  if ($row == 1) {
    ?>

<div class="cell small-12">
      <div class="blog-post">
        <img src="assets/images/<?php echo htmlspecialchars(strtoupper($data['image_name'])); ?>">
        <h4>
          <?php echo htmlspecialchars(strtoupper($data['post_category'])); ?>
        </h4>
        <h3>
          <?php echo htmlspecialchars($data['post_title']); ?>
        </h3>
        <p>
          <?php echo htmlspecialchars($data['post_content']); ?>
        </p>
      </div>
    </div>

    <?php
  ++$row;  
  }
  else {
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
          <?php echo htmlspecialchars($data['post_content']); ?>
        </p>
      </div>
    </div>

    <?php
}}
$posts->closeCursor();
?>

  </div>
</div>

<div class="newsletter">
  <p>Sign up for our newsletter !</p>
  <input type="text" placeholder="Enter a valid email adress"> 
</div>

<div class="grid-container">
  <div class="grid-x grid-margin-x" id="content">

  <div class="cell small-12 medium-6">
      <div class="blog-post">
        <img src="assets/images/06_girl">
        <h4>LIFESTYLE</h4>
        <h3>Top 10 song for running</h3>
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
      </div>
    </div>

    <div class="cell small-12 medium-6">
      <div class="blog-post">
        <img src="assets/images/07_route_glace">
        <h4>LIFESTYLE</h4>
        <h3>Cold winter days</h3>
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
      </div>
    </div>

  </div>
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
