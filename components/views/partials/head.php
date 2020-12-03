<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?php foreach($stylesheet as $style){ ?>
        <link rel="stylesheet" href="<?= $style ?>">
    <?php } ?>
</head>
<body>