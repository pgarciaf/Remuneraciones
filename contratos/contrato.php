<?php

	require_once('../lib/pdf/mpdf.php');


	$html = ' <header class="clearfix">
      <div id="logo">
        <img src="img/logo.png">
      </div>

      <div id="company" class="clearfix">
        <div><b>SUCURSAL:</b> Nombre Sucursal<div>
      </div>

      <h1>Contrato de Trabajo</h1>
      <h2>Jefe de Sucursal</h2>
      
    </header>
    <main>
    	<p>En Santiago, a <b>Fecha</b>, entre <b>ILOP S.A</b> representada para estos efectos por  <b>RICARDO ROJAS OLIVARES</b>, Rut. <b>10.872.686-5</b> Subgerente de Personas, ambos domiciliados en Avda. Américo Vespucio 727 Huechuraba- Santiago, en adelante “La Empresa” y don(ña) <b>Nombre Empleado</b>, de nacionalidad <b>N</b>, Cédula Nacional de Identidad Nº <b>00.000.000-0</b>, estado civil <b>soltero</b>(a), nacido(a) el <b>fecha de nacimiento</b>, con domicilio <b>Dirección</b>, en adelante “el trabajador” se ha convenido en celebrar el siguiente Contrato de Trabajo: 
    	</p>
    	<p><b>PRIMERO:</b> El giro comercial de la empresa compareciente es la venta al minoreo de artículos de librería y para estos efectos mantiene una cadena de tiendas a través del país.
    	</p>
    	<p><b>SEGUNDO:</b> Por este acto e instrumento <b>ILOP S.A.</b>, contrata a <b>Nombre Empelado</b>, como <b>Jefe de Sucursal</b>  para prestar servicios en calle <b>Dirección</b>, o en cualquier otra sucursal o dependencia perteneciente a la empresa, o en la que ella posea instalaciones o desarrolle actividades, pudiendo ser trasladado a otro domicilio, a labores similares, dentro de la ciudad por causa justificada, sin que ello importe menoscabo para el trabajador. 
    	</p>
    	<p><b>TERCERO:</b> El Trabajador prestará sus servicios cumpliendo con todas las obligaciones y deberes propios de las funciones para las que ha sido contratado y tendrá, entre otras, las siguientes labores específicas:
    		<br>
    		<br>
    		a) Implementar y ejecutar las normas impartidas por la Administración de la empresa, así como controlar su cumplimiento.
    		<br>
    		<br>
    		b) Supervisar al personal bajo su dependencia, velando por mantener e incrementar la productividad y motivación.
    		<br>
    		<br>
    		c) Cumplir y hacer cumplir las normas legales al interior de la tienda.
    		<br>
    		<br>
    		d) Controlar la apertura y cierre del local, la recepción, despacho y exhibición  de mercadería, la atención a los compradores o clientes, el resguardo, cobranza y depósito de los valores adeudados al establecimiento o recaudados en éste, la adquisición de las mercaderías que constituyen el giro ordinario del establecimiento.
    		<br>
    		<br>
    		e) Velar por el aumento de las ventas del local y el cumplimiento de las metas establecidas por la administración superior de la empresa, mediante las acciones que sean aprobadas y programadas por ella. 
    		<br>
    		<br>
    		f) Además deberá desempeñar labores de Caja, cada vez que se requiera, de acuerdo a las necesidades propias de quienes disponen la Administración de la Sucursal, y en el momento de efectuar las funciones deberá realizar lo siguiente: 
    		<br>
    		<br>
    		f.1: Cobrar y percibir toda suma que por cualquier concepto se le adeudare a la empresa, recibiendo   el pago de  las adquisiciones que los clientes efectúan en la tienda.
    		<br>
    		<br>
    		f.2: Extender conjuntamente con la percepción de los pagos, los comprobantes internos o tributarios      que corresponda. 
    		<br>
    		<br>
    		f.3: Cuadrar y hacer entrega formal cada vez que se deje de desempeñar las labores propias de caja  por  cualquier motivo (Horario de descanso, cambio de turno, etc).
    		<br>
    		<br>
    		f.4: Rendir y cuadrar al término de las jornadas las cajas respectivas. 
    		<br>
    		<br>
    		g) Mantener un estricto control sobre los gastos del establecimiento, proponiendo y ejecutando políticas de eficiencia y productividad en el uso de los recursos.
    		<br>
    		<br>
    		h) Mantener y cautelar la documentación e información que para el desarrollo de su trabajo se le entregue, velando por su debida confidencialidad. 
    		<br>
    		<br>
    		i) Preocuparse del adecuado cuidado, mantención y seguridad de las instalaciones a su cargo, adoptando las medidas necesarias para reparar daños o deterioros.
    		<br>
    		<br>
    		j) Representar a la empresa ante organismos públicos y privados que se relacionen con su trabajo, conforme a las atribuciones que se le otorgarán. 
    		<br>
    		<br>
    		k) En general, cumplir todas y cada una de las instrucciones y normas que le impartan los representantes de la empresa.
    		<br>
    		<br>
    		l) Cabe señalar que el trabajador debe realizar las labores que su Jefe directo le imparta aunque estas no aparezcan en las descripciones antes mencionadas, siempre que estén acorde al cargo al cual ha sido contrato
    	</p>
    	<p><b>CUARTO:</b> Con apego al artículo 22 del código del trabajo, y en atención a las facultades de Administración otorgadas al trabajador; por desarrollar sus labores sin fiscalización inmediata, ostentadas por el trabajador, y además en atención a  que el desarrollo  de las labores son en una región diferente a la del Empleador y atendidas las características de los servicios que se obliga a prestar y el cargo que desempeña, estará excluido de la limitación en su jornada de trabajo. 
    	</p>
    	<p><b>QUINTO:</b> La empresa se compromete a remunerar al trabajador con la suma de:
    	<br>
    	<br>
    	<b>a)</b> Sueldo base mensual: <b>Monto</b>
    	<br>
    	<br>
    	<b>b)</b> Con objeto de incentivar la eficiencia en la administración y cuidado de los inventarios de mercadería de la sucursal en la cual este destinado el trabajador, el empleador pagara mensualmente una <b>Asignación de Inventario</b> de <b>$35.000</b> (treinta y cinco mil pesos), cumplidas que sean las siguientes condiciones:
    	<br>
    	<br>
    	b.1: Las diferencias resultantes de la confrontación de los inventarios computacionales con el físico calificado como faltantes o mermas valorizadas se dividirán entre el número de funcionarios que labora regularmente en la sucursal y dicho resultante se imputara a la <b>Asignación de Inventario</b> asignado por la empresa a cada trabajador mes a mes.
    	<br>
    	<br>
    	b.2:  Para el caso que la diferencia de inventario conforme se indicó sea mayor al valor mensual de la <b>Asignación</b> el saldo no cubierto por este se acumulara imputándose al de los meses siguientes hasta la extinción de la diferencia.
    	<br>
    	<br>
    	b.3: En la ocasión que el monto por diferencia de inventario correspondiente sea mayor a la <b>Asignación de Inventario mensual</b>, el saldo no cubierto por este se acumulara imputándose al Asignación del mes siguiente hasta saldar la diferencia.
    	<br>
    	<br>
    	<b>c)</b> La Empresa pagara una <b>Asignación de Pérdida de Caja</b> de <b>$25.000</b> (veinticinco mil pesos). Con objeto de cubrir las pérdidas que pudieran producirse en la operación de la Caja.  Las partes pactan expresamente que las diferencias o faltantes de la caja se  le haya asignado, durante el respectivo mes calendario, serán descontados de esta Asignación.
    	<br>
    	<br>
    	Las remuneraciones se pagarán mensualmente el 5 de cada mes, en dinero efectivo u otro medio de pago, y del monto de ellas la empresa hará las deducciones que establecen las leyes vigentes, así como los anticipos y otros descuentos autorizados por escrito por el trabajador.
    	<br>
    	En este acto el trabajador autoriza expresamente al Empleador a pagar las remuneraciones vía deposito Electrónico en alguna cuenta Vista o de debito gestionada por el Empleador. De la misma forma en caso que el trabajador así lo solicite, el empleador abonara la Remuneración en una cuenta corriente cuyo titular sea el trabajador. 
    	<br>
    	La empresa pagará al trabajador la gratificación establecida en el artículo 50 del Código del Trabajo. Esta gratificación involucra y reemplaza a las gratificaciones legales, o a cualquiera otra forma de participación en las utilidades de la empresa y a cualquier otra remuneración accesoria que la Ley pudiera fijar. La forma de gratificar, año a año será elegida libremente por el empleador.   
    	</p>
    	<p><b>SEXTO:</b> Las partes, acuerdan que atendidas las funciones de Administrar recursos físicos, financieros, humanos y mercado lógicos que se conceden al  JEFE DE SUCURSAL, que se contrata por este instrumento califican las funciones que se desarrollan, como de la exclusiva confianza de la empresa por lo que,  no podrá negociar colectivamente. 
    	</p>
    	<p><b>SÉPTIMO:</b> Serán <b>obligaciones y prohibiciones</b> del trabajador, las que se pasarán a indicar, cuya inobservancia configurará un incumplimiento grave a las obligaciones que impone el contrato de trabajo, en los términos del Nº 7 del artículo 160 del Código del Trabajo:
    		<br>
    		<br>
            <br>
    		<b>OBLIGACIONES:</b>
    		<br>
    		1) Mantener informada a la administración de la empresa, acerca del funcionamiento, novedades e irregularidades que se produzcan. 
    		<br>
    		2) Asegurarse que el libro de asistencia se encuentre al día y firmado por los dependientes a cargo.
    		<br>
    		3) Mantener suficiente stock de documentación autorizada por el Servicio de Impuestos Internos, preocupándose que ella cumpla con los requisitos legales previos a su utilización.
            <br>
            4) Trato cortés; deferente y amable con los clientes, trabajadores y personal de la empresa. 
            <br>
            5) Guardar el mayor celo en la custodia y conservación de los documentos, valores y activos que el empleador le entregue para el desempeño de sus funciones, o la información a que pudiera acceder en relación a su cargo, responsabilizándose de su pérdida o extravío y del uso indebido que pudiera hacerse de ellos. En el evento que el presente contrato terminare, por cualquier causa, será obligación del trabajador devolver de inmediato a su superior todos los documentos pertenecientes a ella. 
            <br>
            6) Guardar la más absoluta reserva de todas las operaciones de la empresa y/o de sus clientes.
            <br>
            7) Asistir a citaciones especiales requeridas por la empresa.
            <br>
            8) Cumplir con las instrucciones verbales o escritas de sus superiores.
            <br>
            9) Velar por la recuperabilidad de los créditos otorgados conforme a las normas establecidas por la empresa.
            <br>
            10) Cumplir fiel y oportunamente con las obligaciones tributarias, sanitarias, laborales y municipales, inherentes al desarrollo de sus actividades.
            <br>
            11) Cumplir con el procedimiento y funciones de Caja con rigurosidad en los momentos que se requiera según las necesidades propias de la sucursal.
            <br>
            <br>
            <b>PROHIBICIONES:</b>
            <br>
            1) Efectuar gastos no autorizados por la administración de la empresa.
            <br>
            2) Autorizar el cambio de cheques de terceros y devolución de excedentes.
            <br>
            3) Ejecutar a título personal cualquier acción, negociación y comercio para beneficio propio o de terceros. 
            <br>
            4) Prestar asesorías y/o desempeñarse a cualesquier título para un tercero.
            <br>
            5) Suministrar o permitir que se suministre información propia de los negocios o actividades de la empresa o sociedades relacionadas.
            <br>
            6) Introducir o permitir que se introduzca a la base de datos y/o procesos de la empresa, información de propiedad de terceros y/o que no cuenten con la autorización escrita del superior del área.
            <br>
            7) Retirar mercadería del local sin la respectiva documentación  que acredita la transacción mercantil (guía de despacho, boleta o factura).
            <br>
            8) Hacer uso indebido de las claves computacionales asignadas por la empresa. para la realización de transacciones comerciales. A demás se deja constancia que estas son personales e intransferibles.  
    	</p>
        <p><b>OCTAVO:</b> Atendida la naturaleza de las actividades desempeñadas por la empresa y en especial su estacionalidad en ventas, las partes acuerdan que los periodos para hacer uso del Feriado legal Anual o Vacaciones, serán principalmente entre los meses de Abril y Noviembre. 
        </p>
        <p><b>NOVENO:</b> Declara el trabajador, en este acto,  que tomará conocimiento del Manual de procedimiento vigente en ILOP S.A entregado por el área de Auditoria de la Compañía a cada sucursal, y que se obliga a leer y cumplir cabalmente.
        <br>
        <br>
        Las partes de este contrato declaran que la falta de aplicación o incumplimiento de una o mas de las normas y disposiciones contenidas en el manual antes indicado, se considerara para todos los efectos legales y contractuales como “infracción grave a las obligaciones que impone el contrato”. 
        </p>
         <p><b>DECIMO:</b> Las partes declaran que el presente contrato reemplaza él o los anteriores,  y que la fecha de ingreso del trabajador <b>Nombre Empleado</b> a la empresa es el <b>fecha ingreso</b>. 
        </p>
        <p><b>DECIMO PRIMERO:</b> El presente Contrato es a plazo fijo hasta el <b>fecha</b>. Si al cabo de dicho periodo el trabajador continuara prestando servicios, este se prorrogará hasta el <b>fecha</b>. Transcurrida dicha prórroga sin haberse  puesto termino a el por alguna de las partes en conformidad a la ley, este a partir del <b>día siguiente al segundo vencimiento</b> pasara a ser Automáticamente Indefinido.  
        </p>
        <p><b>DECIMO SEGUNDO:</b> En este acto el trabajador declara recibir el Reglamento Interno de Orden, Higiene y Seguridad Industrial para los trabajadores de ILOP S.A. y se obliga a estudiarlo y a cumplir cabalmente sus disposiciones, como también las demás normas e instrucciones reglamentarias, escritas o verbales, emanadas del Departamento de Recursos Humanos o de Prevención de Riesgos o de la Jefatura respectiva.  
        </p>
        <p><b>DECIMO TERCERO:</b> En este acto el trabajador reconoce estar en conocimiento de los riesgos que entrañan sus labores, las medidas preventivas y los métodos de trabajo correctos, para desempeñar en forma optima sus labores, cumpliéndose de este modo, con la obligación del “Derecho a Saber”.   
        </p>
        <br>
        <p><b>DECIMO CUARTO:</b> El presente Contrato se firma en tres ejemplares del mismo tenor, declarando el trabajador recibir uno de ellos a su entera satisfacción.  
        </p>
        <br>
        <br>
        <br>
        <div id="project">
            <p> _____________________________
            <br>
            <b>FIRMA TRABAJADOR</b>
            <br>
            <b> RUT.</b> 
            </p>
        </div>
        
        <div id="company" class="clearfix">
           <div>_____________________________</div>
            <div><b> ILOP S.A.</b></div>
            <div><b> RUT. 80.478.200-1</b></div> 
      </div>
      
     
    </main>';


	$mpdf = new mPDF('c', 'A4');
	$css = file_get_contents('css/style.css');
	$mpdf->writeHTML($css, 1);
	$mpdf->writeHTML($html);
	$mpdf->Output('contrato.pdf','I');

?>