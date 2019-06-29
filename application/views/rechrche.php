<?php if(!isset($message)){ ?>
<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Informations sur le bordereau N° <span class="vert"><?php echo $achat['num_bordereau']; ?></span></h1>
						</div>
					</div>
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> Achat </a></li>
							<li><a href="#reviews"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> Transport </a></li>
							<li><a href="#INFORMATION"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> Vente (s) </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="product-tab-list tab-pane fade active in mg-tb-30" id="description">
								<div class="row">
									<div class="col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="review-content-section">
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">- Num Bodereau -&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control rose" value="<?php echo $achat['num_bordereau']; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">- Nom de article - &nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $achat['article']; ?>">
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
												<span class="input-group-addon">&nbsp&nbsp-- Fournisseur --&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $achat['fournisseur']; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp&nbsp&nbsp--- Prix total ---&nbsp&nbsp&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control bleu" value="<?php echo number_format($achat['prix_total'],0,""," ").' FCFA'; ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon">&nbsp&nbsp--- Date achat ---&nbsp</span>
												<input style="color:black;font-weight:bold" disabled type="text" class="form-control" value="<?php echo $achat['date_creation']; ?>">
											</div>
										</div>
									</div>
								</div>
								
								<div class="row" style="margin:10px">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="text-center custom-pro-edt-ds">
											<button data-toggle="modal" data-target="#infos" onfocus="blur()" type="button submit" class="btn btn-custon-rounded-four btn-danger btn-md">
												Supprimer cet achat
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="row product-tab-list tab-pane fade" id="reviews">
								<?php if(!isset($message_t)){ ?>
									<div class="sparkline13-graph">
										<div class="datatable-dashv1-list custom-datatable-overright">
											<div id="toolbar">
												<select class="form-control">
													<option value="">Export Basic</option>
													<option value="all">Export All</option>
													<option value="selected">Export Selected</option>
												</select>
											</div>
											<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
												data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
												<thead>
													<tr>
														<th style="font-size:17px" data-field="state" data-checkbox="true"></th>
														<th style="font-size:17px" data-field="borereau">bordereau</th>
														<th style="font-size:17px" data-field="article" data-editable="false">Article</th>
														<th style="font-size:17px" data-field="qnte" data-editable="false">Qnte</th>
														<th style="font-size:17px" data-field="fournisseur">Fournis.</th>
														<th style="font-size:17px" data-field="Transporteur" data-editable="false">Transport.</th>
														<th style="font-size:17px" data-field="prix T." data-editable="false">Prix T.</th>
														<th style="font-size:17px" data-field="date liv" data-editable="false">Date liv.</th>
														<th style="font-size:17px" data-field="etat" data-editable="false">Etat</th>
														<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($livraisons as $ach){ ?>
													<tr>
														<td></td>
														<td class="rose"><?php echo $ach['id_achat']; ?></td>
														<td><?php echo $ach['article']; ?></td>
														<td><?php echo $ach['qnte_article']; ?> sacs</td>
														<td><?php echo $ach['fournisseur']; ?></td>
														<td><?php echo $ach['livreur']; ?></td>
														<td class="bleu"><?php echo number_format($ach['prix_liv'],0,""," ").' FCFA'; ?></td>
														<td><?php echo $ach['date_de_liv']; ?></td>
														<?php if($ach['vente']){ ?>
															<td class="vert">Effectué</td>
														<?php }else{ ?>
															<td class="red">En attente</td>
														<?php } ?>
														<td>
															<a href="<?php echo base_url('/an2000/geststock/une_livraison?liv='.$ach['id_livraison']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								<?php }else{ ?>
								<div class="data-table-area mg-tb-15">
									<div class="container-fluid">
										<div class="row red text-center" style="font-size:2em">
											<?php echo $message_t; ?>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							<div class="product-tab-list tab-pane fade" id="INFORMATION">
								<?php if(!isset($message_v)){ ?>
									<div class="sparkline13-graph">
										<div class="datatable-dashv1-list custom-datatable-overright">
											<div id="toolbar2">
												<select class="form-control">
													<option value="">Export Basic</option>
													<option value="all">Export All</option>
													<option value="selected">Export Selected</option>
												</select>
											</div>
											<table id="table2" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
												data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar2">
												<thead>
													<tr>
														<th style="font-size:17px" data-field="state" data-checkbox="true"></th>
														<th style="font-size:17px" data-field="borereau">bordereau</th>
														<th style="font-size:17px" data-field="article" data-editable="false">Article</th>
														<th style="font-size:17px" data-field="client">Client</th>
														<th style="font-size:17px" data-field="qnté" data-editable="false">Qnté</th>
														<th style="font-size:17px" data-field="prix unit" data-editable="false">Prix Unit</th>
														<th style="font-size:17px" data-field="prix total" data-editable="false">Prix Total</th>
														<th style="font-size:17px" data-field="bénéfice" data-editable="false">Bénéfice</th>
														<th style="font-size:17px" data-field="date" data-editable="false">Date</th>
														<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($ventes as $ach){ ?>
													<tr>
														<td></td>
														<td class="rose"><?php echo $ach['num_bordereau']; ?></td>
														<td><?php echo $ach['article']; ?></td>
														<td><?php echo $ach['client']; ?></td>
														<td><?php echo $ach['quantite']; ?> sacs</td>
														<td><?php echo number_format($ach['prix_unit'],0,""," ").' FCFA'; ?></td>
														<td class="bleu"><?php echo number_format((int)$ach['prix_total'],0,""," ").' FCFA'; ?></td>
														<td class="rose"><?php echo number_format((int)$ach['prix_total'] - (int)$ach['prix_achat'],0,""," ").' FCFA'; ?></td>
														<td><?php echo $ach['date_vente']; ?></td>
														<td>
															<a href="<?php echo base_url('/an2000/geststock/une_vente?ven='.$ach['id_vente']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								<?php }else{ ?>
								<div class="data-table-area mg-tb-15">
									<div class="container-fluid">
										<div class="row red text-center" style="font-size:2em">
											<?php echo $message_v; ?>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }else{ ?>
<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row red text-center" style="font-size:2em">
			<?php echo $message; ?>
		</div>
	</div>
</div>
<?php } ?>

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
<script>
	function pp(){
		$( ".prix_paye" ).fadeOut( "slow" );
	}
	
	function pe(){
		$( ".prix_paye" ).fadeIn( "slow" );
	}
</script>