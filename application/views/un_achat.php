<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="text-center custom-pro-edt-ds">
				<a href="<?php echo base_url('/an2000/geststock/liste_achat'); ?>">
					<button type="button submit" class="btn btn-custon-four btn-success" style="font-weight:bold;background-color:#1b2a47;border-color:#1b2a47">
						Retour à l'historique des achats
					</button>
				</a>
			</div>
		</div>
	</div>
</div>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="breadcome-list single-page-breadcome">
				<div id="myTabContent" class="tab-content custom-product-edit">
					<div class="product-tab-list tab-pane fade active in" id="description">
						<div class="review-content-section">
							<div class="sparkline16-hd">
								<div class="main-sparkline16-hd" style="text-align:center">
									<h1 style="color:white">Informations sur l'achat</h1>
								</div>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<div class="review-content-section">
									<div class="input-group mg-b-pro-edt">
										<span class="input-group-addon">&nbsp&nbsp&nbsp-- Date achat --&nbsp&nbsp</span>
										<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo af_date($achat['date_creation']); ?>">
									</div>
									
									<div class="input-group mg-b-pro-edt">
										<span class="input-group-addon">- Num Bodereau -&nbsp</span>
										<input style="color:black;font-weight:bold" disabled type="text" class="form-control rose" value="<?php echo $achat['num_bordereau']; ?>">
									</div>
									
									<div class="input-group mg-b-pro-edt">
										<span class="input-group-addon">- Nom de article - &nbsp</span>
										<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $achat['article']; ?>">
									</div>
									
									<div class="input-group mg-b-pro-edt">
										<span class="input-group-addon">&nbsp&nbsp-- Fournisseur --&nbsp</span>
										<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $achat['fournisseur']; ?>">
									</div>
									
									<div class="input-group mg-b-pro-edt">
										<span class="input-group-addon">&nbsp&nbsp&nbsp--- Quantité ---&nbsp&nbsp&nbsp</span>
										<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $achat['quantite']; ?> sacs">
									</div>
									
									<div class="input-group mg-b-pro-edt">
										<span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp--- Prix unit ---&nbsp&nbsp&nbsp</span>
										<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo number_format($achat['prix_unit'],0,""," ").' FCFA'; ?>">
									</div>
									
									<div class="input-group mg-b-pro-edt">
										<span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp--- Prix total ---&nbsp&nbsp</span>
										<input style="color:black;font-weight:bold" disabled type="text" class="form-control bleu" value="<?php echo number_format($achat['prix_total'],0,""," ").' FCFA'; ?>">
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
<div class="row" style="margin:10px">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="text-center custom-pro-edt-ds">
			<a href="<?php echo base_url('/an2000/geststock/modifier_achat?ach='.$achat['num_bordereau']); ?>">
				<button onfocus="blur()" type="button submit" class="btn btn-custon-rounded-four btn-default btn-md">
					Modiffier cet achat
				</button>
			</a>
			
			<button data-toggle="modal" data-target="#infos" onfocus="blur()" type="button submit" class="btn btn-custon-rounded-four btn-danger btn-md">
				Supprimer cet achat
			</button>
			<?php if($achat['qnt_rest']){ ?>
			<a href="<?php echo base_url('/an2000/geststock/creer_transport?trans='.$achat['num_bordereau']); ?>">
				<button onfocus="blur()" type="button submit" class="btn btn-custon-rounded-four btn-default btn-md">
					Transporter
				</button>
			</a>
			<?php } ?>
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
				<h4 class="modal-title">Voulez-vous vraiment supprimer cet achat ?</h4>
			</div>
			<div class="modal-body text-center" style="font-weight:bold;min-height:150px">
				Si vous supprimez cet achat, vous ne pouvez plus revenir en arrière. voulez-vous continuer ?
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
.keep-open .dropdown-menu{color:black;font-stretch:condensed}
th{font-size:1.3em}
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