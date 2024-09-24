<?php
// Verificar si se recibió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los números del formulario
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $resultado = 0;

    // Verificar qué operación se está solicitando
    if (isset($_POST['operacion'])) {
        switch ($_POST['operacion']) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            default:
                $resultado = "Operación no soportada.";
        }
    }

    // Mostrar el resultado
    echo "<h1>Resultado</h1>";
    echo "<p>Número 1: $num1</p>";
    echo "<p>Número 2: $num2</p>";
    echo "<p>Resultado: $resultado</p>";
}
?>

