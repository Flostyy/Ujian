<title><?= $data['judul'] ?></title>
<!-- Content -->
<section>
  <div class="container mt-4" style="min-height: 500px;">
    <div class="row">
      <div class="col-sm-8 p-2">
        <div class="card text">
          <div class="card-header">

            <h3><?= $data['id'][0]['judul']; ?></h3>
            <h6><?= $data['id'][0]['deskripsi']; ?></h6>
          </div>
          <div class="card-body">
            <form action="<?= BASE ?>/Siswa/nilai" method="post">
              <input type="hidden" name="ujian" value="<?= $data['id'][0]['id'] ?>">
              <input type="hidden" name="id_guru" value="<?= $data['id'][0]['id_guru'] ?>">
              <input type="hidden" name="jmlSoal" value="<?= $jmlSoal ?>">
              
              <?php foreach ($data['id'] as $key => $tada) : ?>
                <div class="section <?= $key == 0 ? 'active' : '' ?>">
                  <div class="card-title">
                    <input type="hidden" name="id_soal" value="<?= $tada['id_soal'] ?>">
                    <h5> <span class="badge badge-success mb-1" id="r1" style="font-size: 20px"><?= $key + 1 ?></span><?= $tada['soal']; ?></h5>
                  </div>
                  <div class="card-text">
                    <!-- Opsi Jawaban a -->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jawaban<?= $tada['id_soal'] ?>" value="option_a" id="flexRadioDefaultA<?= $key + 1 ?>" required/>
                      <label class="form-check-label" for="flexRadioDefaultA<?= $key + 1 ?>"><?= $tada['option_a']; ?></label>
                    </div>
                    <!-- Opsi Jawaban b -->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jawaban<?= $tada['id_soal'] ?>" value="option_b" id="flexRadioDefaultB<?= $key + 1 ?>" required/>
                      <label class="form-check-label" for="flexRadioDefaultB<?= $key + 1 ?>"><?= $tada['option_b']; ?></label>
                    </div>
                    <!-- Opsi Jawaban c -->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jawaban<?= $tada['id_soal'] ?>" value="option_c" id="flexRadioDefaultC<?= $key + 1 ?>" required/>
                      <label class="form-check-label" for="flexRadioDefaultC<?= $key + 1 ?>"><?= $tada['option_c']; ?></label>
                    </div>
                    <!-- Opsi Jawaban d -->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jawaban<?= $tada['id_soal'] ?>" value="option_d" id="flexRadioDefaultD<?= $key + 1 ?>" required/>
                      <label class="form-check-label" for="flexRadioDefaultD<?= $key + 1 ?>"><?= $tada['option_d']; ?></label>
                    </div>
                    <!-- Opsi Jawaban e -->
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jawaban<?= $tada['id_soal'] ?>" value="option_e" id="flexRadioDefaultE<?= $key + 1 ?>" required/>
                      <label class="form-check-label" for="flexRadioDefaultE<?= $key + 1 ?>"><?= $tada['option_e']; ?></label>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
          </div>
          <div class="card-footer text-muted">
            <div class="row d-flex justify-content-between">
              <div class="">
                <button type="button" class="btn btn-outline-success previous disable" id="previous">Previous</button>
              </div>
              <div class="">
                <button type="button" class="btn btn-outline-success next" id="next">Next</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-2">
        <div class="card text">
          <div class="card-header">
            Jumlah Soal
          </div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <div style="margin-left: -10px;">
              <ul class="nomor" style="list-style-type: none;">

                <?php foreach ($data['id'] as $key => $tada) : ?>
                  <li class="d-inline">
                    <button type="button" class="no btn btn-md btn-outline-success ml-1 <?= $key == 0 ? 'active' : '' ?>" data-cont="r1"><?= $key + 1 ?></button>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

          </div>
          <div class="card-footer d-flex justify-content-end">
            <input type="submit" class="btn btn-success " value="Finish It!">
            <!-- <a href="#" id="finish" class="btn btn-success ">Finish It !</a> -->
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  </div>
</section>
<!-- End Content -->


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

  document.getElementById("finish").addEventListener("click", () => {
    Swal.fire({
      title: "Are you sure?",
      text: "You won't Submit this task?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, sure",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '<?= BASE; ?>/Siswa';
      }
    });
  });
</script>

<script>
  let currentSection = 0;

  let sections = document.querySelectorAll(".section");
  let sectionButtons = document.querySelectorAll(".nomor > li > button");
  let nextButton = document.querySelector(".next");
  let previousButton = document.querySelector(".previous");
  for (let i = 0; i < sections.length; i++) {
    sectionButtons[i].addEventListener("click", function() {
      sections[currentSection].classList.remove("active");
      sections[currentSection].classList.remove("active");
      sectionButtons[currentSection].classList.remove("active");
      sections[currentSection = i].classList.add("active");
      sectionButtons[currentSection].classList.add("active");
      if (i === 0) {
        if (previousButton.className.split(" ").indexOf("disable") < 0) {
          previousButton.classList.add("disable");
        }
      } else {
        if (previousButton.className.split(" ").indexOf("disable") >= 0) {
          previousButton.classList.remove("disable");
        }
      }
      if (i === sectionButtons.length - 1) {
        if (nextButton.className.split(" ").indexOf("disable") < 0) {
          nextButton.classList.add("disable");
        }
      } else {
        if (nextButton.className.split(" ").indexOf("disable") >= 0) {
          nextButton.classList.remove("disable");
        }
      }
    });
  }

  nextButton.addEventListener("click", function() {
    if (currentSection < sectionButtons.length - 1) {
      sectionButtons[currentSection + 1].click();
    }
  });

  previousButton.addEventListener("click", function() {
    if (currentSection > 0) {
      sectionButtons[currentSection - 1].click();
    }
  });
</script>