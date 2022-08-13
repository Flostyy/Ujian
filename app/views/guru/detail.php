<title><?= $data['judul'] ?></title>

<!-- soal -->
<section>
  <div class="container mt-4" style="min-height: 500px;">
    <div class="row">
      <div class="col-8">
        <div class="card text">
          <div class="card-header">
            <h3><?= $data['detail'][0]['judul']; ?></h3>
            <h6><?= $data['detail'][0]['deskripsi']; ?></h6>
          </div>
          <div class="card-body">
            <?php foreach ($data['detail'] as $index => $set) : ?>
              <h5 class="card-title">

                <h5><span class="badge badge-success mb-1 mr-2" style="font-size: 20px"><?= $index + 1 ?></span><?= $set['soal']; ?>
                  <a href="<?= BASE; ?>/Guru/ubahSoal/<?= $set['id_soal']; ?>" class="tampilModalUbah" data-toggle="modal" data-target="#ubahSoal" data-id="<?= $set['id_soal']; ?>" onclick="ubahSoal('<?= $set['id_soal']; ?>')">ubah</a>

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
              <a href="#" data-toggle="modal" data-target="#tambahSoal" class="btn btn-outline-success"> <i class="fa-solid fa-angles-left"></i> </i>Tambahkan Soal</a>
            </div>
          </div>
        </div>

      </div>

      <!-- detail mapel -->
      <div class="col-md-4 ml-auto">
        <form action="<?= BASE; ?>/Guru/ubahUjian" method="POST">
          <div class="card">
            <div class="card-header">Detail</div>
            <div class="card-body">
              <div class="form-grup">
                <label for="">Judul Ujian</label>
                <input type="text" name="judul" value="<?= $data['detail'][0]['judul'] ?>" class="form-control" />
              </div>
              <div class="form-grup">
                <label for="">Deskripsi Ujian</label>
                <input type="text" name="deskripsi" value="<?= $data['detail'][0]['deskripsi'] ?>" class="form-control" />
              </div>
              <div class="form-grup">
                <label for="">Jumlah Soal</label>
                <input type="text" value="<?= $data['detail'][0]['jumlahSoal'] ?> Soal" readonly class="form-control" />
              </div>
              <!-- <div class="form-grup">
                <label for="">Kelas</label>
                <input type="text" class="form-control" />
              </div> -->
            </div>
            <div class="card-footer">
              <input type="hidden" name="id" id="id" value="<?= $data['detail'][0]['id'] ?>">
              <input type="submit" class="btn btn-primary" id="" value="Ubah" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- Modal ubah Soal-->
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
        <form action="<?= BASE; ?>/Guru/soalUbah/<?= $data['detail'][0]['id'] ?>" method="POST">
          <!-- soal -->
          <div class="form-grup container">
            <div class="row">
              <input type="text" name="soal" id="soal" class="form-control col" placeholder="Soal" required />
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="jawaban_a" value="option_a">
                </div>
              </div>
              <input type="text" name="option_a" id="option_a" class="form-control" placeholder="Opsi 1" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="jawaban_b" value="option_b">
                </div>
              </div>
              <input type="text" name="option_b" id="option_b" class="form-control" placeholder="Opsi 2" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="jawaban_c" value="option_c">
                </div>
              </div>
              <input type="text" name="option_c" id="option_c" class="form-control" placeholder="Opsi 3" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="jawaban_d" value="option_d">
                </div>
              </div>
              <input type="text" name="option_d" id="option_d" class="form-control" placeholder="Opsi 4" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="jawaban_e" value="option_e">
                </div>
              </div>
              <input type="text" name="option_e" id="option_e" class="form-control" placeholder="Opsi 5" required />
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" name="id_soal" id="id_soal">
        <!-- <input type="hidden" name="id_ujian" id="id_ujian"> -->
        <!-- <input type="hidden" name="jawaban" id="jawaban"> -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <input type="submit" class="btn btn-primary" id="ubah" value="Ubah" /> -->
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
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
        <form action="<?= BASE ?>/Guru/tambahTambah/<?= $data['detail'][0]['id'] ?>" method="POST">
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
                  <input type="radio" name="jawaban" id="" required value="option_a">
                </div>
              </div>
              <input type="text" name="option_a" class="form-control" placeholder="Opsi 1" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" required value="option_b">
                </div>
              </div>
              <input type="text" name="option_b" class="form-control" placeholder="Opsi 2" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" required value="option_c">
                </div>
              </div>
              <input type="text" name="option_c" class="form-control" placeholder="Opsi 3" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" required value="option_d">
                </div>
              </div>
              <input type="text" name="option_d" class="form-control" placeholder="Opsi 4" required />
            </div>
            <div class="input-group mt-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" name="jawaban" id="" required value="option_e">
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

<script>
  $(function() {
    $('.tampilModalUbah').on('click', function() {
      // $('.modal-footer button[type=submit]').html('Ubah');

      const id = $(this).data('id');

      $.ajax({
        url: 'http://localhost/Ujian/public/Guru/ubahSoal',
        data: {
          id: id
        },
        method: 'post',
        dataType: 'json',
        success: function(id) {
          $('#soal').val(id.soal);
          $('#option_a').val(id.option_a);
          $('#option_b').val(id.option_b);
          $('#option_c').val(id.option_c);
          $('#option_d').val(id.option_d);
          $('#option_e').val(id.option_e);
          // $('#jawaban').val(id.kunci);
          // $('#id_ujian').val(id.id_ujian);
          $('#id_soal').val(id.id);
          document.getElementsByName("jawaban").forEach(e => {
            if (e.value == id.kunci) e.checked = true
          })
        }
      });
    })


  })

  $(function() {
    // var id = $_GET['id'];
    FetchQueryString("pesanUbah");

    function FetchQueryString(regKey) {
      regKey = regKey.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");

      var regexValue = new RegExp("[\\?&]" + regKey + "=([^$#]*)");

      var result = regexValue.exec(window.location.href);

      if (result == null);

      else Swal.fire(
        'Data berhasil diubah',
        '',
        'success'

      ).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "http://localhost/Ujian/public/Guru/detailMapel";
        }
      });
    }
  })

  $(function() {

FetchQueryString("pesan!Ubah");

function FetchQueryString(regKey) {
  regKey = regKey.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");

  var regexValue = new RegExp("[\\?&]" + regKey + "=([^$#]*)");

  var result = regexValue.exec(window.location.href);

  if (result == null);

  else Swal.fire(
    'Anda tidak merubah apapun',
    'Data tidak ada perubahan',
    'info'
    
  ).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "http://localhost/Ujian/public/Guru/detailMapel";
    }
  });
}
})
</script>
</body>

</html>