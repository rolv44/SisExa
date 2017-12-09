<?php
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$azar=array();
$alter=array();
$id=$_POST["id"];
$resultado1=mysqli_query($con,"SELECT p.idPregunta,t.desTema,p.desPregunta,a.idAlternativa,a.desAlternativa from pregunta p INNER JOIN tema t on t.idTema=p.idTema INNER JOIN AlternativaPregunta ap on p.idPregunta=ap.idPregunta INNER JOIN alternativa a on ap.idAlternativa=a.idAlternativa WHERE p.idPregunta='$id'")or die(mysqli_error($con));
while ($row1=mysqli_fetch_array($resultado1)) {
    array_push($alter,array("idA"=>$row1[3],"desAlternativa"=>$row1[4]));
    $tI=$row1[0]; 
    $tds=$row1[1];
    $tdp=$row1[2];
}
array_push($azar,array("idP"=>$tI,"tema"=>$tds,"pregunta"=>$tdp,"alternativa"=>$alter)); 
/*
$resultado=mysqli_query($con,"SELECT `trae_id_pregunta`() AS id ")or die(mysqli_error($con));
$rr=mysqli_fetch_array($resultado);
$numId=$rr['id']-1;  */
/*$listaId=array();
$idcat=$_POST["id"];
$resul1=mysqli_query($con,"SELECT cp.idPregunta from CategoriaPregunta cp inner JOIN categoria c on c.idCategoria=cp.idCategoria where c.desCategoria='$idcat'; ")or die($con);
while($tic=mysqli_fetch_array($resul1)){
  array_push($listaId,$tic[0]);
}

$cant=array(-2);
for($i=0;$i<40;$i++){
  $op=true;
  while($op){
    $idc=rand(1,count($listaId));
    if(!in_array($idc,$cant)){
      $resultado1=mysqli_query($con,"SELECT p.idPregunta,t.desTema,p.desPregunta,a.idAlternativa,a.desAlternativa from pregunta p INNER JOIN tema t on t.idTema=p.idTema INNER JOIN AlternativaPregunta ap on p.idPregunta=ap.idPregunta INNER JOIN alternativa a on ap.idAlternativa=a.idAlternativa WHERE p.idPregunta='$listaId[$idc]'")or die(mysqli_error($con));
      array_push($cant,$idc);
      unset($alter);
      $alter=array();
      while ($row1=mysqli_fetch_array($resultado1)) {
          array_push($alter,array("idA"=>$row1[3],"desAlternativa"=>$row1[4]));
          $tI=$row1[0]; 
          $tds=$row1[1];
          $tdp=$row1[2];
      }
      array_push($azar,array("idP"=>$tI,"tema"=>$tds,"pregunta"=>$tdp,"alternativa"=>$alter)); 
      $op=false;
    }
  }
}
*/
echo json_encode($azar);

?>