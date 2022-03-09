<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/s24.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">مدیریت وبسایت</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
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
    <div class="card">
  <div class="card-header">
    
  </div>
  <div class="card-body">
      <p>
        
      </p>  
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">افزودن پرسش جدید</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="question_text">
  </div>
  <div>
  <button type="submit" class="btn btn-primary" onclick= addd>+</button>
  <button type="submit" class="btn btn-primary" onclick= dddd>-</button>

</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">پاسخ شماره1</label>
    <input type="text" class="form-control"name="answer[]">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">پاسخ شماره2</label>
    <input type="password" class="form-control" name="answer[]">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
        <button type="submit" class="btn btn-primary">بعدی</button>
     </form>  
  </div>
</div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src = "JS\bootstrap.js"></script>
</html>
