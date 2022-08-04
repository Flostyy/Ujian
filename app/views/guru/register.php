<title><?= $data['judul'] ?></title>
<!-- Content -->
<div class="container">
  <div class="headline">
    Daftar Siswa <br class="d-none d-md-block">
    <br>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Daftar Siswa</div>
        <div class="card-body">
          <br />
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['siswa'] as $siswa) :  ?>
                <tr>
                  <td> <?= $siswa['id']; ?></td>
                  <td> <?= $siswa['nama']; ?></td>
                  <td> <?= $siswa['email']; ?></td>
                  <td>
                    <!-- Button trigger modal, modalnya dibawah ygy-->
                    <a href="<?= BASE; ?>/Guru/tambahSiswa/<?= $siswa['id'] ?>" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-id="<?= $siswa['id'] ?>">Edit</a>
                    <a id="hapus<?= $siswa['id'] ?>" class="btn btn-danger">Hapus</a>
                    <script>
                      var id = "<?= $siswa['id'] ?>";
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
                              window.location.href = "<?= BASE; ?>/Guru/hapusSiswa/<?= $siswa['id'] ?>"
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
    <div class="col-md-4 ml-auto">
      <form action="<?= BASE; ?>/Guru/tambahSiswa" method="POST">
        <div class="card">
          <div class="card-header">Register</div>
          <div class="card-body">
            <div class="form-grup">
              <label for="">Nama</label>
              <input type="text" class="form-control" name="nama" />
            </div>
            <div class="form-grup">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" />
            </div>
            <div class="form-grup">
              <label for="">Password</label>
              <input type="text" class="form-control" name="password" />
            </div>
            <div class="form-grup">
              <label for="">Level</label>
              <select class="form-control" name="level">
                <option value="guru">Guru</option>
                <option value="siswa">Murid</option>
              </select>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" class="btn btn-primary" id="tambah" value="Tambah" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- INI MODALNYA YAA STEVENN -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php foreach ($data['siswa'] as $siswa) :  ?>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-grup">
              <label for="">Nama</label>
              <input type="text" id="nama <?= $siswa['nama']; ?>" class="form-control" />
            </div>
            <div class="form-grup">
              <label for="">Email</label>
              <input type="text" id="email <?= $siswa['email']; ?>" class="form-control" />
            </div>
            <div class="form-grup">
              <label for="">Password</label>
              <input type="text" id="password <?= $siswa['password']; ?>" class="form-control" />
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById("tambah").addEventListener("click", () => {
    Swal.fire("Good job!", "You clicked the button!", "success");
  });
  document.getElementById("hapus").addEventListener("click", () => {
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
        Swal.fire("Deleted!", "Your file has been deleted.", "success");
      }
    });
  });
</script>
</body>