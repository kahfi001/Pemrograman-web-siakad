<div class="container mt-4 bg-light p-3 rounded">
  <div class="row">
    <div class="col-lg-6 ">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <h1 class="text-center">Kelas SDN 1 California</h1>
  <?php if ($_SESSION['level'] != 'guru') { ?>
    <form class="d-flex">
      <select class="form-select" aria-label="Default select example">
        <option selected>Pilih kelas</option>
        <option value="1">Kelas 1</option>
        <option value="2">Kelas 2</option>
        <option value="3">Kelas 3</option>
      </select>

      <button type="button" class="btn btn-outline-warning w-25 ms-2" style="background-color: purple; color: white;" data-bs-toggle="modal" data-bs-target="#kelasModal">Tambah Kelas</button>
    </form>
  <?php } ?>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Kelas</th>
        <th scope="col">Wali Kelas</th>
        <th scope="col">Jumlah Murid</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['kelas'] as $kelas) : ?>
        <tr>
          <td><?= $kelas['id']; ?></td>
          <td><?= $kelas['kelas']; ?></td>
          <td><?= $kelas['wali_kelas']; ?> </td>
          <td><?= $kelas['jumlah_murid']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>

<div class="modal fade" id="kelasModal" tabindex="-1" aria-labelledby="judulKelasModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulKelasModal">Tambah Kelas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/kelas/addKelas" method="post">
          <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" id="kelas" name="kelas">
              <option selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
            <label for="waliKelas" class="form-label">Nama Wali kelas</label>
            <input type="text" class="form-control" id="waliKelas" name="waliKelas">
            <label for="jumlahMurid" class="form-label">Jumlah Murid</label>
            <input type="number" class="form-control" id="jumlahMurid" name="jumlahMurid">
          </div>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-purple">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>