<?php

	require_once('../lib/pdf/mpdf.php');


	$html = ' <header class="clearfix">
      <div id="logo">
        <img src="img/logo.png">
      </div>
      <div id="company" class="clearfix">
        <div>Santiago, <b>Fecha</b></div>
      </div>
      <div id="project">
        <div>Señor(ita)</div>
        <br>
        <div><b>Nombre.</b></div>
        <div><b>Rut.</b></div>
        <div><b>Dirección</b></div>
        <br>
        <div><b><u>Presente</u></b></div>
      </div>

      <div id="company" class="clearfix">
        <div>Ref: <b>Notificación Término de Contrato de Trabajo </b></div>
      </div>
    </header>
    <main>
    	<p>De nuestra consideración: 
    	</p>
    	<p>Ponemos en su conocimiento que con <b>Fecha</b>. se ha determinado poner término a su Contrato de Trabajo, según lo dispuesto en el <b>Artículo N°161</b> del código del trabajo, esto es: <b>“Necesidades de la empresa"</b> 
    	</p>
        
    	<p>“Esta determinación está fundada en la organización general de nuestra empresa, lo cual nos ha llevado a reestructurar la dotación de nuestras sucursales de la zona a la cual usted pertenece entre otras”.</p>
        
        <p>Finalmente, informamos a usted que sus cotizaciones Previsionales, de Seguridad Social y seguro de cesantía si lo hubiere, se encuentran enteradas  en forma íntegra y oportuna en la Institución Previsional respectiva. Para esto se adjuntan fotocopias de las planillas de cotizaciones respectivas de acuerdo a indicaciones legales.</p>
        
        <p>De acuerdo a lo establecido en la normativa legal vigente se está enviando copia de esta comunicación a la Inspección del Trabajo respectiva.  
    	 </p>
       <p>Sin otro particular, saluda atentamente a usted.</p>
       <br>
       <br>
       <p class="centro">
          <b>Jefe(a) de Sucursal</b>
          <br>
           <b>ILOP S.A</b>
           <br>
          <b>80.478.200-1</b>
       </p>
       <br>
       <br>
       <br>
       <div id="company" class="clearfix">
        <div><b>Tomo conocimiento: ________________________</b></div>
      </div>
      <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Rut.</b></p>
      <br>
      <p>c.c.: Inspección del Trabajo
          <br>
          c.c.: Carpeta personal
      </p>   
    </main>';


	$mpdf = new mPDF('c', 'A4');
	$css = file_get_contents('css/style.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('contrato.pdf','I');

?>