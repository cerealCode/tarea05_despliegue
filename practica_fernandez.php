<?php
/**
 * Script de ejemplo para la práctica de phpDocumentor
 * 
 * Este script contiene funciones de ejemplo documentadas con phpDocumentor
 * para mostrar cómo se utilizan los bloques DocBlock y las etiquetas.
 * 
 * @author Luis F. Vidal
 * @version 1.0.0
 * @package Practica
 * @copyright 2025 Tu Nombre
 */
 
 /**
 * Calcula la suma de dos números
 * 
 * Esta función toma dos números como parámetros y devuelve
 * el resultado de sumarlos.
 * 
 * @param float $num1 Primer número a sumar
 * @param float $num2 Segundo número a sumar
 * @return float Resultado de la suma de los dos números
 * @access public
 * @since 1.0.0
 */
function sumar($num1, $num2) {
    return $num1 + $num2;
}
/**
 * Verifica si un número es par o impar
 * 
 * Esta función comprueba si el número proporcionado es par o impar
 * y devuelve un mensaje indicándolo.
 * 
 * @internal Esta función utiliza el operador módulo (%) para determinar si es par o impar.
 * Esta nota solo será visible en la documentación para desarrolladores.
 * 
 * @param int $numero Número a verificar
 * @return string Mensaje indicando si el número es par o impar
 * @access public
 * @since 1.0.0
 */
function verificarParImpar($numero) {
    if ($numero % 2 == 0) {
        return "El número $numero es par";
    } else {
        return "El número $numero es impar";
    }
}


/**
 * Salidas para hacer pruebas
 * 
 */
echo sumar(5, 3) . "\n";
echo verificarParImpar(10) . "\n";