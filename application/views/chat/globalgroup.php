<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/group_chat.css">
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

    <!--------------------- Container group-chat ------------------>
    <section id="container-group-chat">
        <div class="left-col-group-chat">
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
        <?php $id_sender = $user['id']; ?>
        <div class="middle-col-group-chat">
            <div class="container-group-chat">
                <?php foreach ($globalgroup as $ch) : ?>
                    <?php if ($ch['id_sender'] != $id_sender) : ?>
                        <div class="isi-chat-orang">
                            <div class="col-isi-chat-orang">
                                <div class="text-isi-chat-orang">
                                    <h1><?= $ch['name']; ?></h1>
                                    <p><?= $ch['chat_content']; ?></p>
                                </div>
                            </div>
                            <div class="waktu-kirim-chat-orang">
                                <p><?= date('d F Y', $ch['chat_date']); ?></p>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="isi-chat">
                            <div class="col-isi-chat">
                                <div class="text-isi-chat">
                                    <p><?= $ch['chat_content']; ?></p>
                                </div>
                            </div>
                            <div class="waktu-kirim-chat">
                                <p><?= date('d F Y', $ch['chat_date']); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?= form_open_multipart('percakapan/globalGroup/')?>
            <div class="comment">
                <div class="img-profile-comment">
                    <img src="<?= base_url('assets/image/profile/') . $user['image']; ?>">
                </div>
                <textarea class="form-control-comment" rows="1" cols="60" name="tulis" placeholder="Tulis Pesan anda disini...."></textarea>
                <div class="icon-comment">
                    <a href="#"><i class="fa fa-paperclip"></i></a>
                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                </div>
            </div>
        </div>

        <div class="right-col-group-chat">
            <div class="menghilangkan-scroll">
                <h1>Fakultas Saintek<i class="fa fa-search"></i></h1>
                <section id="tanpa-scroll">
                    <?php foreach ($alluser as $usr) : ?>
                        <p><?= $usr['name']; ?><span>Online</span></p>
                    <?php endforeach ?>
                </section>
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
</body>

</html>