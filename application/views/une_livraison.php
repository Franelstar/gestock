
<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
	<!-- Single pro tab review Start-->
	<div class="single-pro-review-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Transport </a></li>
							<li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Vente </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade active in" id="description">
								<div class="row" style="text-align:center;color:red;font-family:cursive">
									<?php echo validation_errors(); ?>
								</div>
								<div class="row">
									<div class=" col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="review-content-section">
											
											<label class="control-label" for="bordereau">Numéro du bordereau</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
												<input style="color:black" id="bordereau" disabled type="text" class="form-control" placeholder="Numéro véhicule" name="bordereaul" value="<?php echo set_value('bordereaul'); ?>">
											</div>
											
											<label class="control-label" for="transporteur">Transporteur</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
												<input style="color:black" id="transporteur" disabled type="text" class="form-control" value="<?php foreach($livreurs as $four){ if(set_value('transporteur') == $four['id_livreur']){echo $four['nom_livreur'];} } ?>">
											</div>
											
											<label class="control-label" for="qnt">Quantité à transporter ( en sac )<span style="color:red"> * </span></label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
												<input style="color:black;font-weight:bold" disabled  min=0 id="qnt" type="number" class="form-control" placeholder="Quantité ( Nombre de sac )" name="qnte" value="<?php echo set_value('qnte'); ?>">
											</div>
											
											<label class="control-label" for="num_veh">Numéro du véhicule</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
												<input style="color:black;font-weight:bold" disabled  id="num_veh" type="text" class="form-control" placeholder="Numéro véhicule" name="num_veh" value="<?php echo set_value('num_veh'); ?>">
											</div>
											
											<label class="control-label" for="prix_l">Prix total du transport ( en FCFA )<span style="color:red"> * </span></label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
												<input style="color:black;font-weight:bold" disabled  id="prix_l" min=0 type="text" class="form-control" placeholder="Prix transport" name="prix_l" value="<?php echo number_format(set_value('prix_l'),0,""," ").' FCFA'; ?>">
											</div>
											
											<label class="control-label" for="">Livraison<span style="color:red"> * </span></label>
											<div class="">
												<?php if(set_value('livrais') == 1){ ?>
													<div class="inputGroup">
														<input disabled value="1" id="radio1" name="livrais" type="radio" checked="checked" />
														<label for="radio1">Livré</label>
													</div>
												<?php }else{ ?>
													<div class="inputGroup">
														<input disabled value="2" id="radio2" name="livrais" type="radio" checked="checked" />
														<label for="radio2">Non livré</label>
													</div>
												<?php } ?>
											</div>
											
											<?php if(set_value('livrais') == 1){ ?>
												<label class="control-label" for="datte_liv">Date de livraison</label>
												<div class="form-group data-custon-pick" id="data_1">
													<div class="input-group date">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input style="color:black;font-weight:bold" disabled  type="date" id="datte_liv" class="form-control" placeholder="Date livraison" name="datte_liv" value="<?php echo set_value('datte_liv'); ?>">
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
								
								<div class="row" style="margin-top:15px">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="text-center custom-pro-edt-ds">
											<form method="POST" action="<?php echo base_url('/an2000/geststock/modifier_livaison?liv='.$id_livraison); ?>">
												<button type="button submit" class="btn btn-white waves-effect login-submit-cs m-r-12">
													Modifier
												</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							
							<div class="product-tab-list tab-pane fade in" id="reviews">
								<?php if(empty($vente)){ ?>
									<div class="row vert text-center" style="margin-top:30px;font-size:2em;margin:100px">
										Ce transport n'est associé à aucune vente
									</div>
									<div class="row text-center">
										<form method="POST" action="<?php echo base_url('/an2000/geststock/creer_vente'); ?>">
											<input type="hidden" name="livraison" value="<?php echo $id_livraison; ?>">
											<input type="hidden" name="verif" value="<?php echo $id_livraison; ?>">
											<button type="button submit" class="btn btn-white waves-effect login-submit-cs m-r-12">
												Associer une vente
											</button>
										</form>
									</div>
								<?php }else{ ?>
									<div class="row vert text-center" style="margin-top:30px;font-size:2em;margin:50px">
										Détail de la vente associée à ce transport
									</div>
									<div class="row" style="margin-top:30px">
										<div class="col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp&nbsp-- Date vente --&nbsp&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo af_date($vente['date_vente']); ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">- Num Bodereau -</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['num_bordereau']; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp&nbsp--- Client ---&nbsp&nbsp&nbsp&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['client']; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">- Nom de article -</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['article']; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp-- Fournisseur --</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['fournisseur']; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp&nbsp&nbsp--- Quantité ---&nbsp&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['quantite']; ?> sacs">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp--- Prix unit ---&nbsp&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo number_format($vente['prix_unit'],0,""," ").' FCFA'; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp&nbsp&nbsp--- Prix total ---&nbsp&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo number_format((int)$vente['prix_total'],0,""," ").' FCFA'; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp&nbsp--- Benéfice ---&nbsp&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control rose" value="<?php echo number_format((int)$vente['prix_total'] - (int)$vente['prix_achat'] - (int)$vente['prix_liv'],0,""," ").' FCFA'; ?>">
											</div>
											<div class="row text-center">
												<a class="text-center" style="color:black" href="<?php echo base_url('/an2000/geststock/modifier_vente?ven=').$vente['id_liv']; ?>">
													<button type="button" onfocus="blur();" class="btn btn-white waves-effect login-submit-cs m-r-12">
														Modifier
													</button>
												</a>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>