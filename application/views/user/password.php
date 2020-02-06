<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/change_password.css">
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
        </div>
    </section>

    <!------------------------------------ Content -------------------------------->

    <div class="container-popup-login">
        <div class="left-col-login">
            <img src="<?= base_url(); ?>assets/image/item/img-login.svg">
        </div>
        <div class="right-col-login">
            <h1 class="title-login">Mengubah Kata Sandi</h1>
            <div>
                <?= $this->session->flashdata('message'); ?>
            </div>
            <form class="user" method="post" action="<?= base_url('user/changePassword') ?>">
                <div class="form-box">
                    <div id="login-tab">
                        <input type="password" name="passwordlama" placeholder="Kata Sandi Lama">
                        <?= form_error('passwordlama', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="password" name="passwordbaru" placeholder="Kata sandi baru">
                        <?= form_error('passwordbaru', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="password" name="passwordbaru2" placeholder="Ulangi kata sandi">
                        <?= form_error('passwordbaru2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <button type="submit" class="btn-simpan-login">Simpan</button>
            </form>
        </div>
    </div>


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

    <!------------------ Popup Dropdown menu ------------------->
    <div id="popup-menu-id" class="popup-menu">
        <div class="container-popup-menu">
            <div class="pengaturan-popup">
                <div class="container-pengaturan-popup">
                    <div class="left-col-popup">
                        <img src="<?= base_url('assets/image/profile/') . $user['image'] ?>">
                    </div>
                    <div class="right-col-popup">
                        <p><?= $user['name']; ?></p>
                        <a class="btn-pengaturan-popup" href="<?= base_url(); ?>user/pengaturan"><i class="fa fa-cog"></i>Pengaturan</a>
                    </div>
                </div>
                <div class="container-logout">
                    <a href="<?= base_url(); ?>auth/logout"><i class="fa fa-sign-out"></i>Keluar</a>
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


</body>

</html>