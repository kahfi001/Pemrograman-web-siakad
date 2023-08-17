<?php 

session_unset();
session_destroy(); 

?>

<img src="<?= BASEURL; ?>/img/Unesa.png" class="rounded mx-auto m-5 d-block" style="width: 150px;">
<h1 class="text-center m-5">Sistem Informasi Akademik SD TERPADU</h1>



<!-- carousel -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?= BASEURL; ?>/img/1.jpg" class="d-block w-25 opacity-0">
            <div class="carousel-caption d-none d-md-block">
                <p>Sistem Informasi Terintegrasi Secara Real
                    Time dan Update. Dinas Pendidikan Pemuda dan
                    semua aktivitas dan kegiatan yang terjadi di
                    sekolah, di kelas, dan dapat memantau kegiatan
                    siswa, guru dan lain-lain.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="<?= BASEURL; ?>/img/1.jpg" class="d-block w-25 opacity-0">
            <div class="carousel-caption d-none d-md-block">
                <p>Data tersaji secara cepat, real time, akurat dan
                    transparan, juga terintegrasi dengan admin sekolah, guru, siswa dan orang tua.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/1.jpg" class="d-block w-25 opacity-0">
            <div class="carousel-caption d-none d-md-block">
                <p>Siswa dan Orang tua bisa melakukan memantau
                    kehadiran, memantau tugas dan menerima informasi-informasi dari guru.
                </p>
            </div>
        </div>
    </div>
</div>

<a href="<?= BASEURL; ?>/login">
    <div class="col text-center">
        <button class="btn w-50 rounded-pill " style="background-color: #FFC007">Login</button>
    </div>
</a>
