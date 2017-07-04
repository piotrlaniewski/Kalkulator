<?php

function __autoload($className){ //funkcja magiczna pobrania wszystkich klas
    echo "Ładuje klasę: ", $className, "<br />";
    require 'class/'.$className.".php"; //wywołanie wszystkich klas z folderu class/
    //koniec autoload
}