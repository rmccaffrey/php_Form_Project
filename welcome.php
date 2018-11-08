<html>
<body>

<pre>
	<?php
		print_r($_POST);
	?>
</pre>
<br>
<pre>
	<?php
		$name = $_POST('name');
		$password = $_POST('password');

		echo $name . ": " . $password;

	?>
</pre>

</body>
</html>