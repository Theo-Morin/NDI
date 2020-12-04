<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <?php foreach($stylesheet as $style){ ?>
        <link rel="stylesheet" href="<?= $style ?>">
    <?php } ?>
</head>
<body onload="closeLoader()">
<div id="loader">
    <h1>Surfrider</h1>
</div>
<?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
    <div class="container mb-3">
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error'] ?>
        </div>
    </div>
<?php } $_SESSION['error'] = ""; ?>