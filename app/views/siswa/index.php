<title><?= $data['judul'] ?></title>
<section class="content text-center">

  <div class="container">
    <div class="row content">
      <div class="col-12 px-md-0 my-auto">
        <div class="headline">
          Selamat Datang <br class="d-none d-md-block">
          dan Selamat Mengerjakan
        </div>
        <div class="row benefits" id="see">
          <div class="col-md-4 mt-md-0">
            <a href="<?= BASE ?>/Siswa/praSoal">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-1.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Matematika
                </div>
                <div class="subheadline-benefit mt-2">
                  Matematika ilmu yang menyenangkan <br class="d-none d-md-block">

                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-2.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Bahasa Indonesia
                </div>
                <div class="subheadline-benefit mt-2">
                  Bahasa Indonesia adalah bahasa pemersatu Indonesia <br class="d-none d-md-block">

                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-3.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Bahasa Inggris
                </div>
                <div class="subheadline-benefit mt-2">
                  We will setup the meeting with <br class="d-none d-md-block">
                  your dream companies
                </div>
              </div>
          </div>
          </a>
        </div>

        <div class="button-header">
          <a href="<?= BASE; ?>/Siswa/mapelSiswa">
            <button class="btn btn-started">Lainnya</button>
          </a>
          <!-- <button class="btn btn-story ml-3">Read Story</button> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="h-100 w-100 bg-white" style="box-sizing: border-box">

  <!-- Testimonial -->
  <div class="bg-testi">
    <div class="container">
      <section class="testimonial p-5">
        <div class="row justify-content-center">
          <div class="col-sm" data-aos-duration="1500" data-aos="zoom-in">
            <p>"Belajar dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya."</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm justify-content-center d-flex">
            <img data-aos-duration="1500" data-aos="fade-right" src="<?= BASE ?>/img/teacher-4.png" alt="Testimonial 1">
            <img data-aos-duration="1500" data-aos="zoom-out" src="<?= BASE ?>/img/teacher-5.png" alt="Testimonial 2" class="img-main">
            <img data-aos-duration="1500" data-aos="fade-left" src="<?= BASE ?>/img/teacher-6.png" alt="Testimonial 3">
          </div>
        </div>
        <div class="row justify-content-center info-text">
          <div class="col-sm text-center" data-aos-duration="1500" data-aos="fade-up">
            <h4 class="text-dark">SteUpanDesu</h4>
            <p style="font-size: 15px;">Sungkan sombong</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- akhir Testimonial -->
</section>


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