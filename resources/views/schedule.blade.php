<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UpenxAll Schedule</title>
  <link href="/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body style="background-color: #588157;">
  <!-- Barra de navegación -->
  <nav class="navbar fixed-top" style="background-color: #3A5A40;">
    <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}"><img src="/images/Upen_x_All_Letras.png" alt="Logo" width="300" height="40" class="d-inline-block align-text-top" style="margin-top: -7px; margin-left: 5px;"></a>
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
              <a class="nav-link" href="/routes.html">Routes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/scan.html">Scan your route</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('index') }}">Log out</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <br><br><br>
  
    <!-- Contenido del calendario y la lista de eventos -->
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="calendar" class="calendar"></div>
        <br>
        <h3>Eventos en el Calendario</h3>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Lugar</th>
              <th>Descripción</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($records as $record)
            <tr>
              <td>{{ $record->fecha }}</td>
              <td>{{ $record->lugar }}</td>
              <td>{{ $record->descripcion }}</td>
              <td>
                <a href="{{ route('data-schedules.show', $record->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('data-schedules.edit', $record->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('data-schedules.destroy', $record->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <button type="button" class="btn btn-outline-danger" onclick="location.href='{{ route('scheduleLog') }}'">Agregar</button>
  </div>

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
            <a href="https://api.whatsapp.com/send?phone=5213112545936&text=Hola%2C%20quisiera%20más%20información." target="_blank">
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

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
</body>
<footer style="background-color: #2a3b33;"></footer>
</html>
