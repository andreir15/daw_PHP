<h1>DATOS</h1>
<?php 
$aficiones=isset($_GET["aficion"])?$_GET["aficion"]:[];
echo <<<HTML
<h3>Mis aficiones favoritas son:</h3>
<ul>
HTML;
if($aficiones==[]){
    echo "<li>NINGUNA</li>";
}
foreach ($aficiones as $a){
    echo "<li>";
    echo $a;
    echo "</li>";
    echo "\n";
}
echo <<<HTML
</ul>
HTML;

?>
