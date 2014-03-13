<?php
        session_start();
        include('header.php');
?>

<table>
        <tr>
                <td><a href="admin2.php">Retour</a></td>
                <td><a href="deconnexion.php">Déconnexion admin</a></td>
        </tr>

</table>
<form action="gestion_prd.php" method="post">
        <table>
         <tr><td><label for="cat">Catégorie</label></td><td>
                                <select name="cat" onchange='submit()'>
                                        <option value="0">Choisissez une catégorie</option>
                                        <option value="1">Ordinateur portable</option>
                                        <option value="2">Ordinateur de bureau</option>
                                        <option value="3">Mac</option>
                                        <option value="4">Tablette numérique</option>
                                        <option value="5">Smartphone</option>
                                        <option value="6">Logiciel</option>
                                        <option value="7">Accessoire ou consomable</option>
                                        <option value="8">Service</option>
                                </select>
                        </td></tr>
        </table>
<form>
<?
        include('diasinfo.php');
        if (isset($_POST[cat]) and ($_POST[cat] !="")){
                $cat_id=$_POST[cat];}   
        else { $cat_id='1';}
        adm_get_list_prd($cat_id);
?>
