<title><?= $data['judul'] ?></title>
<!-- Content -->
<div class="container">
  <div class="headline">
    Selamat Datang <br class="d-none d-md-block">
    <?=$data['judulMapel']['nama']?>
        <br><br>

  </div>
  <div class="row">
    <div class="col-md">
      <div class="card text-center">
        <div class="card-header">
          <h4><?=$data['judulMapel']['mapel']?></h4>
        </div>
        <div class="card-body row">
          <?php foreach ($data['mapel'] as $mapel) : ?>


            <div class="col-md-3 mt-md-0">
              <a href="<?= BASE; ?>/Guru/detailMapel/<?= $mapel['id'] ?>">
                <div class="rectangle mx-auto px-1">
                  <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-1.png" alt="benefits-1" class="img-fluid">
                  <div class="headline-benefit">
                    <?= $mapel['judul'] ?>
                  </div>
                  <div class="subheadline-benefit mt-2">
                    <?= $mapel['deskripsi'] ?><br>
                    <!-- Jumlah soal -->
                    <?= $mapel['jumlahSoal'] ?> Soal<br class="d-none d-md-block">
                    
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>