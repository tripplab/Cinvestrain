<?php
	include "../../../../bdConnection.php";
           require'../extras/class/sessions.php';
$objses = new Sessions();
$objses->init();
               $user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
         $sql="SELECT Type FROM user, role WHERE user.Name = '$user' AND user.Role = role.Type";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			}

$sql1="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql1,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$consul2=$resul[0];
                          
			}
?>
<h3>Add new Medium</h3>
    
<form action="javascript: fn_agregar();" method="post" id="frm_per">
    <table class="formulario">
        <tbody>
            <tr>
                <td>* Name</td>
                <td><input name="usu_per" type="text" id="usu_per" size="16" class="cajas" required  /></td>
            </tr>
            <tr>
                <td>* Alias</td>
                <td><input name="nom_per" type="text" id="nom_per" size="40" class="cajas" required /></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                   <select name="ape_per"  id="ape_per" >
 <option >Solid</option>
 <option >Liquid</option>
 </select>
                </td>
                   
            </tr>
             <tr>
                <td>Components</td>
              
   <td><input name="comp" type="text" id="comp" size="40" class="cajas" /></td>
               
                   
            </tr>
                 <tr>
                <td>Sterilization</td>
              
   <td><input name="ster" type="text" id="ster" size="40" class="cajas" /></td>
               
                   
            </tr>
            <tr>
                <td>PH</td>
              
   <td><input name="ph" type="text" id="ph" size="40" class="cajas" /></td>
               
                   
            </tr>
        <td><input name="ide_pai" type="hidden" id="ape_per" size="40"  /></td>
            <tr>
               
<!--                <td><input name="email_per" type="hidden" id="email_per" size="30" value="<?php echo $consul2?>"  /></td>-->
            </tr>
        </tbody>
         </table>
     <table>
          
  <tr id="lab" style="display:none">         

	  <td>Lab </td>
             <td>
               <?php 
        $sqlk="SELECT Name FROM lab WHERE id_lab='$consul2'";		
		$cs3=mysql_query($sqlk,$cn);
                
		while($resul=mysql_fetch_array($cs3)){
			$consulLab=$resul[0];
                        }
         echo" <select name=email_per id=email_per> "; 

                             $sql="SELECT Name FROM lab"; 
                           $result=mysql_query($sql,$cn); 
                           $i=0; 
              echo "<option value=".$consulLab.">".$consulLab."</option>\n";
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select> "; 
                     ?>
                 </td>
              
                 </tr>
        
        </table>
        <center>
        <tfoot>
              
          
              
               
                    <input  class="button1"name="agregar" type="submit" id="agregar" value="Add" />
                    <input name="cancelar" class="button2" type="button" id="cancelar" value="Cancel" onclick="fn_cerrar();" />
         
            
        </tfoot>
         </center>
   
</form>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$("#frm_per").validate({
			rules:{
				usu_per:{
					required: true,
					remote: "ajax_verificar_usu_per.php"
				}
			},
			messages: {
				usu_per: "x"
			},
			onkeyup: false,
			submitHandler: function(form) {
				var respuesta = confirm('Are sure to add this record?')
				if (respuesta)
					form.submit();
			}
		});
	});
	
	function fn_agregar(){
		var str = $("#frm_per").serialize();
		$.ajax({
			url: 'ajax_agregar.php',
			data: str,
			type: 'post',
			success: function(data){
				if(data != "")
					alert(data);
				fn_cerrar();
				fn_buscar();
			}
		});
	};
</script>
    <?php 
if($consul1=="Supermanager"){
    
     
    
    ?>
<script type="text/JavaScript">
    
    document.getElementById('lab').style.display='block';
   
        
      
    </script>
<?php   
}
?>