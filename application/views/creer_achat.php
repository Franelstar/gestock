<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
	<!-- Single pro tab review Start-->
	<div class="single-pro-review-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Achat de marchandise </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade active in" id="description">
								<div class="row" style="text-align:center;color:red;font-family:cursive">
									<?php echo validation_errors(); ?>
								</div>
								<?php echo form_open(base_url('/an2000/geststock/creer_achat')); ?>
									<div class="row">
										<div class=" col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="review-content-section">
												
												<label class="control-label" for="bordereau">Numéro de bordereau <span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
													<input type="text" id="bordereau" class="form-control" placeholder="Numéro bordereau" name="bordereau" value="<?php echo set_value('bordereau'); ?>">
												</div>
												
												<label class="control-label" for="article">Article acheté<span style="color:red"> * </span></label>
												<div class="chosen-select-single mg-b-20">
													<select data-placeholder="Choisissez l'article" id="article" class="chosen-select" tabindex="-1" name="article">
														<option value="0">Selectionnez un article</option>
														<?php foreach($articles as $art){ ?>
															<option <?php if(set_value('article') == $art['id_article']){echo 'selected';} ?> value="<?php echo $art['id_article']; ?>"><?php echo $art['nom_article']; ?></option>
														<?php } ?>
													</select>
												</div>
												
												<label class="control-label" for="fournisseur">Fournisseur<span style="color:red"> * </span></label>
												<div class="chosen-select-single mg-b-20">
													<select data-placeholder="Choisissez le fournisseur" id="fournisseur" class="chosen-select" tabindex="-1" name="fournisseur">
														<option value="0">Selectionnez un fournisseur</option>
														<?php foreach($fournisseurs as $four){ ?>
															<option <?php if(set_value('fournisseur') == $four['id_fournisseur']){echo 'selected';} ?> value="<?php echo $four['id_fournisseur']; ?>"><?php echo $four['nom_fournisseur']; ?></option>
														<?php } ?>
													</select>
												</div>
												
												<label class="control-label" for="qnt">Quantité ( en sac )<span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
													<input onchange="ad();" id="qnt" type="number" class="form-control" placeholder="Quantité ( Nombre de sac )" name="qnt" value="<?php echo set_value('qnt'); ?>">
												</div>
												
												<label class="control-label" for="prix_u">Prix unitaire ( en FCFA )<span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
													<input onchange="ad();" id="prix_u" type="number" class="form-control" placeholder="Prix unitaire ( pour un sac )" name="prix" value="<?php echo set_value('prix'); ?>">
												</div>
												
												<label class="control-label" for="prix_t2">Prix total ( en FCFA )</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
													<input style="color:#152036;font-weight:bold" disabled type="text" id="prix_t" class="form-control" placeholder="Prix total de l'achat" name="prix_t" value="<?php echo set_value('prix_t'); ?>">
													<input name="prix_t" type="hidden" id="prix_t2" value="<?php echo set_value('prix_t'); ?>">
												</div>
												
												<label class="control-label" for="datte_ach">Date de l'achat<span style="color:red"> * </span></label>
												<div class="form-group data-custon-pick" id="data_1">
													<div class="input-group date">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" id="datte_ach" class="form-control" placeholder="Date achat" name="datte_ach" value="<?php echo set_value('datte_ach'); ?>">
													</div>
												</div>
												
												<label class="control-label" for="">Payement<span style="color:red"> * </span></label>
												<div class="row">
													<div class="col-xs-6">
														<div class="inputGroup">
															<input onclick="pp();" value="1" id="radio1" name="prix_paye" type="radio" <?php if(set_value('prix_paye') == 1)echo 'checked'; ?>/>
															<label for="radio1">Payé (<span id="pay"></span>)</label>
														</div>
													</div>
													<div class="col-xs-6">
														<div class="inputGroup">
															<input onclick="pe();" value="2" id="radio2" name="prix_paye" type="radio" <?php if(set_value('prix_paye') == 2)echo 'checked'; ?>/>
															<label for="radio2">Non payé (0 FCFA)</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
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
function lisibilite_nombre(nbr) { var nombre = ''+nbr; var retour = ''; var count=0; for(var i=nombre.length-1 ; i>=0 ; i--) { if(count!=0 && count % 3 == 0) retour = nombre[i]+' '+retour ; else retour = nombre[i]+retour ; count++; } return retour; }
    document.getElementById('qnt').addEventListener('change', ad());
	function ad(){
		var a = document.getElementById('qnt').value;
		var b = document.getElementById('prix_u').value;
		c = parseFloat(a) * parseFloat(b);
		document.getElementById('prix_t').value = lisibilite_nombre(c)+' FCFA';
		document.getElementById('prix_t2').value = lisibilite_nombre(c)+' FCFA';
		$('#pay').html(lisibilite_nombre(c)+' FCFA');
	}
</script>