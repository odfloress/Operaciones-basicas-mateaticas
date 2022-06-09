<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Formulario</h2>
  <form action="guardar.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nombre" required>
    </div>
    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Ingresa el correo" name="correo" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="accion" value="insertar" class="btn btn-primary">Crear</button>
    <button type="submit" name="accion" value="seleccionar" class="btn btn-primary">Seleccionar</button>
    <button type="submit" name="accion" value="modificar" class="btn btn-primary">modificar</button>
    <button type="submit" name="accion" value="eliminar" class="btn btn-primary">eliminar</button>
  </form>
</div>


</body>
</html>
