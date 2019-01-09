<?php ob_start(); ?>

<div class="grid-container">
  <div class="grid-x grid-margin-x" id="content">

    <div class="cell small-12">
      <img src="assets/images/01_image_principale">
    </div>
    <div class="cell small-8">
      <div class="first-post">
        <h4>PHOTODIARY</h4>
        <h3>The perfect weekend getaway</h3>
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. <strong>Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.</strong> Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue.</p>
      </div>
      <div class="post-content">
        <img src="assets/images/01_image_principale">
        <img src="assets/images/01_image_principale">
        <img src="assets/images/01_image_principale">
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue.Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue.</p>
      </div>
      <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. <strong>Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.</strong> Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
    </div>

    <div class="small-4 columns" data-sticky-container>
      <div class="sticky" data-sticky data-anchor="content">
        <img src="assets/images/02_festival">
        <h3>About me</h3>
        <p>Praesent id metus massa, ut blandit odio.</p>
      </div>
    </div>

  </div>
</div>

<div class="like">
  <div class="grid-container">
    <div class="grid-x grid-margin-x" id="content">

      <div class="cell small-12">
        <h4>YOU MAY ALSO LIKE</h4>
      </div>
      <div class="cell small-4">
        <img src="assets/images/07_route_glace">
        <h5>Cold winter days</h5>
      </div>
      <div class="cell small-4">
        <img src="assets/images/05_montagnes">
        <h5>A day exploring the Alps</h5>
      </div>
      <div class="cell small-4">
        <img src="assets/images/04_pont">
        <h5>American dream</h5>
      </div>

    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>