
<script src="jquery-ui-1.8.9.custom.min.js">

</script>

 
<script type="text/javascript">
  
         
			$("document").ready(function(){

				
                                
                                
                            })
                            
                            
                            
                            
                            $("document").ready(function(){

                              
                                 })
                                 
                                  $("document").ready(function(){

                               
                                 })
   function MyC(){
                                
                         document.getElementById('producto').style.display='block';         
                                
                            }
  function mostrar(id) {
    if (id == "Host") {
         $("#desdeotro").hide(); 
          $("#are0").hide(); 
          $("#desdeotro1").show();
           $("#are1").show();
         $("#desdeotro2").hide();
         $("#are2").hide();
         document.getElementById('producto').style.display='none'; 
      
          $( "#proveedor" ).load( "Select_host.php" );
 
			
                                	$("#proveedor").change(function(){
					var nom= $("#proveedor").val();
					$.get("Select_tipo_host.php",{par:nom})
					.done(function(data){
						$("#producto").html(data);
					})
			 	})
         
           
          
         
    }
     if (id == "Plant") {
         $("#desdeotro").show(); 
         $("#are0").show(); 
         $("#desdeotro1").hide();
             $("#are1").hide();
           $("#desdeotro2").hide(); 
               $("#are2").hide();
               $("#comboPlant").show(); 
                document.getElementById('producto').style.display='none'; 
               $( "#proveedor" ).load( "Select_Plant.php" );

				$("#proveedor").change(function(){
					var id = $("#proveedor").val();
					$.get("Select_tissue.php",{param_id:id})
					.done(function(data){
						$("#producto").html(data);
					})
			 	})
 
    
    }
     if (id == "Free") {
         $("#desdeotro2").show();
             $("#are2").show();
         $("#desdeotro").hide();
             $("#are0").hide();
           $("#desdeotro1").hide(); 
               $("#are1").hide();
                document.getElementById('producto').style.display='none'; 
               $( "#proveedor" ).load( "Select_Free.php" );

			 
                                	$("#proveedor").change(function(){
					var n= $("#proveedor").val();
					$.get("Select_tipo_free.php",{pr:n})
					.done(function(data){
						$("#producto").html(data);
					}) 
			 	})
    }
    }
 

     
        </script>

<link rel="stylesheet" type="text/css" href="mensajes.css" />

  
<?php 


include('FunAjax.php'); 
include("bdConnection.php");
include("Aco_DataGrid.php");



?>





   

<head>
    <style>
        #mapa{
           
            width: 800px;
            height: 400px;
            background-color:  #00BFFF;
           
        }
          #mapaoculto{
              position: absolute;
          left:2000px; 

            width: 800px;
            height: 400px;
            background-color:  #e4b9c0;
           
        }
        #estilo1
{
    
   
                position: absolute;
          left:130px; 

            width: 800px;
            height: 400px;
            background-color:  #e4b9c0;
            
}
        #infor{
            width: 400px;
            height: 400px;
            float:left;
        }
        .ocultar
{
    
    display:none;
    
}
.mostrar
{
    
    display: inline;
}
    </style>
    



<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";
$var10="";
$var11="";
$var12="";
$var13="";
$var14="";
$var15="";
$var16="";
$var17="";
$var18="";
$var19="";
$var20="";
$var21="";
$var22="";
$var23="";
$var24="";
$var25="";
$var26="";
$var27="";
$var28="";
$var29="";
$var30="";
$var31="";
$var32="";
$var33="";
$var34="";
$var35="";
$var36="";
$var37="";
$var38="";
$var39="";
$var40="";
$var41="";
$var42="";
$var43="";
$consul="";
$consul1="";

$var44="";
$var45="";
$var46="";
$var47="";
$var48="";
$var49="";
$var50="";
$var51="";


$var52="";
$var53="";
$var54="";
$var55="";
$var56="";
$var57="";
$var58="";
$var59="";
$var60="";
$var61="";
$var62="";
$var63="";
$var64="";
$var65="";
$var66="";
$var67="";
$var68="";
$var69="";
$var70="";
$var71="";
$var72="";
$var73="";
$var74="";
$var75="";
$var76="";
$var77="";
$var78="";
$var79="";
$var80="";
$var81="";
$var82="";
$var83="";
$var84="";
$var85="";
$var86="";
$var87="";
$var88="";
$var89="";
$var90="";
$var91="";
$var92="";
$var93="";
$var94="";
$var95="";



$var96="";
$var97="";
$var98="";
$var99="";
$var100="";
$var101="";
$var102="";
$var103="";
$var104="";
$var105="";
$var106="";
$var107="";
$var108="";
$var109="";
$var110="";
$var111="";
$var112="";
$var113="";
$var124="";
$var125="";
$Name_Or="";

$var114="";
$var115="";
$var116="";
$var117="";
$var118="";
$var119="";
$var120="";
$var121="";
$var500="";
$varRe="";


$var122="";
$var123="";
?>





<?php

require'../class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;

$pu="hi";
if($pu=="hi") {
$sql="SELECT Type FROM user, role WHERE user.Name = '$user' AND user.Role = role.Type";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul1=$resul[0];
			
			
			} 
                        
                        }
                        

if($user == ''){
	header('Location: http://localhost:8888/designprojects/users/index.php?error=2');
}

$u="ho";
               if($u=="ho") {
                $sql="SELECT User_ID FROM user WHERE Name = '$user'";		
		$cs=mysql_query($sql,$cn);
                
		while($resul=mysql_fetch_array($cs)){
			$consul3=$resul[0];
			
			
			}
                        
                                
$sql2="SELECT lab.id_lab FROM user,lab WHERE user.Name ='$user' AND user.lab=lab.id_lab";		
		$cs1=mysql_query($sql2,$cn);
                
		while($resul=mysql_fetch_array($cs1)){
			$lab=$resul[0];
			}
                        
                        }



?>




 

<html> 
    <head>





        <script type="text/javascript" src="jquery-latest.js"></script>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
  
 
     <!--todas las consultas-->
 <?php

  
     

$h="holas"; 
if($h=="holas")
 {
    		$cod=$_SESSION['sear'];
                
		
                
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var124=$resul[5];
                        $var125=$resul[6];
                        $var5=$resul[7];
                         $var121=$resul[8];	
                         
                      
                        
			}
                        
                        
                        
			
                     
                        
                         
    
    
                      
               $sql="select * from macroscopic_morphology where Org_ID='$var' or Org_ID='$var1'";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$var6=$resul[0];
			$var7=$resul[1];
			$var8=$resul[2];
			$var9=$resul[3];
			$var10=$resul[4];
                        $var11=$resul[5];
                        $var12=$resul[6];
                        $var13=$resul[7];
                        $var14=$resul[8];
                        $var15=$resul[9];
			
			}
			
			



                $sql="select * from microscopic_morphology where Org_ID='$var' or Org_ID='$var1' ";
		$cs=mysql_query($sql,$cn);
		
		while($resul=mysql_fetch_array($cs)){
			$var16=$resul[0];
			$var17=$resul[1];
			$var18=$resul[2];
			$var19=$resul[3];
			$var20=$resul[4];
                        $var21=$resul[5];
                        $var22=$resul[6];
                        $var23=$resul[7];
                        $var24=$resul[8];
                        $var25=$resul[9];
                        $var26=$resul[10]; 
                        $var27=$resul[11];
                        $var28=$resul[12];
			
                }
                       
                $sql="select * from growth_characteristics where Org_ID='$var' or Org_ID='$var1'";
		$cs=mysql_query($sql,$cn);
		

		while($resul=mysql_fetch_array($cs)){
			$var29=$resul[0];
			$var30=$resul[1];
			$var31=$resul[2];
			$var32=$resul[3];
			$var33=$resul[4];
                        $var34=$resul[5];
                        $var35=$resul[6];
                        $var36=$resul[7];
                        $var37=$resul[8];
                        $var38=$resul[9];
                        $var39=$resul[10];
                        $var40=$resul[11];
                        $var41=$resul[12];
                         $var42=$resul[13];
                        $var43=$resul[14];
			
			}
			
                        
                        
                $sql="select * from preservation_of_strains where Org_ID='$var' or Org_ID='$var1'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var44=$resul[0];
			$var45=$resul[1];
			$var46=$resul[2];
			$var47=$resul[3];
			$var48=$resul[4];
                        $var49=$resul[5];
                        $var50=$resul[6];
                        $var51=$resul[7];
                       $var114=$resul[8];
			}
                        
                        $sql="select * from dna where Org_ID='$var' or Org_ID='$var1'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var52=$resul[0];
			$var53=$resul[1];
			$var54=$resul[2];
			$var55=$resul[3];
			$var56=$resul[4];
                        $var57=$resul[5];
                        $var58=$resul[6];
                        $var59=$resul[7];
                       
			}
                        
                        
              $sql="select * from genetic_data where Org_ID='$var' or Org_ID='$var1'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var60=$resul[0];
			$var61=$resul[1];
			$var62=$resul[2];
			$var63=$resul[3];
			$var64=$resul[4];
                        $var65=$resul[5];
                        $var66=$resul[6];
                       
                       
			}
                        
                        
//                        $sql="select * plant_info where Org_ID='$var'";
//		$cs=mysql_query($sql,$cn);
//		while($resul=mysql_fetch_array($cs)){
//			$var67=$resul[0];
//			$var68=$resul[1];
//			$var69=$resul[2];
//			$var70=$resul[3];
//			$var71=$resul[4];
//                        $var72=$resul[5];
//                        $var73=$resul[6];
//                        $var74=$resul[7];
//                        $var75=$resul[8];
//			$var76=$resul[9];
//			$var77=$resul[10];
//			$var78=$resul[11];
//			$var79=$resul[12];
//                        $var80=$resul[13];
//                        $var81=$resul[14];
//                        $var82=$resul[15];
//			$var84=$resul[17];
//                        $var85=$resul[18];
//                        $var86=$resul[19];
//                      
//			}
//              
                        
                        $sql="select * from metabolic_data where Org_ID='$var' or Org_ID='$var1'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var87=$resul[0];
			$var88=$resul[1];
			$var89=$resul[2];
			$var90=$resul[3];
			$var91=$resul[4];
                        $var92=$resul[5];
                        $var93=$resul[6];
                        $var94=$resul[7];
                        $var95=$resul[8];
			$var96=$resul[9];
			$var97=$resul[10];
			$var98=$resul[11];
			$var99=$resul[12];
                        $var100=$resul[13];
                        $var101=$resul[14];
                        $var102=$resul[15];
                       
			}
                        
                        $sql="select * from bioassays_data where Org_ID='$var' or Org_ID='$var1'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var103=$resul[0];
			$var104=$resul[1];
			$var105=$resul[2];
			$var106=$resul[3];
			$var107=$resul[4];
                        $var108=$resul[5];
                        $var109=$resul[6];
                        $var110=$resul[7];
                         $var111=$resul[8];
                        $var112=$resul[9];
			}
                        
                    
                      


 }  
 
 
               
                    
            
?>         
      

     
     
     
     
     
     
     
     
     
      <?php
   
 
         
      
      
      
   $hr="ets"; 
