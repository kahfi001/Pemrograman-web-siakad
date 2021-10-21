<div class="container mt-4 bg-light p-3 rounded">
  <h1 class="text-center">Kelas SDN 1 California</h1>
  <form class="d-flex">
    <select class="form-select" aria-label="Default select example">
      <option selected>Pilih kelas</option>
      <option value="1">Kelas 1</option>
      <option value="2">Kelas 2</option>
      <option value="3">Kelas 3</option>
    </select>
  </form>
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