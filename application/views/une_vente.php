<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Informations de vente</h1>
							<h1  style="color:white !important">Bordereau N° <span class="vert"><?php echo $vente['num_bordereau']; ?></span></h1>
						</div>
					</div>
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> vente </a></li>
							<li><a href="#reviews"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> Transport </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade active in" id="description">
								<div class="row">
									<br>
									<div class="review-content-section">
										<div class="row">
											<div class="col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">&nbsp&nbsp-- Date vente --&nbsp&nbsp</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo af_date($vente['date_vente']); ?>">
												</div>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">- Num Bodereau -</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['num_bordereau']; ?>">
												</div>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp--- Client ---&nbsp&nbsp&nbsp&nbsp</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['client']; ?>">
												</div>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">&nbsp- Nom de article -</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['article']; ?>">
												</div>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">&nbsp&nbsp-- Fournisseur --</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['fournisseur']; ?>">
												</div>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">&nbsp&nbsp&nbsp--- Quantité ---&nbsp&nbsp</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['quantite']; ?> sacs">
												</div>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp--- Prix unit ---&nbsp&nbsp</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo number_format($vente['prix_unit'],0,""," ").' FCFA'; ?>">
												</div>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">&nbsp&nbsp&nbsp--- Prix total ---&nbsp&nbsp</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control bleu" value="<?php echo number_format((int)$vente['prix_total'],0,""," ").' FCFA'; ?>">
												</div>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon">&nbsp&nbsp--- Benéfice ---&nbsp&nbsp</span>
													<input style="color:black;font-weight:bold" disabled type="text" class="form-control rose" value="<?php echo number_format((int)$vente['prix_total'] - (int)$vente['prix_achat']- (int)$vente['prix_liv'],0,""," ").' FCFA'; ?>">
												</div>
											</div>
										</div>
										<div class="row text-center" style="margin-top:50px">
											<a class="text-center" style="color:black" href="<?php echo base_url('/an2000/geststock/modifier_vente?ven=').$vente['id_liv']; ?>">
												<button type="button" onfocus="blur();" class="btn btn-white waves-effect login-submit-cs m-r-12">
													Modifier
												</button>
											</a>
											<button style="" data-toggle="modal" data-target="#infos" onfocus="blur()" type="button" class="btn btn-custon-rounded-four btn-danger">
												Supprimer cette vente
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="row product-tab-list tab-pane fade" id="reviews">
								<div class="row">
									<div class="col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<br>
										<div class="review-content-section">
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">-- Date transport --</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo af_date($vente['date_liv']); ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp-- Transporteur --&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['livreur']; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">--- Prix transport ---</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control bleu" value="<?php echo number_format($vente['prix_liv'],0,""," ").' FCFA'; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">--- Lieu livraison ---</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['lieu_liv']; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">--- Num véhicule ---</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $vente['vehicule']; ?>">
											</div>
										</div>
										<div class="row text-center">
											<a class="text-center" style="color:black" href="<?php echo base_url('/an2000/geststock/modifier_livaison?liv=').$vente['id_liv']; ?>">
												<button type="button" onfocus="blur();" class="btn btn-white waves-effect login-submit-cs m-r-12">
													Modifier
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="infos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button> 
				<h4 class="modal-title">Voulez-vous vraiment supprimer cette vente ?</h4>
			</div>
			<div class="modal-body text-center" style="font-weight:bold">
				Si vous supprimez cette vente, vous ne pourrez plus revenir en arrière. Le transport associé à cette vente ne sera pas supprimé. <br> voulez-vous continuer ?
			</div>
			<div class="modal-footer">
				<form method="POST" action="" class="text-center">
					<input type="hidden" name="supprimer" value="oui">
					<button type="button submit" class="btn btn-primary">Supprimer</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
				</form>
			</div>
		</div>
	</div>
</div>

<style>
tr:hover, tr *:hover{color:black !important}
.inputGroup {
  background-color: #fff;
  display: block;
  margin: 10px 0;
  position: relative;
}
.inputGroup label {
  padding: 12px 30px;
  width: 100%;
  display: block;
  text-align: left;
  color: #3C454C;
  cursor: pointer;
  position: relative;
  z-index: 2;
  transition: color 200ms ease-in;
  overflow: hidden;
}
.inputGroup label:before {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  content: '';
  background-color: #152036;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) scale3d(1, 1, 1);
          transform: translate(-50%, -50%) scale3d(1, 1, 1);
  transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
  opacity: 0;
  z-index: -1;
}
.inputGroup label:after {
  width: 32px;
  height: 32px;
  content: '';
  border: 2px solid #D1D7DC;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
  background-repeat: no-repeat;
  background-position: 2px 3px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  right: 30px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  cursor: pointer;
  transition: all 200ms ease-in;
}
.inputGroup input:checked ~ label {
  color: #fff;
}
.inputGroup input:checked ~ label:before {
  -webkit-transform: translate(-50%, -50%) scale3d(56, 56, 1);
          transform: translate(-50%, -50%) scale3d(56, 56, 1);
  opacity: 1;
}
.inputGroup input:checked ~ label:after {
  background-color: #54E0C7;
  border-color: #54E0C7;
}
.inputGroup input {
  width: 32px;
  height: 32px;
  order: 1;
  z-index: 2;
  position: absolute;
  right: 30px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  cursor: pointer;
  visibility: hidden;
}

.form {
  padding: 0 16px;
  max-width: 550px;
  margin: 50px auto;
  font-size: 18px;
  font-weight: 600;
  line-height: 36px;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
}

code {
  background-color: #9AA3AC;
  padding: 0 8px;
}

</style>