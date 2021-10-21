<script>
 function usarAjax(){
var xmlhttp=new XMLHttpRequest();
var idioma=document.querySelector('input[name="bandera"]:checked').value;
xmlhttp.open("GET","ajax.php?idoma="+idioma,true);
xmlhttp.send();

xmlhttp.onreadystatechange=function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
        var etiquetas=xmlhttp.responseText.split(":");
        document.getElementById("idPalabraLabel").innerHTML=etiquetas[0];
        document.getElementById("idTraduccionLabel").innerHTML=etiquetas[1];
        document.getElementById("enviar").value=etiquetas[2];
        
     }
  }
 
}
</script>
<img src="img/esp.png" height="30" width="50"/>
<input type="radio" name="bandera" value="es" checked="checked" onchange="usarAjax()"/>
<img src="img/uk.png" height="30" width="50"/>
<input type="radio" name="bandera" value="uk" onchange="usarAjax()"/>
<img src="img/fra.png" height="30" width="50"/>
<input type="radio" name="bandera" value="fr" onchange="usarAjax()"/>
<hr/>
<label id="idPalabraLabel" for="idPalabraTexto">Palabra</label>
<input type="text" id="idPalabraTexto"/>
<br/>
<label id="idTraduccionLabel" for="idTraduccionTexto">Traduccion</label>
<input type="text" id="idTraduccionTexto"/>
<br/>
<input type="submit" value="Enviar" id="enviar"/>
