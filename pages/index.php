<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/estilo.css" />
    <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <script src="../js/swiper-bundle.min.js"></script>
    <title>BABYMETAL</title>
  </head>
  <body>
    <?php include('../src/navbar.php'); ?>
    <main>
      <div class="inicio">
        <img src="media/inicio.png" alt="" />
      </div>

      <section class="albums">
        <div class="container swiper">
          <h2>popular albums</h2>
          <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">
              <?php
                include('../src/albums.php');
              ?>
            </div>
          </div>
          <div class="swiper-button-next swiper-navBtn"></div>
          <div class="swiper-button-prev swiper-navBtn"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <section class="albums">
        <div class="container swiper">
          <h2>popular albums</h2>
          <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">
              <?php
                include('../src/albums.php');
              ?>
            </div>
          </div>
          <div class="swiper-button-next swiper-navBtn"></div>
          <div class="swiper-button-prev swiper-navBtn"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <section class="biografia">
        <div class="container-bio">
          <h2>Biografia</h2>
          <div class="bio-img">
            <img src="../media/biografia/suzuka.jpg" alt="" id="imagen1" />

            <img src="../media/biografia/moa.jpg" alt="" id="imagen2" />

            <img src="../media/biografia/momo.jpg" alt="" id="imagen3" />

          </div>
        </div>
        <a href="#">Ver biografia</a>
      </section>
    </main>

    <?php
      include('../src/footer.php');
    ?>
    <script src="../js/js.js"></script>
  </body>
</html>
