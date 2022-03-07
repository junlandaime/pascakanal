<main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <?php foreach ($slider as $slide) { ?>
    <?php if ($slide['judul_galeri'] == 'Slidevideo') { ?>
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
        <div class="container">
          <div class="row mt-5">
            <?php foreach ($video as $video) { ?>
              <div class="col-md-6">
                <div class="card" style="margin-bottom: 20px;">

                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="min-height: 300px;"></iframe>
                    </div>
                    <hr>
                    <h3><?php echo $video['judul'] ?></h3>
                    <p class="card-text">
                      <?php echo $video['keterangan'] ?>
                    </p>

                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>



</main><!-- End #main -->