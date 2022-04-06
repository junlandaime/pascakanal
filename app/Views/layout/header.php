<?php

use App\Models\Konfigurasi_model;
use App\Models\Menu_model;

$konfigurasi  = new Konfigurasi_model;
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan  = $menu->layanan();
?>
<!-- ======= Top Bar ======= -->
<div class="fh5co-loader"></div>

<div id="page">
  <nav class="fh5co-nav" role="navigation">
    <div class="top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-right">
            <p class="num"><?php echo telepon() ?></p>
            <ul class="fh5co-social">
              <li><a href="<?php echo $site['facebook'] ?>"><i class="icon-facebook"></i></a></li>
              <li><a href="<?php echo $site['instagram'] ?>"><i class="icon-instagram"></i></a></li>
              <li><a href="<?php echo $site['youtube'] ?>"><i class="icon-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="top-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-1">
            <div id="fh5co-logo"><a href="<?= base_url(); ?>">Nuclear<span>.</span></a></div>
          </div>
          <div class="col-xs-11 text-right menu-1">
            <ul>

              <li class=""><a href="<?php echo base_url() ?>">Home</a></li>

              <li class="has-dropdown">
                <a>Profile</a>
                <ul class="dropdown">
                  <?php foreach ($menu_profil as $menu_profil) { ?>
                    <li><a href="<?php echo base_url('berita/profil/' . $menu_profil['slug_berita']) ?>"><?php echo $menu_profil['judul_berita'] ?></a></li>
                  <?php } ?>
                  <!-- <li><a href="<?php echo base_url('kurikulum') ?>">Curriculum</a></li> -->
                </ul>
              </li>

              <li class="has-dropdown">
                <a href="<?php echo base_url('berita') ?>">Information</a>
                <ul class="dropdown">
                  <?php foreach ($menu_berita as $menu_berita) { ?>
                    <li><a href="<?php echo base_url('berita/kategori/' . $menu_berita['slug_kategori']) ?>"><?php echo $menu_berita['nama_kategori'] ?></a></li>
                  <?php } ?>
                </ul>
              </li>

              <li class="has-dropdown">
                <a>Research &amp; Collaboration</a>
                <ul class="dropdown">
                  <?php foreach ($menu_layanan as $menu_layanan) { ?>
                    <li><a href="<?php echo base_url('berita/layanan/' . $menu_layanan['slug_berita']) ?>"><?php echo $menu_layanan['judul_berita'] ?></a></li>
                  <?php } ?>
                </ul>
              </li>

              <li class="has-dropdown">
                <a><span>Gallery &amp; Video</span></a>
                <ul class="dropdown">
                  <li><a href="<?php echo base_url('galeri') ?>">Gallery Photo </a></li>
                  <li><a href="<?php echo base_url('video') ?>">Gallery Video</a></li>
                  <li><a href="<?php echo base_url('download') ?>">Gallery Files</a></li>
                </ul>
              </li>

              <li><a href="<?php echo base_url('kontak') ?>">Contact</a></li>
              <li class="btn-cta"><a href="<?php echo base_url('login') ?>"><span>Admin</span></a></li>
              <!-- <li class="btn-cta"><a href="#"><span>Create a Course</span></a></li> -->
            </ul>
          </div>
        </div>

      </div>
    </div>
  </nav>