<head>
<script>
  function usarAjax(tipo){
var xmlhttp=new XMLHttpRequest();
var script=tipo+'.php';
xmlhttp.open("GET","script?tipo="+document.getElementById("id-"+tipo).value,true);
xmlhttp.setRequestHeader("X-Requested-With","XMLHttpRequest");
xmlhttp.send();
xmlhttp.onreadystatechange=function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
         document.getElementById("id-"+tipo).innerHTML=xmlhttp.responseText;
         
     }
  }
 
}
</script>
</head>
<body>
<button onchange="usarAjax('ajaxPeli')" >Peli favorita</button> 
<input type="text" id="id-ajaxPeli" readonly="readonly"/>
<br/>
<button onchange="usarAjax('ajaxCanciones')" >Cancion favorita</button>
<input type="text" id="id-ajaxCanciones" readonly="readonly"/> 
</body>
