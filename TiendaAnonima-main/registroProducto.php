<form action="RegistroProducto.php" method="post">
  <div class="form-group">
    <label for="idProducto">ID Producto:</label>
    <input type="number" class="form-control" id="idProducto" name="idProducto" required>
  </div>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="cantidad">Cantidad:</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad" required>
  </div>
  <div class="form-group">
    <label for="precioCompra">Precio de compra:</label>
    <input type="number" class="form-control" id="precioCompra" name="precioCompra" required>
  </div>
  <div class="form-group">
    <label for="precioVenta">Precio de venta:</label>
    <input type="number" class="form-control" id="precioVenta" name="precioVenta" required>
  </div>
  <div class="form-group">
    <label for="marca">Marca:</label>
    <select class="form-control" id="marca" name="marca" required>
      <?php
      $marcaDAO = new MarcaDAO();
      $marcas = $marcaDAO->consultarTodos();
      foreach ($marcas as $marca) {
        echo '<option value="' . $marca->getIdMarca() . '">' . $marca->getNombre() . '</option>';
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="categoria">Categoría:</label>
    <select class="form-control" id="categoria" name="categoria" required>
      <!-- Aquí debes cargar las categorías existentes en la base de datos -->
    </select>
  </div>
  <div class="form-group">
    <label for="administrador">Administrador:</label>
    <select class="form-control" id="administrador" name="administrador" required>
      <?php
      $administradorDAO = new AdministradorDAO();
      $administradores = $administradorDAO->consultarTodos();
      foreach ($administradores as $administrador) {
        echo '<option value="' . $administrador->getIdPersona() . '">' . $administrador->getNombre() . '</option>';
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Registrar producto</button>
</form>
