
<form action="listaUsuarios.php">
<h1>LOGIN</h1>
<?php

session_start();
isset($_GET["usuarioRegistro"])?$_GET["usuarioRegistro"]:$_GET["usuarioRegistro"]="";
isset($_GET["contraRegistro"])?$_GET["contraRegistro"]:$_GET["contraRegistro"]="";
if($_GET["usuarioRegistro"]!="" && $_GET["contraRegistro"]!=""){
    $_SESSION["usuarios"][$_GET["usuarioRegistro"]]=["contra"=>$_GET["contraRegistro"],"mensajes"=>[]];
 $prueba=$_SESSION["usuarios"];
 print_r($prueba);
}
echo "<br/>";
if(isset($_GET["usuarioRegistro"])&&$_SESSION["usuarios"]){
$_SESSION["usuarios"][$_GET["usuarioRegistro"]]=["contra"=>$_GET["contraRegistro"],"mensajes"=>[]];

}

$usuarios=isset($_SESSION["usuarios"])?$_SESSION["usuarios"]:[];
$recordar=isset($_SESSION["recordar"])?$_SESSION["recordar"]:false;
$activo=isset($_SESSION["activo"])?$_SESSION["activo"]:"";
$_SESSION=["activo"=>$activo,"recordar"=>$recordar,"usuarios"=>$usuarios];



if($recordar){
    echo "Usuario <input type='text' name='usuarioL' value='{$_SESSION["activo"]}'/> ";
}

else{
    echo "Usuario <input type='text' name='usuarioL'/> ";
}
    


?>

<br/>
<br/>
Contraseña<input type="password" name="contraL"/>

<br/>
<br/>
<?php 
if($_SESSION["recordar"]){
    echo "<label for='recordar'>Recordar<input type='checkbox' name='recordar' id='recordar' value='true' checked='checked'/></label>";
}else{
    echo "<label for='recordar'>Recordar<input type='checkbox' name='recordar' id='recordar' value='true'/></label>";
}
?>
<br/>
<br/>
<input type="submit" value="Enviar">
<br/>
<br/>
<a href="registrar.php">Registrar nuevo usuario</a>
</form>
