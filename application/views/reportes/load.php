<?php 	
$ingreso_reasig = $dist_reasignaciones_bar[0];
$examen_reasig = $dist_reasignaciones_bar[1];
$control_reasig = $dist_reasignaciones_bar[2];
$procedimiento_reasig = $dist_reasignaciones_bar[3];

$ingreso_agend = $dist_agendamientos_bar[0];
$examen_agend = $dist_agendamientos_bar[1];
$control_agend = $dist_agendamientos_bar[2];
$procedimiento_agend = $dist_agendamientos_bar[3];

$info_r_ingreso = $dist_reasignaciones[0];
$info_r_examen = $dist_reasignaciones[1];
$info_r_control = $dist_reasignaciones[2];
$info_r_proced = $dist_reasignaciones[3];
		
		
 ?>


<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
   <li><a data-toggle="tab" href="#agendamientos"><i class="fa fa-book"></i> Agendamientos</a></li>
  <li><a data-toggle="tab" href="#reasignaciones"><i class="fa fa-exchange"></i> Reasignaciones</a></li>
<!--   <li><a data-toggle="tab" href="#confirmaciones"><i class="fa  fa-thumbs-o-up"></i> Confirmaciones</a></li>
  <li><a data-toggle="tab" href="#otros"><i class="fa  fa-asterisk"></i> Otros</a></li> -->
  <li><a data-toggle="tab" href="#menu1">Tablas</a></li>
   <li><a data-toggle="tab" href="#informe">Informe</a></li>
  
</ul>
<div class="tab-content">
	  <div id="home" class="tab-pane fade in active">
	  	<h3>Gráficos</h3>
				<div class="row">
	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Pacientes gestionados agendadamientos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="agendamientos_chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>

<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Pacientes gestionados reasignaciones
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="reasignaciones_chart">
                           	
                           </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>
</div>

<div class="row">
	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Pacientes gestionados confirmaciones
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="confirmaciones_chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>

<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Pacientes gestionados otros
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="otros_chart">
                           	
                           </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>
</div>






      </div>

       <div id="menu1" class="tab-pane fade in" >

       <div class="row">
<div class="col-md-12">
		<h2>Tablas de distribución</h2>
		<hr>
		<h3>Distribucion de agendamientos</h3>
		<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr><th>Prestacion</th>
				<th>Hora ya asignada</th>
				<th>Erroneos</th>
				<th>Rechazos / anulaciones</th>
				<th>No contestaron</th>
				<th>Pacientes agendados</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($dist_agendamientos_bar as $row) : ?>
					<tr><td>
						<?php echo $row->prestacion; ?></td>
						<td><?php echo $row->hora_ya_asignada; ?></td>
						<td><?php echo $row->n_erroneo; ?></td>
						<td><?php echo $row->rechazo_anulaciones; ?></td>
						<td><?php echo $row->no_contestaron; ?></td>
						<td><?php echo $row->pacientes_agendados; ?></td>


					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


<div class="row">
<div class="col-md-12">
		<hr>
		<h3>Distribucion de reasignaciones</h3>
		<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr><th>Prestacion</th>
				<th>Sin Cupo</th>
				<th>Hora ya asignada</th>
				<th>Erroneos</th>
				<th>Rechazos / anulaciones</th>
				<th>No contestaron</th>
				<th>Pacientes agendados</th>
				<th>Total</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($dist_reasignaciones_bar as $row) : ?>
					<tr><td>
						<?php echo $row->prestacion; ?></td>
						<td><?php echo $row->sin_cupo; ?></td>
						<td><?php echo $row->hora_ya_asignada; ?></td>
						<td><?php echo $row->n_erroneo; ?></td>
						<td><?php echo $row->rechazo_anulaciones; ?></td>
						<td><?php echo $row->no_contestaron; ?></td>
						<td><?php echo $row->pacientes_agendados; ?></td>
						<td><?php echo $row->pacientes; ?></td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


