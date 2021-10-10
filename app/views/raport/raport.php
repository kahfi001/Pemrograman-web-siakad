<div class="container mt-4 bg-light p-3">

  <button type="button" class="btn mb-3" style="background-color: purple; color: white;" data-bs-toggle="modal" data-bs-target=" #tambahSiswa">Tambah Siswa</button>

  <table border="0" cellpadding="10" cellspacing="0">
    <tr>
      <th>Nama :</th>
      <td>Andre</td>
    </tr>
    <tr>
      <th>Kelas :</th>
      <td>1</td>
    </tr>
    <tr>
      <th>NIS :</th>
      <td>2005145</td>
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

<div class="modal fade" id="tambahSiswa" tabindex="-1" aria-labelledby="mapelModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mapelModalLabel">Tambah Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="inputNamaMapel" name="namaMapel">
          </div>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example">
              <option value="0" selected>Pilih Kelas</option>
              <option value="1">Kelas 1</option>
              <option value="2">Kelas 2</option>
              <option value="3">Kelas 3</option>
              <option value="3">Kelas 4</option>
              <option value="3">Kelas 5</option>
              <option value="3">Kelas 6</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">NIS</label>
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

<div class="modal fade" id="mapelModal" tabindex="-1" aria-labelledby="mapelModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mapelModalLabel">Tambah Mata Pelajaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" id="inputNamaMapel" name="namaMapel">
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