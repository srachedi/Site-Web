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
<?php  
		
        include('diasinfo.php');
        connexion();

 
                        $requete="select * from tbl_cmd";
                        $result = mysql_query($requete);
			 echo "<table style=\"width:80%\">
			<tr><th>identifiant</th>
			<th>client</th>
			<th>etat</th>
			<th>date</th></tr>";
                       
                        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                        {      
 			echo "                  
			<tr align=\"center\">
			<td>{$row['cmd_id']}</td>
                        <td>{$row['cmd_session']}</td>
 			<td>{$row['cmd_etat']}</td>
			<td>{$row['cmd_date']}</td>
			</tr>";                                    
                        }
                        echo "</table>";
		deconnexion();

?>
<?php 
/// mise à jour la table commende
       
if (isset($_POST['envoyee'])){

    $etat=$_POST['etat'];
    if (empty($_POST['idc'])){
        echo "selectionner un id de la commande !";}
    else {
	  
        connexion();
    $id=$_POST['idc'];
     $q ="UPDATE tbl_cmd SET cmd_etat='$etat' WHERE cmd_id='$id'";
     $r = mysql_query ($q);
       if (mysql_affected_rows($r)!==0){
        echo "l'etat de la commande ".$id." a été bien changé";
       
        }
     
    else {
        echo mysql_error();
    }
    }
    /// mise a jour la table vente si expédié!
    
}
?>



<h1>Editer commande</h1> </br> </br></br>
  <form method="POST" action="com.php">
  etat commande :
 <select name="etat" >
    <option value="en préparation">En préparation</option>
    <option value="en cours d’expédition">En cours d’expédition</option>
    <option value="expédiée">Expédiée</option>
    </select>
 Id coammande :
 <input type="text" name="idc"></br>
 <input type="submit" name ="envoyer" >
<input type="hidden" name ="envoyee" value="true">
</form>
  
      
