<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>BRAINFACK - Web Scoretable</title>
	<link href="../../css/scoretable-css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php
			
			echo '<div class="nagl-2"';
				echo '<h5>Search result || <a href="../">Go back to Main Page!</a> <br /><br /></h5>';
			echo '</div>';

			//$_POST['phrase']=trim($_POST['phrase']); // usunięcie niepotrzebnych białych znaków

			if(empty($_POST['phrase']))// jeśli nie, to wyświetl komunikat i zakończ działanie skryptu
				die('Formularz wypełniony niepoprawnie! Nie można wyświetlić wyników wyszukiwania!'); // jeśli jednak dane są wpisane niepoprawnie
			else
			{
				$base=mysqli_connect('localhost','root','','score'); // połączenie z bazą danych, NIE ZAPOMINJ USTAWIĆ WŁASNYCH DANYCH!
			
				$query="Select * From best Where user Like '%{$_POST['phrase']}%'"; // wysłanie zapytania do bazy danych

				$result=mysqli_query($base,$query); // ustalenie ilości wyszukanych obiektów
				$obAmount=mysqli_num_rows($result); // wyswietlenie ilości wyszukanych obiektów
				
				for($x=0; $x<$obAmount; $x++)
				{
					$row=mysqli_fetch_assoc($result);
					
					echo 'Your steamID: ';
					echo $row['user'];
					echo'<br />';

					echo 'Your nick: ';
					echo $row['nick'];
					echo'<br />';

					echo 'Your database ID: ';
					echo $row['id'];
					echo'<br /> <br />';

					echo 'Singleplayer Best Score';
					echo ': ';

					echo $row['wynik'];
					echo'<br />';

					echo 'Mutiplayer Best Score: ';
					echo $row['multi'];
					echo '<br />';
				}
			}
			mysqli_close($base); // zamknięcie połączenia
			
	?>

</body>