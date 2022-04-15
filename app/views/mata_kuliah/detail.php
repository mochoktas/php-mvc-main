<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['mtk']['nama_matkul']; ?></h5>
        <a href="<?= BASEURL; ?>/matakuliah" class="card-link">Kembali</a>
      </div>
    </div>

</div>
<div class="container d-flex justify-content-center">
  <h4>
    Pengambil Mata Kuliah
  </h4>
  <br>
  
</div>
<div class="container d-flex justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach( $data['mhs1'] as $mhs1 ) : ?>
      <tr>
        <th scope="row">*</th>
        <td><?= $mhs1['nama']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>