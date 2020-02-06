<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/timeline.css">
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

    <!--------------------- Container Timeline ------------------>
    <section id="container-timeline">
        <div class="left-col-timeline">
            <div class="menghilangkan-scroll">
                <?php $role_id = $this->session->userdata('role_id'); ?>
                <?php $userName = $user['name'] ?>
                <?php foreach ($menu as $m) : ?>
                    <?php if ($m['id'] == 5) : ?>
                        <h1><?= $m['menu']; ?><i class="fa fa-search"></i></h1>
                    <?php else : ?>
                        <h1><?= $m['menu']; ?></h1>
                    <?php endif; ?>
                    <?php foreach ($submenu as $sm) : ?>
                        <?php if ($role_id != 1 && $sm['id_access'] == 3) : ?>
                            <?php $sm['id_access'] = 4 ?>
                        <?php endif; ?>
                        <?php if ($m['id'] == $sm['id_access']) : ?>
                            <?php if ($sm['name'] != $userName) : ?>
                                <section id="tanpa-scroll">
                                    <p>
                                        <a href="<?= base_url($sm['url']) ?>/<?= $sm['id'] ?>"><?= $sm['name']; ?></a>
                                    </p>
                                </section>
                            <?php endif; ?>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="middle-col-timeline">
            <div class="buat-status">
                <div class="img-profile-buat-status">
                    <img src="<?= base_url('assets/image/profile/') . $user['image']; ?>">
                </div>
                <?= form_open_multipart('user/post'); ?>
                <div class="tulis-status">
                    <h1><?= $user['name']; ?></h1>
                    <textarea class="form-control" rows="5" cols="65" name="status" placeholder="Buat Status Anda disini"></textarea>
                    <div class="sematkan-kirimkan">
                        <input type="file" name="upload"><i class="fa fa-paperclip"></i>Sematkan File</input>
                        <button type="submit" class="btn-kirim-status" id="btn-kirim"><i class="fa fa-paper-plane"></i>Kirim</button>
                    </div>
                </div>
            </div>
            <div class="pembaharuan-terbaru">
                <span></span><span class="right-line"></span>
                <p>PEMBAHARUAN TERBARU</p>
            </div>
            <?php foreach ($post as $p) : ?>
                <?php $id_post = $p['id_posting']; ?>
                <div class="status-orang">
                    <div class="container-status">
                        <div class="img-profile-status-orang">
                            <img src="<?= base_url('assets/image/profile/') . $p['image']; ?>">
                        </div>
                        <div class="isi-status">
                            <h1><?= $p['name']; ?></h1>
                            <h4><?= date('d F Y', $p['date']); ?></h4>
                            <?php if (preg_match("/jpeg/i", $p['content_file']) || preg_match("/jpg/i", $p['content_file']) || preg_match("/png/i", $p['content_file']) || preg_match("/gif/i", $p['content_file'])) : ?>
                                <img src="<?= base_url('assets/upload/') . $p['content_file']; ?>">
                            <?php else : ?>
                                <a href="<?= base_url('assets/upload/') . $p['content_file'] ?>" target="_blank">
                                    <img src="<?= base_url('assets/image/item/icon.png') ?>" />
                                    <p><?= $p['content_file'] ?></p>
                                </a>
                            <?php endif; ?>
                            <p><?= $p['content_upload']; ?></p>
                            <div class="like-comment-share">
                                <a href="#" style="color: #FF6868;"><i class="fa fa-heart-o"></i>18</a>
                                <a href="#" style="color: #5193E0;"><i class="fa fa-comment-o"></i>7</a>
                                <a href="#" style="color: #53C949;"><i class="fa fa-share"></i>2</a>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($comment as $cm) : ?>
                        <?php if ($cm['id_posting'] == $id_post) : ?>
                            <div class="comment-orang">
                                <div class="img-profile-orang">
                                    <img src="<?= base_url('assets/image/profile/') . $cm['image']; ?>">
                                </div>
                                <div class="content-comment-orang">
                                    <h1><?= $cm['name'] ?></h1>
                                    <p><?= $cm['comment_content']; ?></p>
                                    <h4><?= date('d F Y', $cm['date']); ?></h4>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?= form_open_multipart('user/comment/' . $id_post); ?>
                    <div class="comment">
                        <div class="img-profile-comment">
                            <img src="<?= base_url('assets/image/profile/') . $user['image']; ?>">
                        </div>
                        <textarea class="form-control-comment" rows="1" cols="60" name="comment" placeholder="Tulis Komentar..."></textarea>
                        <div class="icon-comment">
                            <a href="#"><i class="fa fa-paperclip"></i></a>
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="right-col-timeline">
            <img src="<?= base_url('assets/image/profile/') . $user['image']; ?>">
            <div class="details-profile">
                <h1><?= $user['name']; ?></h1>
                <h2><?= $user['name']; ?></h2>
                <p><?= $user['name']; ?></p>
            </div>
            <div class="bottom-pengaturan">
                <p><i class="fa fa-user"></i><a href="<?= base_url(); ?>user/myProfile">Profile Saya</a></p>
                <p><i class="fa fa-cog"></i><a href="<?= base_url(); ?>user/pengaturan">Pengaturan</a></p>
            </div>
        </div>
    </section>

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