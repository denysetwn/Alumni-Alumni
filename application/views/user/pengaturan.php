<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/pengaturan.css">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand&display=swap">
</head>

<body>
    <!------------------- Header ---------------------->
    <section id="header">
        <div class="nav-bar">
            <div class="nav-logo">
                <img src="image/logo.png">
            </div>
            <div class="nav-links">
                <ul>
                    <a href="#">
                        <li>Beranda</li>
                    </a>
                    <a href="about_us.html">
                        <li>Tentang Kami</li>
                    </a>
                    <button type="button" class="btn" id="btn-masuk">Masuk</button>
                </ul>
            </div>
        </div>
    </section>

    <!--------------- pengaturan ------------------>
    <section id="container-profile">
        <?= form_open_multipart('user/editPhoto'); ?>
        <div class="foto-profile-setting">
            <h1>Ganti Foto Profil</h1>
            <div class="col-profile-setting">
                <div class="left-col-profile-setting">
                    <img src="<?= base_url('assets/image/profile/') . $user['image'] ?>">
                </div>
                <div class="right-col-profile-setting">
                    <button type="button" class="btn-ubah" id="btn-change">Uploud Image</button>
                </div>
            </div>
        </div>
        <div class="tentang-setting">
            <h1>Tentang</h1>
            <div class="col-tentang-setting">
                <div class="left-col-tentang-setting">
                    <p>Pekerjaan</p>
                    <p>Lulusan</p>
                </div>
                <div class="right-col-tentang-setting">
                    <form class="user" action="<?= base_url('user/pengaturan') ?>" method="post">
                        <div class="form-box">
                            <div id="login-tab">
                                <input type="text" name="pekeerjaan" placeholder="Pekerjaan kamu saat ini">
                                <input type="text" name="lulusan" placeholder="Kamu angkatan berapa">
                            </div>
                        </div>
                        <div class="button-confirmation">
                            <button type="submit" class="btn-simpan-login">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="ubah-sandi-setting">
            <h1>Keamanan</h1>
            <div class="content-ubah-sandi-setting">
                <p>Ubah Kata Sandi</p>
                <a href="<?= base_url(); ?>user/changePassword" class="btn-change" id="btn-change-password"><i class="fa fa-cog"></i>Ubah Kata Sandi</button>
            </div>
        </div>

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
</body>

</html>