<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
	<!-- Single pro tab review Start-->
	<div class="single-pro-review-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Créer transport </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade active in" id="description">
								<div class="row" style="text-align:center;color:red;font-family:cursive">
									<?php echo validation_errors(); ?>
								</div>
								<?php echo form_open(base_url('/an2000/geststock/creer_transport')); ?>
									<div class="row">
										<div class=" col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="review-content-section">
												
												<label class="control-label" for="bordereau">Numéro de bordereau <span style="color:red"> * </span></label>
												<div class="chosen-select-single mg-b-20">
													<select data-placeholder="Choisissez le bordereau" id="bordereau" class="chosen-select" tabindex="-1" name="bordereaul">
														<option >Selectionnez un bordereau</option>
														<?php foreach($achats as $art){ ?>
															<option <?php if(set_value('bordereaul') == $art['num_bordereau']){echo 'selected';} ?> value="<?php echo $art['num_bordereau']; ?>"><?php echo $art['num_bordereau'].' - '.$art['article'].' - '.$art['fournisseur'].' ( -'.$art['qnt_rest'].' sacs)'; ?></option>
														<?php } ?>
													</select>
												</div>
												
												<label class="control-label" for="transporteur">Transporteur<span style="color:red"> * </span></label>
												<div class="chosen-select-single mg-b-20">
													<select data-placeholder="Choisissez le transporteur" id="transporteur" class="chosen-select" tabindex="-1" name="transporteur">
														<option value="0">Selectionnez un transporteur</option>
														<?php foreach($livreurs as $four){ ?>
															<option <?php if(set_value('transporteur') == $four['id_livreur']){echo 'selected';} ?> value="<?php echo $four['id_livreur']; ?>"><?php echo $four['nom_livreur']; ?></option>
														<?php } ?>
														<option <?php if(set_value('transporteur') == -1 or set_value('transporteur') == '-1'){echo 'selected';} ?> value="-1">Pas de transport</option>
													</select>
												</div>
												
												<label class="control-label" for="qnt">Quantité à transporter ( en sac )<span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
													<input min=0 id="qnt" type="number" class="form-control" placeholder="Quantité ( Nombre de sac )" name="qnt" value="<?php echo set_value('qnt'); ?>">
												</div>
												
												<label class="control-label" for="num_veh">Numéro du véhicule</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
													<input id="num_veh" type="text" class="form-control" placeholder="Numéro véhicule" name="num_veh" value="<?php echo set_value('num_veh'); ?>">
												</div>
												
												<label class="control-label" for="prix_l">Prix total du transport ( en FCFA )<span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
													<input id="prix_l" min=0 type="number" class="form-control" placeholder="Prix transport" name="prix_l" value="<?php echo set_value('prix_l'); ?>">
												</div>
												
												<label class="control-label" for="">Livraison<span style="color:red"> * </span></label>
												<div class="row">
													<div class="col-xs-6">
														<div class="inputGroup">
															<input onclick="pp();" value="1" id="radio1" name="livrais" type="radio" <?php if(set_value('livrais') == 1)echo 'checked'; ?>/>
															<label for="radio1">Livré</label>
														</div>
													</div>
													<div class="col-xs-6">
														<div class="inputGroup">
															<input onclick="pe();" value="2" id="radio2" name="livrais" type="radio" <?php if(set_value('livrais') == 2)echo 'checked'; ?>/>
															<label for="radio2">Non livré</label>
														</div>
													</div>
												</div>
												
												<label <?php if(set_value('livrais') == 2)echo 'style="display:none"'; ?> class="control-label datte_liv" for="datte_liv">Date de livraison</label>
												<div <?php if(set_value('livrais') == 2)echo 'style="display:none"'; ?> class="form-group data-custon-pick datte_liv" id="data_1">
													<div class="input-group date">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" id="datte_liv" class="form-control" placeholder="Date livraison" name="datte_liv" value="<?php echo set_value('datte_liv'); ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row" style="margin-top:15px">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="text-center custom-pro-edt-ds">
												<button type="button submit" class="btn btn-white waves-effect login-submit-cs m-r-12">
													Enregistrer
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function pp(){
		$( ".datte_liv" ).fadeIn( "slow" );
	}
	
	function pe(){
		$( ".datte_liv" ).fadeOut( "slow" );
	}
</script>