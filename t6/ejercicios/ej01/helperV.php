<?php
function view($nombre,$d){
    extract($d);
    include $nombre.'.php';
}
?>