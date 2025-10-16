<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<style>
    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serifi;
    }
</style>
<body>
<!--<h1>

        <?php
$llibre = "Luna de pluton";
$llegit = false;
if ($llegit){
    $missatge = "Has llegit $llibre";
}
else{
    $missatge = "No has llegit $llibre";
}
?>
        <?= $missatge; ?>

    </h1>-->




<!--
<?php
$llibres = [
    "Llibre1",
    "Llibre2",
    "Llibre3"
];
?>
<h1>Llbres recomanats</h1>
<ul>
    <?php foreach ($llibres as $llibre) : ?>
        <li><?= $llibre ?>®</li>
    <?php endforeach; ?>
</ul>
-->




<ul>
    <?php foreach ($filtrat($llibres, 'autor', 'Autor2') as $llibre) : ?>
        <a href="<?= $llibre['enllaç'] ?>"> <!-- podria haver text, o ho podriem passar abaix del "li" i posar un text perque cliquin -->
            <li><?= $llibre['nom'] . ", " .  $llibre['autor'] . " (" . $llibre['any'] . ")";?></li>
        </a>

    <?php endforeach; ?>
</ul>

<!--
<p>
    <?= filtrarAutor(); ?>
</p>
-->


</body>
</html>


