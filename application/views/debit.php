<div class="product-status mg-b-30">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="product-status-wrap">
					<h4>Liste des créances</h4>
					<table>
						<tr>
							<th>Bordereau</th>
							<th>Article</th>
							<th>Client</th>
							<th>Livreur</th>
							<th>Qnté</th>
							<th>Prix U.</th>
							<th>Prix L.</th>
							<th>Prix T.</th>
							<th>Payée</th>
							<th>Reste</th>
							<th>Date</th>
						</tr>
						<?php $debit_total = 0; foreach($credits as $four){; ?>
						<tr>
							<td><?php echo $four['num_bordereau']; ?></td>
							<td><?php echo $four['article']; ?></td>
							<td><?php echo $four['client']; ?></td>
							<td><?php echo $four['livreur']; ?></td>
							<td><?php echo $four['quantite']; ?></td>
							<td><?php echo number_format($four['prix_unit'],0,""," ").' FCFA'; ?></td>
							<td><?php echo number_format($four['prix_l'],0,""," ").' FCFA'; ?></td>
							<td><?php echo number_format((int)$four['prix_total'],0,""," ").' FCFA'; ?></td>
							<td class=""><?php echo number_format($four['paye'],0,""," ").' FCFA'; ?></td>
							<td class="vert"><?php echo number_format((int) $four['prix_total'] - (int) $four['paye'],0,""," ").' FCFA'; $debit_total += (int) $four['prix_total'] - (int) $four['paye']; ?></td>
							<td><?php echo $four['date_vente']; ?></td>
						</tr>
						<?php } ?>
					</table>
					<br>
					<br>
					<hr>
					<div style="color:white;text-align:right;margin-right:100px;font-weight:bold;font-size:1.5em;font-family:cursive">La créance total est de <span class="vert"><?php echo number_format($debit_total,0,""," ").' FCFA'; ?> </span></div>
				</div>
			</div>
		</div>
	</div>
</div>