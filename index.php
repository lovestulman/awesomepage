<?php
	if (isset($_GET['password'])) {
		if (md5($_GET['password']) == "cf981a8a90db57ac2e8ef319befad377") {
			echo "Access granted.";
		}
	}
	echo $date;
?>

<!-- This is totally not a flag: CTF{totall5_n0t_4_Fl4g} -->
<html>
	<html>
	</html>

	<H1>Welcome to the secret website. Please enter your password:</h1>
	<body background="#ubuntu">
	<form name="login">
		<input name="password" type="password" />
	</form>

	<p>Source distributed by github. <a href="https://github.com/lovestulman/awesomepage">Awesome page</a></p>
	</body>
</html>

