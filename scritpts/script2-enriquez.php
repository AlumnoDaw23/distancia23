<?php
/**
 * Script2
 * @author Marco Enríquez
 * @version 1.1
 */
require_once 'Iguardable.php';
require_once 'IListable.php';

/**
 * Description of Producto
 * Clase que sirve de modelo a los objetos Producto.
 * @author Marco A. Enríquez
 * @version 1.0
 * @since 10/05/2023
 * @todo Terminar de elaborar la clase
 */
class Producto implements IGuardable, IListable {
    /*******************************VARIABLES**************************************/

    private $id = null;
    private $cod, $desc, $precio, $stock;

    /******************************CONSTRUCTOR***********************************/
    /**
     * function _construct
     * Función constructora con parámetros de la clase Producto
     * @param integer $id Id del producto
     * @param string $cod Código del producto
     * @param string $desc Descripción del producto
     * @param float $precio Precio del producto
     * @param integer $stock Stock del producto
     * @version 1.0
     * @since 15/05/2023
     */

    public function __construct($id, $cod, $desc, $precio, $stock) {
        $this->id = $id;
        $this->cod = $cod;
        $this->desc = $desc;
        $this->precio = $precio;
        $this->stock = $stock;
    }

   

    /******************************SETTERS********************************** */

    /**
     * function setPrecio
     * Setter de precio, comprueba si es un número y si es mayor que cero, de lo 
     * contrario devuelve false.
     * @param integer $nuevoPrecio
     * @return boolean
     * @version 1.2
     * @since 15/05/2023
     */
    public function setPrecio($nuevoPrecio) {
        if (is_nan($nuevoPrecio) && $nuevoPrecio >= 0) {
            $this->precio = $nuevoPrecio;
            return true;
        } else {
            return false;
        }
    }

    /**
     * Setter de stock, comprueba si es un número y si es mayor que cero, de lo 
     * contrario devuelve false.
     * @param integer $nuevoStock
     * @return boolean
     * @version 1.1
     * @since 16/05/2023
     */
    public function setStock($nuevoStock) {
        if (is_nan($nuevoStock) && $nuevoStock >= 0) {
            $this->stock = $$nuevoStock;
            return true;
        } else {
            return false;
        }
    }
     
}