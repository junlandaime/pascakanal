<!-- File js dari sebelumnya -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() ?>/assets/albumjs/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() ?>/assets/albumjs/css/jgallery.min.css?v=1.6.0" />
<script type="text/javascript" src="<?php echo base_url() ?>/assets/albumjs/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/albumjs/js/jgallery.min.js?v=1.6.0"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/albumjs/js/touchswipe.min.js"></script>

<main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <?php foreach ($slider as $slide) { ?>
    <?php if ($slide['judul_galeri'] == 'Slidegaleri') { ?>
      <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <div class="display-t">
                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                  <h1><?php echo $title ?></h1>
                  <h2><?php echo $slide['isi'] ?></a></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    <?php } ?>
  <?php } ?>
  <!-- End Breadcrumbs Section -->
  <script type="text/javascript">
    $(function() {
      $('#gallery').jGallery();
    });
  </script>
  <!-- <?php var_dump($kategori) ?> -->
  <div id="fh5co-pricing">
    <div class="container">
      <div class="row">

        <div id="gallery">


          <?php $i = 0 ?>
          <?php while ($i <= $konfigurasi['numalbum']) { ?>

            <div class="album" data-jgallery-album-title="<?php echo $kategori[$i]['nama_kategori_galeri'] ?>">

              <?php foreach ($galeri as $galer) { ?>
                <?php if ($galer['nama_kategori_galeri'] == $kategori[$i]['nama_kategori_galeri']) { ?>
                  <a href="<?php echo base_url('assets/upload/image/' . $galer['gambar']) ?>"><img src="<?php echo base_url('assets/upload/image/' . $galer['gambar']) ?>" alt="<?php echo $galer['judul_galeri'] ?>" /></a>

                <?php }  ?>
              <?php } ?>
            </div>
            <?php $i++ ?>
          <?php } ?>

        </div>


      </div>
    </div>
  </div>




  <!-- ======= Gallery Section ======= -->
  <!-- End Gallery Section -->