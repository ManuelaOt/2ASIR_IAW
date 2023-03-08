<!DOCTYPE html>
<html lang="es">
<head>
  <title>Alta Clientes</title>
  <meta charset="utf-8">
    
</head>
	<body>
		<div class="container">

		<h1>Registro</h1>
			<form name="usuario" action="procesa_form.php" method="POST">
			<fieldset>
			<legend>Introduzca sus datos</legend></br>	
				<div>
					<label for="dni">DNI:</label><br>
						<input type="tel" name="DNI" size="9" maxlength="12" required placeholder="48759952X"
							pattern="[0-9]{8}[A-Z]{1}" id="dni" /> 
				</div><BR>
  			 
				<div>
            		<label for="nombre"> Nombre:</label><br>
                            <input type="text" name="nombre" id="nombre" size="30" maxlength="35" required />
				</div><BR>

				<div>
					<label for="apellido"> Apellido:</label><br>
								<input type="text" name="apellido" id="apellido" size="30" maxlength="35" required />
					</div><BR>
				
				<div>
					<label>Tipo</label></br>
  								<input type="radio"  name="Tipo" value="Mayorista">Mayorista</input></br>
  								<input type="radio"  name="Tipo" value="Minorista">Minorista</input></br>
				</div><br>
				
				<div>
            		<label for="email">email</label><BR>
					<input type="email" name="email" id="email" size="30" maxlength="35" required /> 
				</div><BR>		
					
				<div>
            		<label for="tlf">Telefono:</label><br>
                        <input type="tel" name="telefono" size="9" maxlength="12" required placeholder="123456789"
                        pattern="[0-9]{9}" id="tlf" /> 
				</div><BR>
				
 
			<input type="submit" name="enviar" id="enviar" class="btn btn-default" value="Insertar usuario">
			
			</div>
			</fieldset>

			</form>
	
			</div>
				
	</body>
</html>