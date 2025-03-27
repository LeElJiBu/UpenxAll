<!doctype html>
<html lang="es">
<head>
  <!-- Aquí va tu head con los estilos -->
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Editar Evento</h2>
    <form action="{{ route('data-schedules.update', $dataSchedule) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="eventDate" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="eventDate" name="fecha" value="{{ $dataSchedule->fecha }}" required>
      </div>
      <div class="mb-3">
        <label for="eventPlace" class="form-label">Lugar del Evento</label>
        <input type="text" class="form-control" id="eventPlace" name="lugar" value="{{ $dataSchedule->lugar }}" required>
      </div>
      <div class="mb-3">
        <label for="eventDescription" class="form-label">Descripción del Evento</label>
        <textarea class="form-control" id="eventDescription" name="descripcion" rows="3" required>{{ $dataSchedule->descripcion }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>
</body>
</html>
