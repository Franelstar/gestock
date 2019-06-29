<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | An2000 SARL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'an2000/assets/img/favicon.ico'; ?>">
	<?php foreach($css as $cs){ ?>
		<link href="<?php echo $cs; ?>" rel="stylesheet">
	<?php } ?>
    <script src="<?php echo base_url().'an2000/assets/js/vendor/modernizr-2.8.3.min.js'; ?>"></script>
</head>

<body>
    <div class="color-line"></div>
    <div class="container-fluid">
        <div id="corps" style="min-height:500px;margin-top:100px">
			<?php echo $corps; ?>
		</div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright © Franel 2019 All rights reserved.</p>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url().'an2000/assets/js/main.js'; ?>"></script>
	<?php foreach($js as $java){ ?>
	<script src="<?php echo $java; ?>"></script>
	<?php } ?>
	<script>
</body>

</html>