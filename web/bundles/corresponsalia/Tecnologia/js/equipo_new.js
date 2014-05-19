var jQuery = jQuery.noConflict();
jQuery(document).ready(function(){
    
    jQuery("#tecnologia_equipo_condicion").change(function(){
        var valor = jQuery("#tecnologia_equipo_condicion :selected").text(); 
        if(valor==='REGULAR' || valor==='MALO'){
            if (!jQuery('#observcondicion').length) {
                var newElems = jQuery("<div id='observcondicion' class='contenedorform'></div>")
                    .append("<div class='labelform'>observacion Condicion:</div>")
                    .append("<div class='widgetform'><textarea id='tecnologia_equipo_observacionCondicion' name='tecnologia_equipo[observacionCondicion]'></textarea></div>");
                jQuery("#wrapper-form").append(newElems);
            }
        }else {
            jQuery('#observcondicion').remove();
        }
    });
    
});
