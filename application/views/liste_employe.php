        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des fournisseurs</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url('/an2000/geststock/creer_employe'); ?>">Ajouter employe</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Fonction</th>
                                    <th>Ville</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Salaire</th>
									<th>Statut</th>
                                    <th>Modifier</th>
                                </tr>
								<?php foreach($employes as $four){; ?>
                                <tr>
                                    <td><?php echo $four['id_employe']; ?></td>
                                    <td><?php echo $four['nom_employe']; ?></td>
                                    <td><?php echo $four['fonction']; ?></td>
                                    <td><?php echo $four['ville_employe']; ?></td>
                                    <td><?php echo $four['telephone_employe']; ?></td>
                                    <td><?php echo $four['mail_employe']; ?></td>
                                    <td><?php echo number_format($four['salaire'],0,""," ").' FCFA'; ?></td>
                                    <?php if($four['employe_status'] == 1){ ?>
										<td>
											<button class="pd-setting">Actif</button>
										</td>
									<?php }else{ ?>
										<td>
											<button class="ds-setting">Inactif</button>
										</td>
									<?php } ?>
									<td>
                                        <a href="<?php echo base_url('/an2000/geststock/edit_employe?id='.$four['id_employe']); ?>"><button data-toggle="tooltip" title="Editer" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
								<?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>