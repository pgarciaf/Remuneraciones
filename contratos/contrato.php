<?php

	require_once('../lib/pdf/mpdf.php');


	$html = '
      <main>
      <div id="details" class="clearfix">
        <div id="client">
          
        <div id="invoice">
          <h1>CONTRATO PERSONAL</h1>
          
        </div>
      </div>
      <br>
      <br>
      <div class="parrafo">
        <p>En Santiago a 07 de Septiembre de 2017, entre la empresa <b>MAGALLANES Limitada</b>, sociedad del giro de su denominación, rol único tributario número 76.724.123-2, representada por don <b>CARLOS MARCELO ARANDA BERTRANINE</b>, empresario, chileno, soltero, cédula nacional de identidad número 10.034.865-9, domiciliado para estos efectos en Libertador Bernardo O´Higgins 1101, comuna de Santiago, ciudad de Santiago, Región Metropolitana, "el empleador"; y al Sra. <b>GRECIA DE LA CRUZ CACERES AGUIRRE</b>, de nacionalidad Venezolana, Pasaporte Nº 080435938, mayor de edad en consecuencia, capaz de celebrar contrato de trabajo, domiciliado en Pasaje los Océanos 966, de la ciudad de Santiago, comuna de Maipu, en adelante "el trabajador"; se ha convenido el siguiente contrato de trabajo:</p>

        <P><b>PRIMERO:</b>  La empresa <b>MAGALLANES Limitada</b>, contrata a la Sra. <b>GRECIA DE LA CRUZ CACERES AGUIRRE</b>, quien acepta y se compromete a realizar el trabajo de Vendedor en terreno, o cualquier otra labor a fin que le encomiende el empleador o sus superiores.</P>

        <P><b>SEGUNDO:</b>  El trabajador deberá prestar sus servicios en <b>Avenida Libertador Bernardo O`Higgins 1101</b>, Paseo Las Delicias.</P>

        <P><b>TERCERO:</b> La jornada de trabajo será de 45 horas semanales distribuidas de la siguiente forma: De lunes a sábado, en  la siguiente distribución: <b>de 10:30 a 18:30 Horas</b>.</P>

        <P><b>CUARTO:</b> La remuneración del trabajador será la suma mensual de <b>$290.000-</b>  (Doscientos noventa mil Pesos), por mes calendario, que será liquidada y pagada por períodos vencidos, en las Oficinas del empleador,  dentro de los 5 primeros días del mes siguiente a la prestación de los servicios indicados.</P>

      </div>
      </main>';

	$mpdf = new mPDF('c','A4');
	$css = file_get_contents('css/style.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('contrato.pdf', 'I');



?>