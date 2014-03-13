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


<form action="alim_prd.php" method="post" enctype="multipart/form-data"> <!-- Fait d'effectuer un téléchargement d'un ordinateur local vers le serveur -->
        <fieldset><legend>Ajouter un produit</legend>
          <table>       
                <tr><td><label for="cat">Catégorie du produit</label></td><td>
                        <select name="cat">
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
                
                <tr><td><label for="produit">Nom du produit</label></td><td>
                        <input type="text" name="prd" placeholder="SONY VAIO NR21S"></input>
                </td></tr>  
                
                <tr><td><label for="desc">Déscription</label></td><td>
                        <textarea name="desc" rows="4" cols="35"></textarea>
                </td></tr>

                <tr><td><label for="prix">Prix unitaire</label></td><td>
                        <input type="numeric" name="prix" placeholder="549.90">€</input>
                </td></tr>  

                <tr><td><label for="qte">Quantité</label></td><td>
                        <input type="numeric" name="qte" placeholder="5"></input>
                </td></tr> 

                <tr><td><label for="img">Photo</label></td><td>
                        <input type="file" name="img"></input>
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                </td></tr>  
                
                <tr><td><label for="date">Date</label></td><td>
                        <input type="date" name="date"></input>
                </td></tr> 

                <tr><td></td><td>
                        <input type="submit" value="Ajouter"></input>
                        <input type="reset" value="Effacer"></input>
                </td></tr>                                         
          </table>        
        </fieldset>
</form>

