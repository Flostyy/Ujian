<title><?= $data['judul'] ?></title>

<!-- soal -->
<section>
  <div class="container mt-4" style="min-height: 500px;">
    <div class="row">
      <div class="col-8">
        <div class="card text">
          <div class="card-header">
            <h3><?= $data['id'][0]['judul']; ?></h3>
            <h6><?= $data['id'][0]['deskripsi']; ?></h6>
          </div>
          <div class="card-body">
            <?php foreach ($data['id'] as $index => $set) : ?>
              <h5 class="card-title">
                <h5><span class="badge badge-success mb-1 mr-2" style="font-size: 20px"><?= $index + 1 ?></span><?= $set['soal']; ?>
                  <a href="" data-toggle="modal" data-target="#ubahSoal">ubah</a>
                </h5>
              </h5>
              <div class="card-text">
                <!-- Opsi Jawaban a -->
                <ul>
                  <li><?= $set['option_a']; ?></li>
                  <li><?= $set['option_b']; ?></li>
                  <li><?= $set['option_c']; ?></li>
                  <li><?= $set['option_d']; ?></li>
                  <li><?= $set['option_e']; ?></li>
                </ul>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="card-footer text-muted">

            <div class="row d-flex justify-content-between">
              <div class="">
                <a href="#" data-toggle="modal" data-target="#tambahSoal" class="btn btn-outline-success"> <i class="fa-solid fa-angles-left"></i> </i>Tambahkan Soal</a>
              </div>
              <!-- <div class="">
                          <a href="#" class="btn btn-warning text-light">Ragu-Ragu</a>
                        </div> -->
              <div class="">
                <a href="#" id="simpan" class="btn btn-outline-success">Simpan <i class="fa-solid fa-angles-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- detail mapel -->
      <div class="col-md-4 ml-auto">
        <form action="">
          <div class="card">
            <div class="card-header">Detail</div>
            <div class="card-body">
              <div class="form-grup">
                <label for="">Mata Pelajaran</label>
                <input type="text" class="form-control" />
              </div>
              <div class="form-grup">
                <label for="">Materi</label>
                <input type="text" class="form-control" />
              </div>
              <div class="form-grup">
                <label for="">Jumlah Soal</label>
                <input type="text" class="form-control" />
              </div>
              <div class="form-grup">
                <label for="">Kelas</label>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="card-footer">
              <input type="button" class="btn btn-primary" id="ubah" value="Ubah" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- Modal ubah-->
<div class="modal fade" id="ubahSoal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah soal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-grup">
            <input type="text" class="form-control" placeholder="Soal" />
          </div>
          <div class="form-grup mt-2">
            <input type="text" class="form-control" placeholder="Opsi 1" />
          </div>
          <div class="form-grup mt-2">
            <input type="text" class="form-control" placeholder="Opsi 2" />
          </div>
          <div class="form-grup mt-2">
            <input type="text" class="form-control" placeholder="Opsi 3" />
          </div>
          <div class="form-grup mt-2">
            <input type="text" class="form-control" placeholder="Opsi 4" />
          </div>
          <div class="form-grup mt-2">
            <input type="text" class="form-control" placeholder="Opsi 5" />
          </div>
          <div class="form-group mt-2">

            <select class="form-control" id="exampleFormControlSelect1">
              <option>Pilih Jawaban yang benar</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal tambah-->
<div class="modal fade" id="tambahSoal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Soal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE ?>/Guru/tambahTambah/<?= $data['id'][0]['id'] ?>" method="POST">
          <!-- soal -->
          <div class="form-grup container">
            <div class="row">
              <input type="text" name="soal" class="form-control col" placeholder="Soal" required />
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" value="option_a">
                </div>
              </div>
              <input type="text" name="option_a" class="form-control" placeholder="Opsi 1" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" value="option_b">
                </div>
              </div>
              <input type="text" name="option_b" class="form-control" placeholder="Opsi 2" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" value="option_c">
                </div>
              </div>
              <input type="text" name="option_c" class="form-control" placeholder="Opsi 3" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" value="option_d">
                </div>
              </div>
              <input type="text" name="option_d" class="form-control" placeholder="Opsi 4" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" value="option_e">
                </div>
              </div>
              <input type="text" name="option_e" class="form-control" placeholder="Opsi 5" required />
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById("ubah").addEventListener("click", () => {
    Swal.fire("Good job!", "You clicked the button!", "success");
  });

  document.getElementById("simpan").addEventListener("click", () => {
    Swal.fire("Good job!", "You clicked the button!", "success");
  });

  document.getElementById("logout").addEventListener("click", () => {
    Swal.fire({
      title: "Are you sure?",
      text: "You won't logout from this?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, sure",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "<?= BASE; ?>/Login/logout";
      }
    });
  });
</script>
</body>

</html>