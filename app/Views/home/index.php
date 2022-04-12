<?php

use App\Models\Menu_model;

$menu         = new Menu_model();
$berita       = $menu->berita();
$profil       = $menu->profil();
$layanan      = $menu->layanan();
?>

<!-- ======= Header ======= -->


<?php foreach ($slider as $slide) { ?>
  <?php if ($slide['judul_galeri'] == 'SlideHome') { ?>

    <header id="fh5co-testimonial" class="fh5co-bg-section" style="background-image:url(<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row animate-box">
              <div class="owl-carousel owl-carousel-fullwidth">
                <div class="item">
                  <div id="fh5co-header" style="margin-top: 4cm;" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                      <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                          <h1><?= $slide['isi'] ?></h1>
                          <p><a class="btn btn-primary btn-lg btn-learn" href="#">Take A Course</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href=""><i class="icon-play"></i> Watch Video</a></p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              <?php } ?>
            <?php } ?>
            <?php foreach ($slider as $slid) { ?>
              <?php if ($slid['judul_galeri'] == 'SlideHomeNews') { ?>
                <div class="item">
                  <div id="fh5co-header" style="margin-top: 4cm;" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                      <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                          <h1><?= $slid['isi'] ?></h1>
                          <p><a class="btn btn-primary btn-lg btn-learn" href="<?= $slid['website'] ?>">Info Detail</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="<?php echo base_url('assets/upload/image/' . $slid['gambar']) ?>"><i class="icon-play"></i> Watch Info</a></p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

  <?php } ?>
<?php } ?>


<!-- End Header -->
<!-- ======= Hero Section ======= -->

<!-- End Hero -->

<div id="fh5co-counter" class="fh5co-counters">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center animate-box">
        <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $konfigurasi['num1'] ?>" data-speed="5000" data-refresh-interval="50"></span>
        <span class="fh5co-counter-label"><?php echo $konfigurasi['kolom1'] ?></span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $konfigurasi['num2'] ?>" data-speed="5000" data-refresh-interval="50"></span>
        <span class="fh5co-counter-label"><?php echo $konfigurasi['kolom2'] ?></span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $konfigurasi['num3'] ?>" data-speed="5000" data-refresh-interval="50"></span>
        <span class="fh5co-counter-label"><?php echo $konfigurasi['kolom3'] ?></span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $konfigurasi['num4'] ?>" data-speed="5000" data-refresh-interval="50"></span>
        <span class="fh5co-counter-label"><?php echo $konfigurasi['kolom4'] ?></span>
      </div>
    </div>
  </div>
</div>

<main id="main">
  <div id="fh5co-explore" class="fh5co-bg-section">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
          <h2>Selamat datang di <?php echo $konfigurasi['namaweb'] ?></h2>
          <p><?php echo $konfigurasi['tagline'] ?></p>
        </div>
      </div>
    </div>
    <div class="fh5co-explore fh5co-explore1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-5 animate-box">
            <?php foreach ($slider as $slide) { ?>
              <?php if ($slide['judul_galeri'] == 'Roadmap1') { ?>
                <img class="img-responsive" src="<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>" alt="work">

          </div>
          <div class="col-md-4 col-md-pull-8 animate-box">
            <div class="mt">
              <h3><?php echo $slide['isi'] ?></h3>
            <?php } ?>
          <?php } ?>
          <?php foreach ($slider as $slide) { ?>
            <?php if ($slide['judul_galeri'] == 'Roadmap2') { ?>
              <p><?php echo $slide['isi'] ?></p>
              <p><img src="<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>" class="img img-thumbnail" alt=""></p>
            <?php } ?>
          <?php } ?>
          <!-- <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fh5co-explore">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-pull-1 animate-box">
            <?php foreach ($slider as $slide) { ?>
              <?php if ($slide['judul_galeri'] == 'Roadmap3') { ?>
                <img class="img-responsive" src="<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>" alt="work">
          </div>
          <div class="col-md-4 animate-box">
            <div class="mt">
              <div>
                <h4></i><?php echo $slide['isi'] ?></h4>
              <?php } ?>
            <?php } ?>
            <?php foreach ($slider as $slide) { ?>
              <?php if ($slide['judul_galeri'] == 'Roadmap4') { ?>
                <p><?php echo $slide['isi'] ?></p>
                <p><img src="<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>" class="img img-thumbnail" alt=""></p>
              </div>
            <?php } ?>
          <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- ======= Featured Services Section ======= -->
  <!-- End Featured Services Section -->

  <!-- ======= Cta Section ======= -->

  <!-- End Cta Section -->

  <!-- ======= About Us Section ======= -->
  <!-- End About Us Section -->

  <?php include('profil.php') ?>

  <!-- ======= Services Section ======= -->

  <!-- End Services Section -->

  <?php include('berita.php') ?>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div>
      <style type="text/css" media="screen">
        iframe {
          min-height: 300px;
          width: 100%;
        }
      </style>
      <?php echo google_map() ?>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->