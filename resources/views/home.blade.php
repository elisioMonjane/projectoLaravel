<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projecto</title>
<link rel="stylesheet" href="{{('assets/css/style.css') }}"/>
<link rel="stylesheet" href="bootstrap.min.css">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Contact</a>
                  </li>


                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        <!-- Navbar -->

        <!-- Background image -->

            <div class="lifty">
                <h2 style="font-family:rgb(15, 17, 15)">lifty</h2>
            </div>
        <div class="p-5 text-center bg-image"

          style="
            background-image: url('./assets/img/img1.png');
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">

              <div class="text-white">

                <h1 style="color:yellow">Heading</h1>
                <h4 style="color:yellow">Subheading</h4>

                <div class="row">

                    <div class="col">
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">

                    </div>
                    <button type="button" class="btn btn-outline-warning">Login<i class="fas fa-sign-in-alt"></i></button>


                  </div>
                <a class="btn btn-outline-warning btn-lg" href="#!" role="button"
                >see More</a
                >
              </div>
            </div>
          </div>
           <div class="lifty">
            <h3 style="color:yellow;float: left;">evite aglomeraçao<br> na paragem<br>&<br>poupe seus<br> 20% do tempo</h3>
        </div>
        </div>


        </div>

        <!-- Background image -->
      </header>

      <div class="content-center">
        <div class="col">

          <h1 style="color: rgb(44, 5, 82)">Heading</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                                justo eget condimentum consectetur,<br>
             dui tortor fringilla justo, in commodo ex nunc et odio.<br>
          </p>
        </div>
        </div>


       <!--menu-->
        <ul class="menu">
            <li><img src="/assets/img/imagem1.jpg " class="rounded-top" alt="..." width="145" height="145"></li>
            <li><img src="/assets/img/imagem2.jpg" class="rounded-top" alt="..." width="145" height="145"></li>
            <li><img src="/assets/img/imagem3.jpg" class="rounded-top" alt="..." width="145" height="145"></li>
        </ul>

    <!--menu-->

    <!--Grid column-->
    <h3 style="text-align:center">Heading & Heading</h3>
    <p style="font-size: 15x">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>


    <!-- Card -->
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-car"></i></h5>
            <p class="card-text"><strong>DA CIDADE</strong> <br> viagem rápida e segura & 100% confortavel!</p>
            <a href="#" class="btn btn-primary">vamos?</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-car"></i></h5>
            <p class="card-text"><strong>METROLPOLITANA DE MAPUTO</strong> <br>viagem rápida e segura & 100% confortavel!</p>
            <a href="#" class="btn btn-primary">vamos?</a>
          </div>
        </div>
      </div>
    </div>
<!-- Card -->
<section class="">
  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</section>
</body>
<script src="https://kit.fontawesome.com/1a05dae73e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script></html>
