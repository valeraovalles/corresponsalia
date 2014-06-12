<?php

namespace Frontend\CorresponsaliaBundle\Resources\Misclases;

class htmlreporte
{
    public function excelrendicion($periodo,$ef,$c,$lr,$usuario,$parametros)
    {
        //listado rendicion
        $listaren='';$totalmn=0;$totald=0;
        foreach ($lr as $v) {
            $totalmn=$v->getMontomonnac()+$totalmn;
            $totald=$v->getMontodolar()+$totald;

            $listaren .="
                <tr>
                    <td>".$v->getNumerocomprobante()."</td>
                    <td>".$v->getFechafactura()->format('d-m-Y')."</td>    
                    <td colspan=3>".$v->getDescripciongasto()->getDescripcion()."</td>
                    <td>".$v->getNombrerazonsocial()."</td> 
                    <td>".$v->getIdentificacionfiscal()."</td> 
                    <td>".$v->getNumerofactura()."</td> 
                    <td>".$v->getCambio()."</td> 
                    <td>".$v->getMontomonnac()."</td> 
                    <td>".$v->getMontodolar()."</td> 
                    
                </tr>
            ";
            
        }//fin
        
        
        //tipo gasto
        if($periodo->getTipogasto()->getId()==2)
            $tg=strtoupper($periodo->getTipogasto()->getDescripcion()." (".$periodo->getCobertura()).")";
        else
            $tg=strtoupper($periodo->getTipogasto()->getDescripcion());
            
        
                        
		$html ="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
		$html .=" 
                    <table border=1 style='width:500px'>
                        <tr>
                            <td rowspan=2 colspan=7 style='font-size:12px;width:500px;' align='center'><b>RELACIÓN DE GASTOS DE LAS SUCURSALES O CORRESPONSALÍAS</b></td>
                            <th colspan=1 style='background-color:#cacaca;text-align:left;'>1. N° Relación: </th>
                            <td colspan=3></td>
                        </tr>
                        <tr>
                            <th colspan=1 style='background-color:#cacaca;text-align:left;'>2. Fecha: </th>
                            <td colspan=3></td>
                        </tr>
                        


                        <tr>
                            <th colspan=11  style='background-color:#cacaca;' align='center'>3. TIPO DE GASTO</th>
                        </tr>
                        <tr>
                            <td colspan=11>".$tg."</td>
                        </tr>
                        


                        <tr>
                            <th colspan=11  style='background-color:#cacaca;' align='center'>4. CORRESPONSALÍA / 5. PERÍODO</th>
                        </tr>
                        <tr>
                            <th colspan=5  style='background-color:#dddddd;' align='center'>NOMBRE</th>
                            <th colspan=2  style='background-color:#dddddd;' align='center'>PAÍS</th>
                            <th  style='background-color:#dddddd;' align='center'>AÑO</th>
                            <th  style='background-color:#dddddd;' align='center'>MES</th>
                            <th colspan=2  style='background-color:#dddddd;' align='center'>MONEDA</th>
                        </tr>
                        <tr>
                            <td colspan=5>".$periodo->getCorresponsalia()->getNombre()."</td>
                            <td colspan=2>".$periodo->getCorresponsalia()->getPais()->getPais()."</td>
                            <td>".$periodo->getAnio()."</td>
                            <td>".$periodo->getMes()."</td>
                            <td colspan=2>".$periodo->getCorresponsalia()->getTipomoneda()->getTipomoneda()."</td>
                        </tr>
		";
                
                $html .="
                        <tr>
                            <th colspan='11'   style='background-color:#cacaca;' align='center'>ESTADO SITUACIÓN DEL FONDO ENVIADO</th>
                        </tr>
                        <tr>
                            <th colspan=4>Descripción</th>
                            <th colspan=2>USD $</th>
                            <th colspan=2>Moneda nacional</th>
                            <th colspan=3>Bs.</th>
                        </tr>
                        <tr>
                            <td colspan=4>6. Saldo inicial</td>
                            <td colspan=2>".$ef['saldoinicial']."</td>
                            <td colspan=2>".$ef['saldoinicial_mn']."</td>
                            <td colspan=3>".$ef['saldoinicial_bs']."</td>
                        </tr>
                        <tr>
                            <td colspan=4>7. Recursos recibidos</td>
                            <td colspan=2>".$ef['recursorecibido']."</td>
                            <td colspan=2>".$ef['recursorecibido_mn']."</td>
                            <td colspan=3>".$ef['recursorecibido_bs']."</td>
                        </tr>
                        <tr>
                            <td colspan=4>8. Pagos efectuados</td>
                            <td colspan=2>".$ef['pagos']."</td>
                            <td colspan=2>".$ef['pagos_mn']."</td>
                            <td colspan=3>".$ef['pagos_bs']."</td>
                        </tr>
                        <tr style='font-weight: bold;'>
                            <td colspan=4>9. Saldo final</td>
                            <td colspan=2>".$ef['saldofinal']."</td>
                            <td colspan=2>".$ef['saldofinal_mn']."</td>
                            <td colspan=3>".$ef['saldofinal_bs']."</td>
                        </tr>
                ";
                
                $html .="
                        <tr>
                            <th colspan='11'  style='background-color:#cacaca;' align='center'>10. RELACIÓN DE GASTO</th>
                        </tr>
                        <tr>
                            <th style='background-color:#dddddd;' align='center'>11. Nro</th>
                            <th style='background-color:#dddddd;' align='center'>12. F. Factura</th>
                            <th colspan=3 style='background-color:#dddddd;' align='center'>14. Descripcion</th>
                            <th style='background-color:#dddddd;' align='center'>15. Razón</th>
                            <th style='background-color:#dddddd;' align='center'>16. I. Fiscal</th>
                            <th style='background-color:#dddddd;' align='center'>17. Nro Factura</th>
                            <th style='background-color:#dddddd;' align='center'>18. Tasa</th>
                            <th style='background-color:#dddddd;' align='center'>19. Monto MN.</th>
                            <th style='background-color:#dddddd;' align='center'>20. Dólares.</th>
                        </tr>
                        ".$listaren."
                        <tr>
                           <td colspan=9><b>TOTAL</b></td>
                           <td><b>".$totalmn."</b></td>
                           <td><b>".$totald."</b></td>
                       </tr>
                ";
                
                $html .="
                       <tr>
                           <td colspan=3  style='background-color:#cacaca;' align='center'><b>21. ELABORADO POR:</b></td>
                           <td colspan=3  style='background-color:#cacaca;' align='center'><b>22. N° DE IDENTIFICACIÓN</b></td>
                           <td colspan=5  style='background-color:#cacaca;' align='center'><b>24. N° JEFE DE SUCURSAL O CORRESPONSALÍA</b></td>
                       </tr>
                       <tr>
                           <td colspan=3 align='center'>".strtoupper($usuario->getPrimerNombre()." ".$usuario->getPrimerApellido())."</td>
                           <td colspan=3 align='center'> </td>
                           <td colspan=2 align='center'>Apellidos y Nombres: </td>
                           <td colspan=3 align='center'>Nro Identificación: </td>
                       </tr>
                       <tr>
                           <td colspan=6  style='background-color:#cacaca;' align='center'><b>23. FIRMA</b></td>
                           <td colspan=5  style='background-color:#cacaca;' align='center'><b>25. FIRMA</b></td>
                       </tr>
                       <tr>
                           <td colspan=6> </td>
                           <td colspan=5> </td>
                       </tr>
                       <tr>
                           <td colspan=6  style='background-color:#cacaca;' align='center'><b>CONFORMADO POR:</b></td>
                           <td colspan=5  style='background-color:#cacaca;' align='center'><b>VERIFICADO POR:</b></td>
                       </tr>
                           <td colspan='3'  style='background-color:#dddddd;' align='center'><b>26. UNIDAD DE APOYO LOGÍSTICO</b></td>
                           <td colspan='3'  style='background-color:#dddddd;' align='center'><b>27. ASIGNACIONES</b></td>
                           <td colspan='2' style='background-color:#dddddd;' align='center'><b>28. DIR. GENERAL DE INFORMACIÓN</b></td>
                           <td colspan='3'  style='background-color:#dddddd;' align='center'><b>29. DIR. DE ADMIN. Y FINANZAS</b></td>
                       </tr>
                       </tr>
                           <td colspan='3' align='center'>".$parametros['unidadapoyologistico']."</td>
                           <td colspan='3' align='center'>".$parametros['asignaciones']."</td>
                           <td colspan='2' align='center'>".$parametros['dirgeneralinformacion']."</td>
                           <td colspan='3' align='center'> </td>
                       </tr>
                       </tr>
                           <td colspan='3' align='center'><b>FIRMA</b></td>
                           <td colspan='3' align='center'><b>FIRMA</b></td>
                           <td colspan='2' align='center'><b>FIRMA</b></td>
                           <td colspan='3' align='center'><b>FIRMA</b></td>
                       </tr>
                       </tr>
                           <td colspan='3'> </td>
                           <td colspan='3'> </td>
                           <td colspan='2'> </td>
                           <td colspan='3'> </td>
                       </tr>
                ";
		return $html;
    }
}