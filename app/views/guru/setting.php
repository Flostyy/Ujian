<title><?= $data['judul'] ?></title>

<div class="container">
    <div class="headline mb-3">
        Biodata Diri <br><br>
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
                            <button type="button" class="btn btn-block btn-outline-success">Ubah Foto Profil</button>
                            <p class="mt-3" style="font-size: 14px;">Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
                        </div>
                    </div>

                </div>
                <div class="col-7">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title mt-2">Ubah Biodata Diri</h5>
                            <a href="<?= BASE; ?>/Guru/ubahData/<?= $data['id'][0]['id'] ?>" class="btn btn-outline-success tampilModalUbah" data-toggle="modal" data-target="#ubahSoal" data-id="<?= $data['id'][0]['id'] ?>" onclick="ubahData('<?= $data['id'][0]['id']; ?>')">Ubah Data</a>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">

                                <?php
                                // $set=$data['id'] ;
                                foreach ($data['id'] as $set) : ?>
                                    <li class="list-group-item col-sm">
                                        <div class="row">
                                            <div class="col-sm-4">Nama</div>
                                            <div class="col"><?= $set['nama'] ?>

                                            </div>
                                    </li>
                                    <li class="list-group-item col-sm">
                                        <div class="row">
                                            <div class="col-sm-4">Mata Pelajaran</div>
                                            <div class="col"><?= $set['mapel'] ?>
                                            </div>
                                    </li>
                                    <li class="list-group-item col-sm">
                                        <div class="row">
                                            <div class="col-sm-4">Email</div>
                                            <div class="col"><?= $set['email'] ?>
                                            </div>
                                    </li>
                                    <li class="list-group-item col-sm">
                                        <div class="row">
                                            <div class="col-sm-4">Password</div>
                                            <div class="col"><?= $set['password'] ?>
                                            </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    </div>

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
                <h5 class="modal-title " id="exampleModalLabel">Ubah Biodata Diri</h5>
                <!-- <p style="">Kamu hanya dapat mengubah nama 1 kali lagi. Pastikan nama sudah benar.</p> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE; ?>/Guru/ubah" method="POST">
                    <div class="card-body">
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="level" id="level" value="murid" hidden>
                        <!-- <input type="text" name="mapel" id="mapel" value="murid" hidden> -->
                        <div class="form-grup mt-2">
                            <label for="">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" />
                        </div>
                        <div class="form-grup mt-2">
                            <label for="">Mata Pelajaran</label>
                            <input type="text" id="mapel" name="mapel" class="form-control" />
                        </div>
                        <div class="form-grup mt-2">
                            <label for="">Email</label>
                            <input type="email" id="email" name="email" class="form-control" />
                        </div>
                        <div class="form-grup mt-2">
                            <label for="">Password</label>
                            <input type="password" id="password" name="password" class="form-control" />
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="passEdit" onclick="passUbah()">
                                <label class="form-check-label" for="passEdit">
                                    <p>Show Password</p>
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" id="ubah" value="Ubah" />
            </div>
            </form>
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
                    $('#mapel').val(data.mapel);
                    $('#id').val(data.id);
                }
            });
        })

    })

    // Show Pass
    function passUbah() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>

</html>