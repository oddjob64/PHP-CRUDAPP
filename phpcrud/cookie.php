<?php  

$cookie_name = "user";
$cookie_value = "Batman";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>

<!DOCTYPE html>
<html>
<body>

	<?php  

	if (!isset($_COOKIE[$cookie_name])) {
		echo "Cookie named '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name];
	}

	?>

</body>
</html>