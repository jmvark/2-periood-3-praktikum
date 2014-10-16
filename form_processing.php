<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>2-periood-3-praktikum</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	$username = $_POST["username"];
	$password = $_POST["password"];

?>
	<pre>
		<?php
		print_r($_POST);

echo "Tere ".$username.", Teie parool on ".$password."";



		?>

	</pre>

<?php if ($username = $_POST["username"] & $password = $_POST["password"]) {
	echo "Tere {$username}! Teie parool on {$password}";} 
		else {echo "Kasutajanimi või parool on puudu.";}
?>
</body>

</html>