<?php
        include('diasinfo.php');
        edit_qte_cart($_POST[pan_id],$_POST[pan_qte]);
        header('location:panier.php');


?>
