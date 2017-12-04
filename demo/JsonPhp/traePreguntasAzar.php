<?php
include("../conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$azar=array();

$resultado=mysqli_query($con,"SELECT `trae_id_pregunta`() AS id ")or die(mysqli_error($con));
$rr=mysqli_fetch_array($resultado);
$numId=$rr['id']-1;

$cant=array(-2);
for($i=0;$i<40;$i++){
  $op=true;
  while($op){
    $idc=rand(1,$numId);
    if(!in_array($idc,$cant)){
      array_push($cant,$idc);
      $resultado1=mysqli_query($con,"SELECT p.idPregunta,t.desTema,p.desPregunta,a.idAlternativa,a.desAlternativa from pregunta p INNER JOIN tema t on t.idTema=p.idTema INNER JOIN AlternativaPregunta ap on p.idPregunta=ap.idPregunta INNER JOIN alternativa a on ap.idAlternativa=a.idAlternativa WHERE p.idPregunta='$idc'")or die(mysqli_error($con));
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

echo json_encode($azar);

?>