<html>
<head>
</head>
<body>
<?php
	$name = 'Janusz';
	echo "Imię: $name<br>";
	echo 'Imię: $name<br>';
	
	$surname = 'Nowak';
	echo "Twoje dane: $name $surname<hr>";
//konkatenacja .

	echo "Mam na imię: ".$name.'<br>Moje nazwisko: '.$surname.'<hr>';
	echo 'Masz na imię: ',$name;
	
//heredoc
	echo <<< ETYKIETA
		<hr>heredoc<br>
		mam na imie: $name<br>
		Moje nazwisko: $surname<hr>
ETYKIETA;

	$text = <<< E
		<hr>heredoc2<br>
		mam na imie: $name<br>
		Moje nazwisko: $surname<hr>
E;
	echo $text;
	
//nowdoc
	$text = <<< 'E'
		<hr>heredoc2<br>
		mam na imie: $name<br>
		Moje nazwisko: $surname<hr>
E;
	echo $text;
?>
</body>
</html>