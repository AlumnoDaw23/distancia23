<?php
/**
 * Script1
* Script que contiene dos métodos
 * @author Marco Enríquez
 * @version 1.0
 *
 */

/**
 * function combinarImagenes
 * Se encarga de combinar un producto con su imagen correspondiente.
 * @param array &$productos Listado de productos
 * @param array $imagenes Listado de imágenes
 * @internal & Ampersand para modificar la variable que entra por parámetro
 * @version 1.2
 * @since 15/05/2023
 * @ignore key_exists BUSCA KEY
 */
function combinarImagenes(&$productos, $imagenes)
{
    foreach ($productos as $k => $v) {
        $r = random_int(0, 1);
        if (array_key_exists($k, $imagenes)) { 
            $productos[$k]['imagen'] = $imagenes[$k][$r];
        } else {
            $productos[$k]['imagen'] = $imagenes['Def'];
        }
    }
}


/**
 * function elegirProductos 
 * Función que se encarga de a partir del listado de productos y un número crear una lista de
 * productos aleatoria.
 * @param array $productos Lista de los productos
 * @param integer $num Número de productos
 * @return array $respuesta Retorna la lista de productos random
 * @version 1.5
 * @since 15/05/2023
 * @ignore count para saber el length del array
 * @ignore COUNT PARA SABER LENGHT DE UN ARRAY
 * @ignore in_array busca VALOR
 */
function elegirProductos($productos, $num)
{
    $respuesta = [];
    $a = count($productos); 
    if ($num > $a) {
        $num = 2;
    }
    $keyRandom = array_rand($productos, $num);

    foreach ($productos as $k => $v) {
        if (!in_array($k, $keyRandom)) { 
            unset($productos[$k]);
        } else {
            $respuesta[$k] = $productos[$k];
        }
    }

    return $respuesta;
}

?>
