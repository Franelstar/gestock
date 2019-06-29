
<!-- Static Table Start -->
<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Salaires du mois de <?php echo $mois2; ?></h1>
						</div>
					</div>
					<div class="review-tab-pro-inner text-center">
						<div class="row">
							<div class="col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="review-content-section row">
									<form method="POST" action="" class="row">
										<div class="chosen-select-single mg-b-20 col-xs-8">
											<select id="mois" class="chosen-select" name="mois">
												<?php foreach($payer_salaire as $p_s){ ?>
													<option <?php if(isset($mois) and  $mois== $p_s['id_payer_salaire']){echo 'selected';} ?> value="<?php echo $p_s['id_payer_salaire']; ?>"><?php echo af_date_date($p_s['mois_salaire'], 0); ?></option>
												<?php } ?>
											</select>
										</div>
										<div class="text-center custom-pro-edt-ds col-xs-4">
											<button type="button submit" style="color:black" class="btn btn-white waves-effect login-submit-cs m-r-12">
												Valider
											</button>
										</div>
									</form>
								</div>
							</div>
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
										<th style="font-size:17px" data-field="net à percevoir" data-editable="false">Net perçu</th>
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

