<?php
$esAjax = isset($_SERVER["HTTP_X_REQUESTED_WITH"]) ? strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" : false;
if ($esAjax) {
   
    $provincias=['Andaluc�a' => ['Almer�a','C�diz','C�rdoba','Granada','Huelva','Ja�n','M�laga','Sevilla'], 
        'Arag�n' => ['Huesca','Teruel','Zaragoza'], 
        'Asturias (Principado de)' => ['Asturias'],
        'Canarias' => ['Palmas (Las)','Santa Cruz de Tenerife'],
        'Cantabria' => ['Cantabria'],
        'Castilla y Le�n' => ['�vila','Burgos','Le�n','Palencia','Salamanca','Segovia','Soria','Valladolid','Zamora'],
        'Castilla-La Mancha' => ['Albacete','Ciudad Real','Cuenca','Guadalajara','Toledo'],
        'Catalu�a' => ['Barcelona','Gerona','L�rida','Tarragona'],
        'Ceuta (Ciudad de)' => ['Ceuta'], 
        'Comunidad Valenciana' => ['Alicante','Castell�n','Valencia'], 
        'Extremadura' => ['Badajoz','C�ceres'], 
        'Galicia' => ['Coru�a (La)','Lugo','Orense','Pontevedra'],
        'Islas Baleares' => ['Islas Baleares'], 
        'Madrid (Comunidad de)' => ['Madrid'],
        'Melilla (Ciudad de)' => ['Melilla'], 
        'Murcia (Regi�n de)' => ['Murcia'],
        'Navarra (Comunidad Foral de)' => ['Navarra'],
        'Pa�s Vasco' => ['�lava','Guip�zcoa','Vizcaya'],
        'Rioja (La)' => ['Rioja (La)']];
    function comunidad($ccaa){
        $ccaa=isset($_GET["ccaa"])?$_GET["ccaa"]:"Andaluc�a";
       
        
    }
    
       
    }
  
 
 


?>