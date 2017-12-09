<?php 
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$listaId=array();
$idcat=$_POST["idC"];
$resul1=mysqli_query($con,"SELECT cp.idPregunta from CategoriaPregunta cp inner JOIN categoria c on c.idCategoria=cp.idCategoria where c.desCategoria='$idcat'; ")or die($con);
while($tic=mysqli_fetch_array($resul1)){
  array_push($listaId,$tic[0]);
}
echo json_encode($listaId);

?>