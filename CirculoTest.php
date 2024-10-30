<?php
// Incluye los archivos necesarios desde la carpeta src
require_once __DIR__ . '/../src/FiguraGeometrica.php';
require_once __DIR__ . '/../src/cuadrado.php';

// Función para ejecutar una aserción manual de igualdad
function assertEquals($expected, $actual, $testName) {
    if ($expected === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$expected', pero se obtuvo '$actual'<br>";
    }
}

// Pruebas unitarias simples para la clase cuadrado

// Test 1: Prueba el cálculo del área de un cuadrado
$lado = 5;
$cuadrado = new Cuadrado("Cuadrado de prueba", $lado);
$expectedArea = $lado * $lado;
$actualArea = $cuadrado->area();
assertEquals($expectedArea, $actualArea, "Prueba del cálculo del área");

// Test 2: Prueba el cálculo del perímetro de un círculo
$expectedPerimetro = $lado*4;
$actualPerimetro = $cuadrado->perimetro();
assertEquals($expectedPerimetro, $actualPerimetro, "Prueba del cálculo del perímetro");

// Test 3: Prueba si se retorna correctamente el nombre del círculo
$expectedNombre = "Cudrado de Prueba";
$actualNombre = $cuadrado->getNombre();
assertEquals($expectedNombre, $actualNombre, "Prueba de obtención del nombre");
//
?>