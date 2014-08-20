<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Frontend\CorresponsaliaBundle\Services\Util;

/**
 * Description of DateService
 *
 * @author ecastro
 */
class FechaService {
    
    /**
     * Validar fecha en formato dd-mm-yyyy
     *
     * Esta funcion valida que una fecha cumpla el formato dd-mm-yyyy
     * por ejemplo: 12-02-2014.
     *
     * @param Date $fecha
     *
     * @return boolean
     */
    public function validarFecha($fecha){
        if (\ereg("(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-](19|20)[0-9]{2}", $fecha)) {
            return true;
        } else {
            return false;
        }
    }
    
}
