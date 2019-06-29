<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Statistiques</h1>
						</div>
					</div>
					
					
					<div class="review-tab-pro-inner text-center">
						<div class="row">
							<div class="col-sm-offset-2 col-sm-8 col-xs-12">
								<div class="review-content-section row">
									<form method="POST" action="">
										<div class="form-group data-custon-pick col-sm-1" style="font-size:1.2em;font-weight:bold;margin-top:10px">
											Du
										</div>
										
										<div class="form-group data-custon-pick col-sm-4" id="data_1">
											<div class="input-group date">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												<input type="date" required class="form-control" name="date_d1" value="<?php echo $date_d1; ?>">
											</div>
										</div>
										
										<div class="form-group data-custon-pick col-sm-1"  style="font-size:1.2em;font-weight:bold;margin-top:10px">
											Au
										</div>
										
										<div class="form-group data-custon-pick col-sm-4" id="data_1">
											<div class="input-group date">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												<input type="date" required class="form-control" name="date_d2" value="<?php echo $date_d2; ?>">
											</div>
										</div>
										
										<div class="text-center custom-pro-edt-ds col-sm-2" style="margin-top:4px">
											<button type="button submit" style="color:black" class="btn btn-white waves-effect login-submit-cs m-r-12">
												Valider
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#achats"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> achats </a></li>
							<li><a href="#description"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> Transports </a></li>
							<li><a href="#reviews"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> Ventes </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade active in" id="achats">
								<div class="row">
									<div class="sparkline13-list" style="color:white !important">
										<div class="sparkline13-hd">
											<div class="main-sparkline13-hd">
												<h1  style="color:white !important">Historique des achats</h1>
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
															<th style="font-size:17px" data-field="borereau">Bordereau</th>
															<th style="font-size:17px" data-field="article" data-editable="false">Article</th>
															<th style="font-size:17px" data-field="fournisseur" data-editable="false">Fournisseur</th>
															<th style="font-size:17px" data-field="quantité" data-editable="false">Quantité</th>
															<th style="font-size:17px" data-field="prix unit" data-editable="false">Prix Unit</th>
															<th style="font-size:17px" data-field="prix total" data-editable="false">Prix Total</th>
															<th style="font-size:17px" data-field="date achat" data-editable="false">Date Achat</th>
															<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($achats as $ach){ ?>
														<tr>
															<td class="rose"><?php echo $ach['num_bordereau']; ?></td>
															<td><?php echo $ach['nom_article']; ?></td>
															<td><?php echo $ach['nom_fournisseur']; ?></td>
															<td><?php echo $ach['quantite']; ?> sacs</td>
															<td><?php echo number_format($ach['prix_unit'],0,""," ").' FCFA'; ?></td>
															<td class="bleu"><?php echo number_format($ach['prix_unit'] * $ach['quantite'],0,""," ").' FCFA'; ?></td>
															<td><?php echo af_date_s($ach['date_achat']); ?></td>
															<td>
																<a href="<?php echo base_url('/an2000/geststock/un_achat?ach='.$ach['num_bordereau']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
															</td>
														</tr>
														<?php } ?>
														<tr>
															<td colspan="9"><h1 class="red"  style="float:right">Total achat :  <?php echo number_format($somme_achat,0,""," ").' FCFA'; ?></h1></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="product-tab-list tab-pane fade in" id="description">
								<div class="row">
									<div class="sparkline13-list" style="color:white !important">
										<div class="sparkline13-hd">
											<div class="main-sparkline13-hd">
												<h1  style="color:white !important">Historique des transports</h1>
											</div>
										</div>
										<div class="sparkline13-graph">
											<div class="datatable-dashv1-list custom-datatable-overright">
												<div id="toolbar2">
													<select class="form-control">
														<option value="">Export Basic</option>
														<option value="all">Export All</option>
														<option value="selected">Export Selected</option>
													</select>
												</div>
												<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
													data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar2">
													<thead>
														<tr>
															<th style="font-size:17px" data-field="borereau">bordereau</th>
															<th style="font-size:17px" data-field="article" data-editable="false">Article</th>
															<th style="font-size:17px" data-field="qnte" data-editable="false">Qnte</th>
															<th style="font-size:17px" data-field="transporteur" data-editable="false">Transporteur</th>
															<th style="font-size:17px" data-field="prix transport" data-editable="false">Prix transport</th>
															<th style="font-size:17px" data-field="date liv" data-editable="false">Date liv.</th>
															<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($livraisons as $ach){ ?>
														<tr>
															<td class="rose"><?php echo $ach['id_achat']; ?></td>
															<td><?php echo $ach['nom_article']; ?></td>
															<td><?php echo $ach['qnte_article']; ?> sacs</td>
															<td><?php echo $ach['nom_livreur']; ?></td>
															<td class="bleu"><?php echo number_format($ach['prix_liv'],0,""," ").' FCFA'; ?></td>
															<td><?php echo af_date_s($ach['date_de_liv']); ?></td>
															<td>
																<a href="<?php echo base_url('/an2000/geststock/une_livraison?liv='.$ach['id_livraison']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
															</td>
														</tr>
														<?php } ?>
														<tr>
															<td colspan="9"><h1 class="red"  style="float:right">Total transport :  <?php echo number_format($somme_transport,0,""," ").' FCFA'; ?></h1></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row product-tab-list tab-pane fade" id="reviews">
								<div class="row">
									<div class="sparkline13-hd">
										<div class="main-sparkline13-hd">
											<h1  style="color:white !important">Historique des ventes</h1>
										</div>
									</div>
									<div class="sparkline13-graph">
										<div class="datatable-dashv1-list custom-datatable-overright">
											<div id="toolbar3">
												<select class="form-control">
													<option value="">Export Basic</option>
													<option value="all">Export All</option>
													<option value="selected">Export Selected</option>
												</select>
											</div>
											<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
												data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar3">
												<thead>
													<tr>
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
														<td class="rose"><?php echo $ach['num_bordereau']; ?></td>
														<td><?php echo $ach['nom_article']; ?></td>
														<td><?php echo $ach['nom_client']; ?></td>
														<td><?php echo $ach['qnte_article']; ?> sacs</td>
														<td><?php echo number_format((float)$ach['prix_unit_vente'],0,""," ").' FCFA'; ?></td>
														<td class="bleu"><?php echo number_format((float)$ach['prix_unit_vente'] * $ach['qnte_article'],0,""," ").' FCFA'; ?></td>
														<td class="rose"><?php echo number_format((float)$ach['prix_unit_vente'] * $ach['qnte_article'] - (float)$ach['prix_liv'] - $ach['prix_unit_achat'] * $ach['qnte_article'] ,0,""," ").' FCFA'; ?></td>
														<td><?php echo af_date_s($ach['date_vente']); ?></td>
														<td>
															<a href="<?php echo base_url('/an2000/geststock/une_vente?ven='.$ach['id_vente']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
														</td>
													</tr>
													<?php } ?>
													<tr>
														<td colspan="9">
															<h1 class="red"  style="float:right">Total vente :  <?php echo number_format($somme_vente,0,""," ").' FCFA'; ?></h1>
														</td>
													</tr>
													<tr>
														<td colspan="9">
															<h1 class="vert"  style="float:right">Total benefice :  <?php echo number_format($somme_benef,0,""," ").' FCFA'; ?></h1>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>