<?= $this->extend('template'); ?>
<?= $this->section('bodycontent'); ?>
<div class="content">
    <!-- Header Start -->
    <div class="header" id="header">
        <div class="content-inner">
            <p>I'm</p>
            <h1>M. Elki Ismuhamdan</h1>
            <h2></h2>
            <div class="typed-text">Photographer, Videographer, Musician, Editor, Programmer</div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Large Button Start -->
    <div class="large-btn">
        <div class="content-inner">
            <a class="btn" href="https://www.youtube.com/channel/UCBwozxBoEcmMf1NaUPBNlYg"><i class="fa fa-play"></i>My Youtube</a>
            <a class="btn" href="https://www.blogger.com/profile/12921697267627558683"><i class="fa fa-blog"></i>My Blog</a>
        </div>
    </div>
    <!-- Large Button End -->

    <!-- About Start -->
    <div class="about" id="about">
        <div class="content-inner">
            <div class="content-header">
                <h2>Tentang Saya</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <img src="assets/img/lq.jpeg" alt="Image">
                </div>
                <div class="col-md-6 col-lg-7">
                    <p>
                        Saya adalah seorang mahasiswa Teknik Informatika yang Antusias dan memiliki motivasi yang tinggi untuk berkembang. Aktif dalam berorganisasi dan suka dengan kepemimpinan. Saya mahir dalam memimpin dan mengendalikan situasi & kondisi. Saya seorang pekerja keras yang mudah beradaptasi terhadap lingkungan dan tertarik terhadap Teknologi dan Fotografi beserta Videografi.
                    </p>
                    <a class="btn" href="https://www.blogger.com/profile/12921697267627558683">My Blog</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="skills">
                        <div class="skill-name">
                            <p>Design & Editing</p>
                            <p>90%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="skill-name">
                            <p>Programing</p>
                            <p>75%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skills">
                        <div class="skill-name">
                            <p>Videography</p>
                            <p>90%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="skill-name">
                            <p>Photography</p>
                            <p>95%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Education Start -->
    <div class="education" id="education">
        <div class="content-inner">
            <div class="content-header">
                <h2>Edukasi</h2>
            </div>
            <div class="row align-items-center">
                <?php foreach ($edu as $row) : ?>
                    <div class="col-md-6">
                        <div class="edu-col">
                            <span><?= $row['edu_in'] ?> <i>to</i> <?= $row['edu_out'] ?></span>
                            <h3><?= $row['edu_name'] ?></h3>
                            <p><?= $row['edu_detail'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Education Start -->

    <!-- Experience Start -->
    <div class="experience" id="experience">
        <div class="content-inner">
            <div class="content-header">
                <h2>Pengalaman</h2>
            </div>
            <div class="row align-items-center">
                <?php foreach ($exp as $row) : ?>
                    <div class="col-md-6">
                        <div class="exp-col">
                            <span><?= $row['exp_in'] ?> <i>to</i> <?= $row['exp_out'] ?></span>
                            <h3><?= $row['exp_name'] ?></h3>
                            <p><?= $row['exp_detail'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Experience Start -->

    <!-- Service Start -->
    <div class="service" id="service">
        <div class="content-inner">
            <div class="content-header">
                <h2>Prestasi</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="srv-col">
                        <i class="fa fa-guitar"></i>
                        <h3>FLS2N</h3>
                        <p>Juara 1 Solo Gitar FLS2N Kota Sukabumi Tahun 2017</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="srv-col">
                        <i class="fa fa-guitar"></i>
                        <h3>FLS2N</h3>
                        <p>Juara 2 Solo Gitar FLS2N Provinsi Jawa Barat Tahun 2018</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="srv-col">
                        <i class="fa fa-guitar"></i>
                        <h3>FLS2N</h3>
                        <p>Juara 1 Solo Gitar FLS2N Kota Sukabumi Tahun 2018</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="srv-col">
                        <i class="fa fa-camera"></i>
                        <h3>Back Packer Photography</h3>
                        <p>Juara 1 Kartini's Photography Kota Sukabumi 2016</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->

    <!-- Portfolio Start -->
    <div class="portfolio" id="portfolio">
        <div class="content-inner">
            <div class="content-header">
                <h2>Portofolio</h2>
            </div>

            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/patrol.jpg" class="img-fluid" alt="">
                            <a class="portfolio-title" href="https://www.youtube.com/watch?v=bNKhCzpXn5M&ab_channel=SahabatPetualangCampervan">Dometic Patrol<span>Modelling & Videographer</span></a>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/generator.jpg" class="img-fluid" alt="">
                            <a class="portfolio-title" href="https://www.youtube.com/watch?v=pSCuqYtBROc&ab_channel=SahabatPetualangCampervan">Dometic Generator<span>Editor & Videographer</span></a>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/thermo.jpg" class="img-fluid" alt="">
                            <a class="portfolio-title" href="https://www.youtube.com/watch?v=isLDfhJNiPw&ab_channel=SahabatPetualangCampervan">Dometic Thermo<span>Editor & Videographer</span></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Start -->

    <!-- Contact Start -->
    <div class="contact" id="contact">
        <div class="content-inner">
            <div class="content-header">
                <h2>Kontak</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><i class="fa fa-user"></i>M. Elki Ismuhamdan</p>
                        <p><i class="fa fa-tag"></i>Programmer, Musician, and Athlete</p>
                        <p><i class="fa fa-envelope"></i><a href="mailto:info@example.com">elkyismu@gmail.com</a></p>
                        <p><i class="fa fa-phone"></i><a href="tel:+1234567890">+62 896 6620 6880</a></p>
                        <p><i class="fa fa-map-marker"></i>Puri Cibeureum Permai 2 Kota Sukabumi</p>
                        <div class="social">
                            <a class="btn" href="https://hi-in.facebook.com/mavelki.ismuhamdan"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="https://api.whatsapp.com/send?phone=6289666206880"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn" href="https://www.instagram.com/mavelki/"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="https://www.youtube.com/channel/UCBwozxBoEcmMf1NaUPBNlYg"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="content-inner">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>&copy; Copyright LQ Production. All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <p>Version 1.0</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
</div>
<?= $this->endSection(); ?>