
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list" style="color:white !important">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1  style="color:white !important">Vente en attente</h1>
                                </div>
                            </div>
							<?php include_once('trie.php'); ?>
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
												<th style="font-size:17px" data-field="qnte" data-editable="false">Qnté</th>
                                                <th style="font-size:17px" data-field="fournisseur">Fournis.</th>
                                                <th style="font-size:17px" data-field="Transporteur" data-editable="false">Transporteur</th>
                                                <th style="font-size:17px" data-field="prix transport" data-editable="false">Prix transport</th>
												<th style="font-size:17px" data-field="date liv" data-editable="false">Date liv.</th>
												<th style="font-size:17px" data-field="etat" data-editable="false">Vente</th>
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
												<td class="vert"><?php echo af_date_s($ach['date_de_liv']); ?></td>
												<td class="red">En attente</td>
												<td>
													<a href="<?php echo base_url('/an2000/geststock/une_livraison?liv='.$ach['id_livraison']); ?>"><button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Editer"><i style="color:#fdfdfd" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
												</td>
                                            </tr>
											<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