<div class="row">
			<div class="col-md-12">
		<hr>
		<h3>Distribucion de confirmaciones</h3>
		<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr>
				<th>Prestacion</th>
				<th>confirmadas</th>
				<th>Hora ya asignada</th>
				<th>Erroneos</th>
				<th>Rechazos / anulaciones</th>
				<th>No contestaron</th>
				<th>Total</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($dist_confirmaciones_bar as $row) : ?>
					<tr><td>
						<?php echo $row->prestacion; ?></td>
						<td><?php echo $row->confirmadas; ?></td>
						<td><?php echo $row->hora_ya_asignada; ?></td>
						<td><?php echo $row->n_erroneo; ?></td>
						<td><?php echo $row->rechazo_anulaciones; ?></td>
						<td><?php echo $row->no_contestaron; ?></td>

						<td><?php echo $row->pacientes; ?></td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<div class="row">
			<div class="col-md-12">
		<hr>
		<h3>Distribucion de otros</h3>
		<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr>
				<th>Prestacion</th>
				<th>confirmadas</th>
				<th>Hora ya asignada</th>
				<th>Erroneos</th>
				<th>Rechazos / anulaciones</th>
				<th>No contestaron</th>
				<th>Total</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($dist_otros_bar as $row) : ?>
					<tr><td>
						<?php echo $row->prestacion; ?></td>
						<td><?php echo $row->confirmadas; ?></td>
						<td><?php echo $row->hora_ya_asignada; ?></td>
						<td><?php echo $row->n_erroneo; ?></td>
						<td><?php echo $row->rechazo_anulaciones; ?></td>
						<td><?php echo $row->no_contestaron; ?></td>

						<td><?php echo $row->pacientes; ?></td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h2>Top Profesionales</h2>
		<hr>

		<div class="row">
			<div class="col-md-6">
						<h3>Reasignaciones</h3>
				<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr>
				<th>Profesional</th>
				<th>Pacientes</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($top_p_rea as $row) : ?>
					<tr><td>
						<?php echo $row->profesional; ?></td>
						<td><?php echo $row->total; ?></td>
					

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
			</div>

			<div class="col-md-6">
						<h3>Confirmaciones</h3>
				<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr>
				<th>Profesional</th>
				<th>Pacientes</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($top_p_conf as $row) : ?>
					<tr><td>
						<?php echo $row->profesional; ?></td>
						<td><?php echo $row->total; ?></td>
					

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
			</div>
		</div>

		<div class="row">
					<div class="col-md-6">
						<h3>Agendamientos</h3>
				<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr>
				<th>Profesional</th>
				<th>Pacientes</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($top_p_ag as $row) : ?>
					<tr><td>
						<?php echo $row->profesional; ?></td>
						<td><?php echo $row->total; ?></td>
					

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
			</div>

						<div class="col-md-6">
						<h3>Otros</h3>
				<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr>
				<th>Profesional</th>
				<th>Pacientes</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($top_p_otros as $row) : ?>
					<tr><td>
						<?php echo $row->profesional; ?></td>
						<td><?php echo $row->total; ?></td>
					

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

<div class="row">
	<div class="col-md-12">
		<hr>
		<h3>Reasignaciones por especialidad</h3>
					<table class="table table-bordered table-hover table-condensed">
		<thead>
				<tr>
				<th>Especialidad</th>
				<th>Pacientes</th>
			</tr>
		</thead>
			<tbody>
				<?php foreach ($rea_por_especialidad as $row) : ?>
					<tr><td>
						<?php echo $row->especialidad; ?></td>
						<td><?php echo $row->total; ?></td>
					

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


</div>
</div>
    <div id="agendamientos" class="tab-pane fade in" >
    	     	<br>	
     	<div class="row">
	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Distribución de reasignaciones
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="dist_agendamientos_chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>


	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Distribución por Examen
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="dist_agendamientos_examen_chart" style="display: block;margin:0 auto;"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>
</div>

     	<div class="row">
	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Distribución por control
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="dist_agendamientos_control_chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>


	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Distribución por ingreso
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="dist_agendamientos_ingreso_chart" style="display: block;margin:0 auto;"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>
</div>
    </div>
     <div id="reasignaciones" class="tab-pane fade in" >
     	<br>	
     	<div class="row">
	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Distribución de reasignaciones
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="dist_reasignaciones_chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>


	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Distribución por Examen
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="dist_reasignaciones_examen_chart" style="display: block;margin:0 auto;"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>
</div>


