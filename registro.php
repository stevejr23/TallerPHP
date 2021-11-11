
<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$cedula = $_POST["cedula"];
$correo = $_POST["correo"];

echo "Nombre Completo: " . $nombre . " " . $apellido . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Cedula de Identificación: " . $cedula . "<br>";
echo "Correo: " . $correo . "<br>";

if (isset($_POST['submit'])) {
    $tipo = $_POST['inscrito'];
    echo "Cargo: " . $tipo . '<br/>';
}

echo "Cursos Escogidos:" . "<br>";

if (isset($_POST['submit'])) {
    if (!empty($_POST['curso'])) {
        foreach ($_POST['curso'] as $value) {
            echo "- " . $value . '<br/>';
        }
    }
}

echo "=========================================================" . "<br>";

if ((isset($_POST['submit'])) and  isset($_POST['submit'])) {
    $arregloCursos = $_POST['curso'];
    $numCursos = count($arregloCursos);
    $tipo = $_POST['inscrito'];
    $valorEvento = 50;

    /*DESCUENTOS DOCENTEUTPL*/

    if ($tipo == "DocenteUTPL") {
        echo "El valor del evento es de $" . $valorEvento . "<br>";
        for ($i = 0; $i < $numCursos; $i++) {
            switch ($arregloCursos[$i]) {
                case 'Python':

                    $precio = 150;
                    $des = 0.15;
                    $desTotal = $precio * $des;
                    $precioFinal = ($precio - $desTotal) + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Descuento 15%: " . $des . "<br>";
                    echo "Precio con descuento: $". ($precio - $desTotal) . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Python= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";
                    break;

                case 'Java':

                    $precio = 180;
                    $des = 0.15;
                    $desTotal = $precio * $des;
                    $precioFinal = ($precio - $desTotal) + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Descuento 15%: " . $des . "<br>";
                    echo "Precio con descuento: $". ($precio - $desTotal) . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Java= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";
                    break;

                case 'Kotlin':

                    $precio = 140;
                    $des = 0.15;
                    $desTotal = $precio * $des;
                    $precioFinal = ($precio - $desTotal) + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Descuento 15%: " . $des . "<br>";
                    echo "Precio con descuento: $". ($precio - $desTotal) . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Kotlin= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";

                    break;
                default:
                    echo "neither";
                    break;
            }
        }
    }

    /*DESCUENTOS ESTUDIANTEUTPL*/

    if ($tipo == "EstudianteUTPL") {
        echo "El valor del evento es de $" . $valorEvento . "<br>";
        for ($i = 0; $i < $numCursos; $i++) {
            switch ($arregloCursos[$i]) {
                case 'Python':

                    $precio = 150;
                    $des = 0.20;
                    $desTotal = $precio * $des;
                    $precioFinal = ($precio - $desTotal) + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Descuento 15%: " . $des . "<br>";
                    echo "Precio con descuento: $" . ($precio - $desTotal) . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Python= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";
                    break;

                case 'Java':

                    $precio = 180;
                    $des = 0.20;
                    $desTotal = $precio * $des;
                    $precioFinal = ($precio - $desTotal) + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Descuento 15%: " . $des . "<br>";
                    echo "Precio con descuento: $" . ($precio - $desTotal) . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Java= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";

                    break;

                case 'Kotlin':

                    $precio = 140;
                    $des = 0.20;
                    $desTotal = $precio * $des;
                    $precioFinal = ($precio - $desTotal) + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Descuento 15%: " . $des . "<br>";
                    echo "Precio con descuento: $" . ($precio - $desTotal) . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Kotlin= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";
                    break;
                default:
                    echo "neither";
                    break;
            }
        }
    }

    /*DESCUENTOS USUARIOINDEPENDIENTE*/

    if ($tipo == "UsuarioIndependiente") {
        echo "El valor del evento es de $" . $valorEvento . "<br>";
        for ($i = 0; $i < $numCursos; $i++) {
            switch ($arregloCursos[$i]) {

                case 'Python':

                    $precio = 150;
                    $precioFinal = $precio + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Python= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";
                    break;

                case 'Java':

                    $precio = 180;
                    $precioFinal = $precio + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Java= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";

                    break;

                case 'Kotlin':

                    $precio = 140;
                    $precioFinal = $precio + $valorEvento;

                    echo "=========================================================" . "<br>";
                    echo "Precio Inicial: " . $precio . "<br>";
                    echo "Valor Evento: $" . $valorEvento . "<br>";
                    echo "Precio Final Kotlin= $" . $precioFinal . "<br>";
                    echo "=========================================================" . "<br>";

                    break;
                default:
                    echo "neither";
                    break;
            }
        }
    }
}

?>