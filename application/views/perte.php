<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
	<!-- Single pro tab review Start-->
	<div class="single-pro-review-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Perte employé </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade active in" id="description">
								<div class="row" style="text-align:center;color:red;font-family:cursive">
									<?php echo validation_errors(); ?>
								</div>
								<?php echo form_open(base_url('/an2000/geststock/perte')); ?>
									<div class="row">
										<div class=" col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="review-content-section">
												
												<label class="control-label" for="employe">Employé<span style="color:red"> * </span></label>
												<div class="chosen-select-single mg-b-20">
													<select data-placeholder="Choisissez un employé" id="employe" class="chosen-select" tabindex="-1" name="employe">
														<option value="0">Selectionnez un employé</option>
														<?php foreach($employe as $emp){ ?>
															<option <?php if(set_value('employe') == $emp['id_employe']){echo 'selected';} ?> value="<?php echo $emp['id_employe']; ?>"><?php echo $emp['nom_employe']; ?></option>
														<?php } ?>
													</select>
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