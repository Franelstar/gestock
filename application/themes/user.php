<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | An2000 SARL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'an2000/assets/img/favicon.ico'; ?>">
	<?php foreach($css as $cs){ ?>
		<link href="<?php echo $cs; ?>" rel="stylesheet">
	<?php } ?>
    <script src="<?php echo base_url().'an2000/assets/js/vendor/modernizr-2.8.3.min.js'; ?>"></script>
</head>

<body>
	<div id="ts-preloader-absolute23">
		<div class="tsperloader23" id="tsperloader23_one"></div>
		<div class="tsperloader23" id="tsperloader23_two"></div>
		<div class="tsperloader23" id="tsperloader23_three"></div>
		<div class="tsperloader23" id="tsperloader23_four"></div>
		<div class="tsperloader23" id="tsperloader23_five"></div>
		<div class="tsperloader23" id="tsperloader23_six"></div>
		<div class="tsperloader23" id="tsperloader23_seven"></div>
		<div class="tsperloader23" id="tsperloader23_eight"></div>
		<div class="tsperloader23" id="tsperloader23_big"></div>
	</div>
	<div id="toutout">
		<div class="left-sidebar-pro">
			<nav id="sidebar" class="">
				<div class="sidebar-header">
					<a href="<?php echo base_url('/an2000'); ?>"><img class="main-logo" src="<?php echo base_url().'an2000/assets/img/logo/logo.png'; ?>" alt="" /></a>
					<strong><a href="<?php echo base_url('/an2000'); ?>"><img src="<?php echo base_url().'an2000/assets/img/logo/logosn.png'; ?>" alt="" /></a></strong>
				</div>
				<div class="left-custom-menu-adp-wrap comment-scrollbar">
					<nav class="sidebar-nav left-sidebar-menu-pro">
						<ul class="metismenu" id="menu1">
							 <li class="<?php if($active == 1){echo 'active';} ?>">
								<a class="has-arrow" href="mailbox.html" aria-expanded="false">
									<i class="icon nalika-table icon-wrap"></i>
									<span class="mini-click-non">Achats d'articles</span>
								</a>
								<ul class="submenu-angle" aria-expanded="false">
									<li><a title="Nouveau achat" href="<?php echo base_url('/an2000/geststock/creer_achat'); ?>"><span class="mini-sub-pro">Nouveau</span></a></li>
									<li><a title="Articles non vendus" href="<?php echo base_url('/an2000/geststock/liste_article'); ?>"><span class="mini-sub-pro">En stocks</span></a></li>
									<li><a title="Historique des achats" href="<?php echo base_url('/an2000/geststock/liste_achat'); ?>"><span class="mini-sub-pro">Historique</span></a></li>
								</ul>
							</li>
							<li class="<?php if($active == 3){echo 'active';} ?>">
								<a class="has-arrow" href="index.html">
									<i class="icon nalika-forms icon-wrap"></i>
									<span class="mini-click-non">Transport</span>
								</a>
								<ul class="submenu-angle" aria-expanded="false">
									<li><a title="Ajouter un transport" href="<?php echo base_url('/an2000/geststock/creer_transport'); ?>"><span class="mini-sub-pro">Ajouter</span></a></li>
									<li><a title="Vente non faite" href="<?php echo base_url('/an2000/geststock/liste_livraison_attente'); ?>"><span class="mini-sub-pro">Vente en attente</span></a></li>
									<li><a title="Transport non livré" href="<?php echo base_url('/an2000/geststock/liste_livraison_non'); ?>"><span class="mini-sub-pro">Non livré</span></a></li>
									<li><a title="Historique des transports" href="<?php echo base_url('/an2000/geststock/liste_livraison'); ?>"><span class="mini-sub-pro">Historique</span></a></li>
								</ul>
							</li>
							<li class="<?php if($active == 2){echo 'active';} ?>">
								<a class="has-arrow" href="index.html">
									   <i class="icon nalika-pie-chart icon-wrap"></i>
									   <span class="mini-click-non">Ventes</span>
								</a>
								<ul class="submenu-angle" aria-expanded="false">
									<li><a title="Créer un vente" href="<?php echo base_url('/an2000/geststock/creer_vente'); ?>"><span class="mini-sub-pro">Créer une vente</span></a></li>
									<li><a title="Historique des ventes" href="<?php echo base_url('/an2000/geststock/liste_vente'); ?>"><span class="mini-sub-pro">Historique</span></a></li>
								</ul>
							</li>
							<li class="<?php if($active == 5){echo 'active';} ?>">
								<a class="has-arrow" href="index.html">
									   <i class="icon nalika-new-file icon-wrap"></i>
									   <span class="mini-click-non">Fournisseur</span>
								</a>
								<ul class="submenu-angle" aria-expanded="false">
									<li><a title="Payer un fournisseur" href="<?php echo base_url('/an2000/geststock/payer_fournisseur'); ?>"><span class="mini-sub-pro">Payer Fournisseur</span></a></li>
									<li><a title="solde fournisseurs" href="<?php echo base_url('/an2000/geststock/liste_credit'); ?>"><span class="mini-sub-pro">Soldes fournisseurs</span></a></li>
									<li><a title="Historique payement fournisseurs" href="<?php echo base_url('/an2000/geststock/list_paye_fourn'); ?>"><span class="mini-sub-pro">Historique</span></a></li>
							   </ul>
							</li>
							<li class="<?php if($active == 6){echo 'active';} ?>">
								<a class="has-arrow" href="index.html">
									   <i class="icon nalika-user icon-wrap"></i>
									   <span class="mini-click-non">Client</span>
								</a>
								<ul class="submenu-angle" aria-expanded="false">
									<li><a title="Payement d'un client" href="<?php echo base_url('/an2000/geststock/payement_client'); ?>"><span class="mini-sub-pro">Payement client</span></a></li>
									<li><a title="Retirer d'argent d'un client" href="<?php echo base_url('/an2000/geststock/retrait_client'); ?>"><span class="mini-sub-pro">retrait client</span></a></li>
									<li><a title="Soldes des clients" href="<?php echo base_url('/an2000/geststock/liste_creance'); ?>"><span class="mini-sub-pro">Soldes clients</span></a></li>
									<li><a title="Historique payement des clients" href="<?php echo base_url('/an2000/geststock/list_paye_client'); ?>"><span class="mini-sub-pro">Historique</span></a></li>
							   </ul>
							</li>
							
							<li class="<?php if($active == 7){echo 'active';} ?>">
								<a class="has-arrow" href="mailbox.html" aria-expanded="false">
									<i class="icon nalika-home icon-wrap"></i>
									<span class="mini-click-non">Employés</span>
								</a>
								<ul class="submenu-angle" aria-expanded="false">
									<li><a title="Perte employé" href="<?php echo base_url('/an2000/geststock/perte'); ?>"><span class="mini-sub-pro">Nouvelle perte</span></a></li>
									<li><a title="Liste des pertes" href="<?php echo base_url('/an2000/geststock/perte_employe'); ?>"><span class="mini-sub-pro">Liste pertes</span></a></li>
									<li><a title="Payement salaires" href="<?php echo base_url('/an2000/geststock/payer_salaire'); ?>"><span class="mini-sub-pro">Payer salaires</span></a></li>
									<li><a title="Historique payement salaires" href="<?php echo base_url('/an2000/geststock/liste_payement_salaire'); ?>"><span class="mini-sub-pro">Historique salaires</span></a></li>
								</ul>
							</li>
							
							<li class="<?php if($active == 4){echo 'active';} ?>">
								<a class="has-arrow" href="mailbox.html" aria-expanded="false">
									<i class="icon nalika-diamond icon-wrap"></i>
									<span class="mini-click-non">Banque</span>
								</a>
								<ul class="submenu-angle" aria-expanded="false">
									<li><a title="Solde en banque" href="<?php echo base_url('/an2000/geststock/solde'); ?>"><span class="mini-sub-pro">Solde</span></a></li>
									<li><a title="Créditer le compte" href="<?php echo base_url('/an2000/geststock/crediter'); ?>"><span class="mini-sub-pro">Créditer compte</span></a></li>
									<li><a title="Débiter le compte" href="<?php echo base_url('/an2000/geststock/debiter'); ?>"><span class="mini-sub-pro">Débiter compte</span></a></li>
								</ul>
							</li>
							
							<li class="<?php if($active == 8){echo 'active';} ?>">
								<a class="has-arrow" href="mailbox.html" aria-expanded="false">
									<i class="icon nalika-bar-chart icon-wrap"></i>
									<span class="mini-click-non">Statistiques</span>
								</a>
								<ul class="submenu-angle" aria-expanded="false">
									<li><a title="Statistiques mensuel" href="<?php echo base_url('/an2000/geststock/stats_mensuel'); ?>"><span class="mini-sub-pro">Mensuel</span></a></li>
									<li><a title="Statistiques annuel" href="<?php echo base_url('/an2000/geststock/stats_annuel'); ?>"><span class="mini-sub-pro">Annuel</span></a></li>
									<li><a title="Statistiques autres" href="<?php echo base_url('/an2000/geststock/stats_autre'); ?>"><span class="mini-sub-pro">Autres</span></a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
		<!-- Start Welcome area -->
		<div class="all-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="logo-pro">
							<a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			<div class="header-advance-area">
				<div class="header-top-area" id="header">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header-top-wraper">
									<div class="row">
										<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
											<div class="menu-switcher-pro">
												<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
											</div>
										</div>
										<div class="col-lg-3 col-md-2 col-sm-2 col-xs-10 breadcome-heading">
											<form role="search" method="POST" action="<?php echo base_url('/an2000/geststock/chercher'); ?>">
												<input type="text" placeholder="Bordereau ..." class="form-control" name="search">
												<button type="submit"><i class="fa fa-search"></i></button>
											</form>
										</div>
										<div class="col-lg-6 col-md-8 col-sm-8 col-xs-10">
											<div class="header-right-info">
												<ul class="nav navbar-nav mai-top-nav header-right-menu">
													<li class="nav-item">
														<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
																<i class="icon nalika-user"></i>
															</a>
														<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" style="margin-left: -118px">
															<li><a href="<?php echo base_url('/an2000/geststock/sauvegarde'); ?>"><span class="icon nalika-download author-log-ic"></span> Sauvegarder</a>
															</li>
															<li><a href="<?php echo base_url('/an2000/geststock/setting'); ?>"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
															</li>
															<li><a href="<?php echo base_url('/an2000/geststock/logout'); ?>"><span class="icon nalika-unlocked author-log-ic"></span> Déconnexion</a>
															</li>
														</ul>
													</li>
													<li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>

														<div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn" style="width:-moz-max-content">
															<ul class="nav nav-tabs custon-set-tab">
																<li class="active"><a data-toggle="tab" href="#four">Fournisseur</a>
																</li>
																<li><a data-toggle="tab" href="#articles">Article</a>
																</li>
																<li><a data-toggle="tab" href="#livreur">Transporteur</a>
																</li>
																<li><a data-toggle="tab" href="#client">Client</a>
																</li>
																<li><a data-toggle="tab" href="#employe">Employé</a>
																</li>
															</ul>

															<div class="tab-content custom-bdr-nt">
																<div id="four" class="tab-pane fade in active">
																	<div class="notes-area-wrap">
																		<div class="note-heading-indicate">
																			<p>Vous avez actuellement <?php echo $nbre_four; ?> fournisseurs</p>
																		</div>
																		<div class="notes-list-area notes-menu-scrollbar">
																			<ul class="notes-menu-list">
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/creer_fournisseur'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Créer un fournisseur</span>
																							</div>
																						</div>
																					</a>
																				</li>
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/liste_fournisseur'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Liste des fournisseurs</span>
																							</div>
																						</div>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div id="articles" class="tab-pane fade">
																	<div class="notes-area-wrap">
																		<div class="note-heading-indicate">
																			<p>Vous avez actuellement <?php echo $nbre_art; ?> articles</p>
																		</div>
																		<div class="notes-list-area notes-menu-scrollbar">
																			<ul class="notes-menu-list">
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/creer_article'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Créer un article</span>
																							</div>
																						</div>
																					</a>
																				</li>
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/liste_article2'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Liste des articles</span>
																							</div>
																						</div>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div id="livreur" class="tab-pane fade">
																	<div class="notes-area-wrap">
																		<div class="note-heading-indicate">
																			<p>Vous avez actuellement <?php echo $nbre_liv; ?> transporteurs</p>
																		</div>
																		<div class="notes-list-area notes-menu-scrollbar">
																			<ul class="notes-menu-list">
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/creer_livreur'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Créer un transporteur</span>
																							</div>
																						</div>
																					</a>
																				</li>
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/liste_livreur'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>liste des transporteur</span>
																							</div>
																						</div>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div id="client" class="tab-pane fade">
																	<div class="notes-area-wrap">
																		<div class="note-heading-indicate">
																			<p>Vous avez actuellement <?php echo $nbre_client; ?> clients</p>
																		</div>
																		<div class="notes-list-area notes-menu-scrollbar">
																			<ul class="notes-menu-list">
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/creer_client'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Créer un client</span>
																							</div>
																						</div>
																					</a>
																				</li>
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/liste_client'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Liste des clients</span>
																							</div>
																						</div>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div id="employe" class="tab-pane fade">
																	<div class="notes-area-wrap">
																		<div class="note-heading-indicate">
																			<p>Vous avez actuellement <?php echo $nbre_employes; ?> Employés</p>
																		</div>
																		<div class="notes-list-area notes-menu-scrollbar">
																			<ul class="notes-menu-list">
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/creer_employe'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Créer un employé</span>
																							</div>
																						</div>
																					</a>
																				</li>
																				<li style="display:block">
																					<a href="<?php echo base_url('/an2000/geststock/liste_employe'); ?>">
																						<div class="notes-list-flow">
																							<div class="notes-content">
																								<span><i class="icon nalika-edit" aria-hidden="true" style="margin-right:15px"></i>Liste des employés</span>
																							</div>
																						</div>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Mobile Menu start -->
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="mobile-menu">
									<nav id="dropdown">
										<ul class="mobile-menu-nav">
											<li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
												<ul class="collapse dropdown-header-top">
													<li><a href="index.html">Dashboard v.1</a></li>
													<li><a href="index-1.html">Dashboard v.2</a></li>
													<li><a href="index-3.html">Dashboard v.3</a></li>
													<li><a href="product-list.html">Product List</a></li>
												</ul>
											</li>
											<li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
												<ul id="demo" class="collapse dropdown-header-top">
													<li><a href="mailbox.html">Inbox</a>
													</li>
													<li><a href="mailbox-view.html">View Mail</a>
													</li>
													<li><a href="mailbox-compose.html">Compose Mail</a>
													</li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="corps" style="min-height:500px;margin-top:90px">
				<?php echo $corps; ?>
			</div>
			<div class="footer-copyright-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer-copy-right">
								<p>Copyright © Franel 2019 All rights reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url().'an2000/assets/js/main.js'; ?>"></script>
	<?php foreach($js as $java){ ?>
	<script src="<?php echo $java; ?>"></script>
	<?php } ?>
	<script>
		var haut = (document.body.clientHeight);
		var header = parseInt($('#header').css('height'));
		$('#corps').css('min-height', haut - header - 90);
	</script>
</body>

</html>