<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .container-sm{
            width:10cm;
            
        }
        .ssection{
            background-color:rgba(8, 8, 226, 0.474);
            height:7.5cm;
        }
      
    </style>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid"  style="background-color:blue; height:2cm; margin-top:-0.26cm">
    <a class="navbar-brand" href="#" style="margin-left:19cm;">TODO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Made By Joshua</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<!-- center form for task registration -->

<div class="container-sm" style="margin-top:3cm;">
    <h3>Register What You Gonna do :</h3>
    <form action="/create-task" method="post">
    @csrf
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="activity" placeholder="name@example.com">
  <label for="floatingInput">Activity </label>
</div>
<div class="form-floating">
  <input type="time"  class="form-control" id="floatingPassword" name="time" placeholder="Password">
  <label for="floatingPassword">time</label>
</div>
<button type="submit" class="btn btn-outline-primary" style="margin-top:0.3cm;">Register</button>
    </form>
</div>
<div class="ssection">
<div class="container-fluid" style="margin-left:30cm">
<h3  style="margin-top:-4.3cm; margin-left:-4cm;">What I Have Done</h3>
<!-- style="width:13cm;  margin-top:-4cm;" -->
  <table class="table" style="margin-left:-7cm; width:13cm;">
  <thead class="table-dark">
    <th>No</th>
    <th>Activity</th>
    <th>done</th>
  </thead>
  <tbody>
    <td>1</td>
    <td>work</td>
    <td><button type="button" class="btn btn-success"><ion-icon name="checkmark-done-outline"></ion-icon></button></td>
  </tbody>
</table>
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</body>
</html>