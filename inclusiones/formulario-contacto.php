<div class="row">
	<div id="formulario-contacto" class="col-6 offset-3">
		<h2>¿Dudas o cotizaciones? Envianos un mensaje</h2>
		<hr>
		<form id="formulario_contacto">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre">
			</div>
			<div class="form-group">
				<label for="email">Correo electronico</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="mensaje">Tu mensage</label>
				<textarea class="form-control" id="mensaje" name="mensaje" rows="4"></textarea>
			</div>
			<input type="hidden" name="accion" id='accion' value="enviar_correo">
		</form>
		<button id="boton_envio" class="btn btn-primary btn-lg btn-block">Enviar</button>
	</div>
</div>
