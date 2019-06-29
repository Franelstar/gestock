        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des livreurs</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url('/an2000/geststock/creer_livreur'); ?>">Ajouter livreur</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Non livreur</th>
                                    <th>Ville résidence</th>
                                    <th>Téléphone</th>
                                    <th>email</th>
                                    <th>Ajouté le</th>
                                    <th>Status</th>
                                    <th>Editer</th>
                                </tr>
								<?php foreach($livreurs as $four){; ?>
                                <tr>
                                    <td><?php echo $four['nom_livreur']; ?></td>
                                    <td><?php echo $four['ville_livreur']; ?></td>
                                    <td><?php echo $four['telephone_livreur']; ?></td>
                                    <td><?php echo $four['mail_livreur']; ?></td>
                                    <td><?php echo af_date_s($four['date_creation']); ?></td>
									<?php if($four['livreur_status'] == 1){ ?>
										<td>
											<button class="pd-setting">Actif</button>
										</td>
									<?php }else{ ?>
										<td>
											<button class="ds-setting">Inactif</button>
										</td>
									<?php } ?>
                                    <td>
                                        <a href="<?php echo base_url('/an2000/geststock/edit_livreur?id='.$four['id_livreur']); ?>"><button data-toggle="tooltip" title="Editer" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
								<?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>