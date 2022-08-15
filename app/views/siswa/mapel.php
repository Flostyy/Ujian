<title><?= $data['judul'] ?></title>
<!-- mapel -->
<section class="content text-center">

  <div class="container">
    <div class="row content">
      <div class="col-12 px-md-0 my-auto">
        <div class="headline">
          Mata Pelajaran <br class="d-none d-md-block">
          <!-- dan Selamat Mengerjakan -->
        </div>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <!-- <div class="tagline">
             OUR FORMULA
           </div> -->
        <!-- <div class="headline mt-3">
             3-Steps to Work at <br class="d-none d-md-block">
             Your Dream Companies
           </div> -->
        <div class="row benefits" id="see">
          <?php foreach ($data['id'] as $guru) : ?>
            <div class="col-md-4 mb-5 mt-md-0">
              <a href="<?= BASE ?>/Siswa/praSoal/<?= $guru['id'] ?>">
                <div class="rectangle mx-auto px-1">
                  <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-2.png" alt="benefits-1" class="img-fluid">
                  <div class="headline-benefit">
                    <?= $guru['nama'] ?>
                  </div>
                  <div class="subheadline-benefit mt-2">
                    <?= $guru['mapel'] ?> <br class="d-none d-md-block">
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
          <!-- <div class="col-md-4 mt-md-0">
            <a href="#">
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
        <div class="row benefits">
          <div class="col-md-4 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-1.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Biologi
                </div>
                <div class="subheadline-benefit mt-2">
                  Cinta alam semesta, <br class="d-none d-md-block">
                  kajian tentang kehidupan dan organisme kehidupan
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="<?= BASE; ?>/Siswa/soalFisika">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-2.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Fisika
                </div>
                <div class="subheadline-benefit mt-2">
                  Unsur-unsur dasar pembentuk alam semesta dan memahami <br class="d-none d-md-block">
                  bagaimana alam semesta bekerja
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-3.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Kimia
                </div>
                <div class="subheadline-benefit mt-2">
                  Warna warni cairan, <br class="d-none d-md-block">
                  berbagai bentuk gelas
                </div>
              </div>
          </div>
          </a>
        </div>
        <div class="row benefits">
          <div class="col-md-4 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-1.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  IPS
                </div>
                <div class="subheadline-benefit mt-2">
                  Ilmu Pengetahuan Sosial. <br class="d-none d-md-block">
                  kegiatan dasar manusia
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-2.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Basis Data
                </div>
                <div class="subheadline-benefit mt-2">
                  Kumpulan data yang <br class="d-none d-md-block">
                  disimpan secara sistematis
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-3.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Pemrograman Berorientasi Objek
                </div>
                <div class="subheadline-benefit mt-2">
                  Model data <br class="d-none d-md-block">
                  berorientasi objek
                </div>
              </div>
          </div>
          </a>
        </div>
        <div class="row benefits">
          <div class="col-md-4 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-1.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Pemrograman Web Perangkat Bergerak
                </div>
                <div class="subheadline-benefit mt-2">
                  Mmebuat aplikasi <br class="d-none d-md-block">
                  Web dan Mobile
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-2.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Pemodelan Perangkat Lunak
                </div>
                <div class="subheadline-benefit mt-2">
                  Pemodelan Perangkat Lunak. <br class="d-none d-md-block">
                  Gambar menggambar
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mt-5 mt-md-0">
            <a href="#">
              <div class="rectangle mx-auto px-1">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-3.png" alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  Agama
                </div>
                <div class="subheadline-benefit mt-2">
                  Berbeda agama itu <br class="d-none d-md-block">
                  menyenangkan
                </div>
              </div>
          </div>
          </a> -->
        </div>


        <div class="button-header">
          <!-- <button class="btn btn-started">See More</button> -->
          <!-- <button class="btn btn-story ml-3">Read Story</button> -->
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
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