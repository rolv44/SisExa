<?php
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$categoria=array();
$resultado=mysqli_query($con,"select p.idPregunta,c.desCategoria,t.desTema,p.desPregunta from pregunta p INNER JOIN CategoriaPregunta cp on p.idPregunta=cp.idPregunta INNER JOIN categoria c on cp.idCategoria=c.idCategoria INNER JOIN tema t on t.idTema=p.idTema  ")or die(mysqli_error($con));
while($row=mysqli_fetch_array($resultado)){ 
    array_push($categoria,array("id"=>$row[0],"categoria"=>$row[1],"tema"=>$row[2],"descripcion"=>$row[3]));
}
echo json_encode($categoria);

?>