<main>
  <div class="container my-4">
    <div class=" row g-2">
      <?php if ($_SESSION['level'] == 'admin') { ?>
        <div class="col-6">
          <a href="<?= BASEURL; ?>/dataSekolah" class=" text-decoration-none">
            <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4) ">
              <i class="bi bi-bank" style="font-size : 75px; color:#FFC007;"></i>
              <p style="color: white; font-size:25px">Data Sekolah</p>
            </div>
          </a>
        </div>
      <div class="col-6">
        <a href="<?= BASEURL; ?>/mapel" class="text-decoration-none">
          <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4)">
            <i class="bi bi-calendar3" style="font-size : 75px; color:#FFC007;"></i>
            <p style="color: white; font-size:25px">Jadwal Pelajaran</p>
          </div>
        </a>
      </div>
      <?php } elseif($_SESSION['level'] == 'guru') { ?>

        <div class="col-6">
          <a href="<?= BASEURL; ?>/dataSekolah" class=" text-decoration-none">
            <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4) ">
              <i class="bi bi-bank" style="font-size : 75px; color:#FFC007;"></i>
              <p style="color: white; font-size:25px">Data Sekolah</p>
            </div>
          </a>
        </div>
        <div class="col-6">
          <a href="<?= BASEURL; ?>/mapel" class="text-decoration-none">
            <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4)">
              <i class="bi bi-calendar3" style="font-size : 75px; color:#FFC007;"></i>
              <p style="color: white; font-size:25px">Jadwal Pelajaran</p>
            </div>
          </a>
        </div>
        <div class="col-6">
          <a href="<?= BASEURL; ?>/listRaport" class="text-decoration-none">
            <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4)">
              <i class="bi bi-layout-text-sidebar" style="font-size : 75px; color:#FFC007;"></i>
              <p style="color: white; font-size:25px">Raport</p>
            </div>
          </a>
        </div>
        <div class="col-6">
          <a href="#" class="text-decoration-none">
            <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4)">
              <i class="bi bi-list-check" style="font-size : 75px; color:#FFC007;"></i>
              <p style="color: white; font-size:25px">Absen</p>
            </div>
          </a>
        </div>

      <?php } else { ?>
        <div class="col-4">
          <a href="<?= BASEURL; ?>/dataSekolah" class=" text-decoration-none">
            <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4) ">
              <i class="bi bi-bank" style="font-size : 75px; color:#FFC007;"></i>
              <p style="color: white; font-size:25px">Data Sekolah</p>
            </div>
          </a>
        </div>
        <div class="col-4">
          <a href="<?= BASEURL; ?>/mapel" class="text-decoration-none">
            <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4)">
              <i class="bi bi-calendar3" style="font-size : 75px; color:#FFC007;"></i>
              <p style="color: white; font-size:25px">Jadwal Pelajaran</p>
            </div>
          </a>
        </div>
        <div class="col-4">
          <a href="<?= BASEURL; ?>/raportSiswa" class="text-decoration-none">
            <div class="fitur p-3  text-center rounded " style="background-color : rgba(255,255,255,0.4)">
              <i class="bi bi-layout-text-sidebar" style="font-size : 75px; color:#FFC007;"></i>
              <p style="color: white; font-size:25px">Raport</p>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</main>