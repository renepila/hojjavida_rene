<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hoja de Vida - VICTOR RENE PILATAXI ALBA</title>
  
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .profile-pic {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid #0d6efd;
    }
    .section-title {
      font-size: 1.3rem;
      font-weight: bold;
      color: #0d6efd;
      margin-bottom: 15px;
      border-bottom: 2px solid #0d6efd;
      display: inline-block;
      padding-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <!-- Foto y Nombre -->
    <div class="text-center mb-5">
      <!-- Cambia el link de la imagen por tu foto -->
      <img src="img/foto_rene.jpeg" alt="Foto Perfil" class="profile-pic mb-3">
      <h2 class="fw-bold">VICTOR RENE PILATAXI ALBA</h2>
      <p class="text-muted">Profesional en Tecnologías de la Información</p>
    </div>

    <div class="row">
      <!-- Datos Personales -->
      <div class="col-md-6 mb-4">
        <h3 class="section-title">Datos Personales</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Nombre:</strong> VICTOR RENE PILATAXI ALBA</li>
          <li class="list-group-item"><strong>Edad:</strong> 58 años</li>
          <li class="list-group-item"><strong>Email:</strong> renepila@yahoo.es</li>
          <li class="list-group-item"><strong>Teléfono:</strong> +593 999 458 787</li>
          <li class="list-group-item"><strong>Dirección:</strong> Ibarra, Ecuador</li>
        </ul>
      </div>

      <!-- Formación Académica -->
      <div class="col-md-6 mb-4">
        <h3 class="section-title">Formación Académica</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>2015:</strong> Maestría en Educación y TIC - PUCESI</li>
          <li class="list-group-item"><strong>2004:</strong> Licenciado CC. EE. Informática - UTN</li>
          <li class="list-group-item"><strong>1993:</strong> Tecnólogo en Computación - EPN</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
