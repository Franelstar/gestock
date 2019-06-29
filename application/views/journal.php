
<!-- Static Table Start -->
<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Grand journal</h1>
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
										<th style="font-size:17px" data-field="date">Date</th>
										<th style="font-size:17px" data-field="mouvement" data-editable="false">Mouvement</th>
										<th style="font-size:17px" data-field="libellé" data-editable="false">Libellé</th>
										<th style="font-size:17px" data-field="débit" data-editable="false">Débit</th>
										<th style="font-size:17px" data-field="crédit" data-editable="false">Crédit</th>
										<th style="font-size:17px" data-field="solde" data-editable="false">Solde</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($journal as $ach){ ?>
									<tr class="">
										<td></td>
										<td><?php echo af_date_s($ach['date']); ?></td>
										<td><span class="moncercle <?php echo $ach['couleur']; ?>"></span> <?php echo $ach['mouvement']; ?></td>
										<td><?php echo $ach['libelle']; ?></td>
										<td><?php echo number_format($ach['debit'],0,""," ").' FCFA'; ?></td>
										<td><?php echo number_format($ach['credit'],0,""," ").' FCFA'; ?></td>
										<td class="white"><?php echo number_format($ach['solde'],0,""," ").' FCFA'; ?></td>
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