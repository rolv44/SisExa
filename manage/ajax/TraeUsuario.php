<?php
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$nombre=$_POST['nombre'];
$password=$_POST['password'];
$usuario=array();
$resultado=mysqli_query($con,"select *from usuario where nomUsuario='$nombre' and passUsuario=sha1('$password') ")or die(mysqli_error($con));
while($row=mysqli_fetch_array($resultado)){ 
    array_push($usuario,array("id"=>$row[0],"nombre"=>$row[4],"password"=>$row[5],"tipo"=>$row[3]));
}
echo json_encode($usuario);

?>