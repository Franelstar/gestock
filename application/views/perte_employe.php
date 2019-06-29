
<!-- Static Table Start -->
<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Pertes des employés</h1>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" data-toggle="table" data-pagination="false" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true">
								<thead>
									<tr>
										<th style="font-size:17px" data-field="matricule" data-editable="false">Matricule</th>
										<th style="font-size:17px" data-field="employé" data-editable="false">Employé</th>
										<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($perte as $ach){ ?>
									<tr>
										<td class="rose"><?php echo $ach['id_employe']; ?></td>
										<td><?php echo $ach['nom_employe']; ?></td>
										<td>
											<a href="<?php echo base_url('/an2000/geststock/perte_un_employe?emp='.$ach['id_employe']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

