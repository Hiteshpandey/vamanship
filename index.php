<!DOCTYPE html>
<html>
<head>
	<title>Test Vamanship</title>
</head>
<body>
	<form method="POST" action="checkfolder.php">
		<input value="" id="check" type="text" name="urlvalue">
		<input type="submit" value="Submit" id="checkout">
	</form>
	<script type="text/javascript">
		$('#checkout').on('click',function(e){
			let url = $('#check').val();
			if (url == "") {
				// e.preventDefault();
				return false;
				alert("please enter a proper url");
			}
		});
	</script>
</body>
</html>