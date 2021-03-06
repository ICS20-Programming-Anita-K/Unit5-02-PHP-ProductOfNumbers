<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Product of Numbers">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <title>Product of Numbers</title>
  </head>
  <body>
    <script src="./js/script.js"></script>
    <?php
      echo "<h1>Product of Numbers</h1>";
    ?>
		<?php
      echo "<h3>This program will calculate and display the product of two positive numbers:</h3>";
    ?>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
					<form action="./results.php" method="post" target="display-results">								
						<label for="num-one">Enter a positive number:</label>
						<input type="number" step="1" min="0" name="num-one"><br><br>		
            <label for="num-two">Enter another positive number:</label>
						<input type="number" step="1" min="0" name="num-two"><br><br>		
						
						<input type="submit" value="Calculate Product">
					</form>
				</td>
				<td valign="top" align="left">
					<img src="./images/angrylittleguy.PNG" alt="Guy" width="100%">
				</td>
			</tr>
		</table>	
		<!-- Create a space where the user information will be displayed -->
		<iframe id="display-results" name="display-results">
    	</iframe>
  </body>
</html>