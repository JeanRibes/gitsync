<html land="fr"><head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Bonjour</h1>
		<p>Ce site est un test qui devrait pull automatiquement depuis github</p>
		<a href="/fetch.php">Mettre à jour manuellement</a>
		<footer>
		<?php
		   echo `git log --pretty="<a href='https://github.com/BdEINSALyon/site-dev/commit/%H'>%s</a>"|head -n 1`;
		?>
		</footer>
	</body>
</html>
