        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Création fournisseur</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
										<div class="row" style="text-align:center;color:red;font-family:cursive">
											<?php echo validation_errors(); ?>
										</div>
										<?php echo form_open(base_url('/an2000/geststock/creer_fournisseur')); ?>
											<div class="row">
												<div class=" col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<div class="review-content-section">
														
														<label class="control-label" for="nom">Nom du fournisseur <span style="color:red"> * </span></label>
														<div class="input-group mg-b-pro-edt form-group">
															<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
															<input type="text" id="nom" class="form-control" name="nom" placeholder="Nom&nbsp;fournisseur" value="<?php echo set_value('nom'); ?>">
														</div>
														
														<label class="control-label" for="ville">Ville du fournisseur <span style="color:red"> * </span></label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="icon nalika-home" aria-hidden="true"></i></span>
															<input type="text" id="ville" class="form-control" name="ville" placeholder="Ville&nbsp;fournisseur" value="<?php echo set_value('ville'); ?>">
														</div>
														
														<label class="control-label" for="tel">Téléphone du fournisseur</label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
															<input type="tel" id="tel" class="form-control" name="tel" placeholder="Téléphone&nbsp;fournisseur" value="<?php echo set_value('tel'); ?>">
														</div>
														
														<label class="control-label" for="mail">Mail du fournisseur</label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
															<input type="mail" id="mail" class="form-control" name="mail" placeholder="Mail&nbsp;fournisseur" value="<?php echo set_value('mail'); ?>">
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