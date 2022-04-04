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
                                        <h1>Silabus Mata Kuliah</h1>
                                        <h2><?= $kurikulum['kodem'] ?> - <?= $kurikulum['tahun'] ?></h2>
                                        <!-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> -->
                                        <!-- <p><a class="btn btn-primary btn-lg btn-learn" href="#">Get Started</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-book"></i> Curicullum</a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

            <?php } ?>
        <?php } ?>

        <div id="fh5co-explore" class="fh5co-bg-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h5>Kode Mata Kuliah: </h5>
                        <h2><?= $kurikulum['kodem'] ?> / <?= $kurikulum['jumsks'] ?> SKS</h2>
                        <h5>Penyelenggara: </h5>
                        <p><?= $kurikulum['kodep'] ?> - <?= $kurikulum['namap'] ?> / <?= $kurikulum['fakul'] ?></p>

                    </div>
                </div>
            </div>

            <div class="fh5co-explore fh5co-explore1">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2>Nama Mata Kuliah</h2>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="mt">
                                <h3><?= $kurikulum['namam'] ?></h3>
                                <p>Silabus Ringkas</p>
                                <p><?= $kurikulum['silring'] ?></p>
                                <p>Silabus Lengkap</p>
                                <p><?= $kurikulum['silleng'] ?></p>
                                <div>
                                    <h3>Luaran <br> (Outcomes)</h3>
                                    <?= $kurikulum['luaran'] ?>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 animate-box">

                            <div class="mt">
                                <h3><?= $kurikulum['naming'] ?> </h3>
                                <p>&nbsp;</p>
                                <p><?= $kurikulum['silriing'] ?></p>
                                <p>&nbsp;</p>
                                <p><?= $kurikulum['silling'] ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fh5co-explore">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 animate-box">
                            <div class="mt">
                                <div>
                                    <h4><i class="icon-clipboard"></i>Mata Kuliah Terkait</h4>
                                    <p><?= $kurikulum['matkulit'] ?> </p>
                                </div>
                                <div>
                                    <h4><i class="icon-laptop"></i>Kegiatan Penunjang</h4>
                                    <p><?= $kurikulum['penunjang'] ?> </p>
                                </div>
                                <div>
                                    <h4><i class="icon-book"></i>Pustaka</h4>
                                    <?= $kurikulum['pustaka'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="mt">
                                <div>
                                    <h4><i class="icon-list"></i>Panduan Penilaian</h4>
                                    <p><?= $kurikulum['penilaian'] ?> </p>
                                </div>
                                <div>
                                    <h4><i class="icon-plus"></i>Catatan Tambahan</h4>
                                    <p>&nbsp;</p>
                                    <p> <?= $kurikulum['tambahan'] ?></p>

                                </div>
                                <div>
                                    <h4><i class="icon-shield"></i>Satuan Acara Perkuliahan</h4>
                                    <?= $kurikulum['satuanacara'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>