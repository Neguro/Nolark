<footer>
    <p>&copy;2020 Nolark - Créé par <a href="mailto:laudethibault_pro@outlook.fr">Team-Pomodoro</a> - Page chargée le <?php
        setlocale(LC_ALL, 'fr-FR.utf8', 'fra');
        date_default_timezone_set('Europe/Paris');
        echo strftime("%A %d %B");
        ?> à <?php echo strftime("%Hh%M"); ?><p>
</footer>