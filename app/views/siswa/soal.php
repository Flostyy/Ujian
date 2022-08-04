<title><?= $data['judul'] ?></title>
    <!-- Content -->
    <section>
      <div class="container mt-4" style="min-height: 500px;">
        <div class="row">
          <div class="col-8">
            <div class="card text">
              <div class="card-header">
                <h3>Latihan Soal Fisika</h3>
                <h6>Bab 1 "Gaya Gravitasi"</h6>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <h5><span class="badge badge-success mb-1" style="font-size: 20px">1</span> Gaya gravitasi adalah..</h5>
                </h5>
                <div class="card-text">
                  <!-- Opsi Jawaban a -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                    <label class="form-check-label" for="flexRadioDefault1"> Jenis gaya yang berasal dari benda dengan muatan listrik </label>
                  </div>
                  <!-- Opsi Jawaban b -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                    <label class="form-check-label" for="flexRadioDefault1"> Sebuah gaya reaksi yang timbul saat sebuah benda diletakkan </label>
                  </div>
                  <!-- Opsi Jawaban c -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                    <label class="form-check-label" for="flexRadioDefault2"> Macam-macam gaya yang muncul karena ada sebuah sentuhan </label>
                  </div>
                  <!-- Opsi Jawaban d -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                    <label class="form-check-label" for="flexRadioDefault2"> Gaya yang timbul akibat dari kerja sebuah mesin </label>
                  </div>
                  <!-- Opsi Jawaban e -->
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                    <label class="form-check-label" for="flexRadioDefault2"> Jenis gaya yang dipengaruhi oleh gaya tarik sebuah benda ke pusat benda </label>
                  </div>
                </div>
              </div>
              <div class="card-footer text-muted">
                
                    <div class="row d-flex justify-content-between">
                      <div class="">
                        <a href="#" class="btn btn-outline-success"> <i class="fa-solid fa-angles-left"></i> </i>Previous</a>
                      </div>
                      <div class="">
                        <a href="#" class="btn btn-warning text-light">Ragu-Ragu</a>
                      </div>
                      <div class="">
                        <a href="#" class="btn btn-outline-success">Next <i class="fa-solid fa-angles-right"></i></a>
                      </div>
                    </div>
              </div>
            </div>

          </div>
          <div class="col-4">
            <div class="card text">
                <div class="card-header">
                  Jumlah Soal
                </div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text ">
                    <table class="">
                        
                        <tbody>
                          <tr class="">
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">1</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">2</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">3</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">4</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">5</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">6</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">7</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">8</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">9</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">10</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">11</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">12</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">13</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">14</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">15</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">16</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">17</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">18</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">19</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-lg btn-outline-success ml-1">20</button>
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