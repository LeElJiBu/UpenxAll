<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UpenxAll</title>
  <link href="/css/style.css" rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body style="background-color: #588157;">
  <!-- Barra de navegación-->
  <nav class="navbar fixed-top" style="background-color: #3A5A40;">
    <a class="navbar-brand d-flex align-items-center" href="{ route('inicio') }}">
        <img src="/images/Upen_x_All_Letras.png" alt="Logo" width="300" height="40" class="d-inline-block align-text-top" style="margin-top: -7px; margin-left: 5px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #A3B18A;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UpenxAll</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('inicio')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('schedule')}}">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/routes.html">Routes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/scan.html">Scan your route</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index')}}">Log out</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Carousel con imágenes -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2500">
        <img src="/images/Entrada.jpg" class="d-block w-100" alt="Primera imagen">
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="/images/Entrada_Salones.jpg" class="d-block w-100" alt="Segunda imagen">
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="/images/Cancha.jpg" class="d-block w-100" alt="Tercera imagen">
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="/images/Camino_Biblioteca.jpg" class="d-block w-100" alt="Cuarta imagen">
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="/images/Entrada_Biblioteca.jpg" class="d-block w-100" alt="Quinta imagen">
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="/images/Biblioteca_HUB.jpg" class="d-block w-100" alt="Sexta imagen">
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="/images/Biblioteca.jpg" class="d-block w-100" alt="Septima imagen">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Mapa -->
  <div class="map-container">
  <div id="map" style="height: 400px; width: 100%;"></div>
</div>

  </div>

  <!-- Efecto de blur -->
  <div id="overlay"></div>

  <!-- Footer -->
  <footer class="bg-dark text-white mt-5">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-6">
          <p style="color: #d4af37; font-size: 50px;">Nosotros</p>
          <img src="/images/logoupen.png" alt="Logo UPEN" style="width: 250px;">
        </div>
        <div class="col-md-6">
          <h5 class="display-5">Contacto</h5>
          <p class="lead">Dirección: Carretera Tepic-Aguamilpa km 6+900 S/N Ejido "La Cantera" (a un lado del nuevo ISSSTE)</p>
          <p class="lead">Teléfono: +52 311-124-5454</p>
          <p class="lead">Email: Universidad.Politecnica@upnay.edu.mx</p>
          <div>
            <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp">
          </a>
          <a href="https://www.facebook.com/LaPolitenicaNayarit" target="_blank">
            <img src="https://img.icons8.com/color/48/000000/facebook.png" alt="Facebook">
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col text-center">
        <p class="mb-0">&copy; 2024 Universidad Politécnica del Estado de Nayarit. Todos los derechos reservados.</p>
      </div>
    </div>
  </div>
</footer>

<!--AIzaSyCNz5DsKsITBGPhZidXsIA3OoyLyf4QgdM -->

<script>
  function loadGoogleMaps() {
    const script = document.createElement("script");
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCNz5DsKsITBGPhZidXsIA3OoyLyf4QgdM&callback=initMap&loading=async";
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
  }

  window.onload = loadGoogleMaps;
</script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>
