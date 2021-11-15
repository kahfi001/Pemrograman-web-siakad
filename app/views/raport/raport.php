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
        <th scope="col">Jenis Penilaian</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['inputNilai'] as $nilai) : ?>
        <tr>
          <td><?= $nilai['jenis_penilaian']; ?></td>
          <td><?= $nilai['nama_mapel']; ?></td>
          <td><?= $nilai['nilai']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a class="nav-links" href="<?= BASEURL; ?>/listRaport">
    <button type="submit" class="btn" style="background-color: purple; color: white;">Submit</button>
  </a>

</div>

<div class="modal fade" id="mapelModal" tabindex="-1" aria-labelledby="mapelModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mapelModalLabel">Tambah Nilai Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/raport/addPenilaian/<?= $data['detailSiswa']['id']; ?>" method="POST">
          <div class="mb-3">
            <label class="form-label">Semester</label>
            <select class="form-select" name="semester" id="semester">
                <option selected value="Ganjil">Ganjil</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Mata Pelajaran</label>
            <select class="form-select" name="id_mapel" id="id_mapel">
              <?php foreach ($data['mapel'] as $mapel) { ?>
                <option value="<?= $mapel['id']; ?>"><?= $mapel['nama_mapel']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Nilai</label>
            <select class="form-select" name="jenis_penilaian" id="jenis_penilaian">
                <option selected value="Ulangan Harian">Ulangan Harian</option>
                <option value="UTS">UTS</option>
                <option value="UAS">UAS</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nilai</label>
            <input type="text" class="form-control" id="nilai" name="nilai">
          </div>
          <input type="hidden" name="id_siswa" id="id_siswa" value="<?= $data['detailSiswa']['id']; ?>">
          <input type="hidden" name="nama_siswa" id="nama_siswa" value="<?= $data['detailSiswa']['nama']; ?>">
          <input type="hidden" name="id_kelas" id="id_kelas" value="<?= $data['detailSiswa']['kelas']; ?>">
          <input type="hidden" name="id_guru" id="id_guru" value="<?= $_SESSION['nip']; ?>">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>