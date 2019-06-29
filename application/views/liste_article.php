<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Liste des bordereaux non vendus</h1>
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
										<th style="font-size:17px" data-field="borereau">Bordereau</th>
										<th style="font-size:17px" data-field="article" data-editable="false">Article</th>
										<th style="font-size:17px" data-field="fournisseur" data-editable="false">Fournisseur</th>
										<th style="font-size:17px" data-field="quantité achetée" data-editable="false">Quantité achetée</th>
										<th style="font-size:17px" data-field="qnte en stock" data-editable="false">Qnte en stock</th>
										<th style="font-size:17px" data-field="date achat" data-editable="false">Date achat</th>
										<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($articles as $ach){ ?>
									<tr>
										<td></td>
										<td class="rose"><?php echo $ach['num_bordereau']; ?></td>
										<td><?php echo $ach['article']; ?></td>
										<td><?php echo $ach['fournisseur']; ?></td>
										<td><?php echo $ach['quantite']; ?> sacs</td>
										<td class="vert"><?php echo $ach['qnt_rest']; ?> sacs</td>
										<td><?php echo af_date_s($ach['date_creation']); ?></td>
										<td>
											<a href="<?php echo base_url('/an2000/geststock/un_achat?ach='.$ach['num_bordereau']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
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