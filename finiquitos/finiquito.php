<?php

	require_once('../lib/pdf/mpdf.php');


	$html = ' <header class="clearfix">
      <div id="logo">
        <img src="img/logo.png">
      </div>

      <h1>Finiquito de Trabajador</h1>
      
    </header>
    <main>
    	<p>En Santiago, a <b>Fecha</b> entre <b>ILOP S.A.</b> con domicilio en Américo Vespucio  N ° 727, Huechuraba, Santiago y don) <b>GONZALEZ VARGAS, GLADYS DE LAS NIEVES</b>  C.I., <b>19.163.254-0</b> se acuerda el siguiente finiquito: 
    	</p>
    	<p><b>PRIMERO:</b> Don <b>GONZALEZ VARGAS, GLADYS DE LAS NIEVES</b>, se desempeñó como <b>OPERARIO INTEGRAL CENTRO DE DISTRIBUCION</b> desde el <b>20 de Julio de 2015</b> hasta el <b>29 de Noviembre de 2016</b>, fecha esta última de la terminación de sus servicios por la  causa dispuesta en el <b>Artículo 159 N° 2</b> del Código del Trabajo, esto es: <b>“RENUNCIA VOLUNTARIA DEL TRABAJADOR”</b>
    	</p>
        
    	<p><b>SEGUNDO:</b> Don <b>GONZALEZ VARGAS, GLADYS DE LAS NIEVES</b>, declara recibir en este acto, a su entera satisfacción, de parte de <b>ILOP S.A.</b> la suma única, según el siguiente detalle:  
    	</p>
        <br>
        <table>
        <thead>
          <tr>
            <th class="service"></th>
            <th class="desc"><b>HABERES</b></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"></td>
            <td class="desc">Creating a recognizable design solution based on the company existing visual identity</td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total">$1,040.00</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Developing a Content Management System-based Website</td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Optimize the site for search engines (SEO)</td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total">$800.00</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Initial training sessions for staff responsible for uploading web content</td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total">$160.00</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>TOTAL HABERES</b></td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total">$160.00</td>
          </tr>
        </tbody>

        <thead>
          <tr>
            <th class="service"></th>
            <th class="desc"><b>DESCUENTOS</b></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"></td>
            <td class="desc">Creating a recognizable design solution based on the company existing visual identity</td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total">$1,040.00</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Developing a Content Management System-based Website</td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Optimize the site for search engines (SEO)</td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total">$800.00</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc">Initial training sessions for staff responsible for uploading web content</td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total">$160.00</td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"><b>TOTAL DESCUENTOS</b></td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total">$160.00</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">TOTAL A PAGAR</td>
            <td class="grand total">$6,500.00</td>
          </tr>
        </tbody>
      </table>
        <p><b>Son: </b></p>
        
        <p><b>TERCERO:</b> Se deja constancia que durante el tiempo que prestó servicios para <b>ILOP S.A.</b> recibió de ésta correcta y oportunamente el total de las remuneraciones convenidas, de acuerdo con su contrato de trabajo, clase de trabajo ejecutado, reajustes legales, gratificaciones en conformidad a la Ley y que nada se le adeuda por los conceptos antes indicados ni por ningún otro, sea de origen legal o contractual derivado de la prestación de sus servicios, y por el cual, no teniendo reclamo que formular en contra de <b>ILOP S.A.</b> le otorga el más amplio y total finiquito, declaración que formula libre y espontáneamente, en perfecto y cabal conocimiento de todos y cada uno de sus derechos. Para constancia firman las partes el presente finiquito en tres ejemplares, quedando dos de ellos en poder del empleador y el otro en poder del trabajador. 
    	</p>
        <br>
        <div id="project">
            <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; _____________________________ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  _____________________________
            <br>
            &nbsp;<b>GONZALEZ VARGAS, GLADYS DE LAS NIEVES</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>ILOP S.A. </b>
            <br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> RUT. 19.163.254-0</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>RUT. 80.478.200-1</b>  
            </p>
        </div>
    </main>';


	$mpdf = new mPDF('c', 'A4');
	$css = file_get_contents('css/style.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('contrato.pdf','I');

?>