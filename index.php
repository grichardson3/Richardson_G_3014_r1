<?php
  include_once 'includes/nav.php';
?>

<section>
  <h2 class="hidden">HOME</h2>
  <div class="row">
    <article class="small-12 columns">
      <h2>Hi!</h2>
      <p>Welcome to the test page! There really isn't much here...</p>
      <?php
        if (isset($_SESSION['u_id'])) {
          echo '<p>Hey! you are logged in! Now I can show you my favourite web developer meme!</p>
            <img src="img/code-meme.jpg" alt="Code Meme">';
        }
      ?>
    </article>
  </div>
</section>

<!--DON'T DELETE!!!-->
  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/what-input.min.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/app.js"></script>
<!-- DON'T DELETE!!!-->
</body>
</html>