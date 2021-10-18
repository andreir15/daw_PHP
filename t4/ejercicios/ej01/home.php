<head>
<script>
  function usarAjax(){
var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","ajax.php?nombre="+document.getElementById("nombre").value,true);
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
<h1>SALUDADOR</h1>

Introduce tu nombre<input type="text" id="nombre"/>
<div id="idDiv">
</div>
<br/>
<button type="button" onclick="usarAjax()">Saludar</button>
</body>