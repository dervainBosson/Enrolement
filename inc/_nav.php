
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/index.php">Challenge</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <?= nav_item('/index.php', 'Accueil'); ?>
            <?= nav_item('/pages/ajouter.php', 'Ajouter'); ?>
            <?= nav_item('/pages/liste.php', 'Liste'); ?>
        </ul>
    </div>
</nav>
