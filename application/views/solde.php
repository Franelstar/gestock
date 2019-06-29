
<div class="container-fluid">
   
	<div class="row">
		<div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="admintab-wrap mg-t-30">
				<ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
					<li class="active"><a style="font-weight:bold;font-size:1.4em" data-toggle="tab" href="#TabProject" aria-expanded="true"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>Solde</a>
					</li>
					<li class=""><a style="font-weight:bold;font-size:1.4em" data-toggle="tab" href="#TabDetails" aria-expanded="false"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>Crédit</a>
					</li>
					<li class=""><a style="font-weight:bold;font-size:1.4em" data-toggle="tab" href="#TabPlan" aria-expanded="false"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>Créance</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="TabProject" class="tab-pane animated flipInX custon-tab-style1 active">
						<p style="text-align:center;font-size:3em;margin:50px;font-weight:bold"> <?php echo number_format($solde,0,""," ").' FCFA'; ?> </p>
					</div>
					<div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">
						<p style="text-align:center;font-size:3em;margin:50px;font-weight:bold" class="red"> <?php echo number_format($credit,0,""," ").' FCFA'; ?> </p>
					</div>
					<div id="TabPlan" class="tab-pane animated flipInX custon-tab-style1">
						<p style="text-align:center;font-size:3em;margin:50px;font-weight:bold" class="vert"> <?php echo number_format($debit,0,""," ").' FCFA'; ?> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
        