<?php
include_once 'Triangulo.php';
include_once 'punto.php';

// Crear la imagen con tamaño de 500x300
$image = imagecreate(500, 300);

// Establecer los colores
$background_color = imagecolorallocate($image, 0, 153, 0);  // Fondo verde
$text_color = imagecolorallocate($image, 255, 255, 255);     // Blanco para el texto
$triangle_color = imagecolorallocate($image, 255, 165, 0); // Naranja
$triangle_color2 = imagecolorallocate($image, 255, 0, 0); // Naranja

// Escribir texto en la imagen
imagestring($image, 5, 180, 100, "Libre Configuración", $text_color);
imagestring($image, 3, 160, 120, "Desarrollo de Aplicaciones Web", $text_color);

// Posicion en la que van a estar los 3 puntos
// $triangle_points = [
//     208, 173,  // Punto 1 (x1, y1) (arriba) 
//     250, 242, // Punto 2 (x2, y2) (abajo, derecha)
//     166, 242  // Punto 3 (x3, y3) (abajo, izquierda)
// ];

// // Dibujar el triángulo

// // Los parametros son:
// // -->Image => Es la imagen que se ha creado arriba de 500 x 300
// // -->triangle_points => Es la ubicacion de cada punto
// // --> 3 => El número de puntos que tiene la figura como es un triangulo pues 3
// // --> triangle_color => Color que va a tener el triangulo

$verticeA = new Punto(208, 173); // Vértice A (x1, y1)
$verticeB = new Punto(250, 242);   // Vértice B (x2, y2)
$verticeC = new Punto(166, 242);  // Vértice C (x3, y3)

// Crear una instancia de Triangulo
$triangulo = new Triangulo("Mi Triángulo", $verticeA, 300, 150, 200, 200, 200);

$triangulo->dibujar($image,$verticeA,$verticeB,$verticeC,$triangle_color2);

// Enviar la imagen como una respuesta PNG
header("Content-Type: image/png");
imagepng($image);

// Destruir la imagen para liberar memoria
imagedestroy($image);
?>