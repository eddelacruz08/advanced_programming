<!DOCTYPE html>
<html>
<head>
	<title>Assignment Two</title>
</head>
<body>
	<?php
		class User{
			public $name;
			public $username;
			public $email;

			function addFriend($name){
				echo $name. " added a friend.";
			}
			function postStatus($name){
				echo $name. " posted a status.";
			}
		}
		$example = new User();
		echo $example->addFriend("Edmon");
		echo "<br><br>";
		echo $example->postStatus("Edmon");
	?>
</body>
</html>