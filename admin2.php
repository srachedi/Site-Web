<?php
        session_start();
        include('diasinfo.php');
        include('header.php');
?>     
<table>
        <tr>
                <td><a href="deconnexion.php">Déconnexion admin</a></td>
        </tr>

</table>   
        <header>
  <?php
		if (!empty($_SESSION['admin'])){
             echo"   <nav>
                        <table>
                                <tr>
                                        <td><a href=\"gestion_prd.php\" >Gestion des produits</a></td>
                                        <td><a href=\"ajouter_prd.php\" >Ajouter un produit</a></td>
					 <td><a href=\"com.php\" >Gestion des commandes</a></td>
                                        
                                </tr>
                        </table>
                </nav>";}
		else{ echo "il faut se connecter ";
			echo $_SESSION['admin']; }
?>
        </header>
        
        <? include('footer.php'); ?>
        
        
