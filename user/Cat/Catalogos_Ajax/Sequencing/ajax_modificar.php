<?php
	include "../../../../bdConnection.php";
	include "../extras/php/basico.php";
	
	/*verificamos si las variables se envian*/
	if(empty($_POST['usu_per'])){
		echo "You must complete requiered data";
		exit;
	}
         $laboratory=$_POST['email_per'];
          $sqlk="SELECT id_lab FROM lab WHERE  Name like '%$laboratory%'";		
		$lab = mysql_query($sqlk);
		
                while($campo=mysql_fetch_array($lab)){
				$consulLab=$campo[0];
			}
	
	/*modificar el registro*/

	$sql = sprintf("UPDATE sequencing_method SET   Name='%s', Description='%s',lab='%s' where Sequencing_Method_ID=%d;",
		fn_filtro(substr($_POST['usu_per'], 0, 60)),
		fn_filtro(substr($_POST['ape_per'], 0, 70)),
                fn_filtro(substr($consulLab, 0, 70)),
		fn_filtro((int)$_POST['ide_per'])
	);
	if(!mysql_query($sql))
		echo "Error al insertar a la nueva persona:\n$sql";
	exit;
?>