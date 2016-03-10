<?php
	include "../../../../bdConnection.php";
?>
<h3>Add new Lab</h3>

<form action="javascript: fn_agregar();" method="post" id="frm_per">
    <table class="formulario">
        <tbody>
            <tr>
                <td>Name</td>
                <td><input name="usu_per" type="text" id="usu_per" size="16" class="cajas" /></td>
            </tr>
           
            
        
        </tbody>
         <h3>Add Manager</h3>
         <tbody>
            <tr>
                <td>Name</td>
                <td><input name="usu_per" type="text" id="usu_per" size="16" class="cajas" /></td>
            </tr>
           
            
        
        </tbody>
        
    </table>
      <center>
           <tfoot>
           
           <input name="agregar" class="button1" type="submit" id="agregar" value="Add" />
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