if($hr=="ets")
 {
    
  $My=(string)$var4;
       
       
       $Host="Host";
       $Plant="Plant";
       $Free="Free";
       
    if(stristr ($My, $Plant))
    {
        
        

$sql="select Longitud,Latitud from plant_info where Common_Name='$var124'";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$var122=$resul[0];
			$var123=$resul[1];
                    
			
			}    






                 
    }
    elseif(stristr ($My, $Host) )
    {
        
                 
		$sql="select Latitude,Longitude from host_info where Name='$var124'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var122=$resul[0];
			$var123=$resul[1];
                    
				
			}
                        
                        
                       
    }
    
   		
      elseif(stristr ($My, $Free) )
    {
                   
		$sql="select Longitude,Latitude from free_living where Name='$var124'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var122=$resul[0];
			$var123=$resul[1];
                    
				
			}
    }
                   
    
    }
    ?>
      
    
    
       <?php 
if($consul1=="Guest"){
    
     
    
    ?>
<script type="text/JavaScript">
    
 
      
    </script>
<?php   
}
?>

   
   

   

<style type="text/css">*{margin:0;padding:0;outline:none;}

  BODY{COLOR:BLACK;BACKGROUND:WHITE;FONT-FAMILY:ARIAL,VERDANA,HELVETICA;}

  P,TD{FONT-SIZE:11pt;}

  H1,H2,H3{FONT-FAMILY:TREBUCHET MS,ARIAL BLACK,ARIAL;}
    H1{FONT-SIZE:18pt;}
    H2{FONT-SIZE:14pt;FONT-FAMILY: ARIAL;} 
    H3{FONT-SIZE:12pt;FONT-WEIGHT:BOLD; FONT-FAMILY: ARIAL;}

  A{text-decoration:none;}
    A:link{COLOR:NAVY;}
    A:visited{COLOR:NAVY;}
    A:active{COLOR:RED;}
    A:hover{COLOR:RED;}
  
  #header{width:975px;height:105px;background:url(imgs/header.jpg);margin:0;padding:0;position:relative;}
    #header li{margin:0;padding:0;list-style:none;position:absolute;top:0;}
    #header li,#header a{height:105px;display:block;outline:none;}

  #panel1b{left:0;width:90px;border:0 solid red;}
    #panel1b a:hover{background:transparent url(imgs/header.jpg) 0 -105px no-repeat;}

  .sitemap{margin-left:30px;}
  #mySelect{position:absolute;top:66px;left:340px;width:800px;}
  #SelectModel{border:0 solid green;float:left;}
  #searchPDBID{border:0 solid red;float:left;margin:1px 0 0 50px;}
  .select{font-family:arial;font-size:8pt;}
  #menubar{position:absolute;top:21px;left:125px;width:900px;height:40px;margin:0;border:0 solid black;}

  #MenuBar1 li{width:115px;font-size:.8em;font-weight:bold;text-align:center;}
    #MenuBar1 li.highlight a{color:#e07d00;}
    #MenuBar1 li.highlight a:hover{color:white;}
    #MenuBar1 ul li a.MenuBarItemSubmenu{background-image:url(Spry_P1_6_10-01/widgets/menubar/SpryMenuBarRightHover.gif);background-repeat:no-repeat;
                    background-position:95% 50%;}
    #MenuBar1 ul li a{width:15em;font-size:1.0em;text-align:left;color:#fff;background-color:#7897a0;}
    #MenuBar1 ul li a:hover{color:#ffee4a;}
                    A.ctl0:link{color:black;text-decoration:none;}
                    A.ctl0:visited{color:black;text-decoration:underline;}
                    A.ctl2:link{color:red;text-decoration:none;}
                    A.ctl2:visited{color:black;text-decoration:underline;}
                    A.ctl3:link{color:green;text-decoration:none;}
                    A.ctl3:visited{color:black;text-decoration:underline;}
                    A.ctl5:link{color:blue;text-decoration:none;}
                    A.ctl5:visited{color:black;text-decoration:underline;}
                    A.ctl6:link{color:magenta;text-decoration:none;}
                    A.ctl6:visited{color:black;text-decoration:underline;}

   .resume,.menu,.titlebar,.small,.smaller,.smallest,.smbold,.tiny,.smallred,.smallerred,.smallestred,.smboldred,.tinyred,.smallblue,.smallerblue,
   .smallestblue,.smboldblue,.tinyblue,li{font-family:ARIAL,Helvetica,VERDANA;}
     .menu{font-size:3pt;color:black;}
     .titlebar{font-size:11pt;color:black;}
     .small{font-size:.75em;color:black;}
     .smaller{FONT-SIZE:9PT;COLOR:BLACK;font-weight:normal;}
     .smallest{FONT-SIZE:8PT;COLOR:BLACK;}
     .smbold{FONT-SIZE:8PT;COLOR:BLACK;FONT-WEIGHT:BOLD;}
     .tiny{FONT-SIZE:7PT;COLOR:BLACK;}
     .smallred{font-size:10pt;color:red;}
     .smallerred{FONT-SIZE:9PT;COLOR:red;}
     .smallestred{FONT-SIZE:8PT;COLOR:red;}
     .smboldred{FONT-SIZE:8PT;COLOR:red;FONT-WEIGHT:BOLD;}
     .tinyred{FONT-SIZE:7PT;COLOR:red;}
     .smallblue{font-size:10pt;color:MidnightBlue;}
     .smallerblue{FONT-SIZE:9PT;COLOR:MidnightBlue;}
     .smallestblue{FONT-SIZE:8PT;COLOR:MidnightBlue;}
     .smboldblue{FONT-SIZE:8PT;COLOR:MidnightBlue;FONT-WEIGHT:BOLD;}
     .tinyblue{FONT-SIZE:7PT;COLOR:MidnightBlue;}

  .tooltip_content{background-color:#FFF;color:#006;padding:10px;border:1px solid black;width:400px;}
    .tooltip_content img{margin-right:10px;}
  .trigger01,.trigger02,.trigger03,.trigger04,.trigger05,.trigger06{font-size:.8em;}

  .biodata_table{
               margin:5px 0 5px 5px;
                display:block;
                float:left;
                position:absolute;
                width: 800px;
                border:#cde solid 1px;}
  .biodata_table1{
      margin:5px 0 5px 5px;
                display:block;
                width: 300px;
                right:23px;
                float: 80%;
                float:left;
                position:absolute;
                border:#cde solid 1px;
 
 }
    .biodata_table_title{display:block;background-color:white;margin:10px 0 5px 0;padding-left:5px;background-image:url("imgs/titlebar.jpg");
                         background-position:center;}
    .biodata_table table{margin-left:8px;}
    .biodata_table td{padding-top:5px;}
    .biodata_table A{text-decoration:none;font-weight:bold;}
    .biodata_table A:link{COLOR:NAVY;}
    .biodata_table A:visited{COLOR:NAVY;}
    .biodata_table A:active{COLOR:RED;}
    .biodata_table A:hover{COLOR:RED;}

  .cntrl_img_btns img{border:#000 solid 0;margin:0 10px 0 10px;cursor:pointer;}
  #clear_labels{margin:5px;cursor:pointer;}
  #info_page_entry_title{
       position: absolute;
      background:#5f72b3;
      border:1px solid #999;
      width:1400px;margin:5px 0 2px 5px;
      text-align:center;font-family:Verdana,Arial,Helvetica;
                         font-weight:bold;color:#fff;
                         top:9%;
                         left:10%;
    float:left;
  
  }
  #our_lab{position:absolute;background-color:#cde;font-size:.6em;text-align:center;top:195px;left:5px;width:95px;padding:3px;border:#5f72b3 solid 1px;
           -moz-border-radius:5px;-webkit-border-radius:5px;}
          fieldset{margin:5px;padding:0 10px 0 10px;font-size:.75em;}
          legend{background-color:#cde;border:0 solid #333;margin:0;padding:0 3px 0 3px;text-transform:uppercase;}

  #centerstatus {
     position: absolute;
     top: 230px; 
  }

  #colorInfo {
     position: absolute;
     top: 234px;
  }

  .jmol_cntrl_grp{margin:10px 0 10px 5px;border:#000 solid 0;}
  #jmol_wrap{position:absolute;left:-2000px;border:#0f0 solid 0;background-color:#a7bfdb;height:418px;width:853px;}
  #jmol{float:left;display:block;width:540px;height:410px;border:#5f72b3 solid 1px;margin:3px;}
  #jmol_controls{float:left;display:block;background-color:#a7bfdb;border:#fff dashed 0;margin-left:10px;height:100%;}

  #radio_rep,#radio_color,#span_Checkexp{margin:0 0 15px 15px;}
  .exp_phipsi{width:75%;text-align:justify;margin:30px auto 20px auto;}
  .exp_phipsi_img{border:#000 dashed 0;display:block;margin:10px auto;}
  .right{float:right;}
  
  #informacion
  {
      
    
    position: absolute;
    top:0%;
   left: 10%;
   float:left;
  }
    #acord
  {
      
    width: 360px;
    height: 857px;
    position: absolute;
    top:10%;
   left: 10%;
   float:left;
  }
</style>



<link href="SpryTabbedPanels_v3.css" rel="stylesheet" type="text/css"><!--
--><script src="SpryTabbedPanels.js" type="text/javascript"></script>


<script type="text/javascript" src="gsrs"></script><script type="text/javascript" charset="UTF-8" src="{common,util,stats}.js"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/maps-api-v3/api/js/18/14/intl/es_ALL/%7Bmap,geometry,poly,marker%7D.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/maps-api-v3/api/js/18/14/intl/es_ALL/%7Binfowindow,onion%7D.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/cat_js/maps-api-v3/api/js/18/14/intl/es_ALL/%7Bcontrols%7D.js"></script></head>


<body  onunload="GUnload()"> 
    
    <div id="panel0"  class="ocultar">
        <h1>No existe ese organismo</h1>
        </div>

    <div id="panel1" class="mostrar">
<!-- <a href="#" onclick="TabbedPanels1.showPanel('iau'); return false;">iau</a><br /> -->

<div id="informacion">
   
    <div id="info_page_entry_title">
            <br> <?php echo $var1 ?>
             
              </div>  
         </div>
     
     <br>
     <br>
       
     <br>
   
<div >
 <div > 
  <div class="VTabbedPanels" id="TabbedPanels1" >
      <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab TabbedPanelsTabHover TabbedPanelsTabFocused TabbedPanelsTabSelected" tabindex="1" id="biodata" onclick="OcultarMapa()"><font size="2">Organism Information</font></li> 
            <li class="TabbedPanelsTab" tabindex="2" id="capsid" onclick="OcultarMapa()"><font size="2">Macroscopic Morphology</font></li> 
            <li class="TabbedPanelsTab" tabindex="3" id="foldavirus" onclick="OcultarMapa()"><font size="2">Microscopic Morphology</font></li>
            <li class="TabbedPanelsTab" tabindex="4" id="iau" onclick="OcultarMapa()"><font size="2">Growth characteristics</font></li> 
            <li class="TabbedPanelsTab" tabindex="5" id="phipsi" onclick="OcultarMapa()"><font size="2">Preservation of Strains</font><br> </li>
            <li class="TabbedPanelsTab" tabindex="6" id="annotations" onclick="OcultarMapa()"><font size="2">DNA</font></li>
            <li class="TabbedPanelsTab" tabindex="7" id="relatedVirus" onclick="OcultarMapa()"><font size="2">Genetic Data</font></li>
<!--            <li class="TabbedPanelsTab" tabindex="8" id="PLANT" onclick="togle_display(0)">Plant Information</li>-->
            <li class="TabbedPanelsTab" tabindex="9" id="METAB" onclick="OcultarMapa()"><font size="2">Metabolic Data</font></li>
            <li class="TabbedPanelsTab" tabindex="10" id="BIOA" onclick="OcultarMapa()"><font size="2">Bioassays Data</font></li>
            <li class="TabbedPanelsTab" tabindex="11" id="MAP" onclick="MostrarMapa()"><font size="2">Mapas</font></li>
      </ul> 
      <div class="TabbedPanelsContentGroup" style="height: auto">
           <div class="TabbedPanelsContent TabbedPanelsContentVisible" style="display: block;">
               
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="jquery-1.9.1.js"></script>
  <script src="jquery-ui.js"></script>

<style>
.trig{
color: greenyellow;
}
</style>
<style type="text/css">*{margin:0;padding:0;outline:none;}

  BODY{COLOR:BLACK;BACKGROUND:WHITE;FONT-FAMILY:ARIAL,VERDANA,HELVETICA;}

  P,TD{FONT-SIZE:11pt;}

  H1,H2,H3{FONT-FAMILY:TREBUCHET MS,ARIAL BLACK,ARIAL;}
    H1{FONT-SIZE:18pt;}
    H2{FONT-SIZE:14pt;FONT-FAMILY: ARIAL;} 
    H3{FONT-SIZE:12pt;FONT-WEIGHT:BOLD; FONT-FAMILY: ARIAL;}

  A{text-decoration:none;}
    A:link{COLOR:NAVY;}
    A:visited{COLOR:NAVY;}
    A:active{COLOR:RED;}
    A:hover{COLOR:RED;}
  
  #header{width:975px;height:105px;background:url(imgs/header.jpg);margin:0;padding:0;position:relative;}
    #header li{margin:0;padding:0;list-style:none;position:absolute;top:0;}
    #header li,#header a{height:105px;display:block;outline:none;}

  #panel1b{left:0;width:90px;border:0 solid red;}
    #panel1b a:hover{background:transparent url(imgs/header.jpg) 0 -105px no-repeat;}

  .sitemap{margin-left:30px;}
  #mySelect{position:absolute;top:66px;left:340px;width:800px;}
  #SelectModel{border:0 solid green;float:left;}
  #searchPDBID{border:0 solid red;float:left;margin:1px 0 0 50px;}
  .select{font-family:arial;font-size:8pt;}
  #menubar{position:absolute;top:21px;left:125px;width:900px;height:40px;margin:0;border:0 solid black;}

  #MenuBar1 li{width:115px;font-size:.8em;font-weight:bold;text-align:center;}
    #MenuBar1 li.highlight a{color:#e07d00;}
    #MenuBar1 li.highlight a:hover{color:white;}
    #MenuBar1 ul li a.MenuBarItemSubmenu{background-image:url(Spry_P1_6_10-01/widgets/menubar/SpryMenuBarRightHover.gif);background-repeat:no-repeat;
                    background-position:95% 50%;}
    #MenuBar1 ul li a{width:15em;font-size:1.0em;text-align:left;color:#fff;background-color:#7897a0;}
    #MenuBar1 ul li a:hover{color:#ffee4a;}
                    A.ctl0:link{color:black;text-decoration:none;}
                    A.ctl0:visited{color:black;text-decoration:underline;}
                    A.ctl2:link{color:red;text-decoration:none;}
                    A.ctl2:visited{color:black;text-decoration:underline;}
                    A.ctl3:link{color:green;text-decoration:none;}
                    A.ctl3:visited{color:black;text-decoration:underline;}
                    A.ctl5:link{color:blue;text-decoration:none;}
                    A.ctl5:visited{color:black;text-decoration:underline;}
                    A.ctl6:link{color:magenta;text-decoration:none;}
                    A.ctl6:visited{color:black;text-decoration:underline;}

   .resume,.menu,.titlebar,.small,.smaller,.smallest,.smbold,.tiny,.smallred,.smallerred,.smallestred,.smboldred,.tinyred,.smallblue,.smallerblue,
   .smallestblue,.smboldblue,.tinyblue,li{font-family:ARIAL,Helvetica,VERDANA;}
     .menu{font-size:3pt;color:black;}
     .titlebar{font-size:11pt;color:black;}
     .small{font-size:.75em;color:black;}
     .smaller{FONT-SIZE:9PT;COLOR:BLACK;font-weight:normal;}
     .smallest{FONT-SIZE:8PT;COLOR:BLACK;}
     .smbold{FONT-SIZE:8PT;COLOR:BLACK;FONT-WEIGHT:BOLD;}
     .tiny{FONT-SIZE:7PT;COLOR:BLACK;}
     .smallred{font-size:10pt;color:red;}
     .smallerred{FONT-SIZE:9PT;COLOR:red;}
     .smallestred{FONT-SIZE:8PT;COLOR:red;}
     .smboldred{FONT-SIZE:8PT;COLOR:red;FONT-WEIGHT:BOLD;}
     .tinyred{FONT-SIZE:7PT;COLOR:red;}
     .smallblue{font-size:10pt;color:MidnightBlue;}
     .smallerblue{FONT-SIZE:9PT;COLOR:MidnightBlue;}
     .smallestblue{FONT-SIZE:8PT;COLOR:MidnightBlue;}
     .smboldblue{FONT-SIZE:8PT;COLOR:MidnightBlue;FONT-WEIGHT:BOLD;}
     .tinyblue{FONT-SIZE:7PT;COLOR:MidnightBlue;}

  .tooltip_content{background-color:#FFF;color:#006;padding:10px;border:1px solid black;width:400px;}
    .tooltip_content img{margin-right:10px;}
  .trigger01,.trigger02,.trigger03,.trigger04,.trigger05,.trigger06{font-size:.8em;}

  .biodata_table{
      margin:5px 0 5px 5px;
      display:block;
      float:left;
      position:relative;
      border:#cde solid 1px;}
    .biodata_table_title{display:block;background-color:white;margin:10px 0 5px 0;padding-left:5px;background-image:url("imgs/titlebar.jpg");
                         background-position:center;}
    .biodata_table table{margin-left:8px;}
    .biodata_table td{padding-top:5px;}
    .biodata_table A{text-decoration:none;font-weight:bold;}
    .biodata_table A:link{COLOR:NAVY;}
    .biodata_table A:visited{COLOR:NAVY;}
    .biodata_table A:active{COLOR:RED;}
    .biodata_table A:hover{COLOR:RED;}

  .cntrl_img_btns img{border:#000 solid 0;margin:0 10px 0 10px;cursor:pointer;}
  #clear_labels{margin:5px;cursor:pointer;}
  #info_page_entry_title{
      background:#5f72b3;
      border:1px solid #999;
      width:1000px;
      margin:5px 0 2px 5px;
      text-align:center;
      font-family:Verdana,Arial,Helvetica;
                         font-weight:bold;
                         color:#fff;}
  #our_lab{
      position:absolute;
      background-color:#cde;
      font-size:.6em;
      text-align:center;
      top:195px;left:5px;width:95px;padding:3px;border:#5f72b3 solid 1px;
           -moz-border-radius:5px;-webkit-border-radius:5px;}
          fieldset{margin:5px;padding:0 10px 0 10px;font-size:.75em;}
          legend{background-color:#cde;border:0 solid #333;margin:0;padding:0 3px 0 3px;text-transform:uppercase;}

  #centerstatus {
     position: absolute;
     top: 230px; 
  }

  #colorInfo {
     position: absolute;
     top: 234px;
  }

  .jmol_cntrl_grp{margin:10px 0 10px 5px;border:#000 solid 0;}
  #jmol_wrap{position:absolute;left:-2000px;border:#0f0 solid 0;background-color:#a7bfdb;height:418px;width:853px;}
  #jmol{float:left;display:block;width:540px;height:410px;border:#5f72b3 solid 1px;margin:3px;}
  #jmol_controls{float:left;display:block;background-color:#a7bfdb;border:#fff dashed 0;margin-left:10px;height:100%;}

  #radio_rep,#radio_color,#span_Checkexp{margin:0 0 15px 15px;}
  .exp_phipsi{width:75%;text-align:justify;margin:30px auto 20px auto;}
  .exp_phipsi_img{border:#000 dashed 0;display:block;margin:10px auto;}
  .right{float:right;}
</style>



?<style type="text/css">
div.scroll_vertical {
	height: 390px; 
	width: 500px;
	overflow: auto;
	border: 1px solid #666;
	background-color: #FDFAF9;
	padding: 8px;
}
div.scroll_vertical1{
	height: 380px; 
	width: 300px;
	overflow: auto;
	border: 1px solid #666;
	background-color: #FDFAF9;
	padding: 8px;
}
.cajas{
	background:#FFF;
	border:1px solid #00BFFF;
	height: 30px;
	margin-left:20px;
	margin-right:20px;
	border-radius:5px;
}
textarea:focus {
  
    box-shadow: 0 0 5px 3px #00BFFF;
    height: 100px;
}
.button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Helvetica, Arial, Sans-Serif;
   text-decoration: none;
   vertical-align: middle;
   }
   
 #PanelImag
   {
       
     
       float: left;
     
       
       
   }
</style>
    

<table border="0" width="830px"><tbody><tr><td>
      
<p>
     
                </p>
   <div class="biodata_table " >
       <div class="scroll_vertical"> 
         <form name="Organism_Information" method="POST" action="" >
   <table border="0">
      <tbody>
          <tr>
       
<!--        <td width="160" bgcolor="#ccddee" valign="middle" align="center">
            <span class="small">* Org ID :</span>
        </td>-->
        <!--<td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">-->
            <b>
             <input  class="cajas" type="hidden" name="org" value="<?php echo $var?>" />
            </b>  
        <!--</td>-->
      </tr>
      <tr>
         <td><span class="small"><h5>* Alias:</h5> </span></td>
          <td class="small" align="center">
              <b>
             <input class="cajas"  type="text" name="alias" value="<?php echo $var1?>" required />
            </b>  
          </td>
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td>
            <span class="small"><h5>* Isolated by: &nbsp;&nbsp;&nbsp </h5></span>
        </td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas'  name=insolated id=insolated>"; 

                           $sql="SELECT Name FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option value=".$var2.">".$var2."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?> 
           
             
            </b>  
      </tr>
      <tr>
          <td valign="TOP">
              <span class="small"><h5>* Date of Isolation: &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp</h5> </span>
          </td>
          <td class="small" align="center"> 
              <b>
             <input class="cajas"  type="date" name="dateofinsol" value="<?php echo $var3?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
        <td><span class="small"><h5>* Origin:</h5> </span></td>
      
    
      <td class="small" align="center">
         <b>
<!--             <input type="text" name="ori" value="" />-->
             
              <select class="cajas"  onChange="mostrar(this.value);" id="ori" name="ori">
             <option ><?php echo $var4?></option>
 <option value="Plant">Plant-associated</option>
<option value="Host">Host-associated</option>
<option value="Free">Free-living</option> 

</select>
             
             <select  class="cajas"  id="proveedor"  name="proveedor" onchange="MyC();">
			 <option ><?php echo $var124?></option>  
		</select>
             <select id="producto"   class="cajas"  name="producto" style="display:none">
			<option ><?php echo $var125?></option>  
		</select>
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small"><h5>Comments:</h5> </span></td>
        <td class="small" align="center">
          <b>
             <input  class="cajas"  type="text" name="com" value="<?php echo $var5?>" />
            </b>  
          </td>
    </tr> 
        <tr>
      
        <td class="small" align="center">
          <b>
              <input  class="cajas"  type="hidden" name="sub" value="<?php echo $var121?>" />
            </b>  
              <input type="hidden" name="lab" value="<?php echo $lab?>" />
          </td>
    </tr> 
    
  
    
    <tr align="center" id="primerboton">
<td colspan="2">
    <input class="button" type="button" name="btn1" value="Update" onclick="return ValidarFormulario(Organism_Information);"/> 
  
    <input class="button" type="button" name="btns" value="Image" onclick="subirima1();"/> 
</td>

</tr> 
<script src="jquery-latest.js"></script>
<script type="text/JavaScript">

</script>


    
     
   


   
    
   </tbody></table>  
           
        </form>
           <br>
           <br>
           <br>
         
           <div id="sube1"  style="display:none"> 
    <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
   <input type="hidden" name="txttabla" value="organismo"/>

<tr>
<td>Description</td>
<td><input  class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input  class="cajas" type="file" name="imagen"  /></td>
</tr>
 
<tr>

    <td><input  class="button" type="submit" name="btnterceri"  value="Aceptar"/></td>
</tr>
        </table>
        </form>
              </div>
<?php
     if(isset($_POST["btnterceri"])){
         
         	$btn=$_POST["btnterceri"];
                if($btn=="Aceptar"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
if( $nombreImagen=="")
{

      echo "<script> $.bootstrapGrowl('No insertado'); </script>";
    
}

else{
    global  $rutaServidor,$rutaTemporal,$nombreImagen,$rutaDestino;
    
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$tabla=$_POST['txttabla'];
$sql="INSERT INTO datos( org_id,tabla,ruta,descripcion ) values ('".$org."','".$tabla."','".$rutaDestino."','".$descrip."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
  
    echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    

}

}

                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>    
   </div>
   </div>    
                 
 
               <div class="biodata_table1">
              <div class="scroll_vertical1">
                      
      <?php
  $e="entra"; 
if($e=="entra")
 {
    
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from datos where org_id='$var' and tabla='organismo' ");
while($filas=  mysql_fetch_array($consul)){
  
$esorg=$filas['id'];
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
    
?>

       <div id="PanelImag">  
<form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">    
    
            
<?php echo $desc;?>
   
      <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $esorg;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
   
  <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $ruta;?>" width="60" height="50"> </a>

        


         </form>
    </div>  
<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>
   
  
  
             </div>
                
</td></tr></tbody></table>



<!------###-END MAIN WINDOW STUFF-###----->
<script>
$('.trig').tooltip();
</script> 
</div> 
          
          
      <!------------------------------Macros-->
     
       <div class="TabbedPanelsContent" style="display: none;">
      <table border="0" width="830px"><tbody><tr><td>

 <div class="biodata_table " >
<div class="scroll_vertical"> 
     <form name="Macroscopic_Morphology" method="POST" action="" >
    <center>
     <table border="0">
      <tbody>
          
      <input type="hidden" name="cy" id="cy" value="<?php echo $var122?>">
      <input type="hidden" name="cx" id="cx" value="<?php echo $var123?>">

        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="mac" value="<?php echo $var6?>" />
                 <input type="hidden" name="txttabla" value="macro"/>
            </b>  
        </td>
     
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
         
             <input  class="cajas" type="hidden" name="org" value="<?php echo $var?>" />
             
        
       
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                 <?php 
                    echo"<select  class='cajas' name=medi id=medi >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
             echo "<option  value=".$var8.">".$var8."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
        
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
             <input  class="cajas" type="text" name="tempera" value="<?php echo $var9?>" />
            
</b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  class="cajas" type="text" name="agitacion" value="<?php echo $var10?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
             <input  class="cajas" type="datetime" name="age" value="<?php echo $var11?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Size: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  class="cajas" type="text" name="size" value="<?php echo $var12?>" />
            </b>  
          </td>
          
       <tr>
      <td><span class="small">Surface: </span></td>
        <td class="small" align="center">
          <b>
              <?php 
                   echo"<select  class='cajas' name=surface id=surface >"; 

                           $sql="SELECT Form FROM surface_morphology where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                              echo "<option  value=".$var13.">".$var13."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
           
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Color: </span></td>
      
     
      <td class="small" align="center">
         <b>
             
             <input  class="cajas" type="color" name="color" value="<?php echo $var14?>" />
            </b>  
          </td>
    </tr>
    <tr>
<!--      <td><span class="small">Photo: </span></td>-->
<!--        <td class="small" align="center">
              <?php 
//                   echo"<select  class='cajas' name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var15.">".$var15."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
           
          </td>-->
    </tr> 
        <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
            <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input  class="cajas" type="hidden" name="foto" value="1" />
         <tr align="center" id="segundoboton" >
<td colspan="2">
     
      <input  class="button" type="button" name="btn2" value="Update"  onclick="return ValidarFormulario1(Macroscopic_Morphology);"/> 
    <input  class="button" type="button" name="btns" value="Image"  onclick="subirima2();"/> 

</td>
</tr>



 <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
         
        
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
     
        <script src="jquery.bootstrap-growl.js"></script>
      
        



   
    
   </tbody></table> 
        
        <div id="MacrosOculto1" >
               <table border="0">
      <tbody>
          
      <input type="hidden" name="cy" id="cy" value="<?php echo $var122?>">
      <input type="hidden" name="cx" id="cx" value="<?php echo $var123?>">

        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="mac" value="<?php echo $var6?>" />
                 <input type="hidden" name="txttabla" value="macro"/>
            </b>  
        </td>
     
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
         
             <input  class="cajas" type="hidden" name="org" value="<?php echo $var?>" />
             
        
       
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                 <?php 
                    echo"<select  class='cajas' name=medi id=medi >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
             echo "<option  value=".$var8.">".$var8."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
        
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
             <input  class="cajas" type="text" name="tempera" value="<?php echo $var9?>" />
            
</b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  class="cajas" type="text" name="agitacion" value="<?php echo $var10?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
             <input  class="cajas" type="datetime" name="age" value="<?php echo $var11?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Size: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  class="cajas" type="text" name="size" value="<?php echo $var12?>" />
            </b>  
          </td>
          
       <tr>
      <td><span class="small">Surface: </span></td>
        <td class="small" align="center">
          <b>
              <?php 
                   echo"<select  class='cajas' name=surface id=surface >"; 

                           $sql="SELECT Form FROM surface_morphology where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                              echo "<option  value=".$var13.">".$var13."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
           
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Color: </span></td>
      
     
      <td class="small" align="center">
         <b>
             
             <input  class="cajas" type="color" name="color" value="<?php echo $var14?>" />
            </b>  
          </td>
    </tr>
    <tr>
<!--      <td><span class="small">Photo: </span></td>-->
<!--        <td class="small" align="center">
              <?php 
//                   echo"<select  class='cajas' name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var15.">".$var15."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
           
          </td>-->
    </tr> 
        <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
            <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input  class="cajas" type="hidden" name="foto" value="1" />
         <tr align="center" id="segundoboton" >
<td colspan="2">
     
      <input  class="button" type="button" name="btn2" value="Update"  onclick="return ValidarFormulario1(Macroscopic_Morphology);"/> 
    <input  class="button" type="button" name="btns" value="Image"  onclick="subirima2();"/> 

</td>
</tr>



 <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
         
        
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
     
        <script src="jquery.bootstrap-growl.js"></script>
      
        



   
    
   </tbody></table> 
            <div>
    </center>

     </form> 
     <div id="sube2"  style="display:none"> 
    <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
 <input type="hidden" name="txttabla" value="macro"/>

<tr>
<td>Description</td>
<td><input  class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input   class="cajas" type="file" name="imagen"  /></td>
</tr>

<tr>

    <td><input  class="button" type="submit" name="btndocum"  value="Aceptar"/></td>
</tr>
        </table>
        </form>
     </div>
    
<?php
     if(isset($_POST["btndocum"])){
         
         	$btn=$_POST["btndocum"];
                if($btn=="Aceptar"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$tabla=$_POST['txttabla'];
$sql="INSERT INTO datos( org_id,tabla,ruta,descripcion ) values ('".$org."','".$tabla."','".$rutaDestino."','".$descrip."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
   echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
   
}

                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>
     </div>
     </div>
  
      
       
           
          <div class="biodata_table1">
              <div class="scroll_vertical1">
  
             <?php
  $e="entra"; 
if($e=="entra")
 {
    $cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from datos where org_id='$var' and tabla='macro' ");
while($filas=  mysql_fetch_array($consul)){
$esorg=$filas['id'];
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
    
?>
  <div id="PanelImag">
          <form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">     
       
<?php echo $desc;?>
   
      <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $esorg;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
    
<br>  
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $ruta;?>" width="50" height="50"> </a>

        


</form>
</div>       
<?php
}
    	
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>

             </div>
</td></tr></tbody></table>
    </div>   
     
     
<!--      -----------------------Micro-->
      
          <div class="TabbedPanelsContent" style="display: none;">
               <table border="0" width="830px"><tbody><tr><td>
              <div class="biodata_table " >
              
            <div class="scroll_vertical">   
                
       <form name="Microscopic_Morphology" method="POST" action="" >          
   
     <table border="0">
      <tbody>
          <tr>
      
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="mic" value="<?php echo $var16?>" />
                
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                  <input  class="cajas" type="hidden" name="org" value="<?php echo $var17?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name: </span></td>
        <td class="small" align="center">
           <b>
                  <?php 
                   echo"<select  class='cajas' name=medi id=medi >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
              echo "<option  value=".$var18.">".$var18."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature: </span></td>
          <td class="small" align="center"> 
              <b>
             <input  class="cajas" type="text" name="tempera" value="<?php echo $var19?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Agitation: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  class="cajas" type="text" name="agitacion" value="<?php echo $var20?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Age: </span></td>
        <td class="small" align="center">
          <b>
             <input  class="cajas" type="datetime" name="age" value="<?php echo $var21?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Axis long: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input   class="cajas" type="text" name="axis_long" value="<?php echo $var22?>" />
            </b>  
          </td>
          
       
    <tr>
      <td><span class="small">*Axis short: </span></td>
        <td class="small" align="center">
          <b>
             <input  class="cajas" type="text" name="axis_short" value="<?php echo $var23?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE"> 
      <td><span class="small">Motility: </span></td>
  
      <td class="small" align="center">
          <select  class="cajas" name="molity">
               <option> <?php echo $var24?></option>
                <option>No</option>
                <option <?php echo $var24?> >Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Aggregates: </span></td>
        <td class="small" align="center">
          <select  class="cajas" name="aggregates">
              <option> <?php echo $var25?></option>
                <option>No</option>
                <option <?php echo $var25?>>Yes</option>
                </select></td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Biofilm formation: </span></td>
      
    
      <td class="small" align="center">
         <select class="cajas" name="biofilm">
             <option> <?php echo $var26?></option>
                <option>No</option>
                <option <?php echo $var26?>>Yes</option>
                </select></td>
    </tr>
    
    <tr>
      <td><span class="small">Gram test: </span></td>
        <td class="small" align="center">
          <select class="cajas" name="gram">
              <option> <?php echo $var27?></option>
                <option>Gram -</option>
                <option <?php echo $var27?>>Gram +</option>
                </select></td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Photo ID: </span></td>-->
      
    
<!--      <td class="small" align="center">
          <?php 
//                   echo"<select name=foto id=foto >"; 
//
//                           $sql="SELECT descripcion FROM datos"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                              echo "<option  value=".$var28.">".$var28."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
       
          </td>-->
    </tr>
    <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
      <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
     <input type="hidden" name="foto" id="foto" value="1"/>
 <tr align="center" id="tercerboton" >
<td colspan="2">
    
    <input class="button" type="button" name="btn3" value="Update" onclick="return ValidarFormulario2(Microscopic_Morphology);"/> 
   <input  class="button" type="button" name="btns" value="Image" onclick="subirima3();"/> 

</td>
</tr>

   
   
   </tbody></table> 
    
           
            </form>    
       
               
   <div id="sube3"  style="display:none"> 
                
 <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            
            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
<input type="hidden" name="txttabla" value="micro"/>

<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input  class="cajas" type="file" name="imagen"  /></td>
</tr>

<tr>

    <td><input class="button" type="submit" name="btnterceri"  value="Aceptar"/></td>
</tr>
        </table>
        </form>
   </div>
<?php
     if(isset($_POST["btnterceri"])){
         
         	$btn=$_POST["btnterceri"];
                if($btn=="Aceptar"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$t=$_POST['txttabla'];
$sql="INSERT INTO datos( org_id,ruta,descripcion ) values ('".$org."','".$t."','".$rutaDestino."','".$descrip."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
    echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
   
    
}

                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>

        
<script type="text/JavaScript">

</script>
               

</div>  
 
 </div>
                               
 <div class="biodata_table1">
  <div class="scroll_vertical1">
            
    <?php
         
  $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from datos where org_id='$var' and tabla='micro' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['id'];
$ruta=$filas['ruta'];
$desc=$filas['descripcion'];
    
?>
        <div id="PanelImag">
<form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $ruta;?>" width="50" height="50"> </a>

&nbsp;&nbsp;&nbsp
</form>
</div>

 </div>
    
    <?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>
 </div>
</tr></tbody></table>
  </div>
          
<!---------------------Growth--> 
         
         <div class="TabbedPanelsContent" style="display: none;">
               <table border="0" width="830px"><tbody><tr><td>
              <div class="biodata_table " >
              
                  <div class="scroll_vertical">
              <form name="Growth_characteristics" method="POST" action="" >             
    <center>
     <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="gro" value="<?php echo $var29?>" />
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
             <input class="cajas" type="hidden" name="org" value="<?php echo $var30?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">*Medium Name : </span></td>
        <td class="small" align="center">
           <b>
                <?php 
                   echo"<select class='cajas' name=medi id=medi >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option  value=".$var31.">".$var31."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Temperature solid: </span></td>
          <td class="small" align="center"> 
              <b>
             <input class="cajas" type="text" name="tempera" value="<?php echo $var32?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Time solid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="tiempo" value="<?php echo $var33?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Medium liquid: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=medium id=medium >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option  value=".$var34.">".$var34."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
              
            
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Temperature liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  class="cajas" type="text" name="temp_liq" value="<?php echo $var35?>" />
            </b>  
          </td>
          
       <tr>
      <td><span class="small">*Agitation time: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="agitation" value="<?php echo $var36?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*Time liquid: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="tim_liq" value="<?php echo $var37?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">*pH initial: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="ph_i" value="<?php echo $var38?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">*pH final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="ph_f" value="<?php echo $var39?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">*OD600 initia: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="od_i" value="<?php echo $var40?>" />
            </b>  
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
      <td><span class="small">*OD600 final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="od_f" value="<?php echo $var41?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Extra parameters: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="p_extra" value="<?php echo $var42?>" />
            </b>  
          </td>
    </tr> 
     <tr bgcolor="#CCDDEE">
<!--      <td><span class="small">Kinetics: </span></td>-->
      
    
      
          <?php 
//                   echo"<select class='cajas' name=kinetics id=kinetics >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//               echo "<option  value=".$var43.">".$var43."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
         <b>
             <input class="cajas" type="hidden" name="kinetics" value="<?php echo $var43?>" />
            </b>  
          </td>
    </tr>
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    
    
                   <tr align="center" id="cuartoboton" >
<td colspan="2">
    
    <input class="button" type="button" name="btn4" value="Update"onclick="return ValidarFormulario3(Growth_characteristics);"/> 
   <input class="button" type="button" name="btns" value="Document" onclick="subirima4();"/> 
</td>
</tr>

   
    
   </tbody></table> 
    </center>

              </form>
                   
                   
                   
                   
                   <script type="text/JavaScript">

//Cerramos el Script
</script>
<div id="sube4"  style="display:none"> 
  <form name="document" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


           
            <input type="hidden" name="orga" value="<?php echo $var?>"/>
            <input type="hidden" name="txttabla" value="grow"/>

<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Document</td>
<td><input  class="cajas" type="file" name="doc"  /></td>
</tr>

<tr>

    <td><input class="button" type="submit" name="btndocuart"  value="Aceptar"/></td>
</tr>
        </table>
        </form>
    </div> 
    <?php
     if(isset($_POST["btndocuart"])){
         
         	$btn=$_POST["btndocuart"];
                if($btn=="Aceptar"){
                
                    $rutaServidor='Documents_Strain';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion']; 
$org=$_POST['txtid'];
$name_or=$_POST['orga'];
$tab=$_POST['txttabla'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta) values ('".$descrip."','".$name_or."','".$tab."','".$rutaDestino."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
   echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>"; 
   
    
    
}
                 
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>
</div>  
 
 </div>
                            
 <div class="biodata_table1">
     <div class="scroll_vertical1">   
   
                     <?php
         
  $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from document where org_id='$var' and tabla='grow' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['Document_ID'];
$ruta=$filas['ruta'];
$desc=$filas['Name_doc'];
 $docum="Documents_Strain/kine.png";   
?>
           <div id="PanelImag">
       <form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 
      <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo  $docum;?>" width="50" height="50"> </a>

                </form>
        </div>
     

<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>

 </div>      

                     
                     </tr></tbody></table>
	
 
</div>
<!--------------------------Preservation          -->
          
          
                    
           <div class="TabbedPanelsContent" style="display: none;">
               <table border="0" width="830px"><tbody><tr><td>
             <div class="scroll_vertical">      
     <form name="Pres" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="pre" value="<?php echo $var44?>" />
            </b>  
        </td>
      </tr>
      <tr> 
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
                  <input class="cajas" type="hidden" name="org" value="<?php echo $var45?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Preservation Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=idM id=idM>"; 

                           $sql="SELECT Name FROM preservation_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var46.">".$var46."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date" value="<?php echo $var47?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                           $sql="SELECT Name FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                             echo "<option value=".$var48.">".$var48."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                    
            
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Number of vials: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="num" value="<?php echo $var49?>" />
            </b>  
          </td>
    </tr> 
    
    <tr>
      <td><span class="small">Volume of vials: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="volu" value="<?php echo $var50?>" />
            </b>  
          </td>
    </tr> 
    
        <tr bgcolor="#CCDDEE">

      <td><span class="small">* Storage ID: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <?php 
                   echo"<select class='cajas' name=sto id=sto>"; 

                           $sql="SELECT Name FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option value=".$var51.">".$var51."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">Comments: </span></td>
        <td class="small" align="center">
       
             <textarea  class="cajas" rows="10"  cols="30" name="com"  value="<?php echo $var114?>" />
           
          </textarea>
                </td>
    </tr> 
    
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
       <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
 

                   <tr align="center" id="quintoboton" >
<td colspan="2">
     
      <input class="button" type="button" name="btn5" value="Update" onclick="return ValidarFormulario4(Pres);"/> 
    

</td>
</tr>
   
    
   </tbody></table> 
    </center>
              
     </form>         
                 
                 
                 
                 <script type="text/JavaScript">

</script>
             </div>
	
 </td></tr></tbody></table>
</div>
          

<!--------------------------DNA         -->
          
          
                    
           <div class="TabbedPanelsContent" style="display: none;">
                  <div class="scroll_vertical"> 
     <form name="DNA" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="dna" value="<?php echo $var52?>" />
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  <input class="cajas" type="hidden" name="org" value="<?php echo $var53?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Extraction Method Name: </span></td>
        <td class="small" align="center">
           <b>
               <?php 
                   echo"<select class='cajas' name=ext id=ext>"; 

                           $sql="SELECT Name FROM extraction_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
               echo "<option value=".$var54.">".$var54."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Date of preservation: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input class="cajas" type="date" name="date" value="<?php echo $var55?>" />
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Concentration: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  class="cajas" type="text" name="con" value="<?php echo $var56?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Volume: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="vol" value="<?php echo $var57?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* User Name: </span></td>
      
    
      <td class="small" align="center">
         <b>
             
             <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                           $sql="SELECT Name FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var58.">".$var58."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            
            </b>  
          </td>
          
       <tr>
      <td><span class="small">* Storage Name: </span></td>
        <td class="small" align="center">
       
           <b>
                <?php 
                   echo"<select class='cajas' name=sto id=sto>"; 

                           $sql="SELECT Name FROM storage where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var59.">".$var59."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
            
            </b> 
                </td>
    </tr> 
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    

                   <tr align="center" id="sextoboton" >
<td colspan="2">
  
    <input  class="button" type="button" name="btn6" value="Update" onclick="return ValidarFormulario5(DNA);"/> 
    

</td>
</tr>
   
    
   </tbody></table> 
    </center>
              
     </form>         
<script type="text/JavaScript">

</script> 
	</div>

</div>
          

<!--------------------------Genetic Data -->
          
          
                    
           <div class="TabbedPanelsContent" style="display: none;">
                  <div class="scroll_vertical"> 
     <form name="Generic_Data" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="generi" value="<?php echo $var60?>" />
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>-->
<!--          <td class="small" align="center">-->
              <b>
             <input  class="cajas" type="hidden" name="orgid" value="<?php echo $var61?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Taxonomic lineage: </span></td>
        <td class="small" align="center">
           <b>
             <input class="cajas" type="text" name="taxo" value="<?php echo $var62?>" />
            </b>  
      </tr>
      <br>
      <tr><td valign="TOP"><span class="small">* Gene Name: </span></td>
          <td class="small" align="center"> 
              <?php 
                   echo"<select class='cajas' name=gen id=gen>"; 

                           $sql="SELECT Name FROM gene where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var63.">".$var63."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
               
      </td>
    </tr>
    <br>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Sequencing Method Name: </span></td>
      
    
      <td class="small" align="center">
         
          
           <?php 
                   echo"<select class='cajas' name=sequ id=sequ>"; 

                           $sql="SELECT Name FROM sequencing_method where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var64.">".$var64."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
         
          </td>
    </tr>
    
    <tr>
      <td><span class="small">* Cured sequence: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="cur" value="<?php echo $var65?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="Com" value="<?php echo $var66?>">
                    </textarea>
             
          </td>
          
      
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="septimoboton" >
<td colspan="2">
   
    <input class="button" type="button" name="btn7" value="Update" onclick="return ValidarFormulario6(Generic_Data);"/> 
    

</td>
</tr>
   
    
   </tbody></table> 
    </center>
              
     </form>         
 <script type="text/JavaScript">

//Cerramos el Script
</script>
                  </div>

</div>



<!--------------------------Plant info -->
          
<!--          
                    
           <div class="TabbedPanelsContent" style="display: none;">
                  <div class="scroll_vertical"> 
     <form name="Plant_Info" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="plan" value="<?php echo $var67?>" />
            </b>  
        </td>
      </tr>
      <tr>
         <td><span class="small">*Org Name: </span></td>
          <td class="small" align="center">
              <b>
             <input type="text" name="org" value="<?php echo $var?>" />
            </b>  
          </td>
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Common Name: </span></td>
        <td class="small" align="center">
           <b>
             <input type="text" name="com" value="<?php echo $var69?>" />
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">Scientific Name: </span></td>
          <td class="small" align="center"> 
              <b>
                  <input type="text" name="sci" value="<?php echo $var70?>" />
            </b>  
      </td>
    </tr>
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">Gender: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input type="text" name="gen" value="<?php echo $var71?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Species: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="spe" value="<?php echo $var72?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Date of collection: </span></td>
       <td class="small" align="center">
          <b>
              <input type="date" name="date" value="<?php echo $var73?>" />
            </b>  
          </td>
          
          </tr>
          <tr>
      <td><span class="small">* Collected by: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="col" value="<?php echo $var74?>" />
            </b>  
          </td>
    </tr> 
          
       <tr bgcolor="#CCDDEE">
      <td><span class="small">Site Alias: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="sia" value="<?php echo $var75?>" />
            </b>  
          </td>
          
          </tr>
    
        <tr>
      <td><span class="small">* Site Directions: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="sid" value="<?php echo $var76?>" />
            </b>  
          </td>
    </tr> 
    
    
      <tr bgcolor="#CCDDEE">
      <td><span class="small">Longitud: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="lon" value="<?php echo $var77?>" />
            </b>  
          </td>
          
          </tr>
          
          
              <tr>
      <td><span class="small">Latitud: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="Lat" value="<?php echo $var78?>" />
            </b>  
          </td>
    </tr> 
    
       <tr bgcolor="#CCDDEE">
      <td><span class="small">Altitude: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="alt" value="<?php echo $var79?>" />
            </b>  
          </td>
          
          </tr>
          
          
                    <tr>
      <td><span class="small">Tissues: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="tis" value="<?php echo $var80?>" />
            </b>  
          </td>
    </tr> 
    
        <tr bgcolor="#CCDDEE">
      <td><span class="small">Heigth: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="hei" value="<?php echo $var81?>" />
            </b>  
          </td>
          
          </tr>
          
          
                     <tr>
      <td><span class="small">Width: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="wid" value="<?php echo $var82?>" />
            </b>  
          </td>
    </tr> 

    
         <tr bgcolor="#CCDDEE">
      <td><span class="small">* Physiological state: </span></td>
       <td class="small" align="center">
          <b>
             <input type="text" name="phy" value="<?php echo $var83?>" />
            </b>  
          </td>
          
          </tr>
          
          
                       <tr>
      <td><span class="small">* Neighboring plants: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="nei" value="<?php echo $var84?>" />
            </b>  
          </td>
    </tr> 
    
    
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Comments: </span></td>
         <td class="small" align="center">
      <textarea rows="10"  cols="30" name="comm" value="<?php echo $var85?>">
                    </textarea> 
          </td>
          
          </tr>
          
          
                       <tr>
      <td><span class="small">Photo ID: </span></td>
        <td class="small" align="center">
          <b>
             <input type="text" name="pho" value="<?php echo $var86?>" />
            </b>  
          </td>
    </tr> 
    
                   <tr align="center" id="octavoboton" >
<td colspan="2">
    <input type="submit" name="btn8" value="Update"/> 
    <input type="submit" name="btn8"value="Delete"/>

</td>
</tr>
   
    
   </tbody></table> 
    </center>
              
     </form>         
 
                  </div>

</div>-->


<!--------------------------Metabolic Data -->
          
          
                    
           
         <div class="TabbedPanelsContent" style="display: none;">
               <table border="0" width="830px"><tbody><tr><td>
              <div class="biodata_table " >
              
                  <div class="scroll_vertical">
               <form name="Metabolic_Data" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
       
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="metid" value="<?php echo $var87?>" />
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  <input class="cajas" type="hidden" name="orgid" value="<?php echo $var88?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* User Name: </span></td>
        <td class="small" align="center">
           <b>
               
               
               <?php 
                   echo"<select class='cajas' name=use id=use>"; 

                           $sql="SELECT Name FROM user where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                echo "<option value=".$var89.">".$var89."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Medium Name: </span></td>
          <td class="small" align="center"> 
              <b>
                  
                  <?php 
                   echo"<select class='cajas' name=med id=med >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                echo "<option  value=".$var90.">".$var90."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
                  
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Temperature: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="tem" value="<?php echo $var91?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Agitation: </span></td>
        <td class="small" align="center">
          <b>
             <input  class="cajas" type="text" name="agit" value="<?php echo $var92?>" />
            </b>  
          </td>
    </tr> 
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Time: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input  class="cajas" type="time" name="time" value="<?php echo $var93?>" />
            </b>  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* pH_initial: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="phi" value="<?php echo $var94?>" />
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* pH_final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="phf" value="<?php echo $var95?>" />
            </b>  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* OD600_initial: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="odi" value="<?php echo $var96?>" />
            </b>  
          </td>
    </tr> 
    
    
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* OD600_final: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="odf" value="<?php echo $var97?>" />
            </b>  
          </td>
    </tr>
    
      <tr>
      
       
          <b>
              <?php  
//                   echo"<select name=fra id=fra >"; 
//
//                         $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                           echo "<option  value=".$var98.">".$var98."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
             
            </b>  
        
    </tr> 
    
    <tr bgcolor="#CCDDEE">
      
      
    
     
         <b>
             <?php  
//                   echo"<select name=chr id=chr >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                            echo "<option  value=".$var99.">".$var99."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
             
            </b>  
       
    </tr>
    
      <tr>
    
           <b>
                <?php  
//                   echo"<select name=mas id=mas >"; 
//
//                          $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//               echo "<option  value=".$var100.">".$var100."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      {  
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
             
            </b>  
        
    </tr> 
       
      
      
    
      
              <?php  
//                   echo"<select name=nmr id=nmr >"; 
//
//                           $sql="SELECT Name FROM document"; 
//                           $result=mysql_query($sql); 
//                           $i=0; 
//                           echo "<option  value=".$var101.">".$var101."</option>\n"; 
//                 while ($row=mysql_fetch_row($result)) 
//                      { 
//              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
//                       } 
//                  echo "</select>"; 
                     ?>
                   
             
          
          
   
    
    
    <tr>
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea class="cajas" rows="10"  cols="30" name="com" value="<?php echo $var102?>">
                    </textarea>
             
          </td>
          
      
    
     <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    


                   <tr align="center" id="novenoboton" >
<td colspan="2">
   
     <input class="button" type="button" name="btn9" value="Update" onclick="return ValidarFormulario7(Metabolic_Data);"/> 
   <input  class="button" type="button" name="btns" value="Document" onclick="subirima5();"/> 
 
</td>
</tr>
   
    
   </tbody></table> 
    </center>
              
     </form> 
                      
 <script type="text/JavaScript">

</script>

<div id="sube5"  style="display:none"> 
<form name="document" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="table" value="Metabolic"/>
            <input type="hidden" name="orga" value="<?php echo $var?>"/>

<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Document</td>
<td><input class="cajas" type="file" name="doc"  /></td>
</tr>
<tr>
<td>Type</td>
<td><select  class="cajas" name="cbotype">
<option>Fractionation_strategy</option>
<option > Chromatograms</option>
<option>Mass_spectra</option>
<option >  NMR</option>
</select></td>
</tr>
<tr>

    <td><input class="button" type="submit" name="btnquinto"  value="Aceptar"/></td>
</tr>
        </table>
        </form>
    </div>
    <?php
     if(isset($_POST["btnquinto"])){
         
         	$btn=$_POST["btnquinto"];
                if($btn=="Aceptar"){
                 
                    $rutaServidor='Documents_Strain';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion'];

$name_or=$_POST['orga'];
$ty=$_POST['cbotype'];
$ta=$_POST['table'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta,type) values ('".$descrip."','".$name_or."','".$ta."','".$rutaDestino."','".$ty."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
 echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
    
    
}

                    
                }
         
         
         
         
         
         
     }
        
        
        
        
        
        ?>
            
       </div>
                                  </div>
<div class="biodata_table1">
      <div class="scroll_vertical1">  
      
            <?php
        $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from document where org_id='$var' and tabla='Metabolic' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['Document_ID'];
$ruta=$filas['ruta'];
$desc=$filas['Name_doc'];
$typo=$filas['type'];
$imag="Documents_Strain/".$typo.".png";
?>
           <div id="PanelImag">
           <form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $imag;?>" width="50" height="50"> </a>
</form>
                   </div>
              


<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>
</div>
                     
                     </tr></tbody></table>
</div>





<!--------------------------Biossay-->
          
          
           <div class="TabbedPanelsContent" style="display: none;">
               
               <table border="0" width="830px"><tbody><tr><td>
                              <div class="biodata_table"> 
                  <div class="scroll_vertical"> 
     <form name="Bioassays" method="POST" action="">          
    <center>
     <table border="0">
      <tbody>
          <tr>
        
        <td width="280" bgcolor="#ffffff" valign="middle" align="center" class="small">
            <b>
                <input type="hidden" name="bio" value="<?php echo $var103?>" />
            </b>  
        </td>
      </tr>
      <tr>
<!--         <td><span class="small">* Org Name: </span></td>
          <td class="small" align="center">-->
              <b>
                  <input class="cajas" type="hidden" name="orgi" value="<?php echo $var104?>" />
            </b>  
<!--          </td>-->
      </tr>
      
      <tr bgcolor="#CCDDEE">
        <td><span class="small">* Assay Type Name: </span></td>
        <td class="small" align="center">
           <b>
                    <?php 
                   echo"<select class='cajas' name=assa id=assa>"; 

                           $sql="SELECT Name FROM assay_type where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                  echo "<option value=".$var105.">".$var105."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
           
            </b>  
      </tr>
      <tr><td valign="TOP"><span class="small">* Medium Name: </span></td>
          <td class="small" align="center"> 
              <b>
                   <?php 
                   echo"<select class='cajas' name=medi id=medi >"; 

                           $sql="SELECT Name FROM medium where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                           echo "<option  value=". $var106.">". $var106."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option  value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
               
            </b>  
      </td>
    </tr>
    <tr bgcolor="#CCDDEE">
      <td><span class="small">* Temperature: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="temp" value="<?php echo $var107?>" />
            </b>  
          </td>
    </tr>
    
    <tr>
      <td><span class="small">Inhibition: </span></td>
        <td class="small" align="center">
          <b>
             <input class="cajas" type="text" name="inh" value="<?php echo $var108?>" />
            </b>  
          </td>
    </tr> 
    
     <tr bgcolor="#CCDDEE">
      <td><span class="small">Inhibition measurament: </span></td>
      
    
      <td class="small" align="center">
         <b>
             <input class="cajas" type="text" name="inm" value="<?php echo $var109?>" />
            </b>  
          </td>
    </tr>
    
      <tr>
      <td><span class="small">* Antagonist strain: </span></td>
        <td class="small" align="center">
          <b>
               <?php 
                   echo"<select class='cajas' name=anta id=anta>"; 

                           $sql="SELECT Alias FROM organism_information where lab='$lab'"; 
                           $result=mysql_query($sql); 
                           $i=0; 
                            echo "<option value=".$var110.">".$var110."</option>\n"; 
                 while ($row=mysql_fetch_row($result)) 
                      { 
              echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
                       } 
                  echo "</select>"; 
                     ?>
             
            </b>  
          </td>
    </tr> 
    
    <tr bgcolor="#CCDDEE">
     
      
    
      
         <b>
             <input type="hidden" name="pho" value="<?php echo $var111?>" />
            </b>  
      
    </tr>
    
      
    
    <tr>
      <td><span class="small">Comments: </span></td>
      <td class="small" align="center">
      <textarea  class="cajas" rows="10"  cols="30" name="com" value="<?php echo $var112?>">
                    </textarea>
             
          </td>
          
       <input type="hidden" name="sub" id="sub" value="<?php echo $consul3?>"/>
    
     <input type="hidden" name="lab" id="lab" value="<?php echo $lab?>"/>
    
    

                   <tr align="center" id="decimoboton" >
<td colspan="2">
 
 <input  class="button" type="button" name="btn10" value="Update" onclick="return ValidarFormulario8(Bioassays);"/> 
  <input class="button" type="button" name="btns" value="Document" onclick="subirima6();"/>    

</td>
</tr>
   
    
   </tbody></table> 
    </center>
              
     </form>         

                  <script type="text/JavaScript">

</script>
<div id="sube6"  style="display:none"> 
 <form name="image" id="subeima" action="" method="post" enctype="multipart/form-data">
        <table border="2">


            <input type="hidden" name="txtid" value="<?php echo $var?>"/>
            <input type="hidden" name="metid" value="bio" />


<tr>
<td>Description</td>
<td><input class="cajas" type="text" name="descripcion"  /></td>
</tr>
<tr>
<td>Image</td>
<td><input class="cajas" type="file" name="doc"  /></td>
</tr>

<tr>

    <td><input class="button" type="submit" name="btnsext"  value="Aceptar"/></td>
</tr>
        </table>
        </form>
    </div>
        <?php
     if(isset($_POST["btnsext"])){
         
         	$btn=$_POST["btnsext"];
                if($btn=="Aceptar"){
                
                    $rutaServidor='Ima';
$rutaTemporal=$_FILES['doc']['tmp_name'];
$nombreImagen=$_FILES['doc']['name'];
$rutaDestino=$rutaServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$descrip=$_POST['descripcion'];
$org=$_POST['txtid'];
$tabla=$_POST['metid'];
$sql="INSERT INTO document( Name_doc,Org_ID,tabla,ruta) values ('".$descrip."','".$org."','".$tabla."','".$rutaDestino."') ";
$resp=  mysql_query($sql,$cn);
if($resp){
     echo "<script> $.bootstrapGrowl('It was inserted correctly'); </script>";
    
    
    
    
}
                 
                }
         
         
         
         
         
         
     } 
        
        
        
        
        
        ?>
                  </div>
                              </div>
                               
                               
                               <div class="biodata_table1">
      <div class="scroll_vertical1">  
      
	
       
            <?php
      
    $e="entra"; 
if($e=="entra")
 {
    		$cod=$_SESSION['sear'];
                
		
		$sql="select * from organism_information where Alias='$cod'";
		$cs=mysql_query($sql,$cn);
                
          
		while($resul=mysql_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
                        $var5=$resul[5];
                        	
			}
                        
             $cod=$_SESSION['sear'];
             $consul=  mysql_query("Select * from document where org_id='$var' and tabla='bio' ");
while($filas=  mysql_fetch_array($consul)){
     $id_2=$filas['Document_ID'];
$ruta=$filas['ruta'];
$desc=$filas['Name_doc'];
$ima="Ima/bio.png";
?>
          <div id="PanelImag">
           <form  name="primerIma" method="post" action="EliminarFoto.php" onsubmit="return confirmation()">
<?php echo $desc;?> 
  <input type="hidden"  name="Eo"  id="Eo" value="<?php echo  $id_2;?>">
      <input type="submit"  name="submitButtonName"  id="submitButtonName" value="x" >
 <br>
<a href="<?php print_r($ruta) ;?>" target="_blank"><img src="<?php echo $ima;?>" width="50" height="50"> </a>

</form>
                   </div>
<?php
}
             
//             <a href="#" target="_blank"><img border="0" src="Imagenes/Fotos.png" name="pic1" width="158px"></a>
 }
            ?>

              </div> 

                      
                     </tr></tbody></table>

</div>
   <div class="TabbedPanelsContent" style="display: none;">

  
 

    

  
          
</div>
           
         


<!------###-END MAIN WINDOW STUFF-###----->
</div> 
       
          
   
  
 
           
  
 
  
</div> 
          
          
          
         
          
          
          
          
          
          
      </div> 
  </div>
 </div> 
  
    <div id="mapaoculto" > 
     </div> 
         <?php 
  
  $entrada="hi";
  if($entrada=="hi")
  {
 global $var;
if($var==""){
    
     
    
    ?>
<script type="text/JavaScript">
     
 
               
      
    var elem=document.getElementById("panel0");
    
    elem.className="mostrar";
    var el=document.getElementById("panel1");
    
    el.className="ocultar";
    </script>
<?php   
}
  } 
?>
    
    
    
    
       <?php 
if($consul1=="Guest"){
    
     
    
    ?>
<script type="text/JavaScript">
    
    document.getElementById('primerboton').style.display='none';
        document.getElementById('subeima').style.display='none';
    document.getElementById('segundoboton').style.display='none';
    document.getElementById('tercerboton').style.display='none';
        document.getElementById('cuartoboton').style.display='none';
            document.getElementById('quintoboton').style.display='none';
                document.getElementById('sextoboton').style.display='none';
                    document.getElementById('septimoboton').style.display='none';
                        document.getElementById('novenoboton').style.display='none';
                            document.getElementById('decimoboton').style.display='none';
      
    </script>
<?php   
}
?>


  <!--Initialize the Tabbed Panel widget object-->
  <script type="text/javascript">
         var TP1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
  </script> 

 

</body>

</html>

 



       
       
        <script type="text/javascript">
            
            
            
            function confirmation() {
    if(confirm("Do you want to remove the item?"))
    {
        return true;
    }
    return false;
            }
function EliOrga(form)
{
   

 if (form.Eo.value==""){
alert("Tiene que escribir su edad");

return 0;
}
 if (form.Eo.value<6){
alert("La edad debe ser mayor de 6 a�os, lo siento!");

return 0;
}
 

form.submit();
              
      
  
     
    
}
function mensaje() 
{   


            $(function() {
                $.bootstrapGrowl("This is a test.");
                
                setTimeout(function() {
                    $.bootstrapGrowl("This is another test.", { type: 'success' });
                }, 1000);
                
                setTimeout(function() {
                    $.bootstrapGrowl("Danger, Danger!", {
                        type: 'danger',
                        align: 'center',
                        width: 'auto',
                        allow_dismiss: false
                    });
                }, 2000);
                
                setTimeout(function() {
                    $.bootstrapGrowl("Danger, Danger!", {
                        type: 'info',
                        align: 'left',
                        stackup_spacing: 30
                    });
                }, 3000);
            });
        }
        
        
 function ValidarFormulario(form) 
{    
     
    
 continuar=true;
   if( form.alias.value=="" || form.insolated.value=="" 
           || form.dateofinsol.value=="" || form.ori.value=="NULL")
        {
           $.bootstrapGrowl("Datagrid with parentheses are required");   
      
        continuar=false;   
        }
        
        
    else if(continuar==true)
    {
        numero=this.document.Organism_Information.org.value;
        ali=this.document.Organism_Information.alias.value;
        ins=this.document.Organism_Information.insolated.value;
        dat=this.document.Organism_Information.dateofinsol.value;
        or=this.document.Organism_Information.ori.value;
        pro=this.document.Organism_Information.proveedor.value;
        prod=this.document.Organism_Information.producto.value;
          co=this.document.Organism_Information.com.value;
           subir=this.document.Organism_Information.sub.value;
          labo=this.document.Organism_Information.lab.value;
          
        
        
          $.ajax({ 
         type:"POST", 
          url: "DB_Organism_Information.php",
       data:{org:numero,alias:ali,insolated:ins,dateofinsol:dat,ori:or,proveedor:pro,producto:prod,com:co,sub:subir,lab:labo}
        });
              
       $.bootstrapGrowl("It was inserted correctly");   
    
 
      
   
        
        
    }
}
 <!--
function subirima1(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube1').style.display='block';

}
-->
//Cerramos el Script

function ValidarFormulario1(form) 
{     
     
    
 continuar=true;
   if( form.medi.value=="NULL" || form.tempera.value=="0" 
           || form.size.value=="0" )
        {
          
      $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
        
    else if(continuar==true)
    {
        numeromac=this.document.Macroscopic_Morphology.mac.value;
        numeroorg=this.document.Macroscopic_Morphology.org.value;
        med=this.document.Macroscopic_Morphology.medi.value;
      temp=this.document.Macroscopic_Morphology.tempera.value;
        agit=this.document.Macroscopic_Morphology.agitacion.value;
          ag=this.document.Macroscopic_Morphology.age.value;
              siz=this.document.Macroscopic_Morphology.size.value;
        sur=this.document.Macroscopic_Morphology.surface.value;
          co=this.document.Macroscopic_Morphology.color.value;
          fo=this.document.Macroscopic_Morphology.foto.value;
           subir=this.document.Macroscopic_Morphology.sub.value;
            labo=this.document.Macroscopic_Morphology.lab.value;
  
             
          $.ajax({  
         type:"POST", 
          url: "BD_Macroscopic_Morphology_1.php",
       data:{mac:numeromac,org:numeroorg,medi:med,tempera:temp,agitacion:agit,age:ag,size:siz,surface:sur,color:co,foto:fo,sub:subir,lab:labo}
        });
     
       
      $.bootstrapGrowl("It was inserted correctly");  
  
            
       
   
        
        
    }
} 
 <!--
function subirima2(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube2').style.display='block';

}
-->
//Cerramos el Script
function ValidarFormulario2(form) 
{    
     
    
  continuar=true;
   if( form.medi.value=="NULL" || form.tempera.value=="0" 
           || form.age.value=="0"  || form.axis_long.value=="0" || form.axis_short.value=="0")
        {
        $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
        
    else if(continuar==true)
    {
        numeromac=this.document.Microscopic_Morphology.mic.value;
        numeroorg=this.document.Microscopic_Morphology.org.value;
        med=this.document.Microscopic_Morphology.medi.value;
      temp=this.document.Microscopic_Morphology.tempera.value;
        agit=this.document.Microscopic_Morphology.agitacion.value;
          ag=this.document.Microscopic_Morphology.age.value;
              long=this.document.Microscopic_Morphology.axis_long.value;
        short=this.document.Microscopic_Morphology.axis_short.value;
          mol=this.document.Microscopic_Morphology.molity.value;
          aggre=this.document.Microscopic_Morphology.aggregates.value;
        bio=this.document.Microscopic_Morphology.biofilm.value;
              gra=this.document.Microscopic_Morphology.gram.value;
        fot=this.document.Microscopic_Morphology.foto.value;
          subir=this.document.Microscopic_Morphology.sub.value;
          labo=this.document.Microscopic_Morphology.lab.value;
        
         
          $.ajax({  
         type:"POST",  
          url: "BD_Microscopic_Morphology.php",
       data:{mic:numeromac,org:numeroorg,medi:med,tempera:temp,agitacion:agit,age:ag,axis_long:long,axis_short:short,molity:mol,aggregates:aggre,biofilm:bio,gram:gra,foto:fot,sub:subir,lab:labo}
        });
     $.bootstrapGrowl("It was inserted correctly");   
      
   
        
        
    }
}
 <!--
function subirima3(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube3').style.display='block';
 
}
-->
//Cerramos el Script
function ValidarFormulario3(form) 
{    
     
    
  continuar=true;
   if( form.medi.value=="NULL" || form.tempera.value=="0" 
           || form.tiempo.value=="0"  || form.medium.value=="NULL" || form.temp_liq.value=="0"
           
            || form.agitation.value=="0" || form.tim_liq.value=="0" || form.ph_i.value=="0"
            
            || form.ph_f.value=="0" || form.od_i.value=="0" || form.od_f.value=="0"
           
            )
        {
        $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
    else if(continuar==true)
    {
        numerogro=this.document.Growth_characteristics.gro.value;
        numeroorg=this.document.Growth_characteristics.org.value;
        med=this.document.Growth_characteristics.medi.value;
      temp=this.document.Growth_characteristics.tempera.value;
        tiem=this.document.Growth_characteristics.tiempo.value;
          medi=this.document.Growth_characteristics.medium.value;
              liq=this.document.Growth_characteristics.temp_liq.value;
        agit=this.document.Growth_characteristics.agitation.value;
          tim=this.document.Growth_characteristics.tim_liq.value;
          pi=this.document.Growth_characteristics.ph_i.value;
        pf=this.document.Growth_characteristics.ph_f.value;
              oi=this.document.Growth_characteristics.od_i.value;
        of=this.document.Growth_characteristics.od_f.value;
            ext=this.document.Growth_characteristics.p_extra.value;
        kin=this.document.Growth_characteristics.kinetics.value;
        subir=this.document.Growth_characteristics.sub.value;
        labo=this.document.Growth_characteristics.lab.value;
         
          $.ajax({
         type:"POST", 
          url: "BD_Growth_characteristics.php",
       data:{gro:numerogro,org:numeroorg,medi:med,tempera:temp,tiempo:tiem,medium:medi,temp_liq:liq,agitation:agit,tim_liq:tim,ph_i:pi,ph_f:pf,od_i:oi,od_f:of,p_extra:ext,kinetics:kin,sub:subir,lab:labo}
        });
     $.bootstrapGrowl("It was inserted correctly");   
   
        
        
    }
}
 <!--
function subirima4(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube4').style.display='block';

}
-->
//Cerramos el Script
function ValidarFormulario4(form) 
{    
     
     continuar=true;
   if( form.idM.value=="NULL" || form.date.value=="" ||
           form.use.value=="NULL"  || form.sto.value=="NULL")
        {
        $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
    else if(continuar==true)
    {
        numeropre=this.document.Pres.pre.value;
        numeroorg=this.document.Pres.org.value;
         numerome=this.document.Pres.idM.value;
        dat=this.document.Pres.date.value;
      us=this.document.Pres.use.value;
        nu=this.document.Pres.num.value;
          vol=this.document.Pres.volu.value;
              st=this.document.Pres.sto.value;
        co=this.document.Pres.com.value;
           subir=this.document.Pres.sub.value;
           labo=this.document.Pres.lab.value;
         
          $.ajax({
         type:"POST", 
          url: "BD_Preservation.php",
       data:{pre:numeropre,org:numeroorg,idM:numerome,date:dat,use:us,num:nu,volu:vol,sto:st,com:co,sub:subir,lab:labo}
        });
  $.bootstrapGrowl("It was inserted correctly");   
      
   
        
        
    }
}

//Cerramos el Script
function ValidarFormulario5(form) 
{    
     
    
  continuar= true;
   
    if( form.org.value=="NULL" || form.date.value=="" || form.con.value=="0" || form.vol.value=="0" ||
         form.use.value=="NULL"|| form.sto.value=="NULL")
    {
          $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
    }
        
    else if(continuar==true)
    {
        numerodna=this.document.DNA.dna.value;
        numeroorg=this.document.DNA.org.value;
        ex=this.document.DNA.ext.value;
      da=this.document.DNA.date.value;
        co=this.document.DNA.con.value;
          vo=this.document.DNA.vol.value;
              us=this.document.DNA.use.value;
        st=this.document.DNA.sto.value;
         subir=this.document.DNA.sub.value;
         labo=this.document.DNA.lab.value;
         
        
         
          $.ajax({
         type:"POST", 
          url: "BD_DNA.php",
       data:{dna:numerodna,org:numeroorg,ext:ex,date:da,con:co,vol:vo,use:us,sto:st,sub:subir,lab:labo}
        });
  $.bootstrapGrowl("It was inserted correctly");   
   
        
        
    }
}
function ValidarFormulario6(form) 
{    
     
    
continuar= true;
   
    if (form.taxo.value=="NULL" || form.gen.value=="0" || form.sequ.value=="0" || form.cur.value=="0")
    {
         $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
    }
    else if(continuar==true)
    {
        numerogene=this.document.Generic_Data.generi.value;
        numeroorg=this.document.Generic_Data.orgid.value;
        tax=this.document.Generic_Data.taxo.value;
      ge=this.document.Generic_Data.gen.value;
        se=this.document.Generic_Data.sequ.value;
          cu=this.document.Generic_Data.cur.value;
             co=this.document.Generic_Data.Com.value;
             subir=this.document.Generic_Data.sub.value;
             labo=this.document.Generic_Data.lab.value;
             
         
          $.ajax({
         type:"POST", 
          url: "BD_GenericData.php",
       data:{generi:numerogene,orgid:numeroorg,taxo:tax,gen:ge,sequ:se,cur:cu,Com:co,sub:subir,lab:labo}
        });
      $.bootstrapGrowl("It was inserted correctly");   
      
   
        
        
    }
}

//Cerramos el Script
function ValidarFormulario7(form) 
{    
     
    
   continuar= true;
   
    if ( form.use.value=="NULL" || form.med.value=="NULL" || form.tem.value=="0" || 
         form.phi.value=="0" || form.phf.value=="0" || form.odi.value=="0" || form.odf.value=="0" 
        )
 {
        $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
    }
    
        
    else if(continuar==true)
    { 
        
        numeromed=this.document.Metabolic_Data.metid.value;
        numeroorg=this.document.Metabolic_Data.orgid.value;
        us=this.document.Metabolic_Data.use.value;
      me=this.document.Metabolic_Data.med.value;
        te=this.document.Metabolic_Data.tem.value;
          ag=this.document.Metabolic_Data.agit.value;
              ti=this.document.Metabolic_Data.time.value;
        pi=this.document.Metabolic_Data.phi.value;
          pf=this.document.Metabolic_Data.phf.value;
          oi=this.document.Metabolic_Data.odi.value;
       of=this.document.Metabolic_Data.odf.value;
              
   co=this.document.Metabolic_Data.com.value;
    subir=this.document.Metabolic_Data.sub.value;
     lab=this.document.Metabolic_Data.lab.value;
         
          $.ajax({
         type:"POST", 
          url: "BD_Metabolic.php",
       data:{metid:numeromed,orgid:numeroorg,use:us,med:me,tem:te,agit:ag,time:ti,phi:pi,phf:pf,odi:oi,odf:of,com:co,sub:subir,lab:labo}
        });
      $.bootstrapGrowl("It was inserted correctly");   
      
    
        
        
    }
}
function subirima5(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube5').style.display='block';
 
}
-->
//Cerramos el Script
function ValidarFormulario8(form) 
{    
     
    
        continuar=true;
   if( form.orgi.value=="NULL" || form.medi.value=="NULL" ||
           form.temp.value=="0" || form.anta.value=="NULL")
        {
         $.bootstrapGrowl("Datagrid with parentheses are required");  
        continuar=false;   
        }
        
    else if(continuar==true)
    {
        numerobio=this.document.Bioassays.bio.value;
        numeroorg=this.document.Bioassays.orgi.value;
        as=this.document.Bioassays.assa.value;
      med=this.document.Bioassays.medi.value;
        tem=this.document.Bioassays.temp.value;
          ih=this.document.Bioassays.inh.value;
              im=this.document.Bioassays.inm.value;
        an=this.document.Bioassays.anta.value;
          ph=this.document.Bioassays.pho.value;
          co=this.document.Bioassays.com.value;
          subir=this.document.Bioassays.sub.value;
          labo=this.document.Bioassays.lab.value;
          
       
        
         
          $.ajax({
         type:"POST", 
          url: "BD_Bioassays_Data.php",
       data:{bio:numerobio,orgi:numeroorg,assa:as,medi:med,temp:tem,inh:ih,inm:im,anta:an,pho:ph,com:co,sub:subir,lab:labo}
        });
    $.bootstrapGrowl("It was inserted correctly");   
   
        
        
    }
}
function subirima6(){
//Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada

//muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
document.getElementById('sube6').style.display='block';
 
}
-->
//Cerramos el Script
   </script>   
    
   
   
 
  
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=iniciar"></script>

<script>
function iniciar() {
    
    var cx=document.getElementById("cx").value;
    var cy=document.getElementById("cy").value;
var mapOptions = {
    
center: new google.maps.LatLng(cx,cy),
zoom: 10,
mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("mapaoculto"),mapOptions);



//marcador con la ubicaci�n de la Universidad
var place = new google.maps.LatLng(cx,cy);  
var marker = new google.maps.Marker({
        position: place
        , title: 'La Universidad de la Habana'
        , map: map
        , });
//marcador en el centro del mapa
var marker2 = new google.maps.Marker({
        position: map.getCenter()
        , title:"Hola"
        , map: map
        , });




}

function MostrarMapa()
{
    var estilo1=document.getElementById("mapaoculto");
    
    estilo1.className="mostrar";
       
 
     document.getElementById('mapaoculto').style.left = '130px';
    document.getElementById('mapaoculto').style.top = '80px';
   
}
function OcultarMapa()
{
    
       var estilo1=document.getElementById("mapaoculto");
    
    estilo1.className="ocultar";
}


</script>

