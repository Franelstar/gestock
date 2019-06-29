
<!-- Static Table Start -->
<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd" style="margin-bottom:50px">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Liste des pertes de <?php echo $employe[0]['nom_employe']; ?> pour le mois de <?php echo $mois; ?>
							<form style="float:right" method="POST" action="<?php echo base_url('/an2000/geststock/payer_salaire'); ?>">
								<button type="button submit" class="btn btn-white bleu waves-effect login-submit-cs m-r-12">
									Revenir au payement des salaires
								</button>
							</form>
							</h1>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true">
								<thead>
									<tr>
										<th style="font-size:17px" data-field="state" data-checkbox="true"></th>
										<th style="font-size:17px" data-field="date">date</th>
										<th style="font-size:17px" data-field="somme perdu" data-editable="false">Somme perdue</th>
										<th style="font-size:17px" data-field="commentaire" data-editable="false">Commentaire</th>
									</tr>
								</thead>
								<tbody>
									<?php if(!empty($perte)){foreach($perte as $ach){ ?>
									<tr>
										<td></td>
										<td><?php echo af_date($ach['date_perte']); ?></td>
										<td class="red"><?php echo number_format($ach['perte'],0,""," ").' FCFA'; ?></td>
										<td><?php echo $ach['commentaire']; ?></td>
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

