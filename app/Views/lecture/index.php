<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <?php foreach ($slider as $slide) { ?>
    <?php if ($slide['judul_galeri'] == 'SlidedetailL') { ?>
      <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <div class="display-t">
                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                  <h1><?php echo $lecture['nama_kategori_lecture'] ?> Kami</h1>
                  <h2><?php echo $lecture['nama'] ?></a></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    <?php } ?>
  <?php } ?>
  <!-- End Breadcrumbs Section -->

  <!-- ======= Doctors Section ======= -->
  <div id="fh5co-pricing">
    <div class="container">
      <div class="row">
        <div class="fh5co-explore fh5co-explore1">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                <h2>Details Profile</h2>

              </div>
              <div class="col-md-8">

                <div>

                  <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                      <img src="<?php echo base_url('assets/upload/lecture/' . $lecture['gambar']) ?>" style="width: 50%; height: auto;" alt="">
                      <br>
                      <br>
                      <h3 class="display-4"><?php echo $lecture['prenama'] ?> <?php echo $lecture['nama'] ?>, <?php echo $lecture['postnama'] ?></h3>

                      <table class="table table-striped table-dark">

                        <tbody>
                          <tr>
                            <th scope="row">Kelompok Keahlian</th>
                            <td><?= $lecture['keahlian']; ?></td>
                          </tr>
                          <tr>
                            <th scope="row">Sekolah Fakultas</th>
                            <td><?= $lecture['sekofaku']; ?></td>
                          </tr>
                          <tr>
                            <th scope="row">Jabatan Fungsional</th>
                            <td><?= $lecture['fungsional']; ?></td>
                          </tr>
                        </tbody>
                      </table>


                    </div>
                  </div>

                  <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                      <h3 class="display-4">Education</h3>
                    </div>
                    <div class="container">

                      <p><?= $lecture['pendidikan']; ?></p>

                    </div>
                  </div>

                  <!-- <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                      <h3 class="display-4">Project</h3>
                      <p><?= $lecture['project']; ?></p>
                    </div>
                  </div>

                  <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                      <h3 class="display-4">Publication</h3>
                      <p><?= $lecture['publication']; ?></p>
                    </div>
                  </div>

                  <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                      <h3 class="display-4">HKI</h3>
                      <p><?= $lecture['hki']; ?></p>
                    </div>
                  </div> -->

                  <div class="jumbotron jumbotron-fluid">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Project</a></li>
                      <li><a data-toggle="tab" href="#menu1">Publication</a></li>
                      <li><a data-toggle="tab" href="#menu2">HKI</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <br>

                        <p><?= $lecture['project']; ?></p>
                      </div>
                      <div id="menu1" class="tab-pane fade">
                        <br>

                        <p><?= $lecture['publication']; ?></p>
                      </div>
                      <div id="menu2" class="tab-pane fade">
                        <br>
                        <p><?= $lecture['hki']; ?></p>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
              <div class="col-md-4">
                <div>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Data <?php echo $lecture['nama_kategori_lecture'] ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = $lecture['slug_nama'] ?>
                      <?php $l = $lecture['nama_kategori_lecture'] ?>
                      <?php foreach ($lektor as $lec) : ?>
                        <?php if ($lec['nama_kategori_lecture'] == $l) : ?>
                          <tr>
                            <td <?php if ($i == $lec["slug_nama"]) : ?> class="active" <?php endif ?>>
                              <a href="<?php echo base_url('lecture/' . $lec['slug_nama']) ?>"><?= $lec['nama']; ?>
                              <?php endif ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <!-- End Doctors Section -->




</main><!-- End #main -->