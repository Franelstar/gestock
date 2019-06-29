<div class="review-tab-pro-inner text-center">
						<ul id="myTab3" class="tab-review-design">
							<li class="<?php if(!isset($active_trie)){echo 'active';} ?>"><a href="#reviews3"> Tous </a></li>
							<li class="<?php if(isset($active_trie) and $active_trie == 1){echo 'active';} ?>"><a href="#reviews"> Jusqu'au ... </a></li>
							<li class="<?php if(isset($active_trie) and $active_trie == 2){echo 'active';} ?>"><a href="#reviews2"> A partir du ... </a></li>
							<li class="<?php if(isset($active_trie) and $active_trie == 3){echo 'active';} ?>"><a href="#description"> Entre ... </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade in <?php if(isset($active_trie) and $active_trie == 3){echo 'active';} ?>" id="description">
								<div class="row">
									<div class="col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="review-content-section row">
											<form method="POST" action="">
												<div class="form-group data-custon-pick col-sm-1" style="font-size:1.2em;font-weight:bold;margin-top:10px">
													Du
												</div>
												
												<div class="form-group data-custon-pick col-sm-5" id="data_1">
													<div class="input-group date">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" required class="form-control" name="date_d1" value="<?php echo set_value('date_d1'); ?>">
													</div>
												</div>
												
												<div class="form-group data-custon-pick col-sm-1"  style="font-size:1.2em;font-weight:bold;margin-top:10px">
													Au
												</div>
												
												<div class="form-group data-custon-pick col-sm-5" id="data_1">
													<div class="input-group date">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" required class="form-control" name="date_d2" value="<?php echo set_value('date_d2'); ?>">
													</div>
												</div>
												
												<div class="text-center custom-pro-edt-ds">
													<button type="button submit" style="color:black" class="btn btn-white waves-effect login-submit-cs m-r-12">
														Valider
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
							<div class="product-tab-list tab-pane fade in <?php if(isset($active_trie) and $active_trie == 1){echo 'active';} ?>" id="reviews">
								<div class="row">
									<div class="text-center">
										<div class="review-content-section" style="width:250px;display:inline-block">
											<form method="POST" action="">
												<div class="form-group data-custon-pick" id="data_1">
													<div class="input-group date">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" required class="form-control" name="date_avant" value="<?php echo set_value('date_avant'); ?>">
													</div>
												</div>
												
												<div class="text-center custom-pro-edt-ds">
													<button type="button submit" style="color:black" class="btn btn-white waves-effect login-submit-cs m-r-12">
														Valider
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
							<div class="product-tab-list tab-pane fade in <?php if(isset($active_trie) and $active_trie == 2){echo 'active';} ?>" id="reviews2">
								<div class="row">
									<div class="text-center">
										<div class="review-content-section" style="width:250px;display:inline-block">
											<form method="POST" action="">
												<div class="form-group data-custon-pick" id="data_1">
													<div class="input-group date">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="date" required class="form-control" name="date_apres" value="<?php echo set_value('date_apres'); ?>">
													</div>
												</div>
												
												<div class="text-center custom-pro-edt-ds">
													<button type="button submit" style="color:black" class="btn btn-white waves-effect login-submit-cs m-r-12">
														Valider
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
							<div class="product-tab-list tab-pane fade in <?php if(!isset($active_trie)){echo 'active';} ?>" id="reviews3">
								<?php if(isset($active_trie)){ ?>
									<div class="row">
										<div class="text-center">
											<div class="review-content-section" style="width:250px;display:inline-block">
												<form method="POST" action="">
													<div class="text-center custom-pro-edt-ds">
														<button type="button submit" style="color:black" class="btn btn-white waves-effect login-submit-cs m-r-12">
															Tous afficher
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>