<div class="row">
	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Distribucion por control
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="dist_reasignaciones_control_chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>


	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Distribución por ingreso
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div id="dist_reasignaciones_ingreso_chart" "></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
</div>


</div>

     </div>

     <div id="confirmaciones" class="tab-pane fade in" ></div>
     <div id="otros" class="tab-pane fade in" ></div>
      <div id="informe" class="tab-pane fade in" >

      	      	<div class="row">
      	      		<br>	
      		<div class="col-md-12">	
				<button class="btn btn-success" id="convert">Descargar <i class="fa fa-download">	</i></button>
  				<div id="download-area"></div>
      		</div>
      	</div>
      	<hr>	
      	<div id="content">
      		<h4>Informe Operación Call Center Hospital Clínico Metropolitano La Florida </h4>
      	<div class="row">
      		<div class="col-md-4">
      			<div id="info_agendamientos_chart"></div>
      		</div>
      		<div class="col-md-8" style="padding-top: 50px;">
				<?php 	$ag_total = $ag_no_contestaron->total + $ag_rechazos_anulaciones->total + $ag_n_erroneos->total + $ag_horas_ya_asignadas->total +$ag_pacientes_agendados->total; ?>
      			Durante el periodo , se agendaron un total de <?= $ag_pacientes_agendados->total; ?> pacientes, mientras que <?= $ag_no_contestaron->total; ?> pacientes no contestaron el llamado telefónico, pese a que a lo menos se realizaron 3 llamados a cada número disponible, <?= $ag_rechazos_anulaciones->total; ?> personas rechazaron o anularon su hora y <?= $ag_horas_ya_asignadas->total; ?> personas señalaron que ya tenían  hora asignada. En el período hubo <?= $ag_n_erroneos->total; ?> números erróneos.
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md-4">
      			<div id="info_reasignaciones_chart"></div>
      		</div>
      		<div class="col-md-8" style="padding-top: 50px;">
      			<?php 	$re_total = $re_no_contestaron->total + $re_rechazos_anulaciones->total + $re_n_erroneos->total + $re_horas_ya_asignadas->total +$re_pacientes_agendados->total + $re_sin_cupo->total; ?>
      			En relación a los pacientes reasignados , se gestionaron <?= $re_total; ?> pacientes, de los cuales, se agendaron <?= $re_pacientes_agendados->total; ?> pacientes, mientras que <?= $re_no_contestaron->total; ?> no contestaron el llamado telefónico, <?= $re_rechazos_anulaciones->total; ?> pacientes rechazaron o anularon la hora y <?= $re_horas_ya_asignadas->total; ?> pacientes ya tenían su hora agendada. Aquí se genera una diferencia de <?= $re_sin_cupo->total; ?> pacientes sobre los cuales no se realiza gestión por no haber disponibilidad de cupos. En el período hubo <?= $re_n_erroneos->total; ?> números telefónicos errados.
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md-4">
      			<div id="info_dist_reasignaciones_chart"></div>
      		</div>
      		<div class="col-md-8" style="padding-top: 50px;">
      			En relación a los <?= $re_pacientes_agendados->total; ?> pacientes reasignados , <?= $info_r_control->total; ?>   correspondió a Controles, <?= $info_r_examen->total; ?>  a Exámenes, <?= $info_r_ingreso->total; ?> a ingresos y <?= $info_r_proced->total; ?> a Procedimientos.
      		</div>
      	</div>


      	<div class="row">
      		<div class="col-md-4">
      			<div id="info_dist_reasignaciones_control_chart"></div>
      		</div>
      		<div class="col-md-8" style="padding-top: 50px;">
      			En relación a los <?= $info_r_control->total; ?>  pacientes de reasignación de Controles ,  <?php 	echo $control_reasig->pacientes_agendados; ?> fueron agendados,  <?php 	echo $control_reasig->no_contestaron; ?> pacientes no contestaron el llamado telefónico,  <?php 	echo $control_reasig->rechazo_anulaciones; ?> pacientes rechazaron o anularon la hora, y  <?php 	echo $control_reasig->hora_ya_asignada; ?> pacientes señalaron tener una hora ya asignada. Había  <?php 	echo $control_reasig->n_erroneo; ?> números telefónicos errados.
