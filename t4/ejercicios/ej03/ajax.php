<?php
$idioma=isset($_GET["idioma"])?$_GET["idioma"]:"es";
$etiquetas = $BDetiquetas[$idioma];
$lpalabra=$etiquetas[0];
$traduccion=$etiquetas[1];
$enviar=$etiquetas[2];
$BDetiquetas=[
    
    "es"=>[
        "Palabra",
        "Traduccion",
        "Enviar"
    ],
    "en"=>[
        "Word",
        "Translation",
        "Send"
    ],
    "fr"=>[
        "Mot",
        "Traduction",
        "Envoyer"
    ]
    
    
];
echo implode(":",$BDetiquetas[$idioma]);
?>