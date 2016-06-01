<?php
include "../../../../bdConnection.php";
require'../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();

if (isset($_POST['archivo'])) {
    
    
         $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
  
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
			}
             
    
    
    
    $archivo = $_POST['archivo'];
    if (file_exists("archivos_subidos$consul2/$archivo")) {
        unlink("archivos_subidos$consul2/$archivo");
   
         
         $NombreArchivo=split(".",$archivo);
    $sql = "delete * from protocol where Description='$NombreArchivo' and lab='$consulta2'";
	$per = mysql_query($sql);
	$rs_per = mysql_fetch_assoc($per);
        
        echo 1;
    } else {
        echo 0;
    }
    
}


?>
