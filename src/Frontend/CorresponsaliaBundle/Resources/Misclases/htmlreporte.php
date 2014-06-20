<?php

namespace Frontend\CorresponsaliaBundle\Resources\Misclases;

class htmlreporte
{

  public function totalestadofondo($em,$datos){

   if(isset($datos['descripcionperiodo'])){
            $dql = "select x from CorresponsaliaBundle:Estadofondo x join x.periodorendicion p where p.corresponsalia in (:idcorresponsalia) and p.tipogasto in (:idtipogasto) and p.id in (:idperiodo) order by p.corresponsalia, p.tipogasto, p.anio ASC, p.mes ASC, x.id ASC";
            $query = $em->createQuery($dql);
            $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
            $query->setParameter('idtipogasto', $datos['tipogasto']);
            $query->setParameter('idperiodo', $datos['descripcionperiodo']);
            $result = $query->getResult();
      }
      else{
            $dql = "select x from CorresponsaliaBundle:Estadofondo x join x.periodorendicion p where p.corresponsalia in (:idcorresponsalia) and p.tipogasto in (:idtipogasto) and p.anio>= :aniodesde and p.anio <= :aniohasta and p.mes>= :mesdesde and p.mes<= :meshasta order by p.corresponsalia, p.tipogasto, p.anio ASC, p.mes ASC, x.id ASC";
            $query = $em->createQuery($dql);
            $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
            $query->setParameter('idtipogasto', $datos['tipogasto']);
            $query->setParameter('aniodesde', $datos['aniodesde']);
            $query->setParameter('aniohasta', $datos['aniohasta']);
            $query->setParameter('mesdesde', $datos['mesdesde']);
            $query->setParameter('meshasta', $datos['meshasta']);
            $result = $query->getResult();
      }

      //armo las corresponsalías
      $dql = "select x from CorresponsaliaBundle:Corresponsalia x where x.id in (:idcorresponsalia) order by x.id ASC";
      $query = $em->createQuery($dql);
      $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
      $corresponsalia = $query->getResult();
      $trcor="";
      foreach ($corresponsalia as $v) {
        $trcor .=$v->getNombre()." | ";
      }

      //armo los tipos de gastos
      $dql = "select x from CorresponsaliaBundle:Tipogasto x where x.id in (:idtipogasto) order by x.id ASC";
      $query = $em->createQuery($dql);
      $query->setParameter('idtipogasto', $datos['tipogasto']);
      $tipogasto = $query->getResult();
      $trtg="";
      foreach ($tipogasto as $v) {
        $trtg .=$v->getDescripcion()." | ";
      }

      $trdetalle="
        <tr>
          <th width='15%'>CORRESPONSALÍA</th>
          <th width='10%'>TIPO DE GASTO</th>
          <th width='20%'>DESCRIPCIÓN</th>
          <th>ANIO</th>
          <th>MES</th>
          <th>ESTATUS</th>
          <th>SALDO INICIAL</th>
          <th>RECURSO ENVIADO</th>
          <th>GASTADO</th>
          <th>TOTAL</th>
        </tr>";

      $cont=0;
      $totalsi=0;
      $totalrr=0;
      $totalpag=0;
      $totalt=0;
      foreach ($result as $v) {

        //coloco algo si no hay descripciopn
        if($v->getPeriodorendicion()->getDescripcionperiodo()!='')
          $descripcionperiodo=$v->getPeriodorendicion()->getDescripcionperiodo();
        else $descripcionperiodo='N/A';

        //verifico estatus
        if($v->getPeriodorendicion()->getEstatus()!='4')
          $estatus="Abierto";
        else $estatus="Cerrado";


        if ($cont % 2 != 0) # An odd row 
          $rowColor = "#ececec"; 
        else # An even row 
          $rowColor = "white"; 


        $total=($v->getSaldoinicial()+$v->getRecursorecibido())-$v->getPagos();

        $trdetalle .="<tr style='background-color:".$rowColor."'>
                        <td>".$v->getPeriodorendicion()->getCorresponsalia()->getNombre()."</td>
                        <td>".$v->getPeriodorendicion()->getTipogasto()->getDescripcion()."</td>
                        <td>".$descripcionperiodo."</td>
                        <td>".$v->getPeriodorendicion()->getAnio()."</td>
                        <td>".$v->getPeriodorendicion()->getMes()."</td>
                        <td>".$estatus."</td>
                        <td>".$v->getSaldoinicial()."</td>
                        <td>".$v->getRecursorecibido()."</td>
                        <td>".$v->getPagos()."</td>
                        <td>".$total."</td>
                      </tr>";
        $cont++;
        $totalsi=$totalsi+$v->getSaldoinicial();
        $totalrr=$totalrr+$v->getRecursorecibido();
        $totalpag=$totalpag+$v->getPagos();
        $totalt=$totalt+$total;
      }

      $html ="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><link href='/corresponsalia/web/bundles/corresponsalia/css/auditoriaestadofondo.css' rel='stylesheet' type='text/css' />";
      $html .="
          <table cellspacing=1 width='100%'>
            <tr>
              <td class='imagen' rowspan='5' style='text-align:center;'><img src='images/logo.jpg' height='150px'></td>
              <td class='titulo' align='center' colspan='4'>REPORTE TOTAL ESTADO FONDO</td>
            </tr>
            <tr>
              <th>CORRESPONSALÍA(S): </th>
              <td colspan='3'>".substr($trcor,0,-2)."</td>
            </tr>
            <tr>
              <th>TIPO(S) DE GASTO(S): </th>
              <td colspan='3'>".substr($trtg,0,-2)."</td>
            </tr>
            <tr>
              <th colspan='4'>PERIODO</th>
            </tr>
            <tr>
              <th>DESDE:</th><td>".$datos['mesdesde']."/".$datos['aniodesde']."</td><th>HASTA:</th><td>".$datos['meshasta']."/".$datos['aniohasta']."</td>
            </tr>
          </table>

          <br>
          <table width='100%'>
            ".$trdetalle."

            <tr style='background-color:yellow;'><th colspan=6>TOTALES</th><th>".$totalsi."</th><th>".$totalrr."</th><th>".$totalpag."</th><th>".$totalt."</th></tr>
          </table>


      ";

      return $html;
    die;
  }
  public function auditoriaestadofondo($em,$datos){


      if(isset($datos['descripcionperiodo'])){
            $dql = "select x from CorresponsaliaBundle:Auditoriaestadofondo x join x.periodorendicion p where p.corresponsalia in (:idcorresponsalia) and p.tipogasto in (:idtipogasto) and p.id in (:idperiodo) order by p.corresponsalia, p.tipogasto, p.anio ASC, p.mes ASC, x.operacion ASC, x.id ASC";
            $query = $em->createQuery($dql);
            $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
            $query->setParameter('idtipogasto', $datos['tipogasto']);
            $query->setParameter('idperiodo', $datos['descripcionperiodo']);
            $result = $query->getResult();
      }
      else{
            $dql = "select x from CorresponsaliaBundle:Auditoriaestadofondo x join x.periodorendicion p where p.corresponsalia in (:idcorresponsalia) and p.tipogasto in (:idtipogasto) and p.anio>= :aniodesde and p.anio <= :aniohasta and p.mes>= :mesdesde and p.mes<= :meshasta order by p.corresponsalia, p.tipogasto, p.anio ASC, p.mes ASC, x.operacion ASC, x.id ASC";
            $query = $em->createQuery($dql);
            $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
            $query->setParameter('idtipogasto', $datos['tipogasto']);
            $query->setParameter('aniodesde', $datos['aniodesde']);
            $query->setParameter('aniohasta', $datos['aniohasta']);
            $query->setParameter('mesdesde', $datos['mesdesde']);
            $query->setParameter('meshasta', $datos['meshasta']);
            $result = $query->getResult();
      }

      //armo las corresponsalías
      $dql = "select x from CorresponsaliaBundle:Corresponsalia x where x.id in (:idcorresponsalia) order by x.id ASC";
      $query = $em->createQuery($dql);
      $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
      $corresponsalia = $query->getResult();
      $trcor="";
      foreach ($corresponsalia as $v) {
        $trcor .=$v->getNombre()." | ";
      }

      //armo los tipos de gastos
      $dql = "select x from CorresponsaliaBundle:Tipogasto x where x.id in (:idtipogasto) order by x.id ASC";
      $query = $em->createQuery($dql);
      $query->setParameter('idtipogasto', $datos['tipogasto']);
      $tipogasto = $query->getResult();
      $trtg="";
      foreach ($tipogasto as $v) {
        $trtg .=$v->getDescripcion()." | ";
      }

      $trdetalle="
        <tr>
          <th width='15%'>CORRESPONSALÍA</th>
          <th width='10%'>TIPO DE GASTO</th>
          <th width='20%'>DESCRIPCIÓN</th>
          <th>ANIO</th>
          <th>MES</th>
          <th>SALDO INICIAL</th>
          <th>RECURSO TOTAL</th>
          <th>RECURSO ANTERIOR</th>
          <th>RECURSO NUEVO</th>
          <th>FECHA PROCESO</th>
          <th>HORA PROCESO</th>
          <th>RESPONSABLE</th>
          <th>PROCESO</th>
        </tr>";

      $cont=0;
      foreach ($result as $v) {
        $hora=explode(".", $v->getHoraproceso());

        if($v->getPeriodorendicion()->getDescripcionperiodo()!='')
          $descripcionperiodo=$v->getPeriodorendicion()->getDescripcionperiodo();
        else $descripcionperiodo='N/A';

        if ($cont % 2 != 0) # An odd row 
          $rowColor = "#ececec"; 
        else # An even row 
          $rowColor = "white"; 


        $trdetalle .="<tr style='background-color:".$rowColor."'>
                        <td>".$v->getPeriodorendicion()->getCorresponsalia()->getNombre()."</td>
                        <td>".$v->getPeriodorendicion()->getTipogasto()->getDescripcion()."</td>
                        <td>".$descripcionperiodo."</td>
                        <td>".$v->getPeriodorendicion()->getAnio()."</td>
                        <td>".$v->getPeriodorendicion()->getMes()."</td>
                        <td>".$v->getSaldoinicial()."</td>
                        <td>".$v->getRecursorecibido()."</td>
                        <td>".$v->getRecursoanterior()."</td>
                        <td>".$v->getRecursonuevo()."</td>
                        <td>".$v->getFechaproceso()->format('d-m-Y')."</td>
                        <td>".$hora[0]."</td>
                        <td>".$v->getResponsable()->getPrimerNombre()." ".$v->getResponsable()->getPrimerApellido()."</td>
                        <td>".$v->getOperacion()."</td>
                      </tr>";
        $cont++;
      }

      $html ="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><link href='/corresponsalia/web/bundles/corresponsalia/css/auditoriaestadofondo.css' rel='stylesheet' type='text/css' />";
      $html .="
          <table cellspacing=1 width='100%'>
            <tr>
              <td class='imagen' rowspan='5' style='text-align:center;'><img src='images/logo.jpg' height='150px'></td>
              <td class='titulo' align='center' colspan='4'>REPORTE DE ESTADO FONDO</td>
            </tr>
            <tr>
              <th>CORRESPONSALÍA(S): </th>
              <td colspan='3'>".substr($trcor,0,-2)."</td>
            </tr>
            <tr>
              <th>TIPO(S) DE GASTO(S): </th>
              <td colspan='3'>".substr($trtg,0,-2)."</td>
            </tr>
            <tr>
              <th colspan='4'>PERIODO</th>
            </tr>
            <tr>
              <th>DESDE:</th><td>".$datos['mesdesde']."/".$datos['aniodesde']."</td><th>HASTA:</th><td>".$datos['meshasta']."/".$datos['aniohasta']."</td>
            </tr>
          </table>

          <br>
          <table width='100%'>
            ".$trdetalle."
          </table>

      ";

      return $html;
  }


