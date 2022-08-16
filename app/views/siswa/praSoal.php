<title><?= $data['judul'] ?></title>
<!-- Content -->
<div class="container">
    <div class="headline">
        Detail <br class="d-none d-md-block">
        Mata Pelajaran
        <br><br>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="card text-center">
                <div class="card-header">
                    <h4><?= $data['ujian']['mapel']; ?></h4>
                </div>
                <div class="card-body row">
                    <div class="col-md-3 mt-md-0">
                        <a href="" data-toggle="modal" data-target="#praSoal">
                            <div class="rectangle mx-auto px-1">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-1.png" alt="benefits-1" class="img-fluid">
                                <div class="headline-benefit">
                                    <?= $data['ujian']['judul']; ?>
                                </div>
                                <div class="subheadline-benefit mt-2">
                                    <!-- Jumlah soal -->
                                    <?= $data['ujian']['jumlahSoal'] ?> Soal<br class="d-none d-md-block">
                                    <!-- Deskripsi -->
                                    <?= $data['ujian']['deskripsi']; ?><br>
                                    <?php
                                    if (!$data['nilai']) :
                                    ?>
                                        Nilai : -
                                    <?php else : ?>
                                        Nilai : <?= $data['nilai']['nilai'] ?>
                                    <?php endif; ?>
                                    <br>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="praSoal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">Detail Soal</h5>
                <!-- <p style="">Kamu hanya dapat mengubah nama 1 kali lagi. Pastikan nama sudah benar.</p> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title"><?= $data['ujian']['judul']; ?></h5>
                        <p class="card-text">

                            <?= $data['ujian']['deskripsi']; ?><br>
                            <?= $_SESSION['nama']; ?><br>
                            <?php
                            if (!$data['nilai']) :
                            ?>
                                Nilai : -
                            <?php else : ?>
                                Nilai : <?= $data['nilai']['nilai'] ?>
                            <?php endif; ?>
                            Jumlah Soal : <?= $data['ujian']['jumlahSoal']; ?> Soal <br>
                            <!-- Status : Belum mengerjakan <br>
                        Nilai : - -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <a href="<?= BASE ?>/Siswa/soal/<?= $data['ujian']['id'] ?>/<?= $data['ujian']['jumlahSoal']; ?>" class="btn btn-success">Kerjakan</a>

            </div>
        </div>
    </div>
</div>
<!-- End Modal -->