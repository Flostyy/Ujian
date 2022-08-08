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
        <div class="card-header">
          <h5 class="mt-2">Daftar Siswa</h5>
        </div>
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
                    <a href="<?= BASE; ?>/Guru/ubahData/<?= $siswa['id'] ?>" class="btn btn-warning tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $siswa['id'] ?>" onclick="ubahData('<?= $siswa['id']; ?>')">Edit</a>
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
              <input type="text" class="form-control" name="nama" required />
            </div>
            <div class="form-grup">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" required />
            </div>
            <div class="form-grup">
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" id="myInput" required />
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="passRegis" onclick="myFunction()">
                <label class="form-check-label" for="passRegis">
                  <p>Show Password</p>
                </label>
              </div>
            </div>
              <input type="text" name="level" id="" value="murid" hidden >
              <input type="text" name="mapel" id="" hidden >
          </div>
          <div class="card-footer">
            <input type="submit" class="btn btn-primary" id="tambah_user" value="Tambah" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

 <!-- INI MODALNYA YAA STEVENN -->
    <!-- Modal -->
    <?php foreach($data['siswa'] as $siswa ) : ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= BASE; ?>/Guru/ubah" method="POST">
                <div class="card-body">
                    <div class="form-grup">
                      <label for="">Nama</label>
                      <input type="text" id="nama" name="nama" class="form-control" />
                    </div>
                    <div class="form-grup">
                      <label for="">Email</label>
                      <input type="email" id="email" name="email" class="form-control" />
                    </div>
                    <div class="form-grup">
                      <label for="">Password</label>
                      <input type="password" id="password" name="password" class="form-control" />
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="passEdit" onclick="myFunction()">
                        <label class="form-check-label" for="passEdit">
                          <p>Show Password</p>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <input type="hidden" name="id" id="id">
                    <input type="text" name="level" id="" value="murid" hidden >
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id="ubah" value="Ubah" />
              </form>
             </div>
             </div>
        </div>
      </div>

      <?php endforeach; ?>

    </div>
  </div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById("tambah_user").addEventListener("submit", e => {
    e.preventDefault()
    Swal.fire("Good job!", "You clicked the button!", "success");
    setTimeout(() => {
      document.getElementById("tambah_user").submit()
    }, 3000)
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

  // Show Pass
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

<script>
        $(function(){
          $('.tampilModalUbah').on('click',function(){
              // $('.modal-footer button[type=submit]').html('Ubah Data');

              const id = $(this).data('id');

              $.ajax({
                url: 'http://localhost/Ujian/public/Guru/ubahData',
                data:{id : id},
                method: 'post',
                dataType: 'json',
                success: function(data)  {
                  $('#nama').val(data.nama);  
                  $('#email').val(data.email);
                  $('#password').val(data.password);
                  $('#level').val(data.level);
                  $('#mapel').val(data.mapel);
                  $('#id').val(data.id);
                }             
              });
          })

        })

// Show Pass
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
</body>