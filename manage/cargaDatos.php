<?php              
include "../php_excel/PHPExcel/IOFactory.php";
include "conexion.php";
$archivo = $_FILES['archivo']['name'];
$tipo = $_FILES['archivo']['type'];
$cate=$_POST['SelectCate'];
$cn=new conexion();
$con=$cn->conectar();
$qry=mysqli_query($con,"SELECT trae_id_pregunta() AS ID")or die(mysqli_error($con));
$rw=mysqli_fetch_array($qry);
$id_last=$rw['ID'];

$i=4;
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
            
               foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
                  {
                      $highestRow = $worksheet->getHighestRow();
                         for($row=3; $row<=$highestRow; $row++)
                  {
                    
                       $numero=htmlentities($worksheet->getCellByColumnAndRow(0, $row)->getValue());
                       $clase=htmlentities($worksheet->getCellByColumnAndRow(2, $row)->getValue());
                       $tema=htmlentities($worksheet->getCellByColumnAndRow(3, $row)->getValue());
                       $descripcion=htmlentities($worksheet->getCellByColumnAndRow(4, $row)->getValue());
                       $alt1=htmlentities($worksheet->getCellByColumnAndRow(5, $row)->getValue());
                       $alt2=htmlentities($worksheet->getCellByColumnAndRow(6, $row)->getValue());
                       $alt3=htmlentities($worksheet->getCellByColumnAndRow(7, $row)->getValue());
                       $alt4=htmlentities($worksheet->getCellByColumnAndRow(8, $row)->getValue());
                       $respuesta=htmlentities($worksheet->getCellByColumnAndRow(9, $row)->getValue());
                       $fundamento=htmlentities($worksheet->getCellByColumnAndRow(10, $row)->getValue());
                       
                       if(isset($descripcion) || isset($alt1)){
                    if($clase=="Todas"||$clase=="Todos"){
                      $query2=mysqli_query($con,"select *from categoria")or die("error");
                      while($ca=mysqli_fetch_array($query2)){
                        $idc=$ca[0];
                        $query3=mysqli_query($con,"insert into CategoriaPregunta VALUES('$idc,$id_last')")or die("error");
                      }
                    }else{
                      $query1=mysqli_query($con,"insert into CategoriaPregunta VALUES('$cate','$id_last')")or die(mysqli_error($con));
                    }
                    $query=mysqli_query($con,"insert into pregunta VALUES('$id_last','$tema','$descripcion')")or die(mysqli_error($con));
                    
                       $id_last++;
                       $i++;
                       } 
                      
            }
                       } 
               
               
               
            
        }
        //si por algo no cargo el archivo bak_
        else {
            
        }
        
        //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
    

?>