   public function rendicion($em,$datos){

      if(isset($datos['descripcionperiodo'])){
        $dql = "select x from CorresponsaliaBundle:Relaciongasto x join x.periodorendicion p where p.corresponsalia in (:idcorresponsalia) and p.tipogasto in (:idtipogasto) and p.id in (:idperiodo) and x.descripciongasto in (:iddesgas) order by x.id ASC";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
        $query->setParameter('idtipogasto', $datos['tipogasto']);
        $query->setParameter('idperiodo', $datos['descripcionperiodo']);
        $query->setParameter('iddesgas', $datos['descripciongasto']);
        $result = $query->getResult();
      }

      else{

        $dql = "select x from CorresponsaliaBundle:Relaciongasto x join x.periodorendicion p where p.corresponsalia in (:idcorresponsalia) and p.tipogasto in (:idtipogasto) and p.anio>= :aniodesde and p.anio <= :aniohasta and p.mes>= :mesdesde and p.mes<= :meshasta and x.descripciongasto in (:iddesgas) order by x.id ASC";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
        $query->setParameter('idtipogasto', $datos['tipogasto']);
        $query->setParameter('aniodesde', $datos['aniodesde']);
        $query->setParameter('aniohasta', $datos['aniohasta']);
        $query->setParameter('mesdesde', $datos['mesdesde']);
        $query->setParameter('meshasta', $datos['meshasta']);
        $query->setParameter('iddesgas', $datos['descripciongasto']);
        $result = $query->getResult();

      }


      //armo las corresponsalías
      $dql = "select x from CorresponsaliaBundle:Corresponsalia x where x.id in (:idcorresponsalia) order by x.id ASC";
      $query = $em->createQuery($dql);
      $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
      $corresponsalia = $query->getResult();
      $trcor="";
      foreach ($corresponsalia as $v) {
        $trcor .=$v->getNombre()." | ";
      }

      //armo los tipos de gastos
      $dql = "select x from CorresponsaliaBundle:Tipogasto x where x.id in (:idtipogasto) order by x.id ASC";
      $query = $em->createQuery($dql);
      $query->setParameter('idtipogasto', $datos['tipogasto']);
      $tipogasto = $query->getResult();
      $trtg="";
      foreach ($tipogasto as $v) {
        $trtg .=$v->getDescripcion()." | ";
      }



      //armo el detalle
      $trdetalle="

        <tr>
          <th>CORRESPONSALÍA</th>
          <th>TIPO DE GASTO</th>
          <th width='20%'>DESCRIPCIÓN PERIODO</th>
          <th>ANIO</th>
          <th>MES</th>
          <th>DESCRIPCIÓN GASTO</th>
          <th>MONTO MONEDA NACIONAL</th>
          <th>MONTO DOLARES</th>
          <th>CAMBIO</th>
        </tr>

      ";
      $totalmontomonnac=0;
      $totalmontodolar=0;
      $cont=0;
      foreach ($result as $v) {

        if($v->getPeriodorendicion()->getDescripcionperiodo()!='')
          $descripcionperiodo=$v->getPeriodorendicion()->getDescripcionperiodo();
        else $descripcionperiodo='N/A';

        if ($cont % 2 != 0) # An odd row 
          $rowColor = "#ececec"; 
        else # An even row 
          $rowColor = "white"; 

        $trdetalle .="<tr style='background-color:".$rowColor."'>
                        <td>".$v->getPeriodorendicion()->getCorresponsalia()->getNombre()."</td>
                        <td>".$v->getPeriodorendicion()->getTipogasto()->getDescripcion()."</td>
                        <td>".$descripcionperiodo."</td>
                        <td>".$v->getPeriodorendicion()->getAnio()."</td>
                        <td>".$v->getPeriodorendicion()->getMes()."</td>
                        <td>".$v->getDescripciongasto()->getDescripcion()."</td>
                        <td>".$v->getMontomonnac()."</td>
                        <td>".$v->getMontodolar()."</td>
                        <td>".$v->getCambio()."</td>
                        </tr>";

        $totalmontomonnac = $totalmontomonnac + $v->getMontomonnac();
        $totalmontodolar = $totalmontodolar + $v->getMontodolar();
        $cont++;
                      
      }
      $trdetalle .="
        <tr class='trtotal'>
          <td colspan=6 class='total'>TOTALES:</td>
          <td class='montos'>".$totalmontomonnac."</td>
          <td class='montos'>".$totalmontodolar."</td>
          <td></td>
        </tr>
      ";

      if(isset($result[0])) $responsable=strtoupper($result[0]->getResponsable()->getPrimerNombre()." ".$result[0]->getResponsable()->getPrimerApellido());
      else $responsable=null;


      $html ="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><link href='/corresponsalia/web/bundles/corresponsalia/css/reporterendicion.css' rel='stylesheet' type='text/css' />";
      $html .="
          <table cellspacing=1 width='100%'>
            <tr>
              <td class='imagen' rowspan='5' style='text-align:center;'><img src='images/logo.jpg' height='150px'></td>
              <td class='titulo' align='center' colspan='4'>REPORTE DE RENDICION</td>
            </tr>
            <tr>
              <th>CORRESPONSALÍA(S): </th>
              <td colspan='3'>".substr($trcor,0,-2)."</td>
            </tr>
            <tr>
              <th>TIPO(S) DE GASTO(S): </th>
              <td colspan='3'>".substr($trtg,0,-2)."</td>
            </tr>
            <tr>
              <th colspan='4'>PERIODO</th>
            </tr>
            <tr>
              <th>DESDE:</th><td>".$datos['mesdesde']."/".$datos['aniodesde']."</td><th>HASTA:</th><td>".$datos['meshasta']."/".$datos['aniohasta']."</td>
            </tr>
          </table>

          <br>
          <table width='100%'>
            ".$trdetalle."
          </table>
          <br><br>
          <div><b>RESPONSABLE: </b>".$responsable."</div>
      ";


      return $html;

  }


