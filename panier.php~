<?php
        session_start();
        include('diasinfo.php');
        include('header.php');
        if(isset($_SESSION['login']) and ($_SESSION['login']!=''))
        {read_cart();
        echo "
                <table>
                        <tr>    <td><a href=\"index.php\">Continuer les achats</a></td>
                                <td><a href=\"payement.php\" >Proceder au payement</a></td>
                        </tr>
                </table>";
        }
        else {echo "Aucune session n'est ouvert";
                echo "
                <div class=\"\" >
                                <table>
                                        <tr>
                                        <form action=\"connexion.php\" method=\"post\">
                                                <td><label for=\"login\">Login</label></td>
					        <td><input type=\"text\" size=\"23\" id=\"login\" name=\"login\" value=\"votre pseudo\" onClick=\"this.value=''\"></input></td></tr>
					        <tr><td><label for=\"psw\">Mot de passe</label></td>
					        <td><input type=\"password\" id=\"psw\" name=\"psw\" size=\"14\" value=\"00000000\" onClick=\"this.value=''\"></input>
					            <input type=\"submit\" value=\"Entrer\"></input></td>
					</form>
                                        </tr>
                </div>
                ";
        }
 
        
?>


<?
        include('footer.php');
?>
