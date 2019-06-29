        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Créditer le compte </a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
										<div class="row" style="text-align:center;color:red;font-family:cursive">
											<?php echo validation_errors(); ?>
										</div>
										<?php echo form_open(base_url('/an2000/geststock/crediter')); ?>
											<div class="row">
												<div class=" col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="review-content-section">
													
														<label class="control-label" for="credit">Montant à créditer<span style="color:red"> * </span></label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
															<input type="number" id="credit" class="form-control" placeholder="Montant à créditer" name="credit" value="<?php echo set_value('credit'); ?>">
														</div>
														
														<label class="control-label" for="Commentaire">Commentaire </label>
														<div style="display:block" class="input-group mg-b-pro-edt">
															<textarea rows="6" id="Commentaire" style="padding:10px;width:100%" name="message" cols="30" rows="10" placeholder="Commentaire"></textarea>
														</div>
														
														<label class="control-label" for="datte_ach">Date<span style="color:red"> * </span></label>
														<div class="form-group data-custon-pick" id="data_1">
															<div class="input-group date">
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																<input type="date" id="datte_ach" class="form-control" placeholder="Date" name="datte" value="<?php echo set_value('datte'); ?>">
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
