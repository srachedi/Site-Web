<?php
       session_start();
        
        include('header.php');
?>


<?php  
		
        include('diasinfo.php');
        connexion();

 			  $user=$_SESSION['login'];
                        $requete="select * from tbl_cmd where cmd_session='$user'";
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

