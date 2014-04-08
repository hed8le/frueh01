<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		class Person {
			public $b;
			public function nameAusgeben($a) {
				if(is_string($a)){
					echo "Es wurde der Name $a übergeben.";
				} else {
					echo "Kein Name.";
				}
			}
			public static function alter(){
				$e = "12 Jahre";
				return $e;
			}
		}
		$c = new Person();
		$c->nameAusgeben("Joe Smith");
		$d = Person::alter();
		echo "<br>Alter: $d";
	?>

</body>

</html>