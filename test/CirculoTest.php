<?php
// Incluye los archivos necesarios desde la carpeta src
require_once __DIR__ . '../src/FiguraGeometrica.php';
require_once __DIR__ . '../src/Circulo.php';

// Función para ejecutar una aserción manual de igualdad
function assertEquals($esperado, $actual, $testName) {
    if ($esperado === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$esperado', pero se obtuvo '$actual'<br>";
    }
}

// Pruebas unitarias simples para la clase Circulo

// Test 1: Prueba el cálculo del área de un círculo
$circulo = new Circulo("Círculo de prueba", 5);
$esperadoArea = pi() * pow(5, 2);
$actualArea = $circulo->area();
assertEquals($esperadoArea, $actualArea, "Prueba del cálculo del área");

// Test 2: Prueba el cálculo del perímetro de un círculo
$esperadoPerimetro = 2 * pi() * 5;
$actualPerimetro = $circulo->perimetro();
assertEquals($esperadoPerimetro, $actualPerimetro, "Prueba del cálculo del perímetro");

// Test 3: Prueba si se retorna correctamente el nombre del círculo
$esperadoNombre = "Círculo de prueba";
$actualNombre = $circulo->getNombre();
assertEquals($esperadoNombre, $actualNombre, "Prueba de obtención del nombre");
//

?>