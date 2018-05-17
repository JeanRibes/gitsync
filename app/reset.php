<html><head><meta http-equiv="refresh" content="0; URL=./"></head>
<body>
<?php
$branch = getenv('BRANCH');
echo `git reset --hard origin/$branch`;
?>
</body></html>
