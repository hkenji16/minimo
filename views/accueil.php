<?php ob_start(); ?>

<img src="assets/images/01_image_principale">

<div class="grid-container">
  <div class="grid-x grid-margin-x" id="content">

    <div class="cell small-12">
      <div class="first-post">
        <h4>PHOTODIARY</h4>
        <h3>The perfect weekend getaway</h3>
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
      </div>
    </div>

    <div class="cell small-12 medium-6">
      <div class="blog-post">
        <img src="assets/images/02_festival">
        <h4>LIFESTYLE</h4>
        <h3>More than just a music festival</h3>
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
      </div>
    </div>

    <div class="cell small-12 medium-6">
      <div class="blog-post">
        <img src="assets/images/03_coffee">
        <h4>LIFESTYLE</h4>
        <h3>Life tastes better with coffee</h3>
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
      </div>
    </div>

    <div class="cell small-12 medium-6">
      <div class="blog-post">
        <img src="assets/images/04_pont">
          <h4>PHOTODIARY</h4>
          <h3>American Dream</h3>
          <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
      </div>
    </div>

    <div class="cell small-12 medium-6">
      <div class="blog-post">
        <img src="assets/images/05_montagnes">
        <h4>PHOTODIARY</h4>
        <h3>A day exploring the Alps</h3>
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
      </div>
    </div>

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

<div class="grid-container">
  <div class="grid-x grid-margin-x" id="content">

<?php
while ($data = $posts->fetch())
{
?>

  <div class="cell small-12 medium-6">
      <div class="blog-post">
        <img src="assets/images/06_girl">
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
}
$posts->closeCursor();
?>

  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
