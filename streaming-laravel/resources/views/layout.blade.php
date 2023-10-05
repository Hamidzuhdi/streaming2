<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/css-utama.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/css-live.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>STREAMBLUE</title>
</head>
<body>
  <header>
    <h1>Streaming Sepak Bola</h1>
    <nav>
      <ul>
        <li><a href="/live">Watch Live</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Highlight</a></li>
        <li><a href="/regris">Regris</a></li>
      </ul>
    </nav>
  </header>

    <div class="narahubung">
        @yield('narahubung')
    </div>

  <footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-start my-auto">
                <ul class="list-inline mb-8">
                    <li class="list-inline-item"><a href="#!">About</a></li>
                    <li class="list-inline-item"><a href="#!">Contact</a></li>
                    <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                    <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 text-center text-lg-end my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-4 ml-10">
                        <a href="#!"><i class="bi-facebook fs-3" id="fb"></i></a>
                    </li>
                    <li class="list-inline-item me-4">
                        <a href="#!"><i class="bi-twitter fs-3"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!"><i class="bi-instagram fs-3"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>
</html>

