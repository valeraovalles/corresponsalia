/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var jQuery = $.noConflict();
jQuery(document).ready(function(){
    
    /**
     * @param {string} opcion Valor del option seleccionado
     */
    function displayDate(opcion){
        if(opcion === "Asignado"){
            jQuery("#fechaAsignacion").removeClass("oculto");
        }
    }
    
    var selector = jQuery("#frontend_corresponsaliabundle_tecnologia_equipo_status");
    selector.change(function() {
                var opcion = jQuery("#frontend_corresponsaliabundle_tecnologia_equipo_status option:selected").text();
                displayDate(opcion);
            })
            .trigger("change");
    
    
});

