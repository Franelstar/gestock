
<!-- Static Table Start -->
<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Payement des salaires du mois de <?php echo $mois; ?></h1>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="datatable-dashv1-list custom-datatable-overright">
							<div id="toolbar">
								<select class="form-control">
									<option value="">Export Basic</option>
									<option value="all">Export All</option>
									<option value="selected">Export Selected</option>
								</select>
							</div>
							<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
								<thead>
									<tr>
										<th style="font-size:17px" data-field="state" data-checkbox="true"></th>
										<th style="font-size:17px" data-field="matricule">Matricule</th>
										<th style="font-size:17px" data-field="nom" data-editable="false">Nom</th>
										<th style="font-size:17px" data-field="téléphone" data-editable="false">Téléphone</th>
										<th style="font-size:17px" data-field="salaire brut" data-editable="false">Salaire brut</th>
										<th style="font-size:17px" data-field="total perte" data-editable="false">Total perte</th>
										<th style="font-size:17px" data-field="net à percevoir" data-editable="false">Net à percevoir</th>
										<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
									</tr>
								</thead>
								<tbody>
									<?php if(!empty($result)){foreach($result as $ach){ ?>
									<tr>
										<td></td>
										<td><?php echo $ach['id_employe']; ?></td>
										<td><?php echo $ach['nom_employe']; ?></td>
										<td><?php echo $ach['telephone_employe']; ?></td>
										<td class="bleu"><?php echo number_format($ach['salaire'],0,""," ").' FCFA'; ?></td>
										<td class="red"><?php echo number_format($ach['perte'],0,""," ").' FCFA'; ?></td>
										<td class="vert"><?php echo number_format($ach['salaire'] - $ach['perte'],0,""," ").' FCFA'; ?></td>
										<td>
											<a href="<?php echo base_url('/an2000/geststock/liste_perte_payement?emp='.$ach['id_employe']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
										</td>
									</tr>
									<?php }} ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="data-table-area mg-tb-15">	
	<div class="container-fluid">
		<div class="row">
			<?php echo form_open(base_url('/an2000/geststock/payer_salaire')); ?>
				<div class="text-center custom-pro-edt-ds">
					<input name="verif" type="hidden" value="a">
					<button type="button submit" class="btn btn-white waves-effect login-submit-cs m-r-12">
						Valider le payement
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

