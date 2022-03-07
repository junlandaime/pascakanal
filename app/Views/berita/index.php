<main id="main">

  <?php foreach ($slider as $slide) { ?>
    <?php if ($slide['judul_galeri'] == 'Slideberita') { ?>
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

  <!-- ======= Contact Section ======= -->

  <div id="fh5co-blog">
    <div class="container">
      <div class="row">
        <?php foreach ($berita as $berita) { ?>
          <div class="col-lg-4 col-md-4">
            <div class="fh5co-blog animate-box">
              <a href="<?php echo base_url('berita/read/' . $berita['slug_berita']) ?>"><img class="img-responsive" src="<?php echo base_url('assets/upload/image/' . $berita['gambar']) ?>" style="width: 100%; height: 259px;" alt=""></a>
              <div class="blog-text">
                <h3><a href="<?php echo base_url('berita/read/' . $berita['slug_berita']) ?>"><?php echo $berita['judul_berita'] ?></a></h3>
                <span class="posted_on"><?php echo tanggal_bulan_menit($berita['tanggal']) ?></span>
                <span class="comment"><a href=""><?php echo $berita['hits'] ?><i class="icon-speech-bubble"></i></a></span>
                <p><?php echo $berita['ringkasan'] ?></p>
                <a href="<?php echo base_url('berita/read/' . $berita['slug_berita']) ?>" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </div>
  <!-- End Contact Section -->
</main><!-- End #main -->