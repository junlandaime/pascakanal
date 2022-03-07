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

    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="display-t">
              <div class="display-tc animate-box" data-animate-effect="fadeIn">
                <h1><?php echo $slide['isi'] ?></h1>
                <!-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> -->
                <p><a class="btn btn-primary btn-lg btn-learn" href="#">Get Started</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-book"></i> Curicullum</a></p>
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
        <span class="fh5co-counter js-counter" data-from="0" data-to="40356" data-speed="5000" data-refresh-interval="50"></span>
        <span class="fh5co-counter-label">Students</span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="fh5co-counter js-counter" data-from="0" data-to="30290" data-speed="5000" data-refresh-interval="50"></span>
        <span class="fh5co-counter-label">Courses</span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="fh5co-counter js-counter" data-from="0" data-to="2039" data-speed="5000" data-refresh-interval="50"></span>
        <span class="fh5co-counter-label">Instructor</span>
      </div>
      <div class="col-md-3 text-center animate-box">
        <span class="fh5co-counter js-counter" data-from="0" data-to="997585" data-speed="5000" data-refresh-interval="50"></span>
        <span class="fh5co-counter-label">Earnings</span>
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



  <!-- ======= Services Section ======= -->
  <div id="fh5co-project">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
          <h2>Our People</h2>
          <p>Bisa diisi dengan kalimat pembuka terkait orang-orang kami.</p>
        </div>
      </div>
    </div>
    <div class="container-fluid proj-bottom">
      <div class="row">
        <?php $pr = 1;
        foreach ($profil as $profi) { ?>
          <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
            <a href="<?php echo base_url('berita/profil/' . $profi['slug_berita']) ?>"><img style="width: 100%; height: 300px;" src="<?php echo base_url('assets/upload/image/' . $profi['gambar']) ?>" alt="" class="img-responsive">
              <h3><?php echo $profi['judul_berita'] ?></h3>
              <span>View</span>
            </a>
          </div>
        <?php $pr++;
        } ?>
      </div>
    </div>

  </div>
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