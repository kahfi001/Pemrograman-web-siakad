<div class="container mt-4 bg-light p-3 rounded">
  <h1 class="text-center">Guru SDN 1 California</h1>
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Cari Guru " aria-label="Cari Guru">
    <button type="button" class="btn btn-outline-warning" style="background-color: purple; color: white;">Cari</button>
  </form>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">NIP</th>
        <th scope="col">Alamat</th>
        <th scope="col">Email</th>
        <th scope="col">No.Hp</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['guru'] as $guru) : ?>
        <tr>
          <td><?= $guru['id']; ?></td>
          <td><?= $guru['nama']; ?></td>
          <td><?= $guru['nip']; ?> </td>
          <td><?= $guru['alamat']; ?></td>
          <td><?= $guru['email']; ?></td>
          <td><?= $guru['no_hp']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>