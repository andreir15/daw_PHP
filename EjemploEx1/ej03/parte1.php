<head>
<script>
  function usarAjax(){
var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","ajax.php?peli="+document.getElementById("peli").value,true);
xmlhttp.open("GET","ajax.php?cancion="+document.getElementById("cancion").value,true);
xmlhttp.setRequestHeader("X-Requested-With","XMLHttpRequest");
xmlhttp.send();

xmlhttp.onreadystatechange=function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
         document.getElementById("peli").innerHTML=xmlhttp.responseText;
          document.getElementById("cancion").innerHTML=xmlhttp.responseText;
     }
  }
 
}
</script>
</head>
<body>
<input type="submit" value="Peli favorita" onchange="usarAjax()"/> <input type="text" id="peli"/>
<br/>
<input type="submit" value="Cancion favorita" onchange="usarAjax()"/> <input type="text" id="cancion"/> 
