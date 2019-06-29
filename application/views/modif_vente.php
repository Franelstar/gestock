
		<!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Modifier vente </a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
										<div class="row" style="text-align:center;color:red;font-family:cursive">
											<?php echo validation_errors(); ?>
										</div>
										<form method="POST" action="">
											<div class="row">
												<div class=" col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<div class="review-content-section">
														
														<label class="control-label" for="livraison">Numéro de bordereau<span style="color:red"> * </span></label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
															<input disabled style="color:black" qnte="<?php echo $vente['qnte_article']; ?>" type="text" id="livraison" class="form-control" name="num_bordereau" value="<?php echo $vente['num_bordereau'].' - '.$vente['nom_article'].' - '.$vente['qnte_article'].' sacs - '.$vente['livreur'].' ('.number_format((int)$vente['prix_liv'],0,""," ").' FCFA)'; ?>">
															<input type="hidden" name="num_bordereau" value="toto">
														</div>
														
														<label class="control-label" for="client">Selectionnez le client<span style="color:red"> * </span></label>
														<div class="chosen-select-single mg-b-20">
															<select id="client" data-placeholder="Choisissez le client" class="chosen-select" tabindex="-1" name="client">
																<option value="0">Client</option>
																<?php foreach($clients as $cli){ ?>
																	<option <?php if(set_value('client') == $cli['id_client']){echo 'selected';} ?> value="<?php echo $cli['id_client']; ?>"><?php echo $cli['nom_client'].' ( '.$cli['ville_client'].' )'; ?></option>
																<?php } ?>
															</select>
														</div>
														
														<label class="control-label" for="prix_u">Prix unitaire ( pour un sac )<span style="color:red"> * </span></label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
															<input onchange="ad();" type="number" step="0.0001" id="prix_u" class="form-control" placeholder="Prix unitaire" name="prix_u" value="<?php echo set_value('prix_u'); ?>">
														</div>
														
														<label class="control-label" for="prix_t">Prix Total ( calculé automatiquement )<span style="color:red"> * </span></label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
															<input style="color:#152036;font-weight:bold" disabled type="text" id="prix_t" class="form-control" placeholder="Prix total de vente" name="prix_t" value="<?php if(set_value('prix_t')) echo number_format(set_value('prix_t'),0,""," ").' FCFA'; ?>">
															<input name="prix_t" type="hidden" id="prix_t2" value="<?php echo set_value('prix_t'); ?>">
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

	function ad(){
		
		var a = $('#livraison').attr("qnte");
		var b = document.getElementById('prix_u').value;
		
		c = Math.round(parseFloat(a) * parseFloat(b));
		document.getElementById('prix_t').value = lisibilite_nombre(c)+' FCFA';
		document.getElementById('prix_t2').value = c;
	}
	
	function pp(){
		$( ".prix_paye2" ).fadeOut( "slow" );
	}
	
	function pe(){
		$( ".prix_paye2" ).fadeIn( "slow" );
	}
</script>