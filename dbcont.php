
<!DOCTYPE>
<html>
<head>
	<title>Alter username</title>
	<meta http-equiv="Content-TYPE" content="text/html"; charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<style type="text/css">

		table{
			color: white;
			background: #2D3238;
			box-shadow: 5px 5px 5px 0 rgba(0,0,0,0.60);
			padding: 30px;

		}

		.submit_delete{

	        background: #2196F3;
	        color: #fff;
	        font-size: 22px;
			font-family: 'Roboto Condensed',sans-serif;
			cursor: pointer;
			border-radius: 5px;
	        border: none;

		}
		td{
			font-size: 22px;
			font-family: 'Roboto Condensed',sans-serif;
		}
		.imgstyle{
	        margin-left: 25%;
        }
        .text_details{
        	margin-left: 50%;
        	font-size: 22px;
			font-family: 'Roboto Condensed',sans-serif;
        }

	</style>
</head>

<body>
	<form action="update.php" method="post">
	<table align="center">
	<tr>
		<td><img src="\HTML PROJECT\p22.png" alt="" class="imgstyle"></td>
	</tr>
	<tr>
		<td> Please enter the previous / existing email:</td>
		<td><input type="text" name="emails" class="input_details"></td>
	</tr>
	<tr>
		<td>Enter the correct password with proper characters:</td>
		<td><input type="password" name="passs"></td>
	</tr>
	<tr>
		<td>Enter new email that can be remembered:</td>
		<td><input type="text" name="newusername"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input type="submit" name="delete" value="DELETE" class="submit_delete">
		<input type="submit" name="update" value="UPDATE" class="submit_delete">
		</td>

	</tr>	
	</table>
	</form>
</body>
</html>