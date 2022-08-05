<title><?= $data['judul'] ?></title>
<div class="container">
  <div class="headline">
    Mata Pelajaran <br><br>
  </div>
  <div class="row">
    <div class="col-md-12 mt-2">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h5 class="mt-2">Daftar Mata Pelajaran</h5>
          <a href="<?= BASE; ?>/Guru/tambahSoal" class="btn btn-outline-success">Tambah Soal</a>
        </div>
        <div class="card-body">
          <br />
          <table class="table table-bordered border-striped table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Materi</th>
                <th>Deskripsi</th>
                <th>Jumlah Soal</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($data['siswa'] as $siswa) :  ?>
              <tr>
                <td>1</td>
                <td>Aljabar</td>
                <td>Deskripsi</td>
                <td>20</td>

                <td>
                  <a href="#" id="hapus" class="btn btn-danger">Hapus</a>
                  <a href="<?= BASE; ?>/Guru/detailMapel" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>MySQL</td>
                <td></td>
                <td>20</td>

                <td>
                  <a href="#" id="hapus" class="btn btn-danger">Hapus</a>
                  <a href="<?= BASE; ?>/Guru/detailMapel" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Pemodelan Perangkat Lunak</td>
                <td>Usecase</td>
                <td>5</td>

                <td>
                  <a href="#" id="hapus" class="btn btn-danger">Hapus</a>
                  <a href="<?= BASE; ?>/Guru/detailMapel" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Sistem Komputer</td>
                <td>Hardware</td>
                <td>20</td>

                <td>
                  <a href="#" id="hapus" class="btn btn-danger">Hapus</a>
                  <a href="<?= BASE; ?>/Guru/detailMapel" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>PJOK</td>
                <td>Lompat Harimau</td>
                <td>25</td>

                <td>
                  <a href="#" id="hapus" class="btn btn-danger">Hapus</a>
                  <a href="<?= BASE; ?>/Guru/detailMapel" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById("hapus").addEventListener("click", () => {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        );
      }
    });
  });
</script>