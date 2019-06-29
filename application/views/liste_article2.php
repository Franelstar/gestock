        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Liste des articles</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url('/an2000/geststock/creer_article'); ?>">Ajouter article</a>
                            </div>
                            <table>
                                <tr>
                                    <th>Nom article</th>
                                    <th>Description</th>
                                    <th>Créé le</th>
                                    <th>Etat</th>
                                    <th>Editer</th>
                                </tr>
								<?php if(!empty($articles)){foreach($articles as $four){; ?>
                                <tr>
                                    <td><?php echo $four['nom_article']; ?></td>
                                    <td><?php echo $four['description']; ?></td>
                                    <td><?php echo af_date_s($four['date_creation']); ?></td>
									<?php if($four['article_status'] == 1){ ?>
										<td>
											<button class="pd-setting">Actif</button>
										</td>
									<?php }else{ ?>
										<td>
											<button class="ds-setting">Inactif</button>
										</td>
									<?php } ?>
                                    <td>
                                        <a href="<?php echo base_url('/an2000/geststock/edit_article?id='.$four['id_article']); ?>"><button data-toggle="tooltip" title="Editer" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
								<?php }} ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>