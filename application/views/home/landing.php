<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/landing.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/timeline.css">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand&display=swap">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slider.css">
    <script src="<?= base_url(); ?>assets/js/slider.js"></script>
</head>

<body>
    <!------------------- Header ---------------------->
    <section id="header">
        <div class="nav-bar">
            <div class="nav-logo">
                <img src="<?= base_url(); ?>assets/image/item/logo.png">
            </div>
            <div class="nav-links">
                <ul>
                    <a href="<?= base_url(); ?>home">
                        <li>Beranda</li>
                    </a>
                    <a href="<?= base_url(); ?>home/aboutUs">
                        <li>Tentang Kami</li>
                    </a>
                    <?php $role_id = $this->session->userdata('role_id'); ?>
                    <?php if ($role_id) : ?>
                        <?php if ($role_id == 1) : ?>
                            <a href="<?= base_url(); ?>admin">
                                <li>Linimasa</li>
                            </a>
                        <?php else : ?>
                            <a href="<?= base_url(); ?>user">
                                <li>Linimasa</li>
                            </a>
                        <?php endif; ?>
                        <a>
                            <li><i class="fa fa-bell-o" id="icon-notif"></i></li>
                        </a>
                </ul>
            </div>
            <img src="<?= base_url('assets/image/profile/') . $user['image']; ?>" id="photo-profile-header">
            <div class="nav-links">
                <ul>
                <?php else : ?>
                    <button type="button" class="btn" id="btn-masuk">Masuk</button>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <!--------------------- Banner -------------------->
    <section id="banner">
        <div class="col-banner">
            <div class="left-col-banner">
                <h1>Melangkah Bersama Menuju Masa Depan<br>Bersama Alumni Saintek UIN Suka</h1>
                <p>Jalin komunikasi dengan teman dan sahabat.<br>Dapatkan juga informasi pekerjaan disini</p>
                <p class="text-chat-banner">Mulailah chat dengan temanmu!</p>
                <button type="button" class="btn-banner" id="btn-banner-id"><span>&#10148;</span>Chat Sekarang</button>
            </div>
            <div class="right-col-banner">
                <img src="<?= base_url(); ?>assets/image/item/img-banner.svg">
            </div>
        </div>
    </section>
    <img src="<?= base_url(); ?>assets/image/item/cekungan.svg" class="img-cekungan">

    <!----------------- Social Media ------------------>
    <section id="social-media">
        <div class="container">
            <p>Tetap terhubung dengan kanal resmi media sosial kami</p>
            <div class="social-icons">
                <img src="<?= base_url(); ?>assets/image/item/twitter.png">
                <img src="<?= base_url(); ?>assets/image/item/instagram.png">
                <img src="<?= base_url(); ?>assets/image/item/whatsapp.png">
                <img src="<?= base_url(); ?>assets/image/item/facebook.png">
                <img src="<?= base_url(); ?>assets/image/item/snapchat.png">
                <img src="<?= base_url(); ?>assets/image/item/linkedin.png">
            </div>
        </div>
    </section>

    <!-------------------- Berita dan Kuisioner ---------->
    <img src="<?= base_url(); ?>assets/image/item/cekungan-kebawah.svg" class="img-cekungan">
    <section id="container">
        <h1>Berita Saintek</h1>

        <!--------------------- Berita ------------------>
        <div class="berita">
            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                <div class="gallery-cell">
                    <div class="container-berita">
                        <p>Workshop Pelatihan Sketsa dan Gambar</p>
                        <h3>Sketsa dan gambar merupakan salah satu hal yang perlu dipelajari bagi mahasiswa terutama bagi mahasiswa program studi biologi, fisika, maupun kimia. Workshop Pelatihan Sketsa dan Gambar ini sudah terselenggara dua kali ini pada tanggal 16 Januari 2020. Acara ini merupakan salah satu kegiatan magang Fakultas Sains dan Teknologi UIN Sunan Kalijaga yang sudah terselenggara kelima.</h3>
                    </div>
                    <img src="<?= base_url(); ?>assets/image/item/1.jpg">

                </div>
                <div class="gallery-cell">
                    <div class="container-berita">
                        <p>Workshop Pelatihan Sketsa dan Gambar</p>
                        <h3>Sketsa dan gambar merupakan salah satu hal yang perlu dipelajari bagi mahasiswa terutama bagi mahasiswa program studi biologi, fisika, maupun kimia. Workshop Pelatihan Sketsa dan Gambar ini sudah terselenggara dua kali ini pada tanggal 16 Januari 2020. Acara ini merupakan salah satu kegiatan magang Fakultas Sains dan Teknologi UIN Sunan Kalijaga yang sudah terselenggara kelima.</h3>
                    </div>
                    <img src="<?= base_url(); ?>assets/image/item/2.jpg">
                </div>
                <div class="gallery-cell">
                    <div class="container-berita">
                        <p>Workshop Pelatihan Sketsa dan Gambar</p>
                        <h3>Sketsa dan gambar merupakan salah satu hal yang perlu dipelajari bagi mahasiswa terutama bagi mahasiswa program studi biologi, fisika, maupun kimia. Workshop Pelatihan Sketsa dan Gambar ini sudah terselenggara dua kali ini pada tanggal 16 Januari 2020. Acara ini merupakan salah satu kegiatan magang Fakultas Sains dan Teknologi UIN Sunan Kalijaga yang sudah terselenggara kelima.</h3>
                    </div>
                    <img src="<?= base_url(); ?>assets/image/item/3.jpg">
                </div>
                <div class="gallery-cell">
                    <div class="container-berita">
                        <p>Workshop Pelatihan Sketsa dan Gambar</p>
                        <h3>Sketsa dan gambar merupakan salah satu hal yang perlu dipelajari bagi mahasiswa terutama bagi mahasiswa program studi biologi, fisika, maupun kimia. Workshop Pelatihan Sketsa dan Gambar ini sudah terselenggara dua kali ini pada tanggal 16 Januari 2020. Acara ini merupakan salah satu kegiatan magang Fakultas Sains dan Teknologi UIN Sunan Kalijaga yang sudah terselenggara kelima.</h3>
                    </div>
                    <img src="<?= base_url(); ?>assets/image/item/4.jpg">
                </div>
            </div>
            <div class="container-berita-lainnya">
                <a href="<?= base_url(); ?>home/berita" class="btn-lainnya">Lihat Berita Lainnya</a>
            </div>
        </div>

        <!----------------- Kuisioner --------------------->
        <div class="container-kuisioner">
            <div class="col-kuisioner">
                <div class="left-col-kuisioner">
                    <img src="<?= base_url(); ?>assets/image/item/img-form.svg">
                </div>
                <div class="right-col-kuisioner">
                    <img src="<?= base_url(); ?>assets/image/item/panah-kuisioner.svg">
                    <p class="title-kuisioner">Yuk, Isi Kuisioner</h1>
                        <p class="desc-kuisioner">Kuisioner ini bertujuan untuk mengetahui kebutuhan dari kalian. Supaya kita dapat saling membantu dan melakukan evaluasi untuk menjadikan suatu komunitas alumni SAINTEK UIN SUKA menjadi lebih baik lagi.</p>
                        <button type="button" class="btn-kuisioner">Isi Kuisioner</button>
                </div>
            </div>
        </div>
    </section>
    <?php if ($role_id) : ?>
        <!------------------ Popup Dropdown notification ------------------->
        <div id="popup-notif-id" class="popup-notif">
            <div class="container-popup-notif">
                <div class="content-popup-notiv">
                    <h1>Pemberitahuan</h1>
                    <div class="isi-popup-notiv">
                        <p>Ratu Elizabeth mengomentari kiriman anda</p>
                        <h4>Beberapa jam yang lalu</h4>
                    </div>
                    <div class="isi-popup-notiv">
                        <p>Ratu Elizabeth mengomentari kiriman anda</p>
                        <h4>Beberapa jam yang lalu</h4>
                    </div>
                    <div class="isi-popup-notiv">
                        <p>Ratu Elizabeth mengomentari kiriman anda</p>
                        <h4>Beberapa jam yang lalu</h4>
                    </div>
                    <div class="isi-popup-notiv">
                        <p>Ratu Elizabeth mengomentari kiriman anda</p>
                        <h4>Beberapa jam yang lalu</h4>
                    </div>
                    <div class="lihat-semua-notiv">
                        <p>Lihat Semua Pemberitahuan</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // untuk mendapatkan popup_login
            var popup_notif = document.getElementById('popup-notif-id');
            // untuk mendapatkan link untuk membuka popup_login
            var mppLink = document.getElementById("icon-notif");
            // membuka popup_login ketika link di klik
            mppLink.onclick = function() {
                popup_notif.style.display = "block";
            }
            // membuka popup_login ketika user melakukan klik diluar area popup
            window.onclick = function(event) {
                if (event.target == popup_notif) {
                    popup_notif.style.display = "none";
                }
            }
        </script>

        <!------------------ Popup Dropdown menu ------------------->
        <div id="popup-menu-id" class="popup-menu">
            <div class="container-popup-menu">
                <div class="pengaturan-popup">
                    <div class="container-pengaturan-popup">
                        <div class="left-col-popup">
                            <img src="image/foto-profile.png">
                        </div>
                        <div class="right-col-popup">
                            <p>Rangga Sasana</p>
                            <button type="button" class="btn-pengaturan-popup"><i class="fa fa-cog"></i>Pengaturan</button>
                        </div>
                    </div>
                    <div class="container-logout">
                        <a href="#"><i class="fa fa-sign-out"></i>Keluar</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // untuk mendapatkan popup_login
            var popup_menu = document.getElementById('popup-menu-id');
            // untuk mendapatkan link untuk membuka popup_login
            var mpLink = document.getElementById("photo-profile-header");
            // membuka popup_login ketika link di klik
            mpLink.onclick = function() {
                popup_menu.style.display = "block";
            }
            // membuka popup_login ketika user melakukan klik diluar area popup
            window.onclick = function(event) {
                if (event.target == popup_menu) {
                    popup_menu.style.display = "none";
                }
            }
        </script>

    <?php else : ?>
        <!------------------ Popup Login ------------------->
        <div id="popup-login-id" class="popup-login">
            <div class="container-popup-login">
                <div class="left-col-login">
                    <img src="<?= base_url(); ?>assets/image/item/img-login.svg">
                </div>
                <div class="right-col-login">
                    <h1 class="title-login">Hai,<br>Selamat Datang</h1>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="post" action="<?= base_url('home') ?>">
                        <div class="form-box">
                            <div id="login-tab">
                                <input type="text" name="email" placeholder="Your Email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                <input type="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="custom-checkbox">
                            <input type="checkbox" class="custom-checkbox-input" id="customCheck">
                            <label class="custom-checkbox-label" for="customCheck">Ingatkan Saya</label>
                            <a class="forgot" href="#">Lupa kata sandi?</a>
                        </div>
                        <a class="hubungi-kami" href="#">Belum punya akun? Hubungi kami</a>
                        <button type="submit" class="btn-masuk-login">Masuk</button>
                    </form>
                </div>
            </div>
        </div>

        <script>
            // untuk mendapatkan popup_login
            var popup_login = document.getElementById('popup-login-id');
            // untuk mendapatkan link untuk membuka popup_login
            var mpLink = document.getElementById("btn-masuk");
            var mppLink = document.getElementById("btn-banner-id");
            // membuka popup_login ketika link di klik
            mpLink.onclick = function() {
                popup_login.style.display = "block";
            }
            mppLink.onclick = function() {
                popup_login.style.display = "block";
            }
            // membuka popup_login ketika user melakukan klik diluar area popup
            window.onclick = function(event) {
                if (event.target == popup_login) {
                    popup_login.style.display = "none";
                }
            }
        </script>
    <?php endif; ?>

    <!---------------------- Footer ------------------->
    <section id="footer">
        <div class="col-footer">
            <div class="left-col-footer">
                <img src="<?= base_url(); ?>assets/image/item/logo.png">
            </div>
            <div class="right-col-footer">
                <div class="follow">
                    <i class="fa fa-map-marker"></i><span>Jl. Marsda Adisucipto, Yogyakarta, Indonesia</span>
                </div>
                <div class="follow">
                    <i class="fa fa-phone"></i><span>55281. +62 274 512474</span>
                </div>
                <div class="follow">
                    <i class="fa fa-envelope-o"></i><span>mail@email.com</span>
                </div>
            </div>
        </div>

        <p class="copyright">Copyright<i class="fa fa-copyright"></i>Beta2020alumnisaintekuin. All Right Reserved</p>
    </section>

</body>

</html>