   public function auditoriarendicion($em,$datos){

      if(isset($datos['descripcionperiodo'])){
        $dql = "select x from CorresponsaliaBundle:Auditoriarendicion x join x.periodorendicion p where p.corresponsalia in (:idcorresponsalia) and p.tipogasto in (:idtipogasto) and p.id in (:idperiodo) and x.descripciongasto in (:iddesgas) order by p.corresponsalia, p.tipogasto,x.descripciongasto, p.anio ASC, p.mes ASC, x.operacion ASC";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
        $query->setParameter('idtipogasto', $datos['tipogasto']);
        $query->setParameter('idperiodo', $datos['descripcionperiodo']);
        $query->setParameter('iddesgas', $datos['descripciongasto']);
        $result = $query->getResult();
      }

      else{

        $dql = "select x from CorresponsaliaBundle:Auditoriarendicion x join x.periodorendicion p where p.corresponsalia in (:idcorresponsalia) and p.tipogasto in (:idtipogasto) and p.anio>= :aniodesde and p.anio <= :aniohasta and p.mes>= :mesdesde and p.mes<= :meshasta and x.descripciongasto in (:iddesgas) order by x.idtabla, x.operacion ASC";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
        $query->setParameter('idtipogasto', $datos['tipogasto']);
        $query->setParameter('aniodesde', $datos['aniodesde']);
        $query->setParameter('aniohasta', $datos['aniohasta']);
        $query->setParameter('mesdesde', $datos['mesdesde']);
        $query->setParameter('meshasta', $datos['meshasta']);
        $query->setParameter('iddesgas', $datos['descripciongasto']);
        $result = $query->getResult();

      }


      //armo las corresponsalías
      $dql = "select x from CorresponsaliaBundle:Corresponsalia x where x.id in (:idcorresponsalia) order by x.id ASC";
      $query = $em->createQuery($dql);
      $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
      $corresponsalia = $query->getResult();
      $trcor="";
      foreach ($corresponsalia as $v) {
        $trcor .=$v->getNombre()." | ";
      }

      //armo los tipos de gastos
      $dql = "select x from CorresponsaliaBundle:Tipogasto x where x.id in (:idtipogasto) order by x.id ASC";
      $query = $em->createQuery($dql);
      $query->setParameter('idtipogasto', $datos['tipogasto']);
      $tipogasto = $query->getResult();
      $trtg="";
      foreach ($tipogasto as $v) {
        $trtg .=$v->getDescripcion()." | ";
      }



      //armo el detalle
      $trdetalle="

        <tr>
          <th>IDT</th>
          <th>CORRESPONSALÍA</th>
          <th>TIPO DE GASTO</th>
          <th>DESCRIPCIÓN</th>
          <th>ANIO</th>
          <th>MES</th>
          <th>NUM COMP.</th>
          <th>F. FACTURA</th>
          <th>R. SOCIAL</th>
          <th>I. FISCAL</th>
          <th>NUM FACT.</th>
          <th>DESCRIPCIÓN GASTO</th>
          <th>MONTO MONEDA NACIONAL</th>
          <th>MONTO DOLARES</th>
          <th>CAMBIO</th>
          <th>FECHA P.</th>
          <th>HORA P.</th>
          <th>RESPONSABLE</th>
          <th>OPERACION</th>
        </tr>

      ";

      $cont=0;
      foreach ($result as $v) {
        $hora=explode(".", $v->getHoraproceso());

        if($v->getPeriodorendicion()->getDescripcionperiodo()!='')
          $descripcionperiodo=$v->getPeriodorendicion()->getDescripcionperiodo();
        else $descripcionperiodo='N/A';

        if ($cont % 2 != 0) # An odd row 
          $rowColor = "#ececec"; 
        else # An even row 
          $rowColor = "white"; 

        $trdetalle .="<tr style='background-color:".$rowColor."'>
                        <td>".$v->getIdtabla()->getId()."</td>
                        <td>".$v->getPeriodorendicion()->getCorresponsalia()->getNombre()."</td>
                        <td>".$v->getPeriodorendicion()->getTipogasto()->getDescripcion()."</td>
                        <td>".$descripcionperiodo."</td>
                        <td>".$v->getPeriodorendicion()->getAnio()."</td>
                        <td>".$v->getPeriodorendicion()->getMes()."</td>
                        <td>".$v->getNumerocomprobante()."</td>
                        <td>".$v->getFechafactura()->format('d-m-Y')."</td>
                        <td>".$v->getNombrerazonsocial()."</td>
                        <td>".$v->getIdentificacionfiscal()."</td>
                        <td>".$v->getNumerofactura()."</td>
                        <td>".$v->getDescripciongasto()->getDescripcion()."</td>
                        <td>".$v->getMontomonnac()."</td>
                        <td>".$v->getMontodolar()."</td>
                        <td>".$v->getCambio()."</td>
                        <td>".$v->getFechaproceso()->format('d-m-Y')."</td>
                        <td>".$hora[0]."</td>
                        <td>".strtoupper($v->getResponsable()->getPrimerNombre()." ".$v->getResponsable()->getPrimerApellido())."</td>
                        <td>".$v->getOperacion()."</td>
                        </tr>";
        $cont++;
      }


      $html ="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><link href='/corresponsalia/web/bundles/corresponsalia/css/reporterendicion.css' rel='stylesheet' type='text/css' />";
      $html .="
          <table cellspacing=1 width='100%'>
            <tr>
              <td class='imagen' rowspan='5' style='text-align:center;'><img src='images/logo.jpg' height='150px'></td>
              <td class='titulo' align='center' colspan='4'>REPORTE DE RENDICION</td>
            </tr>
            <tr>
              <th>CORRESPONSALÍA(S): </th>
              <td colspan='3'>".substr($trcor,0,-2)."</td>
            </tr>
            <tr>
              <th>TIPO(S) DE GASTO(S): </th>
              <td colspan='3'>".substr($trtg,0,-2)."</td>
            </tr>
            <tr>
              <th colspan='4'>PERIODO</th>
            </tr>
            <tr>
              <th>DESDE:</th><td>".$datos['mesdesde']."/".$datos['aniodesde']."</td><th>HASTA:</th><td>".$datos['meshasta']."/".$datos['aniohasta']."</td>
            </tr>
          </table>

          <br>
          <table width='100%'>
            ".$trdetalle."
          </table>
      ";





      return $html;

  }
  public function excelrendicion($periodo,$ef,$c,$lr,$parametros)
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
        if($periodo->getDescripcionperiodo()!='')
            $tg=strtoupper($periodo->getTipogasto()->getDescripcion()." (".$periodo->getDescripcionperiodo()).")";
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
                           <td colspan=3 align='center'>".strtoupper($lr[0]->getResponsable()->getPrimerNombre()." ".$lr[0]->getResponsable()->getPrimerApellido())."</td>
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
                            <th colspan='3'><b>26. ANALISTA ENCARGADO(A):</b> </th>
                            <td colspan='3'></td>
                            <th colspan='3'><b>27. FIRMA:</b> </th>
                            <td colspan='2'></td>
                       </tr>
                       <tr>
                           <td colspan=6  style='background-color:#cacaca;' align='center'><b>CONFORMADO POR:</b></td>
                           <td colspan=5  style='background-color:#cacaca;' align='center'><b>VERIFICADO POR:</b></td>
                       </tr>
                           <td colspan='3'  style='background-color:#dddddd;' align='center'><b>28. UNIDAD DE APOYO LOGÍSTICO</b></td>
                           <td colspan='3'  style='background-color:#dddddd;' align='center'><b>30. ASIGNACIONES</b></td>
                           <td colspan='2' style='background-color:#dddddd;' align='center'><b>32. DIR. GENERAL DE INFORMACIÓN</b></td>
                           <td colspan='3'  style='background-color:#dddddd;' align='center'><b>34. DIR. DE ADMIN. Y FINANZAS</b></td>
                       </tr>
                       </tr>
                           <td colspan='3' align='center'>".$parametros['unidadapoyologistico']."</td>
                           <td colspan='3' align='center'>".$parametros['asignaciones']."</td>
                           <td colspan='2' align='center'>".$parametros['dirgeneralinformacion']."</td>
                           <td colspan='3' align='center'> </td>
                       </tr>
                       </tr>
                           <td colspan='3' align='center'><b>29. FIRMA</b></td>
                           <td colspan='3' align='center'><b>31. FIRMA</b></td>
                           <td colspan='2' align='center'><b>33. FIRMA</b></td>
                           <td colspan='3' align='center'><b>35. FIRMA</b></td>
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
