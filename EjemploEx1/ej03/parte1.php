<head>
<script>
  function usarAjax(tipo){
var xmlhttp=new XMLHttpRequest();
var script=tipo+'.php';
xmlhttp.open("GET",script,true);
xmlhttp.send();
xmlhttp.onreadystatechange=function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
         document.getElementById("id"+tipo).value=xmlhttp.responseText;
         
     }
  }
 
}
</script>
</head>
<body>
<button onclick="usarAjax('ajaxPeli')">Peli favorita</button> 
<input type="text" id="idajaxPeli" readonly="readonly"/>
<br/>
<button onclick="usarAjax('ajaxCanciones')">Cancion favorita</button>
<input type="text" id="idajaxCanciones" readonly="readonly"/> 
</body>