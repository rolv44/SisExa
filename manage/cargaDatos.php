<?php              
include "../php_excel/PHPExcel/IOFactory.php";
include "conexion.php";
$archivo = $_FILES['archivo']['name'];
$tipo = $_FILES['archivo']['type'];
$cate=$_POST['SelectCate'];
$cn=new conexion();
$con=$cn->conectar();
$qry=mysqli_query($con,"SELECT trae_id_pregunta() as c,trae_id_alternativa() as b,trae_id_respuesta() as a")or die(mysqli_error($con));
$rw=mysqli_fetch_array($qry);
$id_last=$rw['c'];
$idAl=$rw['b'];
$idRps=$rw['a'];
$ok=0;
$fail=0;
$total=0;
$detailFail="";
$respImport=array();
$destino = "bak_" . $archivo;
        try{
            if (copy($_FILES['archivo']['tmp_name'], $destino)){
                
            }
            else{
                
            }
        }catch(Exception $e){ }
        
        if (file_exists("bak_" . $archivo)) {
            /** Clases necesarias */
            require_once('../php_excel/PHPExcel.php');
            require_once('../php_excel/PHPExcel/Reader/Excel2007.php');
            // Cargando la hoja de cálculo
           
            
            $file = $_FILES["archivo"]["tmp_name"];
            $objPHPExcel = PHPExcel_IOFactory::load($file);
            
               foreach ($objPHPExcel->getWorksheetIterator() as $worksheet){
                      $highestRow = $worksheet->getHighestRow();
                         for($row=3; $row<=$highestRow; $row++){
                           $total++;
                       //$numero=htmlentities($worksheet->getCellByColumnAndRow(0, $row)->getValue());
                       $clase=htmlentities($worksheet->getCellByColumnAndRow(2, $row)->getValue());
                       $tema=htmlentities($worksheet->getCellByColumnAndRow(3, $row)->getValue());
                       $descripcion=htmlentities($worksheet->getCellByColumnAndRow(4, $row)->getValue());
                       $alt1=htmlentities($worksheet->getCellByColumnAndRow(5, $row)->getValue());
                       $alt2=htmlentities($worksheet->getCellByColumnAndRow(6, $row)->getValue());
                       $alt3=htmlentities($worksheet->getCellByColumnAndRow(7, $row)->getValue());
                       $alt4=htmlentities($worksheet->getCellByColumnAndRow(8, $row)->getValue());
                       $respuesta=htmlentities($worksheet->getCellByColumnAndRow(9, $row)->getValue());
                       $fundamento=htmlentities($worksheet->getCellByColumnAndRow(10, $row)->getValue());
                       
                       if(isset($descripcion) || isset($clase)){
                    if($clase=="Todas"){
                      $quer=mysqli_query($con,"select *from categoria")or die(mysqli_error($con));
                      while($ca=mysqli_fetch_array($quer)){
                        $idc=$ca[0];
                        $query33=mysqli_query($con,"insert into CategoriaPregunta VALUES('$idc','$id_last')")or die(mysqli_error($con));
                      }
                    }else{
                      $query1=mysqli_query($con,"insert into CategoriaPregunta VALUES('$cate','$id_last')")or die(mysqli_error($con));
                    }
                    $query=mysqli_query($con,"insert into pregunta VALUES('$id_last','$tema','$descripcion')")or die(mysqli_error($con));
                    
                    $query4=mysqli_query($con,"insert into alternativa VALUES('$idAl','$alt1')")or die(mysqli_error($con));
                    $query5=mysqli_query($con,"insert into AlternativaPregunta VALUES('$id_last','$idAl')")or die(mysqli_error($con));
                    if($respuesta=="a"){
                      $qq=mysqli_query($con,"insert into respuesta VALUES ('$idRps','$id_last','$idAl','$fundamento')")or die(mysqli_error($con));
                    }
                    
                    $idAl++;
                    $query6=mysqli_query($con,"insert into alternativa VALUES('$idAl','$alt2')")or die(mysqli_error($con));
                    $query7=mysqli_query($con,"insert into AlternativaPregunta VALUES('$id_last','$idAl')")or die(mysqli_error($con));
                    if($respuesta=="b"){
                      $qq=mysqli_query($con,"insert into respuesta VALUES ('$idRps','$id_last','$idAl','$fundamento')")or die(mysqli_error($con));
                    }
                    
                    $idAl++;
                    $query8=mysqli_query($con,"insert into alternativa VALUES('$idAl','$alt3')")or die(mysqli_error($con));
                    $query9=mysqli_query($con,"insert into AlternativaPregunta VALUES('$id_last','$idAl')")or die(mysqli_error($con));
                    if($respuesta=="c"){
                      $qq=mysqli_query($con,"insert into respuesta VALUES ('$idRps','$id_last','$idAl','$fundamento')")or die(mysqli_error($con));
                    }
                    
                    $idAl++;
                    $query10=mysqli_query($con,"insert into alternativa VALUES('$idAl','$alt4')")or die(mysqli_error($con));
                    $query11=mysqli_query($con,"insert into AlternativaPregunta VALUES('$id_last','$idAl')")or die(mysqli_error($con));
                    if($respuesta=="d"){
                      $qq=mysqli_query($con,"insert into respuesta VALUES ('$idRps','$id_last','$idAl','$fundamento')")or die(mysqli_error($con));
                    }
                    
                    $idAl++;
                    $id_last++;
                    $ok++;
                  
                  }else{  $fail++; $detailFail="descripcion de pregunta, o columna clase vacia";} 
                       }
                       } 
                       }
        //si por algo no cargo el archivo bak_
        else {
            
        }
        array_push($respImport,array("ok"=>$ok,"fail"=>$fail,"total"=>$total,"detalle"=>$detailFail));
        echo json_encode($respImport);

?>