<div class="container mt-4 bg-light p-3 rounded">

  <div class="row">
    <div class="col-lg-6 ">
      <?php Flasher::flash(); ?>
    </div>
  </div>


  <h1 class="text-center">Siswa SDN 1 California</h1>
  <form class="d-flex">
    <select class="form-select" aria-label="Default select example">
      <option selected>Pilih kelas</option>
      <option value="1">Kelas 1</option>
      <option value="2">Kelas 2</option>
      <option value="3">Kelas 3</option>
      <option value="3">Kelas 4</option>
      <option value="3">Kelas 5</option>
      <option value="3">Kelas 6</option>
    </select>
    <br><br>
    <input class="form-control me-2" type="search" placeholder="Cari Siswa " aria-label="Cari Siswa">
    <button type="button" class="btn btn-outline-warning" style="background-color: purple; color: white;">Cari</button>
    <button type="button" class="btn btn-outline-warning w-75 ms-2" style="background-color: purple; color: white;" data-bs-toggle="modal" data-bs-target="#siswaModal">Tambah Siswa</button>
  </form>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama</th>
        <th scope="col">NIS</th>
        <th scope="col">Kelas</th>
        <th scope="col">Alamat</th>
        <th scope="col">No.Hp</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['siswa'] as $siswa) : ?>
        <tr>
          <td><?= $siswa['id']; ?></td>
          <td><?= $siswa['nama']; ?></td>
          <td><?= $siswa['nis']; ?> </td>
          <td><?= $siswa['kelas']; ?></td>
          <td><?= $siswa['alamat']; ?></td>
          <td><?= $siswa['no_hp']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="siswaModal" tabindex="-1" aria-labelledby="judulSiswaModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulSiswaModal">Tambah Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/siswa/addSiswa" method="post">
          <div class="mb-3">
            <label for="namaSiswa" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="namaSiswa" name="namaSiswa">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" id="kelas" name="kelas">
              <option selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <label for="alamatSiswa" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamatSiswa" name="alamatSiswa">
            <label for="noHpSiswa" class="form-label">No. Hp</label>
            <input type="number" class="form-control" id="noHpSiswa" name="noHpSiswa">
          </div>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-purple">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>