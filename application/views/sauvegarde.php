<div class="product-status mg-b-30">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="product-status-wrap" style="height:250px">
					<h2 style="color:white;text-align:center;margin-bottom:40px" class="align-center">
						Veillez selectionner le disque dans lequel vous souhaiter sauvegarder les données
					</h2>
					<div class="col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="review-content-section">
							<form method="POST" action="" class="row">
								<div class="chosen-select-single mg-b-20 col-xs-12">
									<select class="chosen-select" name="res">
										<?php foreach($res as $r){ $df_c = disk_total_space($r.':'); ?>
												<option <?php if($res[count($res)-1] == $r){echo 'selected';} ?> value="<?php echo $r; ?>"><?php echo $r; ?><span class="red"> (<?php echo ceil($df_c/1024/1024/1024) . ' Go'; ?>)</span></option>
										<?php } ?>
									</select>
								</div>
								<div class="text-center custom-pro-edt-ds col-xs-12">
									<button type="button submit" style="color:black" class="btn btn-white waves-effect login-submit-cs m-r-12">
										Valider
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>