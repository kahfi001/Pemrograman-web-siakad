<main>
  <div class="container mt-4 bg-light p-3 rounded">
    <div class=" row g-2">
      <h3 class="my-3">Data Mata Pelajaran</h3>
      <hr>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($data['absenSiswa'] as $siswa) { ?>
              <tr>
                <td><?= $siswa['nis']; ?></td>
                <td><?= $siswa['nama']; ?></td>
                <td>
                  <form action="<?= BASEURL; ?>/absen/addAbsensi" method="post">
                    <input type="hidden" name="id_siswa" id="id_siswa" value="<?= $siswa['id']; ?>">
                    <input type="hidden" name="nip_guru" id="nip_guru" value="<?= $_SESSION['nip']; ?>">
                    <button type="button" class="btn" style="background-color: purple; color: white;">Hadir</button>
                  </form>
                </td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>