<html lang="fr"><head><title>CI/CD php</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Git auto-pull</h1>
		<p>Ce site est mis à jour autmatiquement depuis la branche master par un Webhook (/hook.php) qui effectue juste `git pull`.
		À utiliser en cas de problème, la mise à jour manuelle écrase tout (`git fetch --all` et `git reset --hard origin/master`</p>
		<a href="/fetch.php">Mettre à jour manuellement</a>
		<footer>
			Liste des commits :<br>
		<?php
		   echo `git log --pretty="<a href='https://github.com/BdEINSALyon/site-dev/commit/%H'>%s</a>"`;
		?>
		</footer>
	</body>
</html>
