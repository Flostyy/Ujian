<title><?= $data['judul'] ?></title>
<!-- soal -->
<section>
  <div class="container mt-4" style="min-height: 500px;">
    <div class="row">
      <div class="col-12">
        <div class="card text">
          <div class="card-header d-flex justify-content-between">

            <h5 class="mt-2">Buat Mapel baru</h5>
            <!-- <a href="" class="btn btn-outline-success">Simpan</a> -->
          </div>
          <div class="card-body">
            <!-- detail mapel -->
            <div class="col">
              <form action="<?= BASE ?>/Guru/tambahSoalNew" method="POST">
                <div class="card">
                  <div class="card-header">Detail</div>
                  <div class="card-body">
                  <input type="text" class="form-control" name="id" value="<?= $_SESSION['id'] ?>" hidden/>
                    <div class="form-grup">
                      <label for="">Judul</label>
                      <input type="text" class="form-control" name="judul" required/>
                    </div>
                    <div class="form-grup">
                      <label for="">Deskripsi</label>
                      <input type="text" class="form-control" name="deskripsi" required/>
                    </div>
                    <!-- <div class="form-grup">
                      <label for="">Jumlah Soal</label>
                      <input type="text" class="form-control" />
                    </div>           -->

                </div>
            </div>

            <!-- soal -->
            <div class="container mt-4">
                <div class="card">
                  <div class="card-header">Soal</div>
                  <div class="card-body">
                    
                      
                    
                    
                    <?php for ($i=1; $i <= 2; $i++) : ?>
                    <!-- soal -->
                    <div class="form-grup container">
                      <div class="row">
                      <span class="badge badge-success mr-2" style="font-size: 20px; line-height: 30px; width:30px;"><?=$i?></span>
                      <input type="text" name="soal<?=$i?>" class="form-control col" placeholder="Soal" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group mt-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="radio" name="jawaban<?=$i?>" id="" value="option_a">
                          </div>
                        </div>
                        <input type="text" name="option_a<?=$i?>" class="form-control" placeholder="Opsi 1" required/>
                      </div>
                      <div class="input-group mt-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="radio" name="jawaban<?=$i?>" id="" value="option_b">
                          </div>
                        </div>
                        <input type="text" name="option_b<?=$i?>" class="form-control" placeholder="Opsi 2" required/>
                      </div>
                      <div class="input-group mt-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="radio" name="jawaban<?=$i?>" id="" value="option_c">
                          </div>
                        </div>
                        <input type="text" name="option_c<?=$i?>" class="form-control" placeholder="Opsi 3" required/>
                      </div>
                      <div class="input-group mt-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="radio" name="jawaban<?=$i?>" id="" value="option_d">
                          </div>
                        </div>
                        <input type="text" name="option_d<?=$i?>" class="form-control" placeholder="Opsi 4" required/>
                      </div>
                      <div class="input-group mt-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="radio" name="jawaban<?=$i?>" id="" value="option_e">
                          </div>
                        </div>
                        <input type="text" name="option_e<?=$i?>" class="form-control" placeholder="Opsi 5" required/>
                      </div>
                    </div>
                    
                    <?php endfor;?>
                  </div>

                  <div class="card-footer text-muted">

                    <div class="row d-flex justify-content-end">

                      <div class="">
                        <input type="submit" class="btn btn-outline-success" value="Tambah Soal" name="submit">
                        <!-- <a href="#" class="btn btn-outline-success">Tambah Soal <i class="fa-solid fa-angles-right"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </form>




            </div>
          </div>

        </div>


      </div>
    </div>
</section>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
        window.location.href = '<?= BASE; ?>/Login/logout';
      }
    });
  });
</script>