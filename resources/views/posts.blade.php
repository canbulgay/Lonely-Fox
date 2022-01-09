<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">


<body>
<?php foreach ($posts as $post) {
    # code...
} ?>
<article>
    <?= $post; ?>
</article>    
<?php endforeach; ?>
</body>