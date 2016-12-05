<body>
<div class="wrapper">
	<div class="top">
		<a href="../?p=home" id="home">Home</a><a href="../forum" id="forum">Forum</a><a href="../?p=htc" id="htc">How To Connect</a><a href="../?p=players" id="players">Online Players</a><?php if(isset($_SESSION['username'])) { echo '<a href="../logout.php" id="logout">Logout</a>'; } else {?><a href="../?p=register" id="register">Register</a><?php }
		if(isset($_SESSION['username']))
		{
		$sql = "SELECT * FROM account WHERE username='$_SESSION[username]'";
				$result = $acc_resume->query($sql);
				if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {
					if($row['web_admin'] > "0")
					{
						echo '<a href="../admin/" id="admin">Admin panel</a>';
					}
				}
			}
		}
			?>
	</div>