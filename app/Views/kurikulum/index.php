<main id="main">

  <main id="main">

    <!-- ======= Slider Header Section ======= -->
    <?php foreach ($slider as $slide) { ?>
      <?php if ($slide['judul_galeri'] == 'SlideMenu2') { ?>

        <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?php echo base_url('assets/upload/image/' . $slide['gambar']) ?>);" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                  <div class="display-tc animate-box" data-animate-effect="fadeIn">
                    <h1><?php echo $slide['isi'] ?></h1>
                    <!-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> -->
                    <p><a class="btn btn-primary btn-lg btn-learn" href="#">Get Started</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-book"></i> Curicullum</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>

      <?php } ?>
    <?php } ?>

    <!-- ======= Doctors Section ======= -->
    <div id="fh5co-pricing">
      <div class="container">
        <div class="row animate-box">
          <div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
            <h2>Our Curicullum</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <table class="table table-bordered" id="example1">
              <thead>
                <tr>
                  <th width="5%" style="text-align: center;">No</th>
                  <th width="5%" style="text-align: center;">Kode</th>
                  <th width="20%" style="text-align: center;">Nama</th>
                  <th width="20%" style="text-align: center;">Silabus Ringkas</th>
                  <th width="30%" style="text-align: center;">Pustaka</th>
                  <th width="5%" style="text-align: center;">Download File Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($kurikulum as $kurikulum) { ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $kurikulum['kodem'] ?>

                    </td>
                    <td><?php echo $kurikulum['namam'] ?>
                      <small>
                        <br><i class="fa fa-home"></i> <?php echo $kurikulum['naming'] ?>
                      </small>
                    </td>
                    <td><?php echo $kurikulum['silring'] ?></td>
                    <td><i class="fa fa-phone"></i> <?php echo $kurikulum['pustaka'] ?>

                    </td>
                    <td><?php if ($kurikulum['gambar'] == "") {
                          echo '-';
                        } else { ?>
                        <a target="_blank" href="<?php echo base_url('assets/upload/kurikulum/' . $kurikulum['gambar']) ?>" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Unduh</a>
                      <?php } ?>
                    </td>
                  </tr>
                <?php $no++;
                } ?>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </div>

    <!-- End Doctors Section -->


  </main><!-- End #main -->