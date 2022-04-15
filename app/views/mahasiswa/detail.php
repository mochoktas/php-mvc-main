<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
        <p class="card-text"><?= $data['mhs']['email']; ?></p>
        <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      </div>
    </div>

</div>
<br>
<div class="container">
  <button type="button" class="btn btn-primary tombolTambahData3" data-toggle="modal" data-target="#formModal3">
    Ambil Mata Kuliah
  </button>
</div>
<br>
<div class="container d-flex justify-content-center">
  <h4>
    Mata Kuliah Terambil
  </h4>
  <br>
  
</div>
<div class="container d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach( $data['mtk1'] as $mtk1 ) : ?>
      <tr>
        <th scope="row">*</th>
        <td><?= $mtk1['nama_matkul']; ?></td>
        <td><?= $mtk1['nilai']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="formModal3" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel3">Ambil Mata Kuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambahMatkul" method="post">
          <input type="hidden" name="id_mhs" id="id_mhs" value="<?= $data['mhs']['id']; ?>" >
          
          <div class="form-group">
            <label for="matkul">Mata Kuliah</label>
            <select class="form-control" id="id_matkul" name="id_matkul">
              <?php foreach( $data['mtk2'] as $mtk2 ) : ?>
                <option value="<?= $mtk2['id_matkul']; ?>"><?= $mtk2['nama_matkul']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>