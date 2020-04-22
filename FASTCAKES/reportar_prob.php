<!-- Default form contact -->
<form class="rounded bg-light p-4 m-2" method="POST"  action="conexion/comen_rep.php">

    <!-- Name -->
    <input type="text" id="nombre" name="nombre" class="form-control form-control-sm mb-3" placeholder="Nombre" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>

    <!-- Cel -->
    <input type="text" id="correo" name="correo" class="form-control form-control-sm mb-3" placeholder="Correo" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
    
    <!-- Subject -->
    <label>Reportar un problema</label>
    <select class="browser-default custom-select custom-select-sm mb-2">
        <option disabled="" value="">Elige una opción</option>
        <option value="1" selected="">Reportar pedido</option>
        <option value="2">Reportar repartidor</option>
        <option value="3">Reportar bug</option>
    </select>

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control form-control-sm rounded-0" name="comentario" id="comentario" rows="3" placeholder="Mensaje"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
        <label class="form-check-label text-info text-left" for="defaultContactFormCopy" text-left=""><small>Deseo que se me contacte al correo, para recibir actualizaciones de este problema<!--
        small--></small></label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" id="enviar" name="enviar" type="submit">Enviar</button>

</form>
<!-- Default form contact -->