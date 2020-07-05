<!DOCTYPE html>
<html>
    <head>
        <title>mini-site-routing</title>
        <meta charset="utf-8">
    </head>
    <body>
        <nav class="navigation">
            <ul>
                <li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Accueil</a></li>
                <li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page 1</a></li>
                <li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page 2</a></li>
            </ul>
        </nav>
        <h1>Titre principal</h1>
        <?php
        //Si page 1 affiche Accueil//
        echo (($_GET["page"]=="1") ? ("Accueil !") : null);
        //Si page 2 affiche Page 2//
        echo (($_GET["page"]=="2") ? ("Page 2") : null);
        //Si page 3 affiche page 3//
        echo (($_GET["page"]=="3") ? ("Page 3") : null);
        ?>
    </body>
</html>