<html>

	<head>
		
		<title>Kalkulator</title>
		<meta charset = "UTF-8">
		<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"> </script>
		
		<style>
			div {
				backgroung-color: #eec6a5;
				margin: 2%;
				border: 0.1em solid black;
				padding 5%;
				text-align: center;
			}
			
			div div {
				background-color: #eec6a5;
				margin: auto;
				border: 0.1em solid black;
				padding 5%;
				text-align: center;
				width: 20em;
				height: 5em;
			}
		</style>
		
	</head>
	
	<body>
	
		<div class = "container-fluid">
		
		
			<form method="post" action="">
			
			
			<input type = "text" name= "pb" id = "pb">
			<input type = "text" name = "op" id = "op">
			<input type = "text" name = "db" id = "db">
			<input type="submit" value="Izracunaj">
			
			
			</form>
		
			
			<?php
			
				$a = $_POST['pb'];
				$b = $_POST['db'];
				
				function jesubr ($a, $b) {
					if (is_numeric ($a) && is_numeric ($b) ) {
						return true;
					}
				}
				
				 /*  STA NE VALJA OVDJE??
				function izr ($a, $b) {
					switch ($o) {
							
						case '+' :
						echo "$a"+"$b";
						break;
							
							
						case '-' :
						echo "$a"-"$b";
						break;
							
							
						case '*' :
						echo "$a"*"$b";
						break;
							
							
						case '/' :
						echo "$a"/"$b";
						break;
						
					}
				} 
				*/
					
					function izr ($a, $b) {
					if ($_POST['op'] == '+') {
						echo "$a + $b = " . ("$a"+"$b");
					}
					else if ($_POST['op'] == '-') {
						echo "$a - $b = " . ("$a"-"$b");
					}
					else if ($_POST['op'] == '*') {
						echo "$a * $b = " . ("$a"*"$b");
					}
					else if ($_POST['op'] == '/') {
						echo "$a / $b = " . ("$a"/"$b");
					} 
				}
				
				
					
			?>
			
			<div>
			
				<?php
				
					if (jesubr ($_POST['pb'],$_POST['db'])) {
						izr($_POST['pb'],$_POST['db']); 
					}
				
				?>
			
			</div>
			
			<div>
			
				<?php
				
					if (jesubr ($_POST['pb'],$_POST['db']) == false) {
						echo "Greska";
					}
					
					?>
			
			</div>
			
			<div>
			
				
			
			</div>
		
		</div>
	
	</body>

</html>