Por otra parte, hubo  <?php 	echo $control_reasig->sin_cupo; ?> pacientes sobre los cuales no se realizó gestión, debido a que no se disponía de cupo. 

      		</div>
      	</div> 
      		<div class="row">
      		<div class="col-md-4">
      			<div id="info_dist_reasignaciones_ingreso_chart"></div>
      		</div>
      		<div class="col-md-8" style="padding-top: 50px;">
      			<?php $total_ingreso_r_control = $ingreso_reasig->pacientes_agendados + $ingreso_reasig->no_contestaron + $ingreso_reasig->rechazo_anulaciones + $ingreso_reasig->hora_ya_asignada + $ingreso_reasig->n_erroneo +$ingreso_reasig->sin_cupo;  ?>
      			En relación a los <?php echo $total_ingreso_r_control ?> pacientes reasignados de Ingresos , <?php 	echo $ingreso_reasig->pacientes_agendados; ?> fueron agendados, <?php 	echo $ingreso_reasig->no_contestaron; ?>  pacientes no contestaron el llamado telefónico, hubo <?php 	echo $ingreso_reasig->rechazo_anulaciones; ?>  pacientes que rechazaron o anularon la hora, <?php 	echo $ingreso_reasig->hora_ya_asignada; ?>  pacientes que señalaron tener una hora ya asignada. Había <?php 	echo $ingreso_reasig->n_erroneo; ?>  números telefónicos errados. Existe una falta de <?php 	echo $ingreso_reasig->sin_cupo; ?>  pacientes sobre los cuales no se realizó gestión, producto que no se disponía de cupo
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-4">
      			<div id="info_dist_reasignaciones_examen_chart"></div>
      		</div>
      		<div class="col-md-8" style="padding-top: 50px;">
      			<?php 	$total_ingreso_r_examen = $examen_reasig->pacientes_agendados + $examen_reasig->no_contestaron + $examen_reasig->rechazo_anulaciones + $examen_reasig->hora_ya_asignada + $examen_reasig->n_erroneo + $examen_reasig->sin_cupo ; ?>
      			En cuanto a los <?php 	echo $total_ingreso_r_examen; ?> pacientes reasignados de exámenes , <?php 	echo $examen_reasig->pacientes_agendados; ?> fueron agendados, <?php 	echo $examen_reasig->no_contestaron; ?> no contestaron el llamado telefónico. Hubo <?php 	echo $examen_reasig->rechazo_anulaciones; ?> pacientes que rechazaran o anularan la hora y  hubo <?php 	echo $examen_reasig->hora_ya_asignada; ?> pacientes que señalaran tener ya una hora asignada. Había <?php 	echo $examen_reasig->n_erroneo; ?> números telefónicos errados. Hubo un total de <?php 	echo $examen_reasig->sin_cupo; ?> pacientes sobre los cuales no se realizó gestión, producto que no se disponía de cupo.
      		</div>
      	</div>


      	      	<div class="row">
      		<div class="col-md-4">
      			<div id="info_confirmaciones_chart"></div>
      		</div>
      		<?php 	
      				$conf_total = $conf_no_contestaron->total + $conf_rechazos_anulaciones->total + $conf_n_erroneo->total + $conf_horas_ya_asignadas->total +$conf_confirmadas->total
      				+ $conf_reasignadas->total; 
      		?>
      		<div class="col-md-8" style="padding-top: 50px;">
      			En relación a las confirmaciones, de un total de <?php 	echo $conf_total; ?> gestiones realizadas, dio como resultado <?php echo $conf_confirmadas->total; ?> pacientes confirmados, <?php echo $conf_rechazos_anulaciones->total; ?>  pacientes que anularon o rechazaron la hora, <?php echo $conf_reasignadas->total; ?>  pacientes con la hora reasignada y <?php echo $conf_no_contestaron->total; ?>  pacientes que no contestaron el llamado telefónico. Se detectaron <?php echo $conf_n_erroneo->total; ?>  números telefónicos erróneos.
      		</div>
      	</div>

      </div>



      </div>




