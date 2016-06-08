<?php
include "../../../../bdConnection.php";



require'../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();


          $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
  
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
			}
             

$typo= $_SESSION["newsession"];
$sql="SELECT Description from protocol where lab='$consul2' ";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
                        
			
			}
         
                        
                        
 $directorio_escaneado = scandir("archivos_subidos0");
$archivos = array();


foreach ($directorio_escaneado as $item) {
    if ($item != '.' and $item != '..') {
        
         $quitaExtencion= explode(".", $item);
         $quitaExtencion1=$quitaExtencion[0];
         
        $consulta="SELECT Description from protocol where Description='$quitaExtencion1' and lab='$consul2' and Type='$typo'";		
         $resultado=mysql_query($consulta,$cn);
        $totalFilas= mysql_num_rows($resultado);  
          if($totalFilas != 0  ){
               $archivos[] = $item;
          }
       
    }
}
echo json_encode($archivos);
?>
