<?php
        session_start();
        include('diasinfo.php');
        include('header.php');
        if(isset($_SESSION['login']) and ($_SESSION['login']!=''))
        {read_cart();        
        include('livraison.php');}
        else {echo "Aucune session n'est ouvert";}
 

       // include('footer.php');
?>
