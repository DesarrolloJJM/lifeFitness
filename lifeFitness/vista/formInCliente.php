<?php
    include "head.php"
?>
<div class="container">
    <form>
      <div class="form-row">
        <div class="col-xs-6 col-sm-4">
          <label>DPI</label>
          <input type="text" class="form-control" placeholder="Ingrese DPI" required>
        </div>
        <div class="col-xs-6 col-sm-4">
          <label>Nombres</label>
          <input type="text" class="form-control" placeholder="Ingrese nombres" required>
        </div>
        <div class="col-xs-6 col-sm-4">
          <label>Apellidos</label>
          <input type="text" class="form-control" placeholder="Ingrese apellidos" required>
        </div>
        <div class="col-xs-6 col-sm-4">
          <label>Direccion</label>
          <input type="text" class="form-control" placeholder="Ingrese direccion" required>
        </div>
        <div class="col-xs-6 col-sm-4">
          <label>Sexo</label>
          <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="radio" name="SEXO" class="radio-inline"> <label>Masculino</label>
                    <input type="radio" name="SEXO" class="radio-inline"> <label>Femenino</label>
                    <input type="radio" name="SEXO" class="radio-inline"> <label>Prefiero no reponder</label>
                </div>
              </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4">
          <label>Telefono de casa</label>
          <input type="tel" class="form-control" placeholder="Ingrese telefono de casa">
        </div>
        <div class="col-xs-6 col-sm-4">
          <label>Telefono celular</label>
          <input type="tel" class="form-control" placeholder="Ingrese telefono celular">
        </div>
        <div class="col-xs-6 col-sm-4">
          <label>Correo electronico</label>
          <input type="email" class="form-control" placeholder="Ingrese su email">
        </div>
        <div class="col-xs-6 col-sm-4">
          <label>Fotografia</label>
            <video id="video" width="375" height="240"></video>
            <button id="boton">Tomar foto</button>
            <p id="estado"></p>
            <canvas id="canvas" style="display: none;"></canvas>
            <script src="camara.js" type="text/javascript"></script>
        </div>
        <div class="col-xs-6 col-sm-4">
            <br>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </div>
    </form>
</div>
<?php
    include "footer.php"
?>