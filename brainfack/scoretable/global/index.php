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

				
				$base=mysqli_connect('localhost','root','','score'); // połączenie z bazą danych, NIE ZAPOMINJ USTAWIĆ WŁASNYCH DANYCH!
			
				$query="SELECT * FROM best ORDER BY wynik DESC "; // wysłanie zapytania do bazy danych

				$result=mysqli_query($base,$query); // ustalenie ilości wyszukanych obiektów
				$obAmount=mysqli_num_rows($result); // wyswietlenie ilości wyszukanych obiektów

				$liczba_wierszy = 10;
				$liczba_kolumn = 1;
				
				echo '<table id="tabela">';
				echo '<tr>';
					echo '<td class="id">ID</td> <td class="id">Nick</td> <td class="id">Single</td> <td class="id">Multi</td>';
				echo '</tr>';
				
				for ($i = 1; $i <= $obAmount; $i++) 
				{
				    $row=mysqli_fetch_assoc($result);

				    echo '<tr>';
				    echo "<td class='id'>$i</td>";    
				    for ($j = 1; $j <= $liczba_kolumn; $j++) {    
				        echo '<td>';
				        echo $row['nick'];
				        echo '</td>';

				        echo '<td>';
				        echo $row['wynik'];
				        echo '</td>';

				        echo '<td>';
				        echo $row['multi'];
				        echo '</td>';
				    }
				    echo "</tr>";    
				}
				echo '</table>';

			mysqli_close($base); // zamknięcie połączenia
		?>
	</body>
</html>