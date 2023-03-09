<?php 
//Conectamos con la base de datos
include('conecta.php');
 //Comprobamos si los campos obligatorios estan vacios
 //Cuando bandera=1 Se permite la inserción en la base de datos, cuando es bandera=0 no se permite
 $bandera=1; 
 //Comprobando si los campos estan vacios o no
if (empty ($_POST['id_vendedor']))
{
    echo "<br>Campo DNI del vendedor es obligatorio";
    $bandera=0;
}
 
if (empty ($_POST['nombre_producto']))
{
    echo "<br>Campo nombre de producto es obligatorio";
    $bandera=0;
}

if (empty ($_POST['precio']))
{
    echo "<br>Campo precio es obligatorio";
    $bandera=0;
}


if (empty ($_POST['descripcion']))
{
    echo "<br>Campo descripcion es obligatorio";
    $bandera=0;
}



// Si bandera=1, usamos el php de conexion con la base de datos
if ($bandera==1){
    include('conecta.php');
// Los values son los del formulario de usuario
    $sql ="INSERT INTO Productos (id_producto, id_vendedor, Nombre_producto, Precio, Descripción) VALUES (null,'".$_POST['id_vendedor']."','".$_POST['nombre_producto']."','".$_POST['precio']."','".$_POST['descripcion']."')";

   $insertar=mysqli_query($conn,$sql);
   
// comprobar si inserta o no en la tabla de turno 
   if ($insertar) {
    echo "New record created successfully";
    echo "<a href='../index.html'> Volver al formulario </a>";
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
// cierro la conexion a la base de datos 
mysqli_close($conn);
}
else {

    echo "<a href='../index.html'> Volver al formulario </a>";


}
?>