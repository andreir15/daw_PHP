<?php
$esAjax = isset($_SERVER["HTTP_X_REQUESTED_WITH"]) ? strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest" : false;
if ($esAjax) {
    $ca = isset ($_REQUEST['ca'])?$_REQUEST['ca']:null;
    pintarSelect ( 'provincias', $BDccaa [$ca], ['0'], 'simple' );
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
    function pintarSelect($nombre, $etiquetas, $seleccionados, $tipo) {
        echo '<label for="id' . $nombre . '">' . $nombre . '</label>' ;
        echo '<select ' . ($tipo == 'multiple' ? 'multiple="multiple"' : '') . ' id="id' . $nombre . '" ' . 'name="' . $nombre . ($tipo == 'multiple' ? '[]' : '') . '" onChange="cambiar'.$nombre.'()">';
        foreach ( $etiquetas as $k => $v ) {
            echo '<option ' . (in_array ( $k, $seleccionados ) ? 'selected="selected"' : '') . ' value="' . $v . '">' . $v . '</option>' ;
        }
        echo '</select>';
    }
    
       
    }
  
 
 


?>