<!DOCTYPE html>

<html>
<head>

    <?php include_once 'includes/head.php' ?>
    <?php include_once '_scripts/new_spawn.php' ?>
    <title><?= ucfirst($page) ?> - Site Spawn</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/styles/css/home.css"/>

</head>

<body>
<div class="container">

<?php include_once 'includes/header.php' ?>

<div class="text-center" style="margin-top: 30px; margin-bottom: 15px;">



    <?php

        if(isset($_POST['spawn'])){

            new_spawn($db);
        }


    ?>

    <form action="#" method='POST'>
        Veuillez lancer le tirage du Spawn<br><br>
        <button class="btn btn-primary" name=" spawn" type='submit'>Tirage</button>
    </form>


    <a href="index.php?page=home"><button class="btn btn-secondary" name=" spawn" type='submit'>RESET</button></a>


</div>

</div>

<?php include_once 'includes/footer.php' ?>

<script src="assets/js/app.js"></script>


</body>


</html>