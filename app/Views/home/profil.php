<div id="fh5co-project">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Our Profile</h2>
                <p>Berikut Profil dari Pascasarjana Nuklir ITB.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid proj-bottom">
        <div class="row">
            <?php $pr = 1;
            foreach ($profil as $profi) { ?>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="<?php echo base_url('berita/profil/' . $profi['slug_berita']) ?>"><img style="width: 100%; height: 300px;" src="<?php echo base_url('assets/upload/image/' . $profi['gambar']) ?>" alt="" class="img-responsive">
                        <h3><?php echo $profi['judul_berita'] ?></h3>
                        <span>View</span>
                    </a>
                </div>
            <?php $pr++;
            } ?>
        </div>
    </div>

</div>