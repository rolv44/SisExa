<?php
	
	include ("../php/conexion.php");
    $cn=new conexion();
    $con=$cn->conectar();
	$consulta = "SELECT * FROM producto limit 20,25";
	$registro = mysqli_query($con,$consulta);
	
	$tabla = "";
	
	while($row = mysqli_fetch_array($registro)){		

		$editar = '<a href=\"edicionUsuario.php?a='.$row['id_pro'].'&b='.$row['nom_pro'].'&c='.$row['des_pro'].'&d='.$row['mar_pro'].'&e='.$row['pre_com'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$eliminar = '<a href=\"actionDelete.php?id='.$row['id_pro'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
		
		$tabla.='{
				  "COD":"'.$row['id_pro'].'",
				  "NOMBRE":"'.$row['nom_pro'].'",
				  "DESCRIPCION":"'.$row['des_pro'].'",
				  "MARCA":"'.$row['mar_pro'].'",
				  "P.U.":"'.$row['pre_com'].'",
				  "PRECIOS":"'.$row['pre_blo'].'",
				  "STOCK":"'.$row['stock_pro'].'",
				  "PRECIOS":"'.$row['tip_pro'].'"
				},';		
	}	

	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

    /*
while($row = mysqli_fetch_assoc($registro)){	
 $arreglo['data'][]=array_map("utf8_encode",$row);
}

 echo json_encode($arreglo);
     mysqli_free_result($registro);
     mysqli_close($con);


*/


?>