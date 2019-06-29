
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list" style="color:white !important">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1  style="color:white !important">Historique des payements fournisseur</h1>
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
												<th style="font-size:17px" data-field="fournisseur" data-editable="false">Fournisseur</th>
												<th style="font-size:17px" data-field="versement" data-editable="false">Versement</th>
                                                <th style="font-size:17px" data-field="commentaire" data-editable="false">Commentaire</th>
												<th style="font-size:17px" data-field="date payement" data-editable="false">Date payement</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php foreach($fournisseurs as $ach){ ?>
											<tr>
                                                <td></td>
                                                <td><?php echo $ach['fournisseur']; ?></td>
                                                <td class="vert"><?php echo number_format($ach['versement'],0,""," ").' FCFA'; ?></td>
                                                <td><?php echo $ach['commentaire']; ?></td>
                                                <td><?php echo af_date_s($ach['date']); ?></td>
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
		
<style>
.center{text-align:center !important}
</style>
		