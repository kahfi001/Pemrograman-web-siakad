<div class="container mt-4 bg-light p-3 rounded">
  <h1 class="text-center">Siswa SDN 1 California</h1>
  <form class="d-flex">
    <select class="form-select" aria-label="Default select example">
      <option selected>Pilih kelas</option>
      <option value="1">Kelas 1</option>
      <option value="2">Kelas 2</option>
      <option value="3">Kelas 3</option>
    </select>
    <br><br>
    <input class="form-control me-2" type="search" placeholder="Cari Siswa " aria-label="Cari Siswa">
    <button type="button" class="btn btn-outline-warning" style="background-color: purple; color: white;">Cari</button>
  </form>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Foto</th>
        <th scope="col">Name</th>
        <th scope="col">NIS</th>
        <th scope="col">Kelas</th>
        <th scope="col">Alamat</th>
        <th scope="col">No.Hp</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><img src="<?= BASEURL; ?>/img/bagas.jpg" alt="..." class=" me-5 " width="100px"></td>
        <td>Fiersa</td>
        <td>3214 </td>
        <td>1</td>
        <td>fiersa@gmail.com</td>
        <td>0823456789</td>
      </tr>


    </tbody>
  </table>

</div>