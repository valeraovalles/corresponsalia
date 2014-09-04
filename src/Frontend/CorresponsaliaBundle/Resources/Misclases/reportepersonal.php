<?php

namespace Frontend\CorresponsaliaBundle\Resources\Misclases;

class reportepersonal
{
	public function personal($em,$seleccionadas, $personal, $cont)
	{   $html=NULL;
		for ($i=0; $i <$cont ; $i++) { 
			if($personal[$i]!=NULL)
			{
				$html.="
		            	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><link href='/corresponsalia/web/bundles/corresponsalia/css/auditoriaestadofondo.css' rel='stylesheet' type='text/css' />
		        		<table width='1000px'>
		        			<tr>
								<td width='50px' class='imagen'><img src='/corresponsalia/web/images/logo.jpg' height='150px'></td>
								<td class='titulo' align='center' valing='middle' colspan='8'>LISTADO DE PERSONAL EN CORRESPONSALÍA <br> ".$seleccionadas[$i]['nombre']."
								</td>
							</tr>
		        		</table>";

		        $html.="
	        			<table width='1000px' cellspacing=1 cellpadding='5px' class='table'>
	                    <tr style='font-weight:bold' bgcolor=#CFF>
	                        <td>Nombre</td>                       
	                        <td>N&uacute;mero de Pasaporte</td>
	                        <td>Correo</td>
	                        <td>Tel&eacute;fono</td>
	                        <td>Cargo</td>
	                        <td>Sueldo</td>
	                    </tr>";
        		$conta=0;
        		foreach ($personal[$i] as $key ) {
        			$conta++;	
        		}

        		for ($j=0; $j <$conta ; $j++) { 
        			$html.="<tr><td>".$personal[$i][$j]['nombre']."</td>";
        			$html.="<td>".$personal[$i][$j]['pasaporte']."</td>";
        			$html.="<td>".$personal[$i][$j]['correo']."</td>";
        			$html.="<td>".$personal[$i][$j]['telefono']."</td>";
        			$html.="<td>".$personal[$i][$j]['cargo']."</td>";
        			$html.="<td>".$personal[$i][$j]['sueldo']."</td>";
        		}

            	$html.= "</table><br><br><br><br>";
            	//echo $titulo.$inicio.$cuerpo.$fin;
            }
		}

		return $html;
	}
}