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
              <button type="button" class="btn" style="background-color: purple; color: white;">Set Mata Pelajaran</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
