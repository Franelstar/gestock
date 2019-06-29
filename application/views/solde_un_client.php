
<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
	<!-- Single pro tab review Start-->
	<div class="single-pro-review-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#reviews3"><i class="icon nalika-picture" aria-hidden="true"></i> Solde </a></li>
							<li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Payements </a></li>
							<li><a href="#reviews2"><i class="icon nalika-picture" aria-hidden="true"></i> Ventes </a></li>
							<li><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Infos </a></li>
							<form style="float:right" method="POST" action="<?php echo base_url('/an2000/geststock/liste_creance'); ?>">
								<button type="button submit" class="btn btn-white waves-effect login-submit-cs m-r-12">
									Soldes des clients
								</button>
							</form>
						</ul>
						<div id="myTabContent" style="margin-top:80px" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade in" id="description">
								<div class="row">
									<div class=" col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="review-content-section">
										
											<label class="control-label" for="nom">Nom du client</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
												<input style="color:black" disabled type="text" id="nom" class="form-control" placeholder="Nom client" name="nom" value="<?php echo $client['nom_client']; ?>">
											</div>
											
											<label class="control-label" for="ville">Ville de résidence</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-home" aria-hidden="true"></i></span>
												<input style="color:black" disabled type="text" id="ville" class="form-control" placeholder="Ville de résidence" name="ville" value="<?php echo $client['ville_client']; ?>">
											</div>
											
											<label class="control-label" for="quartier">Quartier de résidence</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
												<input style="color:black" disabled type="text" id="quartier" class="form-control" placeholder="Quartier de résidence" name="quartier" value="<?php echo $client['quartier_client']; ?>">
											</div>
											
											<label class="control-label" for="tel">Téléphone du client</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
												<input style="color:black" disabled type="tel" id="tel" class="form-control" name="tel" placeholder="Téléphone client" value="<?php echo $client['telephone_client']; ?>">
											</div>
											
											<label class="control-label" for="mail">Mail du client</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
												<input style="color:black" disabled type="mail" id="mail" class="form-control" name="mail" placeholder="Mail client" value="<?php echo $client['mail_client']; ?>">
											</div>
											
											<label class="control-label" for="mail">Statut du client</label>
											<div class="">
												<div class="inputGroup">
													<input value="1" id="radio1" name="desactiver" type="radio" checked />
													<label for="radio1"><?php if($client['client_status'] == 1){echo 'Actif';}else{echo 'Inactif';} ?></label>
												</div>
											</div>
											
											<div class="row" style="margin-top:15px">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="text-center custom-pro-edt-ds">
														<form method="POST" action="<?php echo base_url('/an2000/geststock/edit_client?id='.$client['id_client']); ?>">
															<button type="button submit" class="btn btn-white waves-effect login-submit-cs m-r-12">
																Modifier
															</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="product-tab-list tab-pane fade in" id="reviews">
								<div class="row vert text-center" style="margin-top:0px;font-size:1.8em;margin:0px">
									Liste complète des payements éffectués par <?php echo $client['nom_client']; ?>
								</div>
								<div class="sparkline13-list" style="color:white !important">
									<div class="sparkline13-graph">
										<div class="datatable-dashv1-list custom-datatable-overright">
											<div id="toolbar14">
												<select class="form-control">
													<option value="">Export Basic</option>
													<option value="all">Export All</option>
													<option value="selected">Export Selected</option>
												</select>
											</div>
											<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
												data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar14">
												<thead>
													<tr>
														<th style="font-size:17px" data-field="state" data-checkbox="true"></th>
														<th style="font-size:17px" data-field="date" data-editable="false">Date de versement</th>
														<th style="font-size:17px" data-field="somme versée" data-editable="false">Somme versée</th>
														<th style="font-size:17px" data-field="somme retirée" data-editable="false">Somme retirée</th>
														<th style="font-size:17px" data-field="commentaire" data-editable="false">Commentaire</th>
														<th style="font-size:17px" data-field="Modifier" data-editable="false">Modifier</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($payement as $ach){ ?>
													<tr>
														<td></td>
														<td><?php echo af_date($ach['date']); ?></td>
														<?php if((int) $ach['somme'] >= 0){ ?>
															<td class="vert"><?php echo number_format($ach['somme'],0,""," ").' FCFA'; ?></td>
															<td>/</td>
															<td><?php echo $ach['commentaire']; ?></td>
															<td>
																<a href="<?php echo base_url('/an2000/geststock/modifier_pay_client?pay='.$ach['id_banque_client']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
															</td>
														<?php }else{ ?>
															<td>/</td>
															<td class="red"><?php echo number_format(-$ach['somme'],0,""," ").' FCFA'; ?></td>
															<td><?php echo $ach['commentaire']; ?></td>
															<td>
																<a href="<?php echo base_url('/an2000/geststock/modifier_ret_client?pay='.$ach['id_banque_client']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
															</td>
														<?php } ?>
													</tr>
													<?php } ?>
													<tr>
														<td></td>
														<td>6 Mai 2019</td>
														<td class="red" colspan="2"><?php echo number_format($deteav['somme'],0,""," ").' FCFA'; ?></td>
														<td>Dette avant la date du 7 Mai 2019</td>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							
							<div class="product-tab-list tab-pane fade in" id="reviews2">
								<div class="row vert text-center" style="margin-top:0px;font-size:1.8em;margin:0px">
									Liste complète des ventes éffectuées à <?php echo $client['nom_client']; ?>
								</div>
								<div class="sparkline13-list" style="color:white !important">
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
														<th style="font-size:17px" data-field="date liv." data-editable="false">Date Liv.</th>
														<th style="font-size:17px" data-field="bordereau" data-editable="false">Bordereau</th>
														<th style="font-size:17px" data-field="article" data-editable="false">Article</th>
														<th style="font-size:17px" data-field="fournisseur" data-editable="false">Fournisseur</th>
														<th style="font-size:17px" data-field="qnté" data-editable="false">Qnté</th>
														<th style="font-size:17px" data-field="prix achat" data-editable="false">Prix achat</th>
														<th style="font-size:17px" data-field="Livraison" data-editable="false">Livraison</th>
														<th style="font-size:17px" data-field="prix vente" data-editable="false">Prix vente</th>
														<th style="font-size:17px" data-field="bénéfice" data-editable="false">Bénéfice</th>
														<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($vente as $ach){ ?>
													<tr>
														<td></td>
														<td><?php echo af_date_s($ach['date_de_liv']); ?></td>
														<td class="rose"><?php echo $ach['num_bordereau']; ?></td>
														<td><?php echo $ach['nom_article']; ?></td>
														<td><?php echo $ach['nom_fournisseur']; ?></td>
														<td><?php echo $ach['qnte_article']; ?> sacs</td>
														<td class="bleu"><?php echo number_format($ach['qnte_article'] * $ach['prix_unit_achat'],0,""," ").' FCFA'; ?></td>
														<td class="red"><?php echo number_format($ach['prix_liv'],0,""," ").' FCFA'; ?></td>
														<td class="vert"><?php echo number_format($ach['qnte_article'] * $ach['prix_unit_vente'],0,""," ").' FCFA'; ?></td>
														<td class="rose"><?php echo number_format($ach['qnte_article'] * $ach['prix_unit_vente'] - $ach['qnte_article'] * $ach['prix_unit_achat'] - $ach['prix_liv'],0,""," ").' FCFA'; ?></td>
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
							
							<div class="product-tab-list tab-pane fade active in" id="reviews3">
								<div class="row text-center" style="margin-top:0px;font-size:1.5em;margin:0px;color:white">
									La créance totale de <?php echo $client['nom_client']; ?> est de :
								</div>
								<br>
								<br>
								<div class="row <?php if($total >= 0){echo 'vert';}else{echo 'red';} ?> text-center" style="margin-top:0px;font-size:2em;margin:0px">
									<?php echo number_format($total,0,""," ").' FCFA'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>