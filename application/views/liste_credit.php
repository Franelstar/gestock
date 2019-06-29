<div class="data-table-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list" style="color:white !important">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<h1  style="color:white !important">Solde des fournisseurs</h1>
						</div>
					</div>
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#reviews"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> Par fournisseur </a></li>
							<li><a href="#INFORMATION"><i class="icon nalika-forms icon-wrap" aria-hidden="true"></i> Total </a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<div class="row product-tab-list tab-pane fade active in" id="reviews">
								<div class="col-sm-offset-2 col-sm-8" style="margin-top:50px">
									<div class="sparkline13-graph">
										<div class="datatable-dashv1-list custom-datatable-overright">
											<div id="toolbar">
												<select class="form-control">
													<option value="">Export Basic</option>
													<option value="all">Export All</option>
													<option value="selected">Export Selected</option>
												</select>
											</div>
											<table id="table" data-toggle="table" data-pagination="false" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
												data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
												<thead>
													<tr>
														<th style="font-size:17px" data-field="fournisseur" data-editable="false">Fournisseur</th>
														<th style="font-size:17px" data-field="crédit" data-editable="false">Solde</th>
														<th style="font-size:17px" data-field="voir +" data-editable="false">Voir +</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($par_four as $cle => $p_f){ ?>
													<tr>
														<td><?php echo $p_f['nom']; ?></td>
														<td class="<?php if($p_f['total'] >= 0){echo 'vert';}else{echo 'red';}?>"><?php echo number_format($p_f['total'],0,""," ").' FCFA'; ?></td>
														<td class="text-center" style="text-align:center">
															<a class="text-center" href="<?php echo base_url('/an2000/geststock/solde_un_fournisseur?four='.$p_f['id_fournisseur']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="product-tab-list tab-pane fade" id="INFORMATION">
								<div class="row text-center" style="margin-top:60px;font-size:2em">
									Votre devez aux fournisseurx la somme de : <br><span class="<?php if($total >= 0){echo 'vert';}else{echo 'red';}?> text-center"><?php echo number_format(abs($total),0,""," ").' FCFA'; ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
td{text-align:center !important}
</style>
