<?php
// Generate csrf token
require_once 'Includes/gettoken.php';
require_once "config/Database.php";
// for dropdown

$db = new Database();
$dbins = $db->connect();

$query = "SELECT id,fname FROM folds ORDER BY id ASC";
$stmt = $dbins->prepare($query);
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Vamanship</title>
	<meta charset="utf-8" name="csrf_token" content="<?php echo generateToken(); ?>">
	<style type="text/css">


		.center{
			text-align: center;
			vertical-align: middle;
			margin-top:10%;
		html,body{
			width: 100%;height: 100%;overflow: hidden;
		}
		.center{
			text-align: center;
			vertical-align: middle;
			margin-top:22%;
		}
		.emsize{
			font-size: 22px;
		}
		div.top-50{
			margin-top: 30px;
		}
		#lists{
			margin:0 25px;
		}
		p.error {
		    text-align: center;
		    color: red;
		    padding: 10px;
		    text-transform: capitalize;
		}
		.cls{
			color: red;
		}
	</style>
</head>
<body>
	<form method="POST" action="checkfolder.php">
		<div class="center">
			<input value="" id="check" type="text" name="urlvalue" placeholder="Enter your folder path">
			<input type="submit" value="Submit" id="checkout">
			<input type="hidden" name="csrf_token" value="<?php echo generateToken(); ?>">
			<p class="emsize"><em>OR</em></p>
			<h3 class="show"><a href="#." onclick="showtree();"><span>Show Tree For</span></a><select id="lists">
			<h3><a href="#." onclick="showtree();"><span>Show Tree For</span></a><select id="lists">
			<?php	
				while ($result = $stmt->fetch()) {
						echo "<option value=".$result['id'].">".$result['fname']."</option>";
					}
				$dbins = NULL;
			?>
			</select> <span><a class="reload" href="">reload<a></span></h3>
			?>
			</select></h3>
		</div>
	</form>

	<div class="top-30">
		<div id="getTree"></div>
	</div>
	<script type="text/javascript" src="scripts/jq.js"></script>
	<script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>