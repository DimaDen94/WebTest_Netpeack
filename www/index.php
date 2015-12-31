
<!DOCTYPE html>
<html>
<header>
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	<title>PHP</title>
</header>
<body>
	<form name = "geometry" action="php/index.php" method="post">
		<table  cellspacing="0" cellpadding="4">
			<tr> 		
				<td align="right" >
					<p><img src="images/img.png" id="img" alt="giometry"></p>
					<label class="txt">A:</label>
					<input type="number" name="a" class="inp"></input>
				</td>
			</tr>	
			<tr> 		
				<td align="right" >
					<label class="txt">B:</label>
					<input type="number" name="b" class="inp"id="b"></input>
				</td>
			</tr>
			<tr> 
				<td align="right">
					<label class="txt">C:</label>
					<input type="number" name="c" class="inp"></input>
				</td>
			</tr>
			<tr> 
			<td align="right"><input type="submit" name="submit" value="submit" id="submit"></input></td>
			</tr>	 
		</table>
	</form>
</body>
</html>