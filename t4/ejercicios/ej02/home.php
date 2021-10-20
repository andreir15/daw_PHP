<?php 
include ("ajax.php")?>
<html>
<head>
<script>
  function usarAjax(){
var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","ajax.php?ccaa="+document.getElementById("ccaa").value,true);
xmlhttp.setRequestHeader("X-Requested-With","XMLHttpRequest");
xmlhttp.send();

xmlhttp.onreadystatechange=function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
         document.getElementById("idProvincias").innerHTML=xmlhttp.responseText;
     }
  }
 
}
</script>
</head>
<body>
<h1>Comunidades autonomas </h1>
<?php 
$comunidades = array_keys ( $provincias );
pintarSelect ( "ccaa", $comunidades, [
    "0"
], "simple" );
echo "<br/>";
echo "<div id='idProvincias'>";
pintarSelect ( "provincias", $provincias [$comunidades ["0"]], [
    "0"
], "simple" );
echo "</div>";
echo "<br/>";
?>
<h1>Escoge una comunidad autonoma</h1>
<br/>
Observa el cambio de provincias via AJAX
<div id="idDiv">
</div>
<br/>
</body>
</html>
