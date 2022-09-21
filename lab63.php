<?php
    include ("class_lib.php");

    $soporte1=new soporte("The Soccer Game",22,3);
    echo "<br>". $soporte1->titulo." <br>";
    echo "<br> Precio: " . $soporte1->dame_precio_sin_itbms()." dolares";
    echo "<br> Precio ITBM incluido: " . $soporte1->dame_precio_con_itbms()." dolares";

    //clase hija 1

    $mivideo = new video("Los Otros",22,4.5,"115 Minutos");
    echo "<br><br>";
    echo "<b>" . $mivideo->titulo ."</b>";
    echo "<br>Precio: " . $mivideo->dame_precio_sin_itbms(). " dolares";
    echo "<br>Precio ITBM incluido: " . $mivideo->dame_precio_con_itbms() . " dolares ";
    echo "<br>" . $mivideo->imprime_caracteristicas();

    //clase hija 2

    $mijuego = new juego("Pes 18",21,2.5,"Xbox 360",1,2);
    $mijuego->imprime_caracteristicas();
    $mijuego->imprime_jugadores_posibles();
    echo "<p>";
    $mijuego2 = new juego("Fifa 18", 27, 3, "PS 4",1,2);
    echo "<b>" . $mijuego2->titulo . "</b>";
    $mijuego2->imprime_jugadores_posibles();

?>