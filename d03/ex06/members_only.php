<?PHP

	if (!isset($_SERVER["PHP_AUTH_USER"]))
	{
		header("WWW-Authenticate: Basic Realm=\"My Realm\"");
		header('HTTP/1.0 401 Unauthorized');
	}
	else
	{
		$user = $_SERVER["PHP_AUTH_USER"];
		$pw = $_SERVER["PHP_AUTH_PW"];
		if ($user == "zaz" && $pw == "ilovemylittleponey")
		{
			$base64 = base64_encode(file_get_contents("../img/42.png"));
			$img = "<img src=\"data:image/png;base64, " . $base64 . "\">";
			echo "<html><body>\n";
			echo "Hello Zaz\n";
			echo $img."\n";
			echo "</body></html>\n";
		}
	}

?>
