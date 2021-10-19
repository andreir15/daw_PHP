<?php
$esAjax = isset($_SERVER["HTTP_X_REQUESTED_WITH"]) ? strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" : false;
if ($esAjax) {
   
    $provincias=['Andalucía' => ['Almería','Cádiz','Córdoba','Granada','Huelva','Jaén','Málaga','Sevilla'], 
        'Aragón' => ['Huesca','Teruel','Zaragoza'], 
        'Asturias (Principado de)' => ['Asturias'],
        'Canarias' => ['Palmas (Las)','Santa Cruz de Tenerife'],
        'Cantabria' => ['Cantabria'],
        'Castilla y León' => ['Ávila','Burgos','León','Palencia','Salamanca','Segovia','Soria','Valladolid','Zamora'],
        'Castilla-La Mancha' => ['Albacete','Ciudad Real','Cuenca','Guadalajara','Toledo'],
        'Cataluña' => ['Barcelona','Gerona','Lérida','Tarragona'],
        'Ceuta (Ciudad de)' => ['Ceuta'], 
        'Comunidad Valenciana' => ['Alicante','Castellón','Valencia'], 
        'Extremadura' => ['Badajoz','Cáceres'], 
        'Galicia' => ['Coruña (La)','Lugo','Orense','Pontevedra'],
        'Islas Baleares' => ['Islas Baleares'], 
        'Madrid (Comunidad de)' => ['Madrid'],
        'Melilla (Ciudad de)' => ['Melilla'], 
        'Murcia (Región de)' => ['Murcia'],
        'Navarra (Comunidad Foral de)' => ['Navarra'],
        'País Vasco' => ['Álava','Guipúzcoa','Vizcaya'],
        'Rioja (La)' => ['Rioja (La)']];
    function comunidad($ccaa){
        $ccaa=isset($_GET["ccaa"])?$_GET["ccaa"]:"Andalucía";
       
        
    }
    
       
    }
  
 
 


?>