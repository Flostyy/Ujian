<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= BASE; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASE; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery.datetimepicker.min.css" class="">
	<!-- <link rel="stylesheet" type="text/css" href="<?= BASE; ?>/css/styles.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
	<link rel="stylesheet" href="<?= BASE; ?>/assets/plugins/sweetalert2/sweetalert2.min.css">
	<meta naxme="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  

    <!-- navbar -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
      <nav class="navbar-1-1 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body" style="font-family: Poppins, sans-serif">
        <div class="container">
        <a class="navbar-brand" href="#">
          <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.2165 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
              fill="#38d39f"
              />
              <path d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z" fill="#38d39f" />
            </svg>
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link px-md-4 active" aria-current="page" href="<?= BASE; ?>/Guru/index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4" href="<?= BASE; ?>/Guru/register">Daftar Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-md-4 active" href="<?= BASE; ?>/Guru/mapelGuru">Mata Pelajaran</a>
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
</header>