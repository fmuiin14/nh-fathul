<?php
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];

$data = file_get_contents("data.json");
$json = json_decode($data, true);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <title>Fullstack Developer Test Niagahoster Fathul Muiin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="d-none d-md-flex container flex-row justify-content-between align-items-center top-banner">
        <div class="d-flex align-items-center">
            <img src="assets/images/pricetag.png" class="img-fluid d-inline-block align-top mr-2 mt-1" alt="">
            <small>Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]</small>
        </div>
        <div class="d-flex flex-row justify-content-end">
            <a href="#" class="mx-2"><i class="fas fa-phone-alt"></i> 0274-5305505</a>
            <a href="#" class="mx-2"><i class="fas fa-comments"></i> Live Chat</a>
            <a href="#" class="mx-2"><i class="fas fa-user-circle"></i> Member Area</a>
        </div>
    </div>
    <nav class="navbar navbar-light bg-white navbar-expand-sm border-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" class="img-fluid d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Hosting</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Domain</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Server</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Website</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Afiliasi</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Pembayaran</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                    <li class="nav-item active mr-2">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="p-0">

        <div class="mb-4 border-bottom text-center">
            <div class="container d-flex flex-row align-items-center headline">
                <div class="row w-100">
                    <div class="col-md-6 d-flex flex-column py-4 text-left mt-3">
                        <h1 class="text1">PHP Hosting</h1>
                        <h2 class="text2">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
                        <div class="mt-4">
                            <p><i class="fas fa-check-circle text-success"></i> Solusi PHP untuk performa
                                query yang lebih cepat. </p>
                            <p><i class="fas fa-check-circle text-success"></i> Konsumsi memori yang lebih
                                rendah.</p>
                            <p><i class="fas fa-check-circle text-success"></i> Support PHP 5.3, PHP 5.4,
                                PHP 5.5, PHP 5.6, PHP 7</p>
                            <p><i class="fas fa-check-circle text-success"></i> Fitur enkripsi ionCube dan
                                Zend Guard Loaders</p>
                        </div>
                    </div>
                    <div class="d-none d-md-flex col-6 flex-row align-items-center">
                        <img src="assets/svg/hosting-01.svg" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-4 d-flex justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-4 d-flex flex-column text-center">
                        <div class="tech-img d-flex justify-content-center align-items-center">
                            <img src="assets/images/zenguard.png" class="img-fluid" />
                        </div>
                        <span>PHP Zend Guard Loader</span>
                    </div>
                    <div class="col-4 d-flex flex-column text-center">
                        <div class="tech-img d-flex justify-content-center align-items-center">
                            <img src="assets/images/composer.png" class="img-fluid" />
                        </div>
                        <span>PHP Composer</span>
                    </div>
                    <div class="col-4 d-flex flex-column text-center">
                        <div class="tech-img d-flex justify-content-center align-items-center">
                            <img src="assets/images/ioncube.png" class="img-fluid" />
                        </div>
                        <span>PHP ionCube Loader</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5 d-flex flex-column align-items-center text-center paket">
            <div class="container mt-5">
                <h1 class="title">Paket Hosting Singapura yang Tepat</h1>
                <h3 class="subtitle mb-5">Diskon 40% Domain dan SSL Gratis untuk Anda</h3>
                <div class="row d-flex justify-content-center align-items-start">
                    <div class="col-md-3 paket mb-2 p-md-0 position-relative">
                        <ul class="list-group rounded ">
                            <li class="list-group-item name "><?= $json[0]['name'] ?></li>
                            <li class="list-group-item price ">
                                <div class="price2">Rp 19,900</div>
                                <div class="price1 d-flex flex-row align-items-start justify-content-center">
                                    <span class="mr-2">Rp</span>
                                    <span class="big"><?= $json[0]['price'] ?></span>
                                    <span><?= $json[0]['price_small'] ?></span>
                                </div>
                            </li>
                            <li class="list-group-item "><strong><?= $json[0]['user'] ?></strong> Pengguna terdaftar</li>
                            <li class="list-group-item">
                                <p><strong>0.5X RESOURCE POWER</strong><br /><strong>500 MB</strong> Disk
                                    Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong>
                                    Databases<br /><strong>1</strong> Domain<br /><strong>Instant</strong>
                                    Backup<br /><strong>Unlimited SSL</strong> Gratis Selamanya</p>
                                <div class="my-4">
                                    <button class="btn btn-outline-secondary rounded-pill ">Pilih Sekarang</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 paket mb-2 p-md-0 position-relative">
                        <ul class="list-group rounded ">
                            <li class="list-group-item name "><?= $json[1]['name'] ?></li>
                            <li class="list-group-item price ">
                                <div class="price2">Rp 46,900</div>
                                <div class="price1 d-flex flex-row align-items-start justify-content-center">
                                    <span class="mr-2">Rp</span>
                                    <span class="big"><?= $json[1]['price'] ?></span>
                                    <span><?= $json[1]['price_small'] ?></span>
                                </div>
                            </li>
                            <li class="list-group-item "><strong><?= $json[1]['user'] ?></strong> Pengguna terdaftar</li>
                            <li class="list-group-item">
                                <p><strong>1X RESOURCE POWER</strong><br />
                                    <strong>Unlimited</strong> Disk
                                    Space<br />
                                    <strong>Unlimited</strong> Bandwidth<br />
                                    <strong>Unlimited</strong> POP3 Email<br />
                                    <strong>Unlimited</strong>
                                    Databases<br />
                                    <strong>10</strong> Addon
                                    Domains<br /><strong>Instant</strong> Backup<br /><strong>Domain</strong> Gratis
                                    Selamanya<br /><strong>Unlimited SSL</strong> Gratis Selamanya</p>
                                <div class="my-4">
                                    <button class="btn btn-outline-secondary rounded-pill ">Pilih Sekarang</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 paket mb-2 p-md-0 position-relative">

                        <div class="ribbon ribbon-top-left"><span>Best Seller!</span></div>
                        <ul class="list-group rounded border border-primary">
                            <li class="list-group-item name text-white" style="background-color: #008FEE;"><?= $json[2]['name'] ?></li>
                            <li class="list-group-item price text-white" style="background-color: #008FEE;">
                                <div class="price2">Rp 58,900</div>
                                <div class="price1 d-flex flex-row align-items-start justify-content-center">
                                    <span class="mr-2">Rp</span>
                                    <span class="big"><?= $json[2]['price'] ?></span>
                                    <span><?= $json[2]['price_small'] ?></span>
                                </div>
                            </li>
                            <li class="list-group-item bg-primary text-white"><strong><?= $json[2]['user'] ?></strong> Pengguna terdaftar
                            </li>
                            <li class="list-group-item">
                                <p><strong>2X RESOURCE POWER</strong><br /><strong>Unlimited</strong> Disk
                                    Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong> POP3
                                    Email<br /><strong>Unlimited</strong> Databases<br /><strong>Unlimited</strong>
                                    Addon Domains<br /><strong>Instant</strong> Backup<br /><strong>Domain
                                        Gratis</strong> Selamanya<br /><strong>Unlimited SSL</strong> Gratis
                                    Selamanya<br /><strong>Private</strong> Name Server<br /><strong>Spam
                                        Assasin</strong> Mail Protection</p>
                                <div class="my-4">
                                    <button class="btn btn-outline-secondary rounded-pill best">Pilih Sekarang</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 paket mb-2 p-md-0 position-relative">
                        <ul class="list-group rounded ">
                            <li class="list-group-item name "><?= $json[3]['name'] ?></li>
                            <li class="list-group-item price ">
                                <div class="price2">Rp 109,900</div>
                                <div class="price1 d-flex flex-row align-items-start justify-content-center">
                                    <span class="mr-2">Rp</span>
                                    <span class="big"><?= $json[3]['price'] ?></span>
                                    <span><?= $json[3]['price_small'] ?></span>
                                </div>
                            </li>
                            <li class="list-group-item "><strong><?= $json[3]['user'] ?></strong> Pengguna terdaftar</li>
                            <li class="list-group-item">
                                <p><strong>3X RESOURCE POWER</strong><br /><strong>Unlimited</strong> Disk
                                    Space<br /><strong>Unlimited</strong> Bandwidth<br /><strong>Unlimited</strong> POP3
                                    Email<br /><strong>Unlimited</strong> Databases<br /><strong>Unlimited</strong>
                                    Addon Domains<br /><strong>Magic Auto</strong> Backup &amp;
                                    Restore<br /><strong>Domain Gratis</strong> Selamanya<br /><strong>Unlimited
                                        SSL</strong> Gratis Selamanya<br /><strong>Private</strong> Name
                                    Server<br /><strong>Prioritas</strong> Layanan Support<br /><i
                                        class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><i
                                        class='fas fa-star text-primary'></i><i class='fas fa-star text-primary'></i><i
                                        class='fas fa-star text-primary'></i><br /> <strong>Spam Expert</strong> Pro
                                    Mail Protection</p>
                                <div class="my-4">
                                    <button class="btn btn-outline-secondary rounded-pill ">Diskon 40%</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-4 d-flex flex-column text-center">
            <div class="container">
                <h3 class="subtitle">Powerful dengan Limit PHP yang Lebih Besar</h3>
                <div class="d-none row d-md-flex justify-content-center">
                    <div class="col-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div style="position: absolute;left:8">
                                    <i class="fas fa-check-circle text-success"></i>
                                </div>
                                max execution time 300s
                            </li>
                            <li class="list-group-item">
                                <div style="position: absolute;left:8">
                                    <i class="fas fa-check-circle text-success"></i>
                                </div>
                                max execution time 300s
                            </li>
                            <li class="list-group-item">
                                <div style="position: absolute;left:8">
                                    <i class="fas fa-check-circle text-success"></i>
                                </div>
                                php memory limit 1024 MB
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div style="position: absolute;left:8">
                                    <i class="fas fa-check-circle text-success"></i>
                                </div>
                                post max size 128 MB
                            </li>
                            <li class="list-group-item">
                                <div style="position: absolute;left:8">
                                    <i class="fas fa-check-circle text-success"></i>
                                </div>
                                upload max filesize 128 MB
                            </li>
                            <li class="list-group-item">
                                <div style="position: absolute;left:8">
                                    <i class="fas fa-check-circle text-success"></i>
                                </div>
                                max input vars 2500
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="d-flex d-md-none list-group">
                    <li class="list-group-item">
                        <div style="position: absolute;left:8">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        max execution time 300s
                    </li>
                    <li class="list-group-item">
                        <div style="position: absolute;left:8">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        max execution time 300s
                    </li>
                    <li class="list-group-item">
                        <div style="position: absolute;left:8">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        php memory limit 1024 MB
                    </li>
                    <li class="list-group-item">
                        <div style="position: absolute;left:8">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        post max size 128 MB
                    </li>
                    <li class="list-group-item">
                        <div style="position: absolute;left:8">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        upload max filesize 128 MB
                    </li>
                    <li class="list-group-item">
                        <div style="position: absolute;left:8">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        max input vars 2500
                    </li>
                </ul>
            </div>
        </div>


        <div class="mb-4 d-flex flex-column text-center fitur">
            <div class="container">
                <h3 class="subtitle">Semua Paket Hosting Sudah Termasuk</h3>
                <div class="row d-flex">
                    <div class="col-6 col-md-4 d-flex flex-column p-5">
                        <img src="assets/svg/phpversi.svg" style="height:54px;" class="img-fluid" />
                        <strong>PHP Semua Versi</strong>
                        <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7.<br> Ubah sesuka Anda!</p>
                    </div>
                    <div class="col-6 col-md-4 d-flex flex-column p-5">
                        <img src="assets/svg/phpmysql.svg" style="height:54px;" class="img-fluid" />
                        <strong>MySQL Versi 5.6</strong>
                        <p>Nikmati MySQL versi terharu, tercepat dan kaya akan fitur.</p>
                    </div>
                    <div class="col-6 col-md-4 d-flex flex-column p-5">
                        <img src="assets/svg/phpcpanel.svg" style="height:54px;" class="img-fluid" />
                        <strong>Panel Hosting cPanel</strong>
                        <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p>
                    </div>
                    <div class="col-6 col-md-4 d-flex flex-column p-5">
                        <img src="assets/svg/phpuptime.svg" style="height:54px;" class="img-fluid" />
                        <strong>Garansi Uptime 99.9%</strong>
                        <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
                    </div>
                    <div class="col-6 col-md-4 d-flex flex-column p-5">
                        <img src="assets/svg/phpinno.svg" style="height:54px;" class="img-fluid" />
                        <strong>Database lnnoDB Unlimited</strong>
                        <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
                    </div>
                    <div class="col-6 col-md-4 d-flex flex-column p-5">
                        <img src="assets/svg/phpremote.svg" style="height:54px;" class="img-fluid" />
                        <strong>Wildcard Remote MySQL</strong>
                        <p>Mendukung s/d 25 max_user_connections <br> dan 100 max_connections.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-4 border-bottom text-center">
            <h3 class="subtitle">Mendukung Penuh Framework Laravel</h3>
            <div class="container d-flex flex-row align-items-center headline">
                <div class="row w-100">
                    <div class="col-md-6 d-flex flex-column py-4 text-left">
                        <h2 class="text3">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP
                            hosting murah kami mendukung penuh framework favorit Anda</h2>
                        <div class="mt-4 benefit">
                            <p class="small"><i class="fas fa-check-circle text-success"></i> Install Laravel <b>1
                                    klik</b> dengan Softaculous Installer.</p>
                            <p class="small"><i class="fas fa-check-circle text-success"></i> Mendukung ekstensi <b>PHP
                                    MCrypt, phar, mbstring, json</b>, dan <b>fileinfo</b>.</p>
                            <p class="small"><i class="fas fa-check-circle text-success"></i> Tersedia <b>Composer</b>
                                dan <b>SSH</b>
                                untuk menginstall packages pilihan Anda.</p>
                        </div>
                        <div class="my-2 my-md-4">
                            <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                        </div>
                        <div class="my-2 my-md-4">
                            <button class="btn btn-primary rounded-pill btn-main">Pilih Hosting Anda</button>
                        </div>
                    </div>
                    <div class="d-none d-md-flex col-6 flex-row align-items-center">
                        <img src="assets/svg/phplaravel.svg" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-4 d-flex flex-column text-center">
            <div class="container">
                <h3 class="subtitle">Modul Lengkap Untuk</h3>
                <div class="row d-flex my-2 my-md-4">
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>IcePHP</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>http</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>nd_pdo_mysql</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>stats</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>apc</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>huffman</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>oauth</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>stem</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>apcu</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>idn</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>oci8</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>stomp</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>apm</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>igbinary</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>odbc</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>suhosin</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>ares</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>imagick</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>opcache</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>sybase_ct</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>bcmath</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>imap</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pdf</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>sysvmsg</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>bcompiler</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>inclued</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pdo</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>sysvsem</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>big_int</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>inotify</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pdo_dblib</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>sysvshm</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>bitset</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>interbase</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pdo_firebird</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>tidy</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>bloomy</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>intl</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pdo_mysql</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>timezonedb</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>bz2_filter</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>ioncube_loader</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pdo_odbc</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>trader</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>clamav</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>ioncube_loader_4</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pdo_pgsql</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>transit</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>coin_acceptor</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>jsmin</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pdo_sqlite</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>uploadprogress</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>crack</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>json</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>pgsql</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>uri_template</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>dba</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>ldap</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>phalcon</span>
                    </div>
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>uuid</span>
                    </div>
                </div>
                <button class="btn btn-outline-secondary rounded-pill btn-secondary">Selengkapnya</button>
            </div>
        </div>


        <div class="mb-4 border-bottom text-center">
            <div class="container d-flex flex-row align-items-center headline">
                <div class="row w-100">
                    <div class="col-md-6 d-flex flex-column py-4 text-left">
                        <h3 class="text2">Linux Hosting yang Stabil dengan Teknologi LVE</h3>
                        <h2 class="text4">SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan
                            teknologi <b>LIVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b>
                            untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed
                            Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk
                            keamanan website PHP Anda.</h2>
                        <div class="mt-4 benefit">
                        </div>
                        <div class="my-2 my-md-4">
                            <button class="btn btn-primary rounded-pill btn-main">Pilih Hosting Anda</button>
                        </div>
                    </div>
                    <div class="d-none d-md-flex col-6 flex-row align-items-center">
                        <img src="assets/images/support.png" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-social d-flex flex-row align-items-center py-2">
            <div class="container">
                <div class="row d-flex flex-row align-items-center justify-content-between">
                    <div class="col-12 col-md-6 col-sm-12">
                        <span>Bagikan jika anda menyukai halaman ini</span>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 border-white border-lg-left px-md-4 text-left">
                        <img src="assets/images/fb.png" class="mr-1 img-fluid">
                        <img src="assets/images/tw.png" class="mr-1 img-fluid">
                        <img src="assets/images/gm.png" class="mr-1 img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-contact d-flex flex-row align-items-center">
            <div class="container text-center">
                <!-- <div class="row d-flex flex-row align-items-center justify-content-between"> -->
                    <!-- <div class="col-12 col-lg-8 col-sm-12 text-center"> -->
                        <span><h3>Perlu <b>BANTUAN?</b> Hubungi Kami: <b>0274-5305505</b> | <button class="btn btn-outline-light rounded-pill  font-bold"><i
                                class="fas fa-comments"></i> <b>Live Chat</b></button></h3></span>
                    <!-- </div> -->
                    <!-- <div class="col-12 col-lg-4 col-sm-12 border-white border-lg-left px-md-4 text-left text-md-right">
                        
                    </div> -->
                <!-- </div> -->
            </div>
        </div>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>HUBUNGI KAMI</strong>
                        <ul>
                            <li>0274-5305505</li>
                            <li>Senin - Minggu</li>
                            <li>24 Jam Nonstop</li>
                        </ul>
                        <ul>
                            <li>Jl. Selokan Mataram Monjali</li>
                            <li>Karangjati MT I/304</li>
                            <li>Sinduadi, Mlati, Sleman</li>
                            <li>Yogyakarta 55284</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>LAYANAN</strong>
                        <ul>
                            <li>Domain</li>
                            <li>Shared Hosting</li>
                            <li>Cloud VPS Hosting</li>
                            <li>Managed VPS Hosting</li>
                            <li>Web Builder</li>
                            <li>Keamanan SSL /HTTPS</li>
                            <li>Jasa Pembuatan Website</li>
                            <li>Program Affiliasi</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>SERVICE HOSTING</strong>
                        <ul>
                            <li>Hosting Murah</li>
                            <li>Hosting Indonesia</li>
                            <li>Hosting Singapura SG</li>
                            <li>Hosting PHP</li>
                            <li>Hosting Wordpress</li>
                            <li>Hosting Laravel</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>TUTORIAL</strong>
                        <ul>
                            <li>Knowledgebase</li>
                            <li>Blog</li>
                            <li>Cara Pembayaran</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>TENTANG KAMI</strong>
                        <ul>
                            <li>Tim Niagahoster</li>
                            <li>Karir</li>
                            <li>Events</li>
                            <li>Penawaran & Promo Spesial</li>
                            <li>Kontak Kami</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>KENAPA PILIH NIAGAHOSTER?</strong>
                        <ul>
                            <li>Support Terbaik</li>
                            <li>Garansi Harga Termurah</li>
                            <li>Domain Gratis Selamanya</li>
                            <li>Datacenter Hosting Terbaik</li>
                            <li>Review Pelanggan</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 d-flex flex-column mb-3">
                        <strong>NEWSLETTER</strong>
                        <div class="position-relative newsletter-form mb-2">
                            <input type="text" class="form-control rounded-pill p-4" placeholder="Email">
                            <button type="button" class="btn btn-primary rounded-pill">Berlangganan</button>
                        </div>
                        <small>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</small>
                    </div>
                    <div class="col-8 col-md-3 d-flex flex-row align-items-start justify-content-between mt-4 mb-3">
                        <img src="assets/images/fb-footer.png" class="img-fluid">
                        <img src="assets/images/tw-footer.png" class="img-fluid">
                        <img src="assets/images/gm-footer.png" class="img-fluid">
                    </div>
                    <div class="col col-12 d-flex flex-column mb-3">
                        <strong>PEMBAYARAN</strong>
                        <div class="row mb-3">
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/bca.png" class="img-fluid">
                            </div>
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/mandiri.png" class="img-fluid">
                            </div>
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/bni.png" class="img-fluid">
                            </div>
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/visa.png" class="img-fluid">
                            </div>
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/mastercard.png" class="img-fluid">
                            </div>
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/atm.png" class="img-fluid">
                            </div>
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/permata.png" class="img-fluid">
                            </div>
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/prima.png" class="img-fluid">
                            </div>
                            <div class="col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="assets/images/alto.png" class="img-fluid">
                            </div>
                        </div>
                        <small>Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif!</small>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-8">
                        <small>Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare,
                            BitNinja and DC Biznet Technovillage Jakarta<br>
                            Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing
                            technology</small>
                    </div>
                    <div class="col-md-4">
                        <small>Syarat dan Ketentuan | Kebijakan Privasi</small>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>