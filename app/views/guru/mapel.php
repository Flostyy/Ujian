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
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Jumlah Soal</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($data['mapel'] as $mapel) :  ?>
                <tr>
                  <td><?= $mapel['id']; ?></td>
                  <td><?= $mapel['judul']; ?></td>
                  <td><?= $mapel['deskripsi']; ?></td>
                  <td><?= $mapel['jumlahSoal'] ?> Soal</td>


                  <td>
                    <a href="<?= BASE; ?>/Guru/detailMapel" id="<?= $mapel['id'] ?>" class="btn btn-primary">Detail</a>
                    <a id="hapus<?= $mapel['id'] ?>" class="btn btn-danger">Hapus</a>
                    <script>
                      var id = "<?= $mapel['id'] ?>";
                      document.getElementById(`hapus${id}`).addEventListener("click", () => {
                        Swal.fire({
                          title: "Are you sure?",
                          text: "You won't be able to revert this!",
                          icon: "warning",
                          showCancelButton: true,
                          confirmButtonColor: "#3085d6",
                          cancelButtonColor: "#d33",
                          confirmButtonText: "Yes, delete it!",
                        }).then((result) => {
                          if (result.isConfirmed) {
                            Swal.fire("Deleted!", "Your file has been deleted.", "success")
                            setTimeout(() => {
                              window.location.href = "<?= BASE; ?>/Guru/hapusSoal/<?= $mapel['id'] ?>"
                            }, 1000)
                          }
                        });
                      });
                    </script>
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