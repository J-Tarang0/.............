<?php
echo"Software diseñado por José Alberto Mendoza Tarango";
echo"Número de control: 19308051280649";
echo"Estructura selectiva switch case";
    $dia = 3;

    switch( $dia )
    {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Valor no válido";
    }
?>