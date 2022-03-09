<?php
  include "database.php";
$porsesh= $db->query("SELECT * FROM question2 WHERE id=1");
$porsesh = $porsesh->fetch_assoc();
$pasokh_ha = $db-> query("SELECT * FROM answers WHERE quistion_id = 1");


?>
  
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">        
        <link href="CSS\bootstrap.rtl.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

        <title>آزمونک</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark "id="iid">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                </a>
                <a class="navbar-brand">آزمونک</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">صفحه اصلی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> آزمون های غیر</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>                 

        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card bg-dark text-light">
                        <h5 class="card-header">سوال
                        <?php echo $porsesh["id"]; ?>
                        از
                        </h5>
                        
                        <div class="card-body">
                            <p class="card-text">
                            <?php echo $porsesh["First"]; ?>
                            </p>
                            <form action="process.php" method="post">
                                <input type="hidden" name="question" value="">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    خواجه نظام الملک
                                    </label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    خواجه نصیرالدین طوس
                                    </label>
                                </div>
                                <button type="sumbit" class="btn btn-danger">بعدی</button>
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="bootstrap\bootstrap.js"></script>
    </body>
</html>