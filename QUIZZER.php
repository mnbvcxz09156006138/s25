<?php
  include "database.php";
  $porsesh_ha = $db->query("SELECT * FROM question2");
  $total=$porsesh_ha->num_rows;
?>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/s24.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">ازمون های حرفه ای</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">خانه</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ازمون های برنام نویسی
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="row mt-5">
    <div class="card bg-dark text-light">
  <div class="card-header">
    آزمونک
  </div>
  <div class="card-body bg-dark text-light">
    <h5 class="card-title">به سایت آزمونک خوش آمدید</h5>
    <p class="card-text">تعداد این سوالات
      <?php echo  $total ;?>
    تا می باشد </p>
    <p class="card-text"> زمان آزمون:<?php echo  $total/2 ;?> دقیقه </p>
    <a href="QUIZZER2.php?X=1" class="btn btn-primary">شروع آزمون</a>
    </div>
  </div>
      </div>
  </div>
  </body>
</html>