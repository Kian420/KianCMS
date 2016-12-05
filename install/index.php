<html>
<head>
	<title>
		KianCMS
	</title>
	<link rel="stylesheet" type="text/css" href="../main.css" />
</head>
<body>
<h1 style="text-align:center;color:#fff;">KIANCMS INSTALLATION</h1>
				<div class="post" style="width:1000px;margin:0px auto;">
					<?php
						if(isset($_GET['done']))
						{
							echo "<font color=green>Successfully installed, please delete the install directory, or rename it.</font>";
						}
					?>
					<form method="post" action="install.php">
					<input type="text" placeholder="Database Server IP or DNS" autocomplete="off" name="dbhost" id="installer" required>
					<input type="text" placeholder="Database Username" autocomplete="off" name="dbusername" id="installer" required>
					<input type="password" placeholder="Database Password" autocomplete="off" name="dbpassword" id="installer">
					<input type="text" placeholder="Database name (CMS)" autocomplete="off" name="dbname" id="installer" required>
					<input type="text" placeholder="Characters database" autocomplete="off" name="dbnamec" id="installer" required>
					<input type="text" placeholder="Auth database" autocomplete="off" name="dbnamea" id="installer" required>
					<input type="text" placeholder="Realm server IP (127.0.0.1)" autocomplete="off" name="sip" id="installer" required>
					<input type="text" placeholder="Realm server port (8085)" autocomplete="off" name="sport" id="installer" required>
					<input type="text" placeholder="Servername (Molten-WoW)" autocomplete="off" name="sname" id="installer" required>
					<input type="text" placeholder="Realmlist (127.0.0.1 or logon.molten-wow.com)" autocomplete="off" name="srealmlist" id="installer" required>
					<input type="text" placeholder="Server description" autocomplete="off" name="description" id="installer" required>
					<input type="submit" value="INSTALL">
				</form>
				</div>
</body>
</html>