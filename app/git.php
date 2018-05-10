<html lang="fr">
<head><title>Gestion Git php</title>
    <meta charset="utf-8">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/fontawesome-all.css">
</head>
<body>
<div class="container">
    <h1 class="display-4">CI/CD ghetto</h1>
    <div class="alert alert-info" role="alert">
        <p class="lead">Ce site est mis à jour autmatiquement depuis la branche master par un Webhook GitHub, qui
            effectue juste <code>git pull</code>.</p>
        <p class="">À utiliser en cas de problème, la mise à jour manuelle force les changements depuis le serveur, avec
            les commandes suivantes :</p>
        <pre><code>git fetch --all
git reset --hard origin/master</code></pre>

        <hr>
        <a class="btn btn-outline-primary" href="/fetch.php"><i class="fas fa-arrow-alt-circle-up"></i> Mettre à jour
            manuellement</a>
    </div>
    <div class="alert alert-warning">
        <p>Vous serez redirigés deux fois pour effectuer les deux commandes de la mise à jour, et cela vous ramènera sur cette page</p>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="lead">Liste des commits</p>
            <ul class="list-group">
<?php 
$repo_url = getenv('GITHUB_URL');
echo `git log --pretty="<li class='list-group-item'><a
                    href='$repo_url/commit/%H'>%h</a> %s
                <small class="text-muted">%cr</small>
                <p><span class='badge badge-secondary'>%cn</span> %b %N</p></li>"
                `; ?>
            </ul>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script><!--
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>-->
</body>
</html>
