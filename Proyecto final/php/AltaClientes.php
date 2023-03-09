<?php 
//Conectamos con la base de datos
include('conecta.php');
 //Comprobamos si los campos obligatorios estan vacios
 //Cuando bandera=1 Se permite la inserción en la base de datos, cuando es bandera=0 no se permite
 $bandera=1; 
 //Comprobando si los campos estan vacios o no
if (empty ($_POST['DNI']))
{
    echo "<br>Campo nombre obligatorio";
    $bandera=0;
}
 
if (empty ($_POST['nombre']))
{
    echo "<br>Campo nombre obligatorio";
    $bandera=0;
}

if (empty ($_POST['nombre_tienda']))
{
    echo "<br>Campo nombre de la tienda obligatorio";
    $bandera=0;
}

 // Procesa el botón de radio
if (empty ($_POST['Tipo'])) {
    $selected_option = $_POST['Tipo'];

	echo "<br>Campo Tipo obligatorio";
    $bandera=0;
}

if (empty ($_POST['email']))
{
    echo "<br>Campo email obligatorio";
    $bandera=0;
}

if (empty ($_POST['telefono']))
{
    echo "<br>Campo telefono obligatorio";
    $bandera=0;
}


// Si bandera=1, usamos el php de conexion con la base de datos
if ($bandera==1){
    include('conecta.php');
// Los values son los del formulario de usuario
    $sql ="INSERT INTO Vendedores (DNI, Nombre, Nombre_tienda, Tipo, email, Telefono) VALUES ('".$_POST['DNI']."','".$_POST['nombre']."','".$_POST['nombre_tienda']."','".$_POST['Tipo']."','".$_POST['email']."','".$_POST['telefono']."')";

   $insertar=mysqli_query($conn,$sql);
   
// comprobar si inserta o no en la tabla de turno 
   if ($insertar) {
    echo "New record created successfully";
    echo "<a href='../index.html'> Volver al formulario </a>";
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

//Mostrar tabla de vendedores

#$id_vend = $_POST['id_vendedor'];
$sql = "SELECT * FROM Vendedores";
$resultado = mysqli_query($conn, $sql);

// Almacenar los resultados en un array
$resultados = [];
while ($fila = mysqli_fetch_assoc($resultado)) {
    $resultados[] = $fila;
}

// Generar el código HTML para mostrar los resultados
echo "<ul>";
echo "Lista de vendedores";
foreach ($resultados as $resultado) {
    echo "<li>" . $resultado['DNI'] . " " . $resultado['Nombre'] . " " . $resultado['Nombre_tienda'] . " " . $resultado['Tipo'] . " " . $resultado['email'] . " " . $resultado['telefono'] .  "</li>";
}
echo "</ul>";


// cierro la conexion a la base de datos 
mysqli_close($conn);
}
else {

    echo "<a href='../index.html'> Volver al formulario </a>";


}
?>