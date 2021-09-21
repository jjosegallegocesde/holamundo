<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalandia</title>
    <link rel="stylesheet" href="<?=base_url('public/estilos.css');?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@200&display=swap" rel="stylesheet">
</head>
<body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fondo">

        <div class="container-fluid">
          <a class="navbar-brand fuente" href="#">
            Animalandia
            <i class="fas fa-paw"></i>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Registrar Producto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= base_url('public/img/imagen1.jpg')?>" class="d-block w-100" alt="Imagen1">
            </div>

            <div class="carousel-item">
              <img src="<?= base_url('public/img/imagen2.jpg')?>" class="d-block w-100" alt="Imagen2">
            </div>

            <div class="carousel-item">
              <img src="<?= base_url('public/img/imagen3.jpg')?>" class="d-block w-100" alt="Imagen3">
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
          </div>
        </div>
      </div>
    </section>

    <main>

      <div class="container-fluid">

        <div class="row d-flex justify-content-center mt-3">
          <div class="col-12 col-md-6">
            <h3 class="text-center fuente2 fw-bold">Tienda online para mascotas y animales</h3>
            <p class="text-center fuente2">
              Encuentra comida para mascotas y accesorios al mejor precio en Miscota. Más de 250 marcas y 40.000 productos para mascotas a tu disposición.
            </p>
          </div>
        </div>

        <div class="row d-flex justify-content-center mt-5 mx-5">

          <div class="col-1">
            <img src="<?= base_url('public/img/dog-icon.png')?>" alt="icono1" class="img-fluid">
            <p class="text-center">perros</p>
          </div>
          <div class="col-1">
            <img src="<?= base_url('public/img/cat-icon.png')?>" alt="icono1" class="img-fluid">
            <p class="text-center">gatos</p>
          </div>
          <div class="col-1">
            <img src="<?= base_url('public/img/rodent-icon.png')?>" alt="icono1" class="img-fluid">
            <p class="text-center">roedores</p>
          </div>
          <div class="col-1">
            <img src="<?= base_url('public/img/bird-icon.png')?>" alt="icono1" class="img-fluid">
            <p class="text-center">pájaros</p>
          </div>
          <div class="col-1">
            <img src="<?= base_url('public/img/fish-icon.png')?>" alt="icono1" class="img-fluid">
            <p class="text-center">peces</p>
          </div>
          <div class="col-1">
            <img src="<?= base_url('public/img/reptile-icon.png')?>" alt="icono1" class="img-fluid">
            <p class="text-center">reptiles</p>
          </div>
          <div class="col-1">
            <img src="<?= base_url('public/img/horse-icon.png')?>" alt="icono1" class="img-fluid">
            <p class="text-center">caballos</p>
          </div>

        </div>

      </div>

    </main>

    <footer class="fondoFooter text-muted p-5 mt-5">

      <div class="container-fluid">

      <div class="row d-flex justify-content-around">
        <div class="col-12 col-md-3">
          <h5 class="fuente2 fw-bold text-center">Sobre nosotros</h5>
          <p class="text-center fuente2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque molestiae itaque soluta perspiciatis recusandae nesciunt, dignissimos maiores ab iste impedit? Dignissimos magnam, atque quos recusandae quas ipsam minima aperiam iusto.</p>

        </div>
        <div class="col-12 col-md-3">
          <h5 class="fuente2 fw-bold text-center">Enlaces de interés</h5>
           <p class="text-center fuente2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque molestiae itaque soluta perspiciatis recusandae nesciunt, dignissimos maiores ab iste impedit? Dignissimos magnam, atque quos recusandae quas ipsam minima aperiam iusto.</p>

        </div>
        <div class="col-12 col-md-3">
          <h5 class="fuente2 fw-bold text-center">Contacto</h5>
           <p class="text-center fuente2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque molestiae itaque soluta perspiciatis recusandae nesciunt, dignissimos maiores ab iste impedit? Dignissimos magnam, atque quos recusandae quas ipsam minima aperiam iusto.</p>

        </div>
        <div class="col-12 col-md-3">
          <h5 class="fuente2 fw-bold text-center">Información legal</h5>
           <p class="text-center fuente2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque molestiae itaque soluta perspiciatis recusandae nesciunt, dignissimos maiores ab iste impedit? Dignissimos magnam, atque quos recusandae quas ipsam minima aperiam iusto.</p>

        </div>
      </div>
        
      </div>

    </footer>


    
   
    
    
    
    
    



    
    


    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>