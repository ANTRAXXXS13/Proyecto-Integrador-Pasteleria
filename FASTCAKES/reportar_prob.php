<!-- Default form contact -->
<form class="rounded bg-light p-4 m-2" action="#!">

    <!-- Name -->
    <input type="text" id="reportar_prob_nombre"id="defaultContactFormName" class="form-control form-control-sm mb-3" placeholder="Nombre" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>

    <!-- Email -->
    <input type="text" id="reportar_prob_email" class="form-control form-control-sm mb-3" placeholder="Correo Electrónico" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
    
    <!-- Subject 
    <label>Reportar un problema</label>
    <select class="browser-default custom-select custom-select-sm mb-2">
        <option disabled="" value="">Elige una opción</option>
        <option value="1" selected="">Reportar pedido</option>
        <option value="2">Reportar repartidor</option>
        <option value="3">Reportar bug</option>
    </select> -->

    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control form-control-sm rounded-0" id="reportar_prob_msg" rows="3" placeholder="Mensaje"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
        <label class="form-check-label text-info text-left" for="defaultContactFormCopy" text-left=""><small>Deseo recibr actualizaciones a mi correo respecto a este asunto</small></label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit" id="reportar_prob_btn">Enviar</button>

</form>
<!-- Default form contact -->