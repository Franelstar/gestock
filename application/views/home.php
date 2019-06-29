<div class="section-admin container-fluid">
	<div class="row admin text-center">
		<div class="col-md-12">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
						<h4 class="text-left text-uppercase"><a class="white" href="<?php echo base_url('/an2000/geststock/liste_fournisseur'); ?>"><b>Fournisseurs</b></a></h4>
						<div class="row vertical-center-box vertical-center-box-tablet">
							<div class="col-xs-9 cus-gh-hd-pro" style="float:right">
								<h2 style="white-space:nowrap" class="text-right no-margin"><?php echo $nbre_four; ?></h2>
							</div>
						</div>
						<div class="progress progress-mini">
							<div style="width: 90%;" class="progress-bar bg-purple"></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
						<h4 class="text-left text-uppercase"><a class="white" href="<?php echo base_url('/an2000/geststock/liste_article2'); ?>"><b>Articles</b></a></h4>
						<div class="row vertical-center-box vertical-center-box-tablet">
							<div class="col-xs-9 cus-gh-hd-pro" style="float:right">
								<h2 style="white-space:nowrap" class="text-right no-margin"><?php echo $nbre_art; ?></h2>
							</div>
						</div>
						<div class="progress progress-mini">
							<div style="width: 90%;" class="progress-bar bg-purple"></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
						<h4 class="text-left text-uppercase"><a class="white" href="<?php echo base_url('/an2000/geststock/liste_livreur'); ?>"><b>Livreurs</b></a></h4>
						<div class="row vertical-center-box vertical-center-box-tablet">
							<div class="col-xs-9 cus-gh-hd-pro" style="float:right">
								<h2 style="white-space:nowrap" class="text-right no-margin"><?php echo $nbre_liv; ?></h2>
							</div>
						</div>
						<div class="progress progress-mini">
							<div style="width: 90%;" class="progress-bar bg-purple"></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
						<h4 class="text-left text-uppercase"><a class="white" href="<?php echo base_url('/an2000/geststock/liste_client'); ?>"><b>Clients</b></a></h4>
						<div class="row vertical-center-box vertical-center-box-tablet">
							<div class="col-xs-9 cus-gh-hd-pro" style="float:right">
								<h2 style="white-space:nowrap" class="text-right no-margin"><?php echo $nbre_client; ?></h2>
							</div>
						</div>
						<div class="progress progress-mini">
							<div style="width: 90%;" class="progress-bar bg-purple"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-admin container-fluid" style="margin-top:100px">
	<div class="row admin text-center">
		<div class="col-md-12">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
						<h4 class="text-left text-uppercase"><a class="white" href="<?php echo base_url('/an2000/geststock/liste_credit'); ?>"><b>Crédit</b></a></h4>
						<div class="row vertical-center-box vertical-center-box-tablet">
							<div class="col-xs-9 cus-gh-hd-pro">
								<h2 style="white-space:nowrap" class="text-right no-margin red"><?php echo number_format($credit,0,""," ").' FCFA'; ?></h2>
							</div>
						</div>
						<div class="progress progress-mini">
							<div style="width: 90%;" class="progress-bar bg-green"></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
						<h4 class="text-left text-uppercase"><a class="white" href="<?php echo base_url('/an2000/geststock/liste_creance'); ?>"><b>Créance</b></a></h4>
						<div class="row vertical-center-box vertical-center-box-tablet">
							<div class="col-xs-9 cus-gh-hd-pro">
								<h2 style="white-space:nowrap" class="text-right no-margin vert"><?php echo number_format($debit,0,""," ").' FCFA'; ?></h2>
							</div>
						</div>
						<div class="progress progress-mini">
							<div style="width: 90%;" class="progress-bar bg-green"></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
						<h4 class="text-left text-uppercase"><a class="white" href="<?php echo base_url('/an2000/geststock/solde'); ?>"><b>Solde</b></a></h4>
						<div class="row vertical-center-box vertical-center-box-tablet">
							<div class="col-xs-9 cus-gh-hd-pro">
								<h2 style="white-space:nowrap" class="text-right no-margin rose"><?php echo number_format($solde,0,""," ").' FCFA'; ?></h2>
							</div>
						</div>
						<div class="progress progress-mini">
							<div style="width: 90%;" class="progress-bar bg-green"></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
						<h4 style="white-space:nowrap" class="text-left text-uppercase"><a class="white" href="<?php echo base_url('/an2000/geststock/liste_livraison_attente'); ?>"><b>Transports en attente</b></a></h4>
						<div class="row vertical-center-box vertical-center-box-tablet">
							<div class="col-xs-9 cus-gh-hd-pro">
								<h2 style="white-space:nowrap" class="text-right no-margin"><?php echo $attente ?></h2>
							</div>
						</div>
						<div class="progress progress-mini">
							<div style="width: 90%;" class="progress-bar bg-green"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>