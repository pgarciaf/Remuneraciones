<?php

	require_once('../lib/pdf/mpdf.php');


	$html = ' <header class="clearfix">

      <div id="company" class="clearfix">
        <div><b>Historico</b></div>
        <div><b>Octubre de 2017</b></div>
      </div>
      <div id="project">
        <div><span><b>ILOP S.A</b></span></div>
        <div><span><b>RUT. 80.478.200-1</b></span></div>
        <div><span><b>AMERICO VESPUCIO # 727</b></span></div>
      </div>
    </header>
    <h1>LIQUIDACIÓN DE REMUNERACIONES</h1>
    <main>
    	<table>
        <thead>
          <tr>
            <th class="service"></th>
            <th class="desc"><b></b></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>Nombre:</b> RICARDO PAOLO GUTIERREZ  JERIAN</td>
            <td class="desc"><b>Rut:</b></td>
            <td class="desc">13.543.945-2</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>Cargo:</b>  Jefe de Sucursal</td>
            <td class="desc"><b>Código Interno:</b></td>
            <td class="desc">13543945-2</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>Ubicación:</b> (93) Capitan Arturo Pratt Chacon 568 572</td>
            <td class="desc"><b>Fecha Ingreso:</b></td>
            <td class="desc">01.Ene 2.001</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>Días Tr:</b> 30</td>
            <td class="desc"><b>Horas Base:</b></td>
            <td class="desc"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total"></td>
            <td class="grand total"></td>
          </tr>
        </tbody>
      </table>
        <br>
        <br>
        <table>
        <thead>
          <tr>
            <th class="service"></th>
            <th class="desc"><b>Detalles</b></th>
            <th><b>Vo</b></th>
            <th><b>Haberes</b></th>
            <th><b>Descuento</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>HABERES</b></td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="desc"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Sueldo Base</td>
            <td class="unit"></td>
            <td class="qty">$800.00</td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Asignacion Asistencia</td>
            <td class="unit"></td>
            <td class="qty">$800.00</td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Asignacion Inventario</td>
            <td class="unit"></td>
            <td class="qty">$160.00</td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Bono entrenador (CORTES  FUENZALIDA, NATALIE)</td>
            <td class="unit"></td>
            <td class="qty">$160.00</td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Gratificación Legal </td>
            <td class="unit"></td>
            <td class="qty">$160.00</td>
            <td class="total"></td>
          </tr>
         <tr>
            <td class="service"></td>
            <td class="desc"><b>ASIGNACIONES FAMILIARESES</b></td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="desc"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Asignación Familiar</td>
            <td class="desc"></td>
            <td class="qty"></td>
            <td class="desc"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>DESCUENTOS LEGALES</b></td>
            <td class="desc"></td>
            <td class="desc"></td>
            <td class="desc"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">11.45% Cotiz. BBVA Provida sobre: 828.075</td>
            <td class="desc"></td>
            <td class="qty"></td>
            <td class="qty">$94.815</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">7% Fonasa </td>
            <td class="desc"></td>
            <td class="qty"></td>
            <td class="qty">$57.965</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Impto.  4% de:675.295  -Reb:25264.44 </td>
            <td class="desc"></td>
            <td class="qty"></td>
            <td class="qty">$1.747</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>DESCUENTOS</b></td>
            <td class="desc"></td>
            <td class="qty"></td>
            <td class="qty"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Seguro Caja los Andes</td>
            <td class="desc"></td>
            <td class="qty"></td>
            <td class="qty">$773</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total"></td>
            <td class="grand total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>TOTALES</b></td>
            <td class="desc"></td>
            <td class="total">$828.075 </td>
            <td class="total"> $155.300 </td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">Liquido a Pagar</td>
            <td class="grand total">$672.775</td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
        <p>Recibi conforme la suma de : pesos correspondiente  al total de mi remuneración del mes de: <b>OCTUBRE DE 2.017</b> segun contrato vigente y sus anexos , ademas  se me incluyo  un comprobante  indicando los montos pagados y las deducciones efectuadas, Art. 54º.</p>
        
        
        <br>
        <div id="project">
            <p> ______________________________   
            <br>
            &nbsp; &nbsp;<b>RICARDO PAOLO GUTIERREZ</b> 
            <br>
             
            </p>
        </div>
    </main>';


	$mpdf = new mPDF('c', 'A4');
	$css = file_get_contents('css/style.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('contrato.pdf','I');

?>