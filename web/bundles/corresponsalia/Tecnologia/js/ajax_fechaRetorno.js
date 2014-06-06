var jQuery = jQuery.noConflict();
jQuery(document).ready(function(){
    
    jQuery("#form_fecha").submit(function(){
        var data = {
            fecha: jQuery("#fecfechahaRetorno").val(),
            id: jQuery("#fecfechahaRetorno").val()
        };
        alert(data.fecha);
        jQuery.ajax({
            type: 'post',
            url: '{{ path("tecnoequipo_select") }}',
            data: data,
            success: function(data) {
                var $modelo_selector = jQuery('#tecnologia_equipo_modelo');
                 $modelo_selector.html('<option>Selecciona</option>');
                for(var i in data){
                    $modelo_selector.append('<option value="' + data[i].id + '">' + data[i].nombre + '</option>');
                }
            }
        });
    });
    
});
