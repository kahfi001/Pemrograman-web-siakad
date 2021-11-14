$(function () {

    $('.tombolTambahData').on('click', function () {
      $('#judulSiswaModal').html('Tambah Siswa');
      $('.modal-body button[type=submit]').html('Tambah Data');
      $('#namaSiswa').val('');
      $('#nis').val('');
      $('#kelas').val('');
      $('#alamatSiswa').val('');
      $('#id').val('');
    });
  
    $('.tampilModalUbah').on('click', function () {
      $('#judulSiswaModal').html('Ubah Data Siswa');
      $('.modal-body button[type=submit]').html('Ubah Data');
      $('.modal-body form').attr('action','http://localhost/Pemrograman-web-siakad/public/siswa/ubah');

      const id = $(this).data('id');
      
      $.ajax({
        url: 'http://localhost/Pemrograman-web-siakad/public/siswa/getubah',
        data: {id:id},
        method: 'post',
        dataType:'json',
        success: function(data) {
          $('#namaSiswa').val(data.nama);
          $('#nis').val(data.nis);
          $('#kelas').val(data.kelas);
          $('#alamatSiswa').val(data.alamat);
          $('#noHpSiswa').val(data.no_hp);
          $('#id').val(data.id);
        }
      });
    });
  
});