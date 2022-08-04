<title><?= $data['judul'] ?></title>

<div class="container">
    <div class="headline mb-3">
        Biodata Diri <br>
    </div>
    <div class="card ">

        <div class="card-body">
            <!-- <h5 class="card-title text-center">Ubah Biodata diri</h5> -->
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card" style="width: 20rem;">
                        <div class="m-4 mx-auto">
                            <img src="<?= BASE ?>/img/man.png" alt="" width="200px">
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-block btn-outline-success">Success</button>
                            <p class="mt-3" style="font-size: 14px;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
                        </div>
                    </div>

                </div>
                <div class="col-7">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5 class="card-title">Ubah Biodata diri</h5>
                        </li>
                        <li class="list-group-item col-sm">
                            <div class="row">
                                <div class="col-sm-4">Nama</div>
                                <div class="col">StevenDesu <a href="" data-toggle="modal" data-target="#ubahSoal">ubah</a></div>
                            </div>
                        </li>
                        <li class="list-group-item col-sm">
                            <div class="row">
                                <div class="col-sm-4">Mata Pelajaran</div>
                                <div class="col">Basis Data <a href="" data-toggle="modal" data-target="#ubahSoal">ubah</a></div>
                            </div>
                        </li>
                        <li class="list-group-item col-sm">
                            <div class="row">
                                <div class="col-sm-4">Email</div>
                                <div class="col">StevenDesu@Ancok.cok <a href="" data-toggle="modal" data-target="#ubahSoal">ubah</a></div>
                            </div>
                        </li>
                        <li class="list-group-item col-sm">
                            <div class="row">
                                <div class="col-sm-4">Password</div>
                                <div class="col">StevenDesu123 <a href="" data-toggle="modal" data-target="#ubahSoal">ubah</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal ubah-->
<div class="modal fade" id="ubahSoal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">Ubah Nama</h5>
                <!-- <p style="">Kamu hanya dapat mengubah nama 1 kali lagi. Pastikan nama sudah benar.</p> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-grup">
                        <input type="text" class="form-control" placeholder="Nama" />
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById("tambah").addEventListener("click", () => {
        Swal.fire("Good job!", "You clicked the button!", "success");
    });

    document.getElementById("hapus").addEventListener("click", () => {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
            }
        });
    });
</script>
</body>

</html>