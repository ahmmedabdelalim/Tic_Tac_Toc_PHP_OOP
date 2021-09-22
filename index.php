<?php

require_once('class/class.php');
 
// start session if exist then make instance from class
session_start();

if (!isset($_SESSION['game']['tic']))
	$_SESSION['game']['tic'] = new tic();

$new = new tic();
$new->game();


?>
<html>

<head>
	<title>Tic_Tac_Toe</title>
	<style>
		body {

			text-align: center;
		}

		#ip {
			border-radius: 50px;
			border: 2px solid black;
			padding: 50px;
			width: 200px;
			height: 15px;
			margin-bottom: 20px;
			margin-top: 20px;
			margin-right: 20px;
			font-size: 30px;
		}

		#go {

			width: 200px;
			height: 15px;
			margin-top: 20px;
			padding: 50px;
			border-radius: 50px;
		}
	</style>
</head>

<body>

	<div style="margin:0 auto;width:75%;text-align:center;">
		<form name="tic" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<p>Player Take X && Computer Take O</p>
			<?php


			for ($i = 0; $i <= 8; $i++) {

				printf('<input type = "text" id = "ip" name = "box%s" value = "%s">', $i, $new->box[$i]);
				if ($i == 2 || $i == 5 || $i == 8) {
					print("<br>");
				}
			}
			if ($new->winner == 'n') {
				print('<input type = "submit" name = "gobtn" value = "Next Move" id = "go">');
			} else {
				print('<input type = "button" name = "newgamebtn" value = "Play Again" id = "go" onclick = "window.location.href=\'index.php\'">');
			}



			?>
		</form>
	</div>
</body>

</html>