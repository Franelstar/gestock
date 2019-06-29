<div class="review-tab-pro-inner text-center">
	<div class="row">
		<div class="col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="review-content-section row">
				<form method="POST" action="" class="row">
					<div class="chosen-select-single mg-b-20 col-xs-8">
						<select id="mois" class="chosen-select" name="mois">
							<?php for($i = 0; $i <= 12; $i++){
								$b = explode('-',$date);
								if($b[2] == 0){
									$b[2] = 1;
								}
								$c = $b[1].'/'.$b[2].'/'.$b[0];
								$time = strtotime(date('m/d/Y'));
								$comp = date('Y-m', strtotime('+'.-$i.' month', $time));
								if($comp >= $petite_date){ ?>
									<option <?php if(isset($active_mois) and  $active_mois== $i){echo 'selected';} ?> value="<?php echo $i; ?>"><?php echo af_date_date(date('Y-m-d'), -$i); ?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="text-center custom-pro-edt-ds col-xs-4">
						<button type="button submit" style="color:black" class="btn btn-white waves-effect login-submit-cs m-r-12">
							Valider
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>