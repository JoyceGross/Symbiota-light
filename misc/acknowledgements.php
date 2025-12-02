<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
	<head>
		<title><?php echo $DEFAULT_TITLE; ?> Data Usage Guidelines</title>
		<?php
		$activateJQuery = true;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = true;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<!-- This is inner text! -->
		<div id="innertext">
			<h1>Acknowledgements</h1><br />

			<h2>Taxonomy</h2>

			<div style="margin:10px">
				<div style="font-weight:bold;margin-top:10px;">
				</div>
				<div style="margin:10px;">
                                We would like to acknowledge the following individuals and institutions for their contributions to the Pteridophytes Collections data Portal (Pteridoportal):
				</div>
				<div style="margin:10px;">
                                &#8226; <b>Michael Hassler</b> The pteridoportal taxonomic thesaurus is based on the Checklist of Ferns and Lycophytes of the World
                                (<a href=https://worldplants.webarchiv.kit.edu/ferns/>https://worldplants.webarchiv.kit.edu/ferns/</a>),
                                generously provided by Michael Hassler.
				</div>

			</div>
			<div>
			</div>

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
