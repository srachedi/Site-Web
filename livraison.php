
<form action="paypal.php" method="post">


<fieldset><legend>Adresse de livraison</legend>
 <table>
        <tr><td>Civilté</td><td><select><option>Mr.</option><option>Mme.</option><option>Mlle.</option></select></td></tr>
        <tr><td>Nom</td><td><input type="text" name="nom"></input></td></tr>
        <tr><td>Prénom</td><td><input type="text" name="prenom"></input></td></tr>
        <tr><td>Adresse</td><td><textarea name="adresse" rows="4" cols="50"></textarea></td></tr>
</table>
</fieldset>
<fieldset><legend>Coordonnées bancaires</legend>
<table>

        
        <tr><td>N° carte bancaire</td><td><input type="text" size="20" name="bcard"></input></td></tr>
        <tr><td>Valide jusqu'à</td><td><select><? for($i=1;$i<=12;$i++){echo "<option>$i</option>";}?></select><select><? for($i=2009;$i<=2020;$i++){echo "<option>$i</option>";}?></select></td></tr>
        <tr><td>Cryptograme à 3 chiffres</td><td><input type="numeric" size="3" name="crypto"></input></td></tr>
                

</table>
</fieldset>
<input type="submit" value="Valider"></input>
</form>
