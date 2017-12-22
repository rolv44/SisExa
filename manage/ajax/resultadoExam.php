<?php
include("../conexion.php");
$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];
$cn=new conexion();
$con=$cn->conectar();
$categoria=array();
$resultado=mysqli_query($con,"select *from resultado where fecha>='$fecha1' and fecha<='$fecha2'")or die(mysqli_error($con));
while($row=mysqli_fetch_array($resultado)){ 
    array_push($categoria,array("id"=>$row[0],"fecha"=>$row[3],"correctas"=>$row[1],"fallidas"=>$row[2]));
}
echo json_encode($categoria);

?>