<html lang="en">
<head><title>Gitsync</title>
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
    <h1 class="display-4">Ghetto CI/CD</h1>
    <div class="alert alert-info" role="alert">
        <p class="lead">This website automatically updated itself with <code>git pull</code> if you set up a Webhook pointing
            to <mark id="webhook"></mark>.</p>
	    <p>It will pull the <strong><?php echo getenv('BRANCH'); ?></strong> branch</p>
        <p class="">If for any reason (like being unable to setup webhooks), your code does not appear here, you can also manually update,
        as if running</p>
        <pre><code>git fetch --all
git reset --hard origin/master</code></pre>

        <hr>
        <a class="btn btn-outline-success" href="../">Go back</a>
        <a class="btn btn-outline-primary" href="fetch.php"><i class="fas fa-arrow-alt-circle-up"></i> Manual update</a>
        <a class="btn btn-primary" href="<?php echo getenv('GITHUB_URL');?>"><i class="fab fa-github"></i> Repository</a>
    </div>
    <div class="alert alert-warning">
        <p>You will be redirected twice during the process. When finished, you should see new commits appear below</p>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="lead">Commits</p>
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
<script>
    (function() {
   var webhook = document.getElementById("webhook");
   webhook.innerText = document.location.href + "hook.php";

})();
</script>

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
