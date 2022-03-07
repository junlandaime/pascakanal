<main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <?php foreach ($slider as $slide) { ?>
    <?php if ($slide['judul_galeri'] == 'Slidedownload') { ?>
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
            <div class="row mt-5">

              <table class="table table-bordered" id="example1">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="30%">Judul</th>
                    <th width="30%">Keterangan</th>
                    <th width="15%">Author</th>
                    <th width="10%">File</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($download as $download) { ?>
                    <tr>
                      <td class="text-center"><?php echo $no ?></td>
                      <td><?php echo $download['judul_download'] ?></td>
                      <td><?php echo $download['isi'] ?></td>
                      <td><?php echo $download['nama'] ?></td>
                      <td>
                        <?php if ($download['gambar'] == "") {
                          echo '-';
                        } else { ?>
                          <a href="<?php echo base_url('download/unduh/' . $download['id_download']) ?>" class="btn btn-success btn-sm btn-block"><i class="fa fa-download"></i> Unduh</a>
                        <?php } ?>
                      </td>
                    </tr>
                  <?php $no++;
                  } ?>
                </tbody>
              </table>

            </div>
          </div>
        </section>
      </div>
    </div>
  </div>


  <!-- ======= Contact Section ======= -->
  <!-- End Contact Section -->
</main><!-- End #main -->