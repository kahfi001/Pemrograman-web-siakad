<div class="container mt-4 bg-light p-3">

  <h3 class="my-3">Set Mata Pelajaran</h3>
  <hr>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Kelas</th>
        <th scope="col">Wali Kelas</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['kelas'] as $kls) : ?>
        <tr>
          <td><?= $kls['kelas']; ?></td>
          <td><?= $kls['wali_kelas']; ?></td>
          <td>
              <button type="button" class="btn" style="background-color: purple; color: white;" data-bs-toggle="modal" data-bs-target="#mapelModal">Set Mata Pelajaran</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>


<div class="modal fade" id="mapelModal" tabindex="-1" aria-labelledby="mapelModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mapelModalLabel">Tambah Mata Pelajaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mapel/addMapel" method="POST">
          <div class="mb-3">
            <label class="form-label">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
          </div>
          <button type="submit" class="btn btn-purple">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
