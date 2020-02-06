<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/berita.css">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand&display=swap">
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

    <!---------------------- Content ------------------>
    <section id="content-news">
        <div class="title-container-news">
            <p>Kolom Berita Saintek</p>
        </div>
        <div class="container-news">
            <div class="item-news">
                <div class="img-berita">
                    <img src="<?= base_url(); ?>assets/image/item/foto-profile.png">
                </div>
                <div class="isi-dari-berita">
                    <h1>Judul Berita</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <button type="button" class="btn-selengkapnya" id="btn-baca-selengkapnya">Baca Selengkapnya</button>
                </div>
            </div>
            <div class="item-news">
                <div class="img-berita">
                    <img src="<?= base_url(); ?>assets/image/item/foto-profile.png">
                </div>
                <div class="isi-dari-berita">
                    <h1>Judul Berita</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <button type="button" class="btn-selengkapnya" id="btn-baca-selengkapnya">Baca Selengkapnya</button>
                </div>
            </div>
            <div class="item-news">
                <div class="img-berita">
                    <img src="<?= base_url(); ?>assets/image/item/foto-profile.png">
                </div>
                <div class="isi-dari-berita">
                    <h1>Judul Berita</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <button type="button" class="btn-selengkapnya" id="btn-baca-selengkapnya">Baca Selengkapnya</button>
                </div>
            </div>
            <div class="item-news">
                <div class="img-berita">
                    <img src="<?= base_url(); ?>assets/image/item/foto-profile.png">
                </div>
                <div class="isi-dari-berita">
                    <h1>Judul Berita</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <button type="button" class="btn-selengkapnya" id="btn-baca-selengkapnya">Baca Selengkapnya</button>
                </div>
            </div>
            <div class="item-news">
                <div class="img-berita">
                    <img src="<?= base_url(); ?>assets/image/item/foto-profile.png">
                </div>
                <div class="isi-dari-berita">
                    <h1>Judul Berita</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <button type="button" class="btn-selengkapnya" id="btn-baca-selengkapnya">Baca Selengkapnya</button>
                </div>
            </div>
            <div class="item-news">
                <div class="img-berita">
                    <img src="<?= base_url(); ?>assets/image/item/foto-profile.png">
                </div>
                <div class="isi-dari-berita">
                    <h1>Judul Berita</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <button type="button" class="btn-selengkapnya" id="btn-baca-selengkapnya">Baca Selengkapnya</button>
                </div>
            </div>
            <div class="next-before-page">
                <button type="button" class="btn-button-text" id="btn-button-bottom">Sebelum</button>
                <button type="button" class="btn-button-number" id="btn-button-bottom">1</button>
                <button type="button" class="btn-button-number-border" id="btn-button-bottom">2</button>
                <button type="button" class="btn-button-number-border" id="btn-button-bottom">3</button>
                <button type="button" class="btn-button-number-border" id="btn-button-bottom">4</button>
                <button type="button" class="btn-button-text" id="btn-button-bottom">Berikut</button>
            </div>
        </div>
        <a class="btn-kembali-beranda" id="btn-kembali" href="<?= base_url(); ?>home"> Kembali ke Beranda</a>
    </section>

    <!---------------------- Footer ------------------->
    <section id="footer">
        <div class="col-footer">
            <div class="left-col-footer">
                <img src="image/logo.png">
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
        <p class="copyright">Copyright<i class="fa fa-copyright"></i>2020alumnisaintekuin. All Right Reserved</p>
    </section>

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

</body>

</html>