<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log - UpenxAll</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<body style="background-color: #3A5A40; color: white;">
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
          <div class="rounded p-4" style="width: 600px; height: 75vh; background-color: #588157;">
            <div class="text-center mb-4">
            <img src="/images/Upen_x_All_Logo.png" class="rounded" alt="Logo" style="height: 260px; width: 240px;">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <form class="w-75 mt-4" onsubmit="validateLogin(event)">
                  <div class="mb-3 position-relative">
                    <label for="username" class="form-label">Usuario</label>
                    <div class="d-flex align-items-center">
                      <input type="text" class="form-control" id="username" name="username" required>
                      <button type="button" class="btn btn-info btn-circle ms-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Ejemplo: user@example.com">
                        <i class="bi bi-info-circle text-white"></i>
                      </button>
                    </div>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <div class="d-flex align-items-center">
                      <input type="password" class="form-control" id="password" name="password" required>
                      <button type="button" class="btn btn-info btn-circle ms-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Ejemplo: contraseña123">
                        <i class="bi bi-info-circle text-white"></i>
                      </button>
                    </div>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-primary" id="Iniciar" onclick="validateLogin(event)">Iniciar sesión</button>
                  </div>
                </form>   
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        //Login funcional - usuario y contraseña
        function validateLogin(event) {
          event.preventDefault(); // Evitar que el formulario se envíe automáticamente

          const usernameCorrecto = "Upen.157";
          const passwordCorrecta = "246810";

          const username = document.getElementById("username").value;
          const password = document.getElementById("password").value;

          if (username === usernameCorrecto && password === passwordCorrecta) {
            window.location.href = "{{ url('/inicio') }}";
;
          }
          else {
            alert("Usuario o contraseña incorrectos.")
          }
        }
    </script>
    <style>
        .btn-circle {
            width: 18px;
            height: 18px;
            padding: 0;
            border-radius: 50%;
            text-align: center;
            font-size: 16px;
            line-height: 18px;
            background-color: #588157;
            border: none;
            color: white;
        }
    </style>
</body>
</html>
