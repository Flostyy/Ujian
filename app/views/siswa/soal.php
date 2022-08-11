<title><?= $data['judul'] ?></title>
    <!-- Content -->
    <section>
      <div class="container mt-4" style="min-height: 500px;">
        <div class="row">
          <div class="col-sm-8 p-2">
            <div class="card text">
              <div class="card-header">
                <h3><?= $data['id']['judul']; ?></h3>
                <h6><?= $data['id']['deskripsi']; ?></h6>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <h5><span class="badge badge-success mb-1" style="font-size: 20px">1</span><?= $data['id']['soal']; ?></h5>
                </h5>
                <div class="card-text">
                  <!-- Opsi Jawaban a -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                    <label class="form-check-label" for="flexRadioDefault1"><?= $data['id']['option_a']; ?></label>
                  </div>
                  <!-- Opsi Jawaban b -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                    <label class="form-check-label" for="flexRadioDefault1"><?= $data['id']['option_b']; ?></label>
                  </div>
                  <!-- Opsi Jawaban c -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                    <label class="form-check-label" for="flexRadioDefault2"><?= $data['id']['option_c']; ?></label>
                  </div>
                  <!-- Opsi Jawaban d -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                    <label class="form-check-label" for="flexRadioDefault2"><?= $data['id']['option_d']; ?></label>
                  </div>
                  <!-- Opsi Jawaban e -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                    <label class="form-check-label" for="flexRadioDefault2"><?= $data['id']['option_e']; ?></label>
                  </div>
                </div>
              </div>
              <div class="card-footer text-muted">
                
                    <div class="row d-flex justify-content-between">
                      <div class="">
                        <a href="<?= BASE ?>/Siswa/soal/<?= $data['id']['id'] ?>/<?= $data['id']['id_soal'] ?>" class="btn btn-outline-success" id="previous"> <i class="fa-solid fa-angles-left"></i> </i>Previous</a>
                      </div>
                      <div class="">
                        <a href="#" class="btn btn-warning text-light">Ragu-Ragu</a>
                      </div>
                      <div class="">
                        <a href="<?= BASE ?>/Siswa/soal/<?= $data['id']['id'] ?>/<?= $data['id']['id_soal'] ?>" class="btn btn-outline-success" id="next">Next <i class="fa-solid fa-angles-right"></i></a>
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
                  <p class="card-text ">
                    <table class="">
                        
                        <tbody class="nomor">
                          <tr>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" class="active" data-cont="r1">1</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r2">2</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r3">3</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r4">4</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r5">5</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r6">6</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r7">7</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r8">8</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r9">9</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r10">10</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="11">11</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r12">12</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r13">13</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r14">14</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r15">15</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r16">16</button>
                             </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r17">17</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r18">18</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r19">19</button>
                            </td>
                            <td>
                                <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r20">20</button>
                            </td>
                          </tr>
                          
                          
                        </tbody>
                      </table>
                  </p>
                  
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="#" id="finish" class="btn btn-success ">Finish It !</a>
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
            window.location.href = '<?= BASE; ?>/Siswa/praSoal';
          }
        });
      });
    </script>

    <script>
let currentSection = 0;
let sectionButtons = document.querySelectorAll(".nomor > tr");
let nextButton = document.querySelector(".next");
let previousButton = document.querySelector(".previous");
for (let i = 0; i < sectionButtons.length; i++) {
    sectionButtons[i].addEventListener("click", function() {
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