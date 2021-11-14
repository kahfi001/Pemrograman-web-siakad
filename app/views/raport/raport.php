<div class="container mt-4 bg-light p-3">

  <table border="0" cellpadding="5" cellspacing="0">
    <tr>
      <th>Nama :</th>
      <td><?= $data['detailSiswa']['nama']; ?></td>
    </tr>
    <tr>
      <th>Kelas :</th>
      <td><?= $data['detailSiswa']['kelas']; ?></td>
    </tr>
    <tr>
      <th>NIS :</th>
      <td><?= $data['detailSiswa']['nis']; ?></td>
    </tr>
  </table>
  <hr>
  <button type="button" class="btn" style="background-color: purple; color: white;" data-bs-toggle="modal" data-bs-target="#mapelModal">Tambah Nilai Siswa</button>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['mapel'] as $mapel) : ?>
        <tr>
          <td><?= $mapel['nama_mapel']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <button type="submit" class="btn" style="background-color: purple; color: white;">Submit</button>

</div>

<div class="modal fade" id="mapelModal" tabindex="-1" aria-labelledby="mapelModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mapelModalLabel">Tambah Nilai Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Nama Mata Pelajaran</label>
            <select class="form-select" name="mapel" id="mapel">
              <?php foreach ($data['mapel'] as $mapel) { ?>
                <option selected value="<?= $mapel['nama_mapel']; ?>"><?= $mapel['nama_mapel']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nilai</label>
            <input type="text" class="form-control" id="inputNamaMapel" name="namaMapel">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>