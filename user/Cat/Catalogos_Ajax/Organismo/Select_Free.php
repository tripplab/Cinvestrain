<?php

include "../../../../bdConnection.php";
           require'../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();

               $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
         echo $user;
$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                          
			}
                        $sql2="SELECT * FROM free_living where lab='$consul2'";
$result = mysql_query($sql2,$cn);
 echo' <option value="">Select</option> '; 
while ($row = mysql_fetch_array($result)){
  
	echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
}

?>