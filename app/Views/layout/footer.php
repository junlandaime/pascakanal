<?php

use App\Models\Konfigurasi_model;

$konfigurasi  = new Konfigurasi_model;
$site         = $konfigurasi->listing();
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
?>
<!-- ======= Footer ======= -->
<footer id="fh5co-footer" role="contentinfo">
  <div class="container">
    <div class="row row-pb-md">
      <div class="col-md-3 fh5co-widget">
        <h4>About <?php echo $site['namaweb'] ?></h4>
        <p><?php echo $site['deskripsi'] ?></p>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
        <h4><?php echo $site['namaweb'] ?></h4>
        <ul class="fh5co-footer-links">
          <?php foreach ($menu_profil as $menu_profil) { ?>
            <li><a href="<?php echo base_url('berita/profil/' . $menu_profil['slug_berita']) ?>"><?php echo $menu_profil['judul_berita'] ?></a></li>
          <?php } ?>
          <li><a href="<?php echo base_url('kurikulum') ?>">Our Curicullum</a></li>
        </ul>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
        <h4>Facility</h4>
        <ul class="fh5co-footer-links">
          <?php foreach ($menu_layanan as $menu_layanan) { ?>
            <li><a href="<?php echo base_url('berita/layanan/' . $menu_layanan['slug_berita']) ?>"><?php echo $menu_layanan['judul_berita'] ?></a></li>
          <?php } ?>
        </ul>
      </div>


      <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
        <h4>Our Activity</h4>
        <ul class="fh5co-footer-links">
          <li><a href="<?php echo base_url('galeri') ?>">Galeri Gambar</a></li>
          <li><a href="<?php echo base_url('video') ?>">Galeri Video</a></li>
          <li><a href="<?php echo base_url('download') ?>">Download File</a></li>
          <li><a href="<?php echo base_url('kontak') ?>">Kontak Kami</a></li>
        </ul>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
        <h4>Find Us</h4>
        <ul class="fh5co-footer-links">
          <li><a href="<?php echo $site['twitter'] ?>">Twitter</a></li>
          <li><a href="<?php echo $site['facebook'] ?>">Facebook</a></li>
          <li><a href="<?php echo $site['instagram'] ?>">Instagram</a></li>
          <li><a href="<?php echo $site['youtube'] ?>">Youtube</a></li>
        </ul>
      </div>
    </div>

    <div class="row copyright">
      <div class="col-md-12 text-center">
        <p>
          <small class="block">&copy; 2021 Kanalnuklirid. All Rights Reserved.</small>
          <!-- <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small> -->
        </p>
        <p>
        <ul class="fh5co-social-icons">
          <li><a href="<?php echo $site['twitter'] ?>" class="twitter"><i class="icon-twitter"></i></a></li>
          <li><a href="<?php echo $site['facebook'] ?>" class="twitter"><i class="icon-facebook"></i></a></li>
          <li><a href="<?php echo $site['instagram'] ?>" class="twitter"><i class="icon-instagram"></i></a></li>
          <li><a href="<?php echo $site['youtube'] ?>" class="twitter"><i class="icon-youtube"></i></a></li>
        </ul>
        </p>
      </div>
    </div>

  </div>
</footer>
</div>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="<?= base_url(); ?>/assets/template/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?= base_url(); ?>/assets/template/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url(); ?>/assets/template/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>/assets/albumjs/js/jgallery.min.js?v=1.6.0"></script>

<!-- Waypoints -->
<script src="<?= base_url(); ?>/assets/template/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="<?= base_url(); ?>/assets/template/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="<?= base_url(); ?>/assets/template/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="<?= base_url(); ?>/assets/template/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="<?= base_url(); ?>/assets/template/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>/assets/template/js/magnific-popup-options.js"></script>

<!-- Main -->
<script src="<?= base_url(); ?>/assets/template/js/main.js"></script>



</body>

</html>