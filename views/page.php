<?php ob_start(); ?>

<img src="assets/images/01_image_principale">

<div class="grid-container">
  <div class="grid-x grid-margin-x" id="content">

    <div class="cell small-12">
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

</body>
</html>