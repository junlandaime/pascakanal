<main id="main">

  <!-- ======= Slider Header Section ======= -->
  <?php foreach ($slider as $slide) { ?>
    <?php if ($slide['judul_galeri'] == 'SlideMenu2') { ?>

      <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url('assets/upload/image/' . $menu_profil[0]['gambar']) ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <div class="display-t">
                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                  <h1><?php echo $menu_profil[0]['judul_berita'] ?></h1>
                  <h2><?php echo $menu_profil[0]['isi'] ?></h2>

                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

    <?php } ?>
  <?php } ?>

  <div id="fh5co-pricing">
    <div class="container">
      <div class="row">
        <div>
          <table class="table" style="width: auto;">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="15%">Data Lector</th>
                <th width="35%">Education</th>
                <th width="25%">Kelompok Keahlian</th>
                <th width="5%">Sekolah / Fakultas</th>
                <th width="5%">Jabatan Fungsional</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $i = 1; ?>
                <?php foreach ($lecture as $lec) : ?>
                  <?php if ($lec["nama_kategori_lecture"] == $title) : ?>
                    <th scope="row"><?= $i; ?></th>
                    <td><b><a href="<?php echo base_url('lecture/' . $lec['slug_nama']) ?>"><?= $lec['nama']; ?></b> <br> <img src="<?php echo base_url('assets/upload/lecture/' . $lec['gambar']) ?>" style="width: 50%; height: auto;" class="img img-thumbnail" alt=""></td>
                    <td>
                      <?php echo $lec['pendidikan'] ?>
                    </td>
                    <td><?= $lec['keahlian']; ?></td>
                    <td><?= $lec['sekofaku']; ?></td>
                    <td><?= $lec['jabatan']; ?> <br> (<?= $lec['fungsional']; ?>)</td>
              </tr>
              <?php $i++; ?>
            <?php endif; ?>
          <?php endforeach; ?>

            </tbody>
          </table>
          <br>
          <br>
          <?php if ($title == 'Lecturer') : ?>
            <div class="container">
              <h4>Dosen Tamu (Guest Lecture)</h4>
              <p class="fh5co-staff">Other Lecturers : Partial or Guest lecture from ractitioners, Industries, Government, Research Center, Regulator, universities (Nasional and international), and international organization.</p>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>




  <!-- ======= Contact Section ======= -->
  <!-- End Contact Section -->
</main><!-- End #main -->