<?php
        session_start();
        include('diasinfo.php');
        add_cart($_POST['prd'],'1');
        header('location:panier.php');// pour ouvrir panier.php


?>
