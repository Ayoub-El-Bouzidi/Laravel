<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="#">À propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="d-flex justify-content-around align-items-center mt-5">
        <div>
            <h1>Bienvenue chez <span class="text-info">Dar Ayoub</span></h1> <br>
        <p>Dar Ayoub est une agence immobilière reconnue pour son expertise et son <br>
           engagement à fournir des solutions immobilières adaptées aux besoins de ses <br>
           clients. Depuis notre création, nous avons aidé de nombreux acheteurs, vendeurs,<br>
           investisseurs et locataires à trouver la propriété idéale. Que vous recherchiez un <br>
           appartement moderne, une villa de luxe ou un terrain à construire, notre équipe est <br>
           là pour vous accompagner à chaque étape.
        </p>
        </div>
        <div id="image">
            <img src="{{asset('images/home.jpg')}}" alt="">
        </div>
      </div> <br><hr>
      {{-- footer --}}
      <!-- Footer -->
<footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->

        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
    <a class="text-reset fw-bold" href="">ayoub</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
