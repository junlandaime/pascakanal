<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <?php foreach ($slider as $slide) { ?>
    <?php if ($slide['judul_galeri'] == 'Slidekontak') { ?>
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


  <div id="fh5co-pricing">
    <div class="container">
      <div class="row">
        <section id="contact" class="contact">
          <div class="container">

            <div class="section-title">
              <h2><?php echo $title ?></h2>

            </div>

          </div>



          <div class="container">

            <div class="row mt-5">

              <div class="col-lg-6">

                <div class="row">
                  <div class="col-md-12">
                    <div class="info-box">
                      <i class="bx bx-map"></i>
                      <h3>Alamat Kami:</h3>
                      <p><?php echo nl2br($konfigurasi['alamat']) ?></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box mt-4">
                      <i class="bx bx-envelope"></i>
                      <h3>Email Kami:</h3>
                      <p><?php echo nl2br($konfigurasi['email']) ?></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box mt-4">
                      <i class="bx bx-phone-call"></i>
                      <h3>Telepon Kami:</h3>
                      <p><?php echo nl2br($konfigurasi['telepon']) ?></p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-lg-6">
                <style type="text/css" media="screen">
                  iframe {
                    width: 100%;
                    min-height: 400px;
                  }
                </style>
                <?php echo $konfigurasi['google_map'] ?>
              </div>

            </div>
          </div>

        </section>
      </div>
    </div>
  </div>


  <!-- ======= Contact Section ======= -->
  <!-- End Contact Section -->

</main><!-- End #main -->