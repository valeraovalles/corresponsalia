var jQuery = jQuery.noConflict();
jQuery(document).ready(function(){

    jQuery(".strtoupper").keyup(function(){
        var strRpd = ucFirst(jQuery(this).val());
        jQuery(this).val(strRpd);
//        jQuery(this).val().toUpperCase();
    });

    function ucFirst(str) {
        var res = str.split("");
        var first = res[0].toUpperCase();
        res[0] = first;
        return res.join("");
    }

});


