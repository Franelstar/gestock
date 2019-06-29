<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
	<!-- Single pro tab review Start-->
	<div class="single-pro-review-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Création d'un employé</a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade active in" id="description">
								<div class="row" style="text-align:center;color:red;font-family:cursive">
									<?php echo validation_errors(); ?>
								</div>
								<?php echo form_open(base_url('/an2000/geststock/creer_employe')); ?>
									<div class="row">
										<div class=" col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="review-content-section">
											
												<label class="control-label" for="matricule">Matricule de l'employé <span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
													<input type="text" id="matricule" class="form-control" placeholder="Matricule Employé" name="matricule" value="<?php echo set_value('matricule'); ?>">
												</div>
												
												<label class="control-label" for="nom">Nom de l'employé <span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
													<input type="text" id="nom" class="form-control" placeholder="Nom Employé" name="nom" value="<?php echo set_value('nom'); ?>">
												</div>
												
												<label class="control-label" for="fonction">Fonction de l'employé <span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
													<input type="text" id="fonction" class="form-control" placeholder="Fonction Employé" name="fonction" value="<?php echo set_value('fonction'); ?>">
												</div>
												
												<label class="control-label" for="ville">Ville de résidence <span style="color:red"> * </span></label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-home" aria-hidden="true"></i></span>
													<input type="text" id="ville" class="form-control" placeholder="Ville de résidence" name="ville" value="<?php echo set_value('ville'); ?>">
												</div>
												
												<label class="control-label" for="quartier">Quartier de résidence</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
													<input type="text" id="quartier" class="form-control" placeholder="Quartier de résidence" name="quartier" value="<?php echo set_value('quartier'); ?>">
												</div>
												
												<label class="control-label" for="tel">Téléphone de l'employé</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
													<input type="tel" id="tel" class="form-control" name="tel" placeholder="Téléphone Employé" value="<?php echo set_value('tel'); ?>">
												</div>
												
												<label class="control-label" for="mail">Mail de l'employé</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
													<input type="mail" id="mail" class="form-control" name="mail" placeholder="Mail Employé" value="<?php echo set_value('mail'); ?>">
												</div>
												
												<label class="control-label" for="salaire">Salaire de l'employé</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
													<input type="number" id="salaire" class="form-control" name="salaire" placeholder="Salaire Employé" value="<?php echo set_value('salaire'); ?>">
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
