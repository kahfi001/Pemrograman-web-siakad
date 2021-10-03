<div class="container mt-4 bg-light p-3">
        <button type="button" class="btn" style="background-color: purple; color: white;" data-bs-toggle="modal" data-bs-target="#mapelModal">Tambah Mata Pelajaran</button>
        <button type="button" class="btn" style="background-color: purple; color: white;">Atur jadwal Mata Pelajaran</button>

    <h3 class="my-3">Data Mata Pelajaran</h3>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>PPKn</td>
                <td>Kelas 1</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Bahasa Indonesia</td>
                <td>Kelas 4</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Matematika</td>
                <td>Kelas 5</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Bahasa Inggris</td>
                <td>Kelas 6</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Olahraga</td>
                <td>Kelas 2</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Seni Lukis</td>
                <td>Kelas 2</td>
            </tr>
        </tbody>
    </table>
    
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
                <select class="form-select" aria-label="Default select example">
                    <option value ="0" selected>Pilih Kelas</option>
                    <option value="1">Kelas 1</option>
                    <option value="2">Kelas 2</option>
                    <option value="3">Kelas 3</option>
                    <option value="3">Kelas 4</option>
                    <option value="3">Kelas 5</option>
                    <option value="3">Kelas 6</option>
                </select>
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