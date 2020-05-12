<?php

/**
 * faz o carregamento de todos os arquivos php, que serão utilizados.
 */
spl_autoload_register(function ($class_name){
    
    $filename = 'class'.DIRECTORY_SEPARATOR.$class_name.".php";

    //$dirClass = "DAO";
    //este abaixo utilizado no linux por causa da alteração das barras.
    //$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $class_name . ".php");

    if(file_exists(($filename)))
    {
        require_once($filename);
    }

});

?>