<script>
	 function drawChart() {
	 	var list = [];
        var data = new google.visualization.DataTable();
        data.addColumn('string', '');
        data.addColumn('number', '');
        data.addRows([
          ['Pacientes agendados', <?php echo $ag_pacientes_agendados->total; ?>],
          ['No contestaron', <?php echo $ag_no_contestaron->total; ?>],
          ['Rechazos / Anulaciones', <?php echo $ag_rechazos_anulaciones->total; ?>],
          ['Numeros erroneos', <?php echo $ag_n_erroneos->total; ?>],
          ['Horas ya asignadas', <?php echo $ag_horas_ya_asignadas->total; ?>]
        ]);
        var agendamientos_piechart = new google.visualization.PieChart(document.getElementById('agendamientos_chart'));
         google.visualization.events.addListener(agendamientos_piechart, 'ready', function () {
     	    document.getElementById('info_agendamientos_chart').innerHTML = '<img src="' + agendamientos_piechart.getImageURI() + '">';
    		});

       agendamientos_piechart.draw(data,  {title:'Agendamientos',
                       width:400,
                       height:300,
                       is3D:true
                   		});
       

        var data2 = new google.visualization.DataTable();
        data2.addColumn('string', '');
        data2.addColumn('number', '');
        data2.addRows([
          ['Pacientes agendados', <?php echo $re_pacientes_agendados->total; ?>],
          ['No contestaron', <?php echo $re_no_contestaron->total; ?>],
          ['Rechazos / Anulaciones', <?php echo $re_rechazos_anulaciones->total; ?>],
          ['Numeros erroneos', <?php echo $re_n_erroneos->total; ?>],
          ['Horas ya asignadas', <?php echo $re_horas_ya_asignadas->total; ?>],
          ['Sin cupo', <?php echo $re_sin_cupo->total; ?>]
        ]);

        var reasignaciones_piechart = new google.visualization.PieChart(document.getElementById('reasignaciones_chart'));
          google.visualization.events.addListener(reasignaciones_piechart, 'ready', function () {
     	    document.getElementById('info_reasignaciones_chart').innerHTML = '<img src="' + reasignaciones_piechart.getImageURI() + '">';
    		});
        reasignaciones_piechart.draw(data2,  {title:'Reasignaciones',
                       width:400,
                       height:300,
                       is3D:true
                   		});

        var confirmaciones = new google.visualization.DataTable();
        confirmaciones.addColumn('string', '');
        confirmaciones.addColumn('number', '');
        confirmaciones.addRows([
        	['No contestaron', <?php echo $conf_no_contestaron->total; ?>],
        	['Rechazos / Anulaciones', <?php echo $conf_rechazos_anulaciones->total; ?>],
        	['Erroneos', <?php echo $conf_n_erroneo->total; ?>],
        	['Horas ya asignadas', <?php echo $conf_horas_ya_asignadas->total; ?>],
        	['Confirmadas ', <?php echo $conf_confirmadas->total; ?>],
        	['Reasignadas ', <?php echo $conf_reasignadas->total; ?>]

        	]);

        var confirmaciones_piechart = new google.visualization.PieChart(document.getElementById('confirmaciones_chart'));
         google.visualization.events.addListener(confirmaciones_piechart, 'ready', function () {
     	    document.getElementById('info_confirmaciones_chart').innerHTML = '<img src="' + confirmaciones_piechart.getImageURI() + '">';
    		});
       	confirmaciones_piechart.draw(confirmaciones,  {   title:'Confirmaciones',
										                       width:400,
										                       height:300,
										                       is3D:true});


        var otros = new google.visualization.DataTable();
        otros.addColumn('string', '');
        otros.addColumn('number', '');
        otros.addRows([
        	['No contestaron', <?php echo $otros_no_contestaron->total; ?>],
        	['Rechazos / Anulaciones', <?php echo $otros_rechazos_anulaciones->total; ?>],
        	['Erroneos', <?php echo $otros_n_erroneo->total; ?>],
        	['Horas ya asignadas', <?php echo $otros_horas_ya_asignadas->total; ?>],
        	['Confirmadas ', <?php echo $otros_confirmadas->total; ?>],
        	['Reasignadas ', <?php echo $otros_reasignadas->total; ?>]

        	]);

         var otros_piechart = new google.visualization.PieChart(document.getElementById('otros_chart'));
       	otros_piechart.draw(otros,  {   title:'otros', width:400,
										                       height:300,
										                       is3D:true});




       	//graficos tab agendamientos


        var dist_agendamientos = new google.visualization.DataTable();
        dist_agendamientos.addColumn('string', '');
        dist_agendamientos.addColumn('number', '');
        dist_agendamientos.addRows([<?php 
              $count = 0;
             foreach($dist_agendamientos as $row) : ?>
             	[<?php echo "'".$row->prestacion ."' ,". $row->total; ?>]<?php if($count < 3) :?>,<?php endif; ?><?php $count++; ?><?php endforeach; ?>
        ]);

        var dist_agendamientos_piechart = new google.visualization.PieChart(document.getElementById('dist_agendamientos_chart'));
        dist_agendamientos_piechart.draw(dist_agendamientos,  {title:'Distribucion de agendamientos',
                       width:400,
                       height:300,
                       pieHole:0.4
                   		});


        var data_agendamientos_examen = new google.visualization.DataTable();
        data_agendamientos_examen.addColumn('string', '');
        data_agendamientos_examen.addColumn('number', '');
        data_agendamientos_examen.addRows([
            ['Numero erroneo', <?php 	echo $examen_agend->n_erroneo; ?>],
            ['Hora ya asignada', <?php 	echo $examen_agend->hora_ya_asignada; ?>],
            ['Rechazo / anulaciones', <?php 	echo $examen_agend->rechazo_anulaciones; ?>],
            ['No contestaron', <?php 	echo $examen_agend->no_contestaron; ?>]
        	]);

        var dist_agendamientos_barchart_examen = new google.visualization.BarChart(document.getElementById('dist_agendamientos_examen_chart'));
        dist_agendamientos_barchart_examen.draw(data_agendamientos_examen,  {title:'Distribucion de agendamientos por examen',
        	chartArea: {width: '35%'},
       				   width:400,
                       height:300
                   		});

         var data_agendamientos_ingreso = new google.visualization.DataTable();
        data_agendamientos_ingreso.addColumn('string', '');
        data_agendamientos_ingreso.addColumn('number', '');
        data_agendamientos_ingreso.addRows([
            ['Numero erroneo', <?php 	echo $ingreso_agend->n_erroneo; ?>],
            ['Hora ya asignada', <?php 	echo $ingreso_agend->hora_ya_asignada; ?>],
            ['Rechazo / anulaciones', <?php 	echo $ingreso_agend->rechazo_anulaciones; ?>],
            ['No contestaron', <?php 	echo $ingreso_agend->no_contestaron; ?>]
        	]);

        var dist_agendamientos_barchart_ingreso = new google.visualization.BarChart(document.getElementById('dist_agendamientos_ingreso_chart'));
        dist_agendamientos_barchart_ingreso.draw(data_agendamientos_ingreso,  {title:'Distribucion de agendamientos por ingreso',
        	chartArea: {width: '35%'},
       				   width:400,
                       height:300
                   		});



         var data_agendamientos_control = new google.visualization.DataTable();
        data_agendamientos_control.addColumn('string', '');
        data_agendamientos_control.addColumn('number', '');
        data_agendamientos_control.addRows([
            ['Numero erroneo', <?php 	echo $control_agend->n_erroneo; ?>],
            ['Hora ya asignada', <?php 	echo $control_agend->hora_ya_asignada; ?>],
            ['Rechazo / anulaciones', <?php 	echo $control_agend->rechazo_anulaciones; ?>],
            ['No contestaron', <?php 	echo $control_agend->no_contestaron; ?>],
            ['Pacientes agendados', <?php 	echo $control_agend->pacientes_agendados; ?>],
        	]);

        var dist_agendamientos_barchart_control = new google.visualization.BarChart(document.getElementById('dist_agendamientos_control_chart'));
        dist_agendamientos_barchart_control.draw(data_agendamientos_control,  {title:'Distribucion de agendamientos por control',
        	chartArea: {width: '35%'},
       				   width:400,
                       height:300
                   		});



       // graficos tab reasignaciones

        var data3 = new google.visualization.DataTable();
        data3.addColumn('string', '');
        data3.addColumn('number', '');
        data3.addRows([<?php 
              $count = 0;
             foreach($dist_reasignaciones as $row) : ?>
             	[<?php echo "'".$row->prestacion ."' ,". $row->total; ?>]<?php if($count < 3) :?>,<?php endif; ?><?php $count++; ?><?php endforeach; ?>
        ]);

        var dist_reasignaciones_piechart = new google.visualization.PieChart(document.getElementById('dist_reasignaciones_chart'));
         google.visualization.events.addListener(dist_reasignaciones_piechart, 'ready', function () {
     	    document.getElementById('info_dist_reasignaciones_chart').innerHTML = '<img src="' + dist_reasignaciones_piechart.getImageURI() + '">';
    		});
        dist_reasignaciones_piechart.draw(data3,  {title:'Distribucion de reasignaciones',
                       width:400,
                       height:300,
                       pieHole:0.4
                   		});


        var data_reasignaciones_examen = new google.visualization.DataTable();
        data_reasignaciones_examen.addColumn('string', '');
        data_reasignaciones_examen.addColumn('number', '');
        data_reasignaciones_examen.addRows([
        	['Sin_cupo', <?php 	echo $examen_reasig->sin_cupo; ?>],
            ['Numero erroneo', <?php 	echo $examen_reasig->n_erroneo; ?>],
            ['Hora ya asignada', <?php 	echo $examen_reasig->hora_ya_asignada; ?>],
            ['Rechazo / anulaciones', <?php 	echo $examen_reasig->rechazo_anulaciones; ?>],
            ['No contestaron', <?php 	echo $examen_reasig->no_contestaron; ?>],
            ['Pacientes agendados', <?php 	echo $examen_reasig->pacientes_agendados; ?>],
        	]);

        var dist_reasignaciones_barchart_exaamen = new google.visualization.BarChart(document.getElementById('dist_reasignaciones_examen_chart'));
         google.visualization.events.addListener(dist_reasignaciones_barchart_exaamen, 'ready', function () {
     	    document.getElementById('info_dist_reasignaciones_examen_chart').innerHTML = '<img src="' + dist_reasignaciones_barchart_exaamen.getImageURI() + '">';
    		});
        dist_reasignaciones_barchart_exaamen.draw(data_reasignaciones_examen,  {title:'Distribucion de reasignaciones por examen',
        	chartArea: {width: '35%'},
       				   width:400,
                       height:300
                   		});

         var data_reasignaciones_ingreso = new google.visualization.DataTable();
        data_reasignaciones_ingreso.addColumn('string', '');
        data_reasignaciones_ingreso.addColumn('number', '');
        data_reasignaciones_ingreso.addRows([
        	['Sin_cupo', <?php 	echo $ingreso_reasig->sin_cupo; ?>],
            ['Numero erroneo', <?php 	echo $ingreso_reasig->n_erroneo; ?>],
            ['Hora ya asignada', <?php 	echo $ingreso_reasig->hora_ya_asignada; ?>],
            ['Rechazo / anulaciones', <?php 	echo $ingreso_reasig->rechazo_anulaciones; ?>],
            ['No contestaron', <?php 	echo $ingreso_reasig->no_contestaron; ?>],
            ['Pacientes agendados', <?php 	echo $ingreso_reasig->pacientes_agendados; ?>],
        	]);

        var dist_reasignaciones_barchart_ingreso = new google.visualization.BarChart(document.getElementById('dist_reasignaciones_ingreso_chart'));
         google.visualization.events.addListener(dist_reasignaciones_barchart_ingreso, 'ready', function () {
     	    document.getElementById('info_dist_reasignaciones_ingreso_chart').innerHTML = '<img src="' + dist_reasignaciones_barchart_ingreso.getImageURI() + '">';
    		});
        dist_reasignaciones_barchart_ingreso.draw(data_reasignaciones_ingreso,  {title:'Distribucion de reasignaciones por ingreso',
        	chartArea: {width: '35%'},
       				   width:400,
                       height:300
                   		});



         var data_reasignaciones_control = new google.visualization.DataTable();
        data_reasignaciones_control.addColumn('string', '');
        data_reasignaciones_control.addColumn('number', '');
        data_reasignaciones_control.addRows([
        	['Sin_cupo', <?php 	echo $control_reasig->sin_cupo; ?>],
            ['Numero erroneo', <?php 	echo $control_reasig->n_erroneo; ?>],
            ['Hora ya asignada', <?php 	echo $control_reasig->hora_ya_asignada; ?>],
            ['Rechazo / anulaciones', <?php 	echo $control_reasig->rechazo_anulaciones; ?>],
            ['No contestaron', <?php 	echo $control_reasig->no_contestaron; ?>],
            ['Pacientes agendados', <?php 	echo $control_reasig->pacientes_agendados; ?>],
        	]);

        var dist_reasignaciones_barchart_control = new google.visualization.BarChart(document.getElementById('dist_reasignaciones_control_chart'));
         google.visualization.events.addListener(dist_reasignaciones_barchart_control, 'ready', function () {
     	    document.getElementById('info_dist_reasignaciones_control_chart').innerHTML = '<img src="' + dist_reasignaciones_barchart_control.getImageURI() + '">';
    		});

        dist_reasignaciones_barchart_control.draw(data_reasignaciones_control,  {title:'Distribucion de reasignaciones por control',
        	chartArea: {width: '35%'},
       				   width:400,
                       height:300
                   		});
 
 
        //graficos para confirmaciones 


      }

        document.getElementById('convert').addEventListener('click', function(e) {
        console.log($('#date-picker').val());
      e.preventDefault();
      convertImagesToBase64()
      var contentDocument = document.getElementById('content');
      //console.log(contentDocument.outerHTML);
      var content = '<!DOCTYPE html><html><meta http-equiv="Content-Type" content="text/html; charset=utf-8">' + contentDocument.outerHTML +'</html>';
     // var orientation = document.querySelector('.page-orientation input:checked').value;
      var converted = htmlDocx.asBlob(content, {orientation: 'portrait'});
      var range = $('#date-picker').val();
      range = range.replace("/", "_");
      var filename = 'reporte_informe_operacional_kropsys_' + range +'.docx';
      saveAs(converted, filename);
      var link = document.createElement('a');
      link.href = URL.createObjectURL(converted);
      link.download = 'document.docx';
      link.appendChild(
        document.createTextNode('Click aqui si no se descarga el archivo automaticamente'));
      var downloadArea = document.getElementById('download-area');
      downloadArea.innerHTML = '';
      downloadArea.appendChild(link);
    });
    function convertImagesToBase64 () {
      contentDocument = document.getElementById('content');
      var regularImages = contentDocument.querySelectorAll("img");
      var canvas = document.createElement('canvas');
      var ctx = canvas.getContext('2d');
      [].forEach.call(regularImages, function (imgElement) {
        // preparing canvas for drawing
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        canvas.width = imgElement.width;
        canvas.height = imgElement.height;
        ctx.drawImage(imgElement, 0, 0);

        var dataURL = canvas.toDataURL();
        imgElement.setAttribute('src', dataURL);
      })
      canvas.remove();
    }
</script>
