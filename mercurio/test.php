<?php
    require_once("Mercurio.php");
    require_once("Codigo.php");

    //print_r(Mercurio::getInstance()->consultarSaldo());
    print_r(Mercurio::getInstance()->realizarRecarga("A030", "1111", "6643047287"));
?>