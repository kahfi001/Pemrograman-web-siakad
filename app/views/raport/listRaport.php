<div class="container mt-4 bg-light p-3 rounded">
  <h3 class="my-3">List Siswa</h3>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">NIS</th>
        <th scope="col">Kelas</th>
        <th scope="col">Alamat</th>
        <th scope="col">No.Hp</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['siswa'] as $siswa) : ?>
        <tr>
          <td><?= $siswa['nama']; ?></td>
          <td><?= $siswa['nis']; ?></td>
          <td><?= $siswa['kelas']; ?></td>
          <td><?= $siswa['alamat']; ?></td>
          <td><?= $siswa['no_hp']; ?></td>
          <td><a href="<?= BASEURL; ?>/raport/<?=$siswa['id']; ?>" class="btn" style="background-color: purple; color: white;">Inputkan Nilai</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>