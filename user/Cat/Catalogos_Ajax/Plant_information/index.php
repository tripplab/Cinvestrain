<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Plant</title>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery-1.3.2.min.js"></script>
        <script language="javascript" type="text/javascript" src="../extras/js/1.js"></script>
        <script language="javascript" type="text/javascript" src="../extras/js/jquery.validate.1.5.2.js"></script>
        <link href="../extras/css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="../extras/css/style.css" rel="stylesheet" type="text/css" />
        <link href="../extras/css/screen_1.css" rel="stylesheet" type="text/css" />
        <link href="../extras/php/PHPPaging.lib.css" rel="stylesheet" type="text/css" />
        <script language="javascript" type="text/javascript" src="index.js"></script>
        
    </head>
     <br>
                
            </br>
          <br>
                
            </br>
        <br>
                
            </br>
    <body class="col">
    	<div id="cuerpo1">
            <h1><center>Sample from Plant</center></h1>
            
          
            <div id="div_listar"></div>
          
              <form action="javascript: fn_buscar();" id="frm_buscar" name="frm_buscar">
                <table class="formulario" >
                    <tbody class="col">
                        <tr>
                           
                            <td ><h3><b>Orden by</b></h3> </td>
                            <td >
                                <select name="criterio_ordenar_por" id="criterio_ordenar_por" class="cajas">
                                    <option value="Plant_ID">Id</option>
                                	<option value="Common_Name">Common Name</option>
                                    <option value="Scientific_Name">Scientific Name</option>
                                    <option value="Gender">Gender</option>
                                    <option value="Species">Species</option>
                                	<option value="Date_of_collection">Date of collection</option>
                                    <option value="Collected_by">Collected by</option>
                                      <option value="Site_Alias">Site Alias</option>
                                	<option value="Site_Directions">Site Directions</option>
                                    <option value="Longitud">Longitud</option>
                                    <option value="Latitud">Latitud</option>
                                    <option value="Altitude">Altitude</option>
                                	<option value="Tissues">Tissues</option>
                                    <option value="Heigth">Heigth</option>
                                  <option value="Width">Width</option>
                                    <option value="Physiological_state">Physiological state</option>
                                    <option value="Neighboring_plants">Neighboring plant</option>
                                    <option value="Comments">Comments</option>
                                	
                                  
                                </select>
                            </td>
                            <td> <h3><b>In</b></h3> </td>
                            <td  >
                            	<select name="criterio_orden" id="criterio_orden" class="cajas">
                                	<option value="desc">Down</option>
                                    <option value="asc">Up</option>
                                </select>
                            </td>
                            <td><h3><b>Records</b></h3> </td>
                            <td  >
                            	<select name="criterio_mostrar" id="criterio_mostrar" class="cajas">
                                	<option value="1">1</option>
                                	<option value="2">2</option>
                                	<option value="5">5</option>
                                	<option value="10">10</option>
                                	<option value="20" selected="selected">20</option>
                                	<option value="40">40</option>
                                </select>
                            </td>
                            <td><input  class="Boton1" type="submit" value="search" /></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div id="div_oculto" style="display: none;" ></div>
        </div>
    </body>
</html>