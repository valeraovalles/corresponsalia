<?php

namespace Frontend\CorresponsaliaBundle\Resources\Misclases;

class htmlreporte
{
    public function excelrendicion($rg,$ef,$c,$lr)
    {
        $listaren='';$totalmn=0;$totald=0;
        foreach ($lr as $v) {
            $totalmn=$v->getMontomonnac()+$totalmn;
            $totald=$v->getMontodolar()+$totald;

            $listaren .="
                <tr>
                    <td>".$v->getNumerocomprobante()."</td>
                    <td>".$v->getFechafactura()->format('d-m-Y')."</td>    
                    <td>".$v->getDescripciongasto()->getDescripcion()."</td>
                    <td>".$v->getNombrerazonsocial()."</td> 
                    <td>".$v->getIdentificacionfiscal()."</td> 
                    <td>".$v->getNumerofactura()."</td> 
                    <td>".$v->getCambio()."</td> 
                    <td>".$v->getMontomonnac()."</td> 
                    <td>".$v->getMontodolar()."</td> 
                    
                </tr>
            ";
            
        }
        
                        
		$html ="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
		$html .=" 
                    <table border=1 style='width:500px'>
                        <tr>
                            <td rowspan=2 colspan=5 style='font-size:12px;width:600px;' align='center'><b>RELACIÓN DE GASTOS DE LAS SUCURSALES O CORRESPONSALÍAS</b></td>
                            <th colspan=2 style='background-color:#cacaca;'>1. N° Relación: </th>
                            <td colspan=2></td>
                        </tr>
                        <tr>
                            <th colspan=2 style='background-color:#cacaca;'>4. Fecha: </th>
                            <td colspan=2></td>
                        </tr>
                        


                        <tr>
                            <th colspan=9  style='background-color:#cacaca;' align='center'>3. TIPO DE GASTO</th>
                        </tr>
                        <tr>
                            <td colspan=9>".$rg->getPeriodorendicion()->getTipogasto()->getDescripcion()."</td>
                        </tr>
                        


                        <tr>
                            <th colspan=9  style='background-color:#cacaca;' align='center'>4. CORRESPONSALÍA / PERÍODO</th>
                        </tr>
                        <tr>
                            <th colspan=3  style='background-color:#dddddd;' align='center'>NOMBRE</th>
                            <th  style='background-color:#dddddd;' align='center'>PAÍS</th>
                            <th  style='background-color:#dddddd;' align='center'>AÑO</th>
                            <th  style='background-color:#dddddd;' align='center'>MES</th>
                            <th colspan=2  style='background-color:#dddddd;' align='center'>MONEDA</th>
                            <th  style='background-color:#dddddd;' align='center'>CAMBIO</th>
                        </tr>
                        <tr>
                            <td colspan=3>".$rg->getPeriodorendicion()->getCorresponsalia()->getNombre()."</td>
                            <td>".$rg->getPeriodorendicion()->getCorresponsalia()->getPais()->getPais()."</td>
                            <td>".$rg->getPeriodorendicion()->getAnio()."</td>
                            <td>".$rg->getPeriodorendicion()->getMes()."</td>
                            <td colspan=2>".$rg->getPeriodorendicion()->getCorresponsalia()->getTipomoneda()->getTipomoneda()."</td>
                            <td>".$c->getMontocambiodolar()."</td>
                        </tr>
		";
                
                $html .="
                        <tr>
                            <th colspan='9'   style='background-color:#cacaca;' align='center'>ESTADO SITUACIÓN DEL FONDO ENVIADO</th>
                        </tr>
                        <tr>
                            <th colspan=3>Descripción</th>
                            <th colspan=2>USD $</th>
                            <th colspan=2>Moneda nacional</th>
                            <th colspan=2>Bs.</th>
                        </tr>
                        <tr>
                            <td colspan=3>Saldo inicial</td>
                            <td colspan=2>".$ef['saldoinicial']."</td>
                            <td colspan=2>".$ef['saldoinicial_mn']."</td>
                            <td colspan=2>".$ef['saldoinicial_bs']."</td>
                        </tr>
                        <tr>
                            <td colspan=3>Recursos recibidos</td>
                            <td colspan=2>".$ef['recursorecibido']."</td>
                            <td colspan=2>".$ef['recursorecibido_mn']."</td>
                            <td colspan=2>".$ef['recursorecibido_bs']."</td>
                        </tr>
                        <tr>
                            <td colspan=3>Pagos efectuados</td>
                            <td colspan=2>".$ef['pagos']."</td>
                            <td colspan=2>".$ef['pagos_mn']."</td>
                            <td colspan=2>".$ef['pagos_bs']."</td>
                        </tr>
                        <tr style='font-weight: bold;'>
                            <td colspan=3>Saldo final</td>
                            <td colspan=2>".$ef['saldofinal']."</td>
                            <td colspan=2>".$ef['saldofinal_mn']."</td>
                            <td colspan=2>".$ef['saldofinal_bs']."</td>
                        </tr>
                ";
                
                $html .="
                        <tr>
                            <th colspan='9'  style='background-color:#cacaca;' align='center'>RELACIÓN DE GASTO</th>
                        </tr>
                        <tr>
                            <th style='background-color:#dddddd;' align='center'>Nro</th>
                            <th style='background-color:#dddddd;' align='center'>F. Factura</th>
                            <th style='background-color:#dddddd;' align='center'>Descripcion</th>
                            <th style='background-color:#dddddd;' align='center'>Nombre/Razón</th>
                            <th style='background-color:#dddddd;' align='center'>I. Fiscal</th>
                            <th style='background-color:#dddddd;' align='center'>Nro Factura</th>
                            <th style='background-color:#dddddd;' align='center'>Tasa</th>
                            <th style='background-color:#dddddd;' align='center'>Monto MN.</th>
                            <th style='background-color:#dddddd;' align='center'>Dólares.</th>
                        </tr>
                        ".$listaren."
                        <tr>
                           <td colspan=7>TOTAL</td>
                           <td>".$totalmn."</td>
                           <td>".$totald."</td>
                       </tr>
                ";
                
                $html .="
                       <tr>
                           <td colspan=2  style='background-color:#cacaca;' align='center'><b>20. ELABORADO / APELLIDOS Y NOMBRE</b></td>
                           <td colspan=1  style='background-color:#cacaca;' align='center'><b>21. N° DE IDENTIFICACIÓN</b></td>
                           <td colspan=6  style='background-color:#cacaca;' align='center'><b>23. N° JEFE DE SUCURSAL O CORRESPONSALÍA</b></td>
                       </tr>
                       <tr>
                           <td colspan=3>x</td>
                           <td colspan=2>Apellidos y Nombres: </td>
                           <td colspan=4>Nro Identificación: </td>
                       </tr>
                       <tr>
                           <td colspan=3  style='background-color:#cacaca;' align='center'><b>22. FIRMA</b></td>
                           <td colspan=6  style='background-color:#cacaca;' align='center'><b>24. FIRMA</b></td>
                       </tr>
                       <tr>
                           <td colspan=3>x</td>
                           <td colspan=6>x</td>
                       </tr>
                       <tr>
                           <td colspan=3  style='background-color:#cacaca;' align='center'><b>CONFORMADO POR:</b></td>
                           <td colspan=6  style='background-color:#cacaca;' align='center'><b>VERIFICADO POR:</b></td>
                       </tr>
                           <td colspan='2'  style='background-color:#dddddd;' align='center'><b>25. UNIDAD DE APOYO LOGÍSTICO</b></td>
                           <td colspan='1'  style='background-color:#dddddd;' align='center'><b>26. JEFE DE ASIGNACIONES</b></td>
                           <td colspan='3' style='background-color:#dddddd;' align='center'><b>27. DIRECTOR GENERAL DE INFORMACIÓN</b></td>
                           <td colspan='3'  style='background-color:#dddddd;' align='center'><b>28. DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS</b></td>
                       </tr>
                       </tr>
                           <td colspan='2'>Apellidos y Nombre: </td>
                           <td colspan='1'>Apellidos y Nombre: </td>
                           <td colspan='3'>Apellidos y Nombre: </td>
                           <td colspan='3'>Apellidos y Nombre: </td>
                       </tr>
                       </tr>
                           <td colspan='2'><b>FIRMA</b></td>
                           <td colspan='1'><b>FIRMA</b></td>
                           <td colspan='3'><b>FIRMA</b></td>
                           <td colspan='3'><b>FIRMA</b></td>
                       </tr>
                       </tr>
                           <td colspan='2'>X</td>
                           <td colspan='1'>X</td>
                           <td colspan='3'>X</td>
                           <td colspan='3'>X</td>
                       </tr>
                ";
		return $html;
    }
}