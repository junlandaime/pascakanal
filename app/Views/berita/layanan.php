<main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url('assets/upload/image/' . $berita['gambar']) ?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="display-t">
            <div class="display-tc animate-box" data-animate-effect="fadeIn">
              <h1><?php echo $title ?></h1>
              <h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ======= Contact Section ======= -->


  <div id="fh5co-pricing">
    <div class="container">
      <div class="row">
        <div class="container">
          <div class="row mt-2">

            <div class="col-md-4">
              <img src="<?php echo base_url('assets/upload/image/' . $berita['gambar']) ?>" class="img img-thumbnail">
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h1><?php echo $title ?></h1>
                </div>
                <div class="card-body">
                  <?php echo $berita['isi'] ?>
                </div>
                <div class="card-footer">
                  Updated by: <?php echo $berita['nama'] ?> | Tanggal: <?php echo tanggal_bulan_menit($berita['tanggal']) ?>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Section -->


</main><!-- End #main -->