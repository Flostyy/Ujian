<title><?= $data['judul'] ?></title>
<!-- choose -->
<section class="content text-center">

  <div class="container">
    <div class="row content">
      <div class="col-12 px-md-0 my-auto">
        <div class="headline">
          Selamat Datang <br class="d-none d-md-block">
          Silakan Menambahkan Soal Ujian
        </div>
        <div class="row benefits">
          <div class="col-md-4 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-1.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Matematika
                </div>
                <div class="subheadline-benefit mt-2">
                  Materi : Aljabar <br class="d-none d-md-block">
                  Jumlah Soal : 20 <br class="d-none d-md-block">
                  Kelas : XII RPL 1

                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-2.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Database
                </div>
                <div class="subheadline-benefit mt-2">
                  Materi : MySQL <br class="d-none d-md-block">
                  Jumlah Soal : 40 <br class="d-none d-md-block">
                  Kelas : XII RPL 2
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-3.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Pemodelan Perangkat Lunak
                </div>
                <div class="subheadline-benefit mt-2">
                  Materi : Usecase <br class="d-none d-md-block">
                  Jumlah Soal : 5 <br class="d-none d-md-block">
                  Kelas : XI RPL 1
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="button-header text-center">
          <a href="<?= BASE; ?>/Guru/mapelGuru">
            <button class="btn btn-started">Lihat lainnya</button>
          </a>
        </div>
      </div>
    </div>
</section>
</form>
</div>
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
      // $('.modal-footer button[type=submit]').html('Ubah Data');

      const id = $(this).data('id');

      $.ajax({
        url: 'http://localhost/Ujian/public/Guru/ubahData',
        data: {
          id: id
        },
        method: 'post',
        dataType: 'json',
        success: function(data) {
          $('#nama').val(data.nama);
          $('#email').val(data.email);
          $('#password').val(data.password);
          $('#level').val(data.level);
          $('#id').val(data.id);
        }
      });
    })

  })
</script>
</body>