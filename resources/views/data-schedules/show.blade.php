<!doctype html>
<html lang="es">
<head>
  <!-- Aquí va tu head con los estilos -->
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Detalles del Evento</h2>
    <div class="mb-3">
      <strong>Fecha:</strong> {{ $dataSchedule->fecha }}
    </div>
    <div class="mb-3">
      <strong>Lugar:</strong> {{ $dataSchedule->lugar }}
    </div>
    <div class="mb-3">
      <strong>Descripción:</strong> {{ $dataSchedule->descripcion }}
    </div>
    <a href="{{ route('data-schedules.edit', $dataSchedule) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('schedule') }}" class="btn btn-secondary">Regresar</a>
  </div>
</body>
</html>
