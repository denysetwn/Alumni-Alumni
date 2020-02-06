<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/profile.css">
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

    <!-------------------- Profile --------------------------->
    <section id="container-profile">
        <div class="profile">
            <div class="cover-profile">
                <img src="<?= base_url('assets/image/cover/') . $user['image'] ?>">
            </div>
            <div class="img-profile">
                <img src="<?= base_url('assets/image/profile/') . $user['image'] ?>">
            </div>
            <div class="col-detail-profile">
                <div class="left-col-detail-profile">
                    <h1><?= $user['name']; ?></h1>
                    <h4><?= $user['name']; ?></h4>
                    <p><?= $user['name']; ?></p>
                </div>
                <div class="right-col-detail-profile">
                    <a class="btn" id="btn-masuk"><i class="fa fa-cog"></i>Pengaturan</a>
                </div>
            </div>
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
                                        <a href="<?= base_url($sm['url']) ?>/<?= $sm['id'] ?>"></a>
                                        <?= $sm['name']; ?>
                                    </p>
                                </section>
                            <?php endif; ?>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="middle-col-timeline">
            <?php foreach ($post as $p) : ?>
                <?php $id_post = $p['id_posting']; ?>
                <div class="status-orang">
                    <div class="container-status">
                        <div class="img-profile-status-orang">
                            <img src="<?= base_url('assets/image/profile/') . $p['image'] ?>">
                        </div>
                        <div class="isi-status">
                            <h1><?= $p['name']; ?></h1>
                            <h4><?= date('d F Y', $p['date']); ?></h4>
                            <?php if (preg_match("/jpeg/i", $p['content_file']) || preg_match("/jpg/i", $p['content_file']) || preg_match("/png/i", $p['content_file']) || preg_match("/gif/i", $p['content_file'])) : ?>
                                <img src="<?= base_url('assets/upload/') . $p['content_file']; ?>">
                            <?php else : ?>
                                <a href="<?= base_url('assets/upload/') . $p['content_file'] ?>" target="_blank">
                                    <img src="<?= base_url('assets/image/item/icon.png') ?>">
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
                                    <img src="<?= base_url('assets/image/profile/') . $sm['image']; ?>">
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
                            <a type="submit"><i class="fa fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
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
</body>

</html>