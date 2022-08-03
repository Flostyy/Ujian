<title><?= $data['judul'] ?></title>
<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <nav class="navbar-1-1 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body" style="font-family: Poppins, sans-serif">
        <div class="container">
            <a class="navbar-brand" href="#">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.2165 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z" fill="#38d39f" />
                    <path d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z" fill="#38d39f" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-md-4 active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="<?= BASE; ?>">Daftar Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="<?= BASE; ?>/Guru/mapelGuru">Mata Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="<?= BASE; ?>/Guru/pengaturan">Pengaturan</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-get-started btn-get-started-blue text-white" id="logout" href="#">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</section>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById("tambah").addEventListener("click", () => {
        Swal.fire("Good job!", "You clicked the button!", "success");
    });
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
                window.location.href = "<?= BASE; ?>/Login/logout";
            }
        });
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