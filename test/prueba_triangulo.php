<?php
// Incluye los archivos necesarios desde la carpeta src
require_once __DIR__ . '../FiguraGeometrica.php';
require_once __DIR__ . '../Triangulo.php';
require_once __DIR__ . '../punto.php';

// Función para ejecutar una aserción manual de igualdad
function assertEquals($expected, $actual, $testName) {
    if ($expected === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$expected', pero se obtuvo '$actual'<br>";
    }
}

// Pruebas unitarias simples para la clase Triangulo

// Test 1: Prueba el cálculo del área de un Triangulo
$punto = new punto(5,5);
$triangulo = new Triangulo("Triangulo de prueba", $punto,5.0,6.0,8.0,5.0,9.0);

$expectedArea = $triangulo->getBase()*($triangulo->getAltura()/2);
$actualArea = $triangulo->area();
assertEquals($expectedArea, $actualArea, "Prueba del cálculo del área");

// Test 2: Prueba el cálculo del perímetro de un Triangulo
$expectedPerimetro = $triangulo->getLado1() + $triangulo->getLado2() + $triangulo->getLado3();
$actualPerimetro = $triangulo->perimetro();
assertEquals($expectedPerimetro, $actualPerimetro, "Prueba del cálculo del perímetro");

// Test 3: Prueba si se retorna correctamente el nombre del Triangulo
$expectedNombre = "Triangulo de prueba";
$actualNombre = $triangulo->getNombre();
assertEquals($expectedNombre, $actualNombre, "Prueba de obtención del nombre");
?>