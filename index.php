<?php
error_reporting(0);
require_once 'config.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex" />

	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="pragma" content="no-cache">

	<title>เช็คยอด</title>

	<link rel="apple-touch-icon" href="apple-touch-icon.png"/>
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png"/>

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>

	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/site.js"></script>

</head>
<body>

	<div class="container-fluid bank-container">
		<div class="row-fluid">
			<div class="span12">
				<div class="box-wrap">

					<?php if (!(empty($K_USERNAME) || empty($K_PASSWORD) || empty($K_ACCOUNT_NAME))) { ?>
					<div class="box">
						<div class="bank-detail">
							<div class="clearfix head">
								<img src="images/kbank.png" width="80" class="bank-logo"/>
								<div class="bank-name">ธนาคารกสิกรไทย</div>
							</div>
							<div class="content">
								<div class="load do-load" data-url="login-kbank.php?key=<?php echo $xkey?>">กดเพื่อโหลด</div>
							</div>
						</div>
					</div>
					<?php } ?>

					<?php if (!(empty($S_USERNAME) || empty($S_PASSWORD) || empty($S_ACCOUNT_NAME))) { ?>
					<div class="box">
						<div class="bank-detail">
							<div class="clearfix head">
								<img src="images/scb.png" width="80" class="bank-logo"/>
								<div class="bank-name">ธนาคารไทยพาณิชย์</div>
							</div>
							<div class="content">
								<div class="load do-load" data-url="login-scb.php?key=<?php echo $xkey?>">กดเพื่อโหลด</div>
							</div>
						</div>
					</div>
					<?php } ?>

					<?php if (!(empty($B_USERNAME) || empty($B_PASSWORD) || empty($B_ACCOUNT_NAME))) { ?>
					<div class="box">
						<div class="bank-detail">
							<div class="clearfix head">
								<img src="images/bbl.png" width="80" class="bank-logo"/>
								<div class="bank-name">ธนาคารกรุงเทพ</div>
							</div>
							<div class="content">
								<div class="load do-load" data-url="login-bbl.php?key=<?php echo $xkey?>">กดเพื่อโหลด</div>
							</div>
						</div>
					</div>
					<?php } ?>

					<?php if (!empty($T_USERNAME) && !empty($T_PASSWORD) && !empty($T_ACCOUNT_NAME) && !empty($C_USERNAME) && !empty($C_PASSWORD)) { ?>
					<div class="box">
						<div class="bank-detail">
							<div class="clearfix head">
								<img src="images/ktb.png" width="80" class="bank-logo"/>
								<div class="bank-name">ธนาคารกรุงไทย</div>
							</div>
							<div class="content">
								<div class="load do-load" data-url="login-ktb.php?key=<?php echo $xkey?>">กดเพื่อโหลด</div>
							</div>
						</div>
					</div>
					<?php } elseif (!empty($T_USERNAME) && !empty($T_PASSWORD) && !empty($T_ACCOUNT_NAME)) { ?>
					<div class="box">
						<div class="bank-detail">
							<div class="clearfix head">
								<img src="images/ktb.png" width="80" class="bank-logo"/>
								<div class="bank-name">ธนาคารกรุงไทย</div>
							</div>
							<div class="content">
								<div class="load do-load" data-url="login-ktb-captcha.php?key=<?php echo $xkey?>">กดเพื่อโหลด CAPTCHA</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>