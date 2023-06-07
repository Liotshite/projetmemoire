<?php ob_start() ?>


<?= " la page des offres d'emplois "?>

<?php
    $content = ob_get_clean();
    require('layout.php');
    $titre = 'Emplois';
?>