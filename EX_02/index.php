<!DOCTYPE html>
<html>
    <head>
        <title>Site routing</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/vitrine.css">
    </head>
    <?php
    include('header.php');
    ?>
      
    <body>
        <?php
        if($_GET['page'] == 'accueil'){
            include('vitrine-accueil.html');
        }
        elseif($_GET['page'] == 'programme'){
            include('vitrine-programme.html');
        }
        elseif($_GET['page'] == 'contacts'){
            include('vitrine-contacts.html');
        }
        elseif($_GET['page'] == 'contact-form'){
            include('contact-form.php');
        }
        else{
            include('404.php');
        }
    //Footer//
    include('footer.php');
        ?>
    </body>
</html>