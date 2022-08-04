<title><?= $data['judul'] ?></title>
<section class="content text-center">
    <div class="container">
        <div class="row content">
        <div class="col-12 px-md-0 my-auto">
            <div class="headline">
                Kontak Kami <br class="d-none d-md-block">
            </div>
            <div class="row mt-5">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            Pesan
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tinggalkan pesan di bawah ini!</h5>
                            <div class="form-group mt-4">
                                <label for="nama">Nama</label>
                                <input type="email" class="form-control" id="nama" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Pesan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            
                        </div>
                        <div class="card-footer text-muted">
                            <a href="#" class="btn btn-primary">Kirim Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.9047092793357!2d114.34868731415935!3d-8.212337684673377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14ff70f397b65%3A0xd4855a1d5d5b2480!2sSMK%20Negeri%201%20Banyuwangi!5e0!3m2!1sen!2sid!4v1650359886424!5m2!1sen!2sid" width="600" height="510" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
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