<html>
	<head>
		<title> Login </title>
		<style>

        	input[type = text]{
        		background: #f2f2f2;
        		border: 0;
        		padding: 10px;
        		width: 220px;
        		line-height: 20px;
        	}

        	input[type = submit]{
        		background: blue;
        		border: 0;
        		padding: 10px;
        		width: 220px;
        	    line-height: 20px;
        	    color: #f2f2f2;
        	}

            form{ margin-top:220px; 
            	 margin-left:530px; 
            	 background: #FFFFFF;
            	 max-width: 240px;
  				 padding: 45px;}

		 </style>     
	</head>

	<body style="background:blue;">

		<form action="check.php" method="post" >
	
			<table>
			        <tr>
						<td style="color:#8B8682; font-family:'Century Gothic'"> Logue para iniciar a sessão </td>
					</tr>
				
					<tr>
						<td> <br><input type="text" name="user" placeholder="Username"> </td>
					</tr>

					<tr>
						<td><input type="text" name="senha" placeholder="Password" > </td>
					</tr>

					<tr>
						<td><br><input type="submit" value="Login" > </td>
					</tr>

					
			</table>
		</form>	
	</body>
</html>