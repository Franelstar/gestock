<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Historique des ventes</h1>
						</div>
					</div>
					<?php include_once('trie.php'); ?>
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
										<th style="font-size:17px" data-field="borereau">bordereau</th>
										<th style="font-size:17px" data-field="article" data-editable="false">Article</th>
										<th style="font-size:17px" data-field="client">Client</th>
										<th style="font-size:17px" data-field="qnté" data-editable="false">Qnté</th>
										<th style="font-size:17px" data-field="prix unit" data-editable="false">Prix Unit</th>
										<th style="font-size:17px" data-field="prix total" data-editable="false">Prix Total</th>
										<th style="font-size:17px" data-field="bénéfice" data-editable="false">Bénéfice</th>
										<th style="font-size:17px" data-field="date" data-editable="false">Date</th>
										<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($ventes as $ach){ ?>
									<tr>
										<td></td>
										<td class="rose"><?php echo $ach['num_bordereau']; ?></td>
										<td><?php echo $ach['article']; ?></td>
										<td><?php echo $ach['client']; ?></td>
										<td><?php echo $ach['quantite']; ?> sacs</td>
										<td><?php echo number_format((float)$ach['prix_unit'],0,""," ").' FCFA'; ?></td>
										<td class="bleu"><?php echo number_format((float)$ach['prix_total'],0,""," ").' FCFA'; ?></td>
										<td class="rose"><?php echo number_format((float)$ach['prix_total'] - (float)$ach['prix_achat'] - (float)$ach['prix_liv'],0,""," ").' FCFA'; ?></td>
										<td><?php echo af_date_s($ach['date_vente']); ?></td>
										<td>
											<a href="<?php echo base_url('/an2000/geststock/une_vente?ven='.$ach['id_vente']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
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
		
