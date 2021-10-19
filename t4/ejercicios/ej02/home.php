<head>
<script>
  function usarAjax(){
var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","ajax.php?ccaa="+document.getElementById("ccaa").value,true);
xmlhttp.setRequestHeader("X-Requested-With","XMLHttpRequest");
xmlhttp.send();

xmlhttp.onreadystatechange=function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
         document.getElementById("idDiv").innerHTML=xmlhttp.responseText;
     }
  }
 
}
</script>
</head>
<body>
<h1>Comunidades autonomas </h1>

ccaa <select id="ccaa" onchange="comunidad($ccaa);">
<?php 

?>
<option value="andalucia">Andalucia</option>
</select>
<br/>
provincias <select id="provincia"></select>
<br/>
<h1>Escoge una comunidad autonoma</h1>
<br/>
Observa el cambio de provincias via AJAX
<div id="idDiv">
</div>
<br/>
</body>
