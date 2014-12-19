<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP to JS</title>
</head>
<body>
	<?php
$someVar = 1;
echo $someVar;
?>
	<script type="text/javascript">
    var javaScriptVar = "<?php echo $someVar; ?>";
	document.getElementById('var').inner= javaScriptVar;
	</script>
	<div id="var">
		
	</div>
</body>
</html>