<script>
  function usarAjax(tipo){
  var sustantivo=document.getElementById('sustantivo').value;
var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","ajax.php?s="+sustantivo+"&t="+tipo,true);
xmlhttp.send();

xmlhttp.onreadystatechange=function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
         document.getElementById("idDiv").innerHTML=xmlhttp.responseText;
     }
  }
 
}
</script>
<h3>Introduce un sustantivo regular</h3>
<input type="text" id="sustantivo"/>
<br>
<button onclick="usarAjax('raiz')">Raiz</button>
<button onclick="usarAjax('combinar')">Combinar</button>
<p>...y observa el resultado</p>
<?php

?>