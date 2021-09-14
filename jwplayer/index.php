<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="./resources/css/style.css">
	<script type="text/javascript" src="./resources/js/jwplayer.js"></script>
</head>
<body>
	<?php
	if ( !isset( $_GET['id'] ) || !$_GET['id'] ) {
		$log = array(
			'error' => true,
			'message' => 'Require parameter GET named "id" which value is id of Google Drive file.'
		);
		exit( json_encode( $log ) );
	}
	$id = $_GET['id'];
	$has = $_GET['#'];
	$source = sprintf( '%s', $id );
	$test = sprintf( '%s', $has );
	?>
	<div><?php echo $test; ?></div>
	
	<div id="player-container"></div>
	<script type="text/JavaScript">
	jwplayer("player-container").setup({
		playlist: [{
			file: "<?php echo $source; ?>",
		}],
	});
	</script>
</body>
</html>
