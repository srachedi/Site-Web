<?php
        include('diasinfo.php');
        session_start();
        include('header.php');
        
        
         
        if(     isset($_POST['pseudo']) && ($_POST[pseudo]!='') //on fait un teste pour l'existance des pseudo, eamil1 et psw1
                && isset($_POST[email1]) && ($_POST[email1]!='') 
                && isset($_POST[psw1]) && ($_POST[psw1]!='') 
                               
                 ){
                        add_user($_POST[pseudo],$_POST[email1],md5($_POST[psw1]));// ajouter un utilisateur a la table 
                        echo "Inscription efféctuée avec succès.";
                
                }
                else {
		//document pour lancer la recherche
		//le java scripte me permet de verifier les e-mail,pseudo et mot de passe
		//focus pour renvoyer le curseur (focus) dans le champ indiqué
                echo "  <head>
                        <script type=\"text/javascript\">
                       
                        function verif_formulaire()
                        {
                                 if(document.form_inscription.pseudo.value == \"\")  {
                                   alert(\"Pseudo invalide !\");
                                   document.form_inscription.pseudo.focus();
                                   return false;
                                  }
                                 if( document.form_inscription.email1 == \"\") {
                                   alert(\"Email invalide!\");
                                   document.form_inscription.email1.focus();
                                   return false;
                                  }
                                 if( document.form_inscription.email2.value != document.form_inscription.email1.value) {
                                   alert(\"Les emails ne sont pas identiques!\");
                                   document.form_inscription.email1.focus();
                                   document.form_inscription.email2.focus();
                                   return false;
                                  }  
                                if( document.form_inscription.psw1.value == \"\") {
                                   alert(\"Mot de passe invalide!\");
                                   document.form_inscription.psw1.focus();
                                   return false;
                                  }
                                 if( document.form_inscription.psw2.value != document.form_inscription.psw1.value) {
                                   alert(\"Les mots de passe ne sont pas identiques!\");
                                   document.form_inscription.psw1.focus();
                                   document.form_inscription.psw2.focus();
                                   return false;
                                  } 
                        }
                       
                        </script>    </head>            
                        <form name=\"form_inscription\" action=\"inscription.php\" method=\"post\" onSubmit=\"return verif_formulaire()\">
                        <table>        
                                <tr>
                                        <td>Pseudo</td>
                                        <td><input type=\"text\" name=\"pseudo\"></input></td>
                                </tr>
                                <tr>
                                        <td>Email</td>
                                        <td><input type=\"email\" name=\"email1\"></input></td>
                                </tr>
                                <tr>
                                        <td>Confirmer Email</td>
                                        <td><input type=\"email\"  name=\"email2\"></input></td>
                                </tr>
                                <tr>
                                        <td>Mot de passe</td>
                                        <td><input type=\"password\" name=\"psw1\"></input></td>
                                </tr>
                                <tr>                
                                        <td>Confirmer mot de passe</td>
                                        <td><input type=\"password\" name=\"psw2\"></input></td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td>
                                                <table>        
                                                        <tr>
                                                                <td><input type=\"submit\" value=\"Valider\" ></input></td>
                                                                <td><input type=\"reset\" value=\"Effacer\"></input></td>

                                                        </tr>
                                                </table>                
                                        </td>
                                </tr>
                        </table>
                        </form>                
                ";
                }
        include('footer.php');
?>
