<?php ob_start() ?>

    <h1> formulaire d'aide</h1>
<?php
    $content = ob_get_clean();
    require('layout.php');
    $titre = 'Pro';
?>
