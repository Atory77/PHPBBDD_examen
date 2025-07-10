<?php
require_once('../plantillas/cabecera.php');
?>

<article>
    <h2>Dar de alta un vehiculo</h2>

    <form action="insertar.php" method="POST">
        <div  class="control mb-3">
            <label for="matricula" class="col-sm-2 col-form-label">Matricula:</label>
            <input type="text" name="matricula" id="matricula" required class="form-control">
        </div>

         <div  class="control mb-3">
            <label for="marca" class="col-sm-2 col-form-label">Marca:</label>
            <input type="text" name="marca" id="marca" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="modelo" class="col-sm-2 col-form-label">Modelo:</label>
            <input type="text" name="modelo" id="modelo" required class="form-control">
        </div>

        <div  class="control mb-3">
            <label for="tipo"class="col-sm-2 col-form-label">Tipo:</label>
            <select name="tipo" id="tipo" class="form-select form-select-lg">
                <option value="turismo">Turismo</option>
                <option value="autobus">Autobus</option>
                <option value="camion">Camion</option>
                <option value="furgon">Furgón</option>
            </select>
        </div>

         <div  class="control mb-3">
            <label for="color" class="col-sm-2 col-form-label">Color:</label>
            <input type="text" name="color" id="color" required class="form-control">
        </div>

         <div  class="control mb-3">
            <label for="fecha" class="col-sm-2 col-form-label">Matriculación:</label>
            <input type="date" name="fecha" id="fecha" required class="form-control">
        </div>

         <div  class="control mb-3">
            <label for="cilindrada" class="col-sm-2 col-form-label">Cilindrada:</label>
            <input type="text" name="cilindrada" id="cilindrada" required class="form-control">
        </div>

        <div  class="control mb-3">
        <label for="itv_si">Sí</label>
        <input type="radio" id="itv_si" name="itv_pasada" checked value="Si">
        <label for="itv_no">No</label>
        <input type="radio" id="itv_no" name="itv_pasada" value="No">
        </div>
      

        <div  class="control mb-3">
            <input type="submit" value="Añadir vehiculo"   class="btn btn-primary">
        </div>

    </form>
</article>

<?php
require_once('../plantillas/pie.php');
?>
