<?php
  $title = "404 | ICHSA 2018";
  $id_name = 'id="call-for-paper-page"';
  include 'include/php/head.php';
?>
  <main>
    <div class="container">
      <div class="col s12">
        <div class="row">

          <h1 style="font-weight:100;font-size:70px; text-align:center; text-transform:uppercase;">404 Error.</h1>
          <h4 style="font-weight:500;font-size:20px; text-align:center;">Oooooops! Looks like nothing was found at this location. Maybe try on of the links below, click on the top menu </h4>

          <div id='animation' style="margin-top:-10px;"></div>
          <div class="col s12 center">
            <a class="waves-effect btn-large waves-light btn center-align hoverable" href="index.php">HOME</a>
          </div>
        </div>
      </div>
    </div>

  </main>

  <script type="text/javascript" src="assets/js/bodymovin.min.js"></script>
  <script type="text/javascript">
    var animData = {
      wrapper: document.getElementById('animation'),
      animType: 'svg',
      loop: true,
      prerender: true,
      autoplay: true,
      path: 'https://res.cloudinary.com/rodetyo/raw/upload/v1462460587/kish.json'
    };
    var anim = bodymovin.loadAnimation(animData);
  </script>

  <?php
   include 'include/php/foot.php';
  ?>
