<?php ob_start() ?>

<?= " la page d'accueil "?>
    <div class="blog-post">
        <h2 class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
        <p>Cum sociis natoque penatibus et magnis, nascetur ri
         Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
    </div>


<?php
    $content = ob_get_clean();
    require('layout.php');
    $titre = 'Accueil';
?>

