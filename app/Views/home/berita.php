<!-- ======= Contact Section ======= -->

<div id="fh5co-blog">
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>Informasi Terbaru</h2>
        <p>Nikmati Sajian Informasi Terbaru dari kami</p>
      </div>
    </div>
    <?php foreach ($berita2 as $berita2) { ?>
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="fh5co-blog animate-box">
            <a href="<?php echo base_url('berita/read/' . $berita2['slug_berita']) ?>"><img class="img-responsive" src="<?php echo base_url('assets/upload/image/' . $berita2['gambar']) ?>" style="width: 100%; height: 259px;" alt=""></a>
            <div class="blog-text">
              <h3><a href="<?php echo base_url('berita/read/' . $berita2['slug_berita']) ?>"><?php echo $berita2['judul_berita'] ?></a></h3>
              <span class="posted_on"><?php echo tanggal_bulan($berita2['tanggal_publish']) ?></span>
              <span class="comment"><a href=""><?php echo $berita2['hits'] ?><i class="icon-speech-bubble"></i></a></span>
              <p><?php echo $berita2['ringkasan'] ?></p>
              <a href="<?php echo base_url('berita/read/' . $berita2['slug_berita']) ?>" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      <?php } ?>

      </div>
  </div>
</div>
<!-- End Contact Section -->