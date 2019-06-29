<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
	<!-- Single pro tab review Start-->
	<div class="single-pro-review-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Modifier perte employé </a></li>
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
												
												<label class="control-label" for="employe">Employé<span style="color:red"> * </span></label>
												<div class="chosen-select-single mg-b-20">
													<select disabled data-placeholder="Choisissez un employé" id="employe" class="chosen-select" tabindex="-1" name="employe">
														<option value="0">Selectionnez un employé</option>
														<?php foreach($employe as $emp){ ?>
															<option <?php if(set_value('employe') == $emp['id_employe']){echo 'selected';} ?> value="<?php echo $emp['id_employe']; ?>"><?php echo $emp['nom_employe']; ?></option>
														<?php } ?>
													</select>
													<input type="hidden" name="verif">
												</div>
												
												<label class="control-label" for="perte"> Perte (en FCFA) <span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
													<input min=0 id="perte" type="number" class="form-control" placeholder="Perte" name="perte" value="<?php echo set_value('perte'); ?>">
												</div>
												
												<label class="control-label" for="comentaire">Commentaire</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
													<textarea id="comentaire" type="text" class="form-control" placeholder="Commentaire" name="comentaire"><?php echo set_value('comentaire'); ?></textarea>
												</div>
												
												<label class="control-label" for="datte">Date de Perte</label>
												<div class="form-group data-custon-pick" id="data_1">
													<div class="input-group date">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" id="datte" class="form-control" placeholder="Date Perte" name="datte" value="<?php echo set_value('datte'); ?>">
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
												<button data-toggle="modal" data-target="#infos" onfocus="blur()" type="button" class="btn btn-custon-rounded-four btn-danger btn-md">
													Supprimer
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
<div class="modal" id="infos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button> 
				<h4 class="modal-title">Voulez-vous supprimer cette perte ? ?</h4>
			</div>
			<div class="modal-body text-center" style="font-weight:bold;min-height:150px">
				Si vous voulez supprimer cette perte, cliquez sur supprimer
			</div>
			<div class="modal-footer">
				<form method="POST" action="" class="text-center">
					<input type="hidden" name="supprimer" value="oui">
					<button type="button submit" class="btn btn-primary">Supprimer</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
				</form>
			</div>
		</div>
	</div>
</div>