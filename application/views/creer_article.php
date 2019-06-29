        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Création d'un article</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
										<div class="row" style="text-align:center;color:red;font-family:cursive">
											<?php echo validation_errors(); ?>
										</div>
										<?php echo form_open(base_url('/an2000/geststock/creer_article')); ?>
											<div class="row">
												<div class=" col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
													<div class="review-content-section">
														<label class="control-label" for="nom">Nom de l'article <span style="color:red"> * </span></label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
															<input type="text" id="nom" class="form-control" placeholder="Nom &nbsp; article" name="nom" value="<?php echo set_value('nom'); ?>">
														</div>
														
														<label class="control-label" for="description">Description de l'article </label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
															<input type="text" id="description" class="form-control" placeholder="Description" name="description" value="<?php echo set_value('description'); ?>">
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
