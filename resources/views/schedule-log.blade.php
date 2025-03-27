<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UpenxAll</title>
  <link href="/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      max-width: 600px;
      margin-top: 100px;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body style="background-color: #588157;">
  <!-- Barra de navegación -->
  <nav class="navbar fixed-top" style="background-color: #3A5A40;">
    <a class="navbar-brand" href="{{ route('inicio')}}">
      <img src="/images/Upen_x_All_Letras.png" alt="Logo" width="300" height="40" class="d-inline-block align-text-top" style="margin-top: -7px; margin-left: 5px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- El offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #A3B18A;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UpenxAll</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('schedule') }}">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Routes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Scan your route</a>
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
  <br>
  
  <!-- Formulario de registro de eventos -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Registro de Eventos</h2>
    <form action="{{ route('scheduleLog.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="eventDate" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="eventDate" name="fecha" required>
  </div>
  <div class="mb-3">
    <label for="eventPlace" class="form-label">Lugar del Evento</label>
    <input type="text" class="form-control" id="eventPlace" name="lugar" required>
  </div>
  <div class="mb-3">
    <label for="eventDescription" class="form-label">Descripción del Evento</label>
    <textarea class="form-control" id="eventDescription" name="descripcion" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcR95teEty9DRaTfm-3sM3ycJAIzO0fy4&callback=initMap" async defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>
