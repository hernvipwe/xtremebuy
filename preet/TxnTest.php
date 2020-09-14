<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kufam">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gayathri">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend+Peta">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Solway">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script>

</script>
<style>
body{
	padding:0;
}
h1{
	text-align:center;
	font-family: 'Gayathri';
}
	.container{
		color:white;
		position: relative;
		width:100%;
		padding-left: 20%;
	}
	 p{
		font-family: 'Kufam';
		margin: 10px 5px 2px 5px;
		position: relative;
		top: 33px;
		width: fit-content;
		color: black;
	}
	.box{
		width:30%;
		height: 30px;
		position: relative;
		left: 20%;
		border: 1px solid #273c75;
		border-radius:10px;
		letter-spacing: 3px;
		outline:none;
		font-weight:500;
		
	}
	.box:active{
		border: 1px solid #10ac84;
	}
	.amount{
		width: 10%;
	}
	.checkout{
		width: 15%;
		font-family:'Solway';
		font-size: 30px;
		font-weight:bold;
		color:white;
		position: relative;
		left: 28%;
		margin-top: 30px;
		border-radius: 5px;
		background:none;
		padding: 5px auto;
		background:#273c75;
		letter-spacing:3px;

	}

  </style>
<body>
	<h1>Merchant Check Out Page</h1>
	<form method="post" action="pgRedirect.php">
	<div class="container">
					<p>ORDER_ID</p>
					<input id="ORDER ID" class="box" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
						<p><label>Name </label></p>
					<input id="name" class = "box" name="name" autocomplete="off">
					<p><label>CHARACTER ID </label></p>
					<input id="CHARACTER_ID" class = "box" tabindex="4" maxlength="20" size="20" name="CUST_ID" autocomplete="off" required>
					<p>Mobile num</p>
					<input id="contact" class="box" tabindex="2" maxlength="10" size="10" name="CONTACT" autocomplete="off"></p>
					<p><label>Txn Amount</label></p>
					<input title="TXN AMOUNT" class="box amount" tabindex="10" type="text" name="TXN_AMOUNT" value='<?php 
					$price = $_POST['btntotal'];
					echo($price) ?>' readonly><br>
					<input value="PAY" class="checkout" type="submit">
					</div>
	</form>
</body>
</html>