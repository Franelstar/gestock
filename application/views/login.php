 <div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
	<div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
		<div class="text-center" style="padding-bottom:30px">
			<a href="<?php echo base_url('/an2000'); ?>"><img class="main-logo" src="<?php echo base_url().'an2000/assets/img/logo/logo.png'; ?>" alt="" /></a>
		</div>
		
		<div class="text-center m-b-md custom-login">
			<h4>Veillez saisir vos informations de connexion</h4>
		</div>
		
		<div class="hpanel">
			<div class="panel-body">
				<div class="text-center m-b-md">
					<p style="color:#ab422f"><?php if(isset($message)) echo $message; ?></p>
				</div>
				<?php echo form_open(base_url('/an2000/geststock/home')); ?>
					<div class="form-group">
						<label class="control-label" for="username">Nom utilisateur</label>
						<input type="text" placeholder="Anael" title="Entrez votre nom d'utilisateur" required="" value="<?php echo set_value('username'); ?>" name="username" id="username" class="form-control">
						<span class="help-block small">Votre nom utilisateur</span>
					</div>
					<div class="form-group">
						<label class="control-label" for="password">Mot de passe</label>
						<input type="password" title="Entrez votre mot de passe" placeholder="******" required="" value="" name="password" id="password" class="form-control">
						<span class="help-block small">Votre mot de passe</span>
					</div>
					<button class="btn btn-success btn-block loginbtn">Connexion</button>
					<a class="btn btn-default btn-block" href="#">Mot de passe oublié ?</a>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
</div>