<header class="border-bottom border-warning border-5" style="background-color: #7B1FA1;">
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link 
            <?php
              if ($data['tittle'] == 'Dashboard') {
                echo 'active';
              } 
               echo '';  
            ?>" 
            href="<?= BASEURL; ?>/dashboard">
            Dashboard </a>
          </li> 
          <li class=" nav-item">
            <a class="nav-link  
            <?php 
              if ($data['tittle'] == 'Data Sekolah') {
                echo 'active';
              } 
               echo '';
            ?>" 
            href="<?= BASEURL; ?>/dataSekolah">Data Sekolah</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link  <?php 
              if ($data['tittle'] == 'Mata Pelajaran') {
                echo 'active';
              } 
               echo '';
            ?>" 
            href="<?= BASEURL; ?>/mapel">Jadwal Pelajaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php 
              if ($data['tittle'] == 'List Raport') {
                echo 'active';
              } 
               echo '';
            ?>" href="<?= BASEURL; ?>/listRaport">Raport </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php 
              if ($data['tittle'] == 'Absen') {
                echo 'active';
              } 
               echo '';
            ?>" href="<?= BASEURL; ?>/absen">Absen</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Profil -->
  <div class="d-flex justify-content-center align-items-center my-4">
    <div class="">
      <img src="<?= BASEURL; ?>/img/foto.jpg" alt="..." class=" me-5 rounded-circle" width="100px">
    </div>
    <div class="" style="color: #fff;">
      <h3 class="mb-0 text-uppercase"><?= $_SESSION['nama']; ?></h3>
      <p class="mb-0"><?= $_SESSION['nip']; ?></p>
      <p class="mb-0 text-uppercase"><?= $_SESSION['level']; ?></p>
    </div>
  </div>
</header>