<?php

use App\Models\Berita_model;

$m_berita   = new Berita_model();
$sidebar  = $m_berita->sidebar();
?>
<main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <header id="fh5co-title-box" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url('assets/upload/image/' . $berita['gambar']) ?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="display-t">
            <div class="display-tc animate-box" data-animate-effect="fadeIn">
              <h1><?php echo $title ?></h1>
              <h2><?php echo $berita['ringkasan'] ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Breadcrumbs Section -->

  <!-- ======= Contact Section ======= -->




  <div id="fh5co-pricing">
    <div class="container">
      <div class="row">
        <div class="row">

          <div class="col-md-8">
            <h1 style="margin-bottom:0px;"><a href="#"><?php echo $berita['judul_berita'] ?></a></h1>
            <small><em>Posted by: <?php echo $berita['nama'] ?> | <?php echo tanggal_bulan_menit($berita['tanggal_publish']) ?> | Updated: <?php echo tanggal_bulan($berita['tanggal']) ?> | <?php echo $berita['hits'] ?> kali dibaca </em></small>
            <figure>
              <img src="<?php echo base_url('assets/upload/image/' . $berita['gambar']) ?>" alt="" class="img-responsive">
            </figure>
            <?php echo $berita['isi'] ?>

          </div>





          <h4>KATEGORI</h4>

          <ul class="list-unstyled">

          </ul>



          <br />

          <h4>POST TERBARU</h4>

          <?php foreach ($sidebar as $sidebar) : ?>
            <div class="media">
              <div class="media-left">
                <a href="<?php echo base_url('berita/read/' . $sidebar['slug_berita']) ?>">
                  <img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/' . $sidebar['gambar']) ?>" width="90">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="<?php echo base_url('berita/read/' . $sidebar['slug_berita']) ?>"><?php echo $sidebar['judul_berita'] ?></a></h4>
                <span><small><i>by: <?php echo $sidebar['nama'] ?> | <?php echo tanggal_bulan_menit($sidebar['tanggal']) ?></i></small></span>
              </div>
            </div>
          <?php endforeach; ?>

        </div>


      </div>
    </div>
  </div>
  </div>

  <!-- End Contact Section -->
</main><!-- End #main -->