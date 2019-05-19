
<!DOCTYPE html>

<html>
<head>
    <?php include_once 'includes/head.php' ?>
    <title><?= ucfirst($page) ?> - Blog Sneakers</title>
    <link rel="stylesheet" href="../assets/styles/css/compass.css">

</head>

<body>
<div class="container">

<?php include_once 'includes/header.php' ?>


    <?php

    foreach($allCategories as $index => $category){ ?>

        <a class="p-2 text-muted" href="#"><?= $category['name']?></a>

    <?php } ?>


    <h1 class="display-4 font-italic"><?= $lastArticle['title']?></h1>
    <p class="lead my-3"><?= $lastArticle['sentence']?></p>
    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>

    <strong class="d-inline-block mb-2 text-primary"><?= $lastArticleLeft['category']?></strong>
    <h3 class="mb-0"><?= $lastArticleLeft['title']?></h3>
    </h3>

    <?php

    foreach($allArticles as $index => $article){ ?>
        <div class="blog-post">
            <h2 class="blog-post-title"><?= $article['title']?></h2>
            <p class="blog-post-meta"><?= date_format(date_create($article['date']),"d/m/Y H:i")?> par <a href="#"><?= $article['firstname'] . ' ' . $article['lastname']?></a></p>

            <p><?= $article['content']?></p>
        </div><!-- /.blog-post -->

    <?php } ?>



    </main><!-- /.container -->

</div>

<?php include_once 'includes/footer.php' ?>


</body>


</html>