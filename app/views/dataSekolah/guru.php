<div class="container mt-4 bg-light p-3 rounded">
  <div class="row">
    <div class="col-lg-6 ">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <h1 class="text-center">Guru SDN 1 California</h1>
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Cari Guru " aria-label="Cari Guru">
    <button type="button" class="btn btn-outline-warning" style="background-color: purple; color: white;">Cari</button>
    <?php if ($_SESSION['level'] != 'guru') { ?>
      <button type="button" class="btn btn-outline-warning w-75 ms-2" style="background-color: purple; color: white;" data-bs-toggle="modal" data-bs-target="#guruModal">Tambah Guru</button>
    <?php } ?>
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

<div class="modal fade" id="guruModal" tabindex="-1" aria-labelledby="judulGuruModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulGuruModal">Tambah Guru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/guru/addGuru" method="post">
          <div class="mb-3">
            <label for="namaGuru" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" id="namaGuru" name="namaGuru">
            <label for="nip" class="form-label">NIP</label>
            <input type="number" class="form-control" id="nip" name="nip">
            <label for="alamatGuru" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamatGuru" name="alamatGuru">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <label for="noHpGuru" class="form-label">No. Hp</label>
            <input type="number" class="form-control" id="noHpGuru" name="noHpGuru">
          </div>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-purple">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>