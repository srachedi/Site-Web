<!DOCTYPE html>
<html lang="fr">
        <head>
                <title>Dias-Info</title>
                <meta charset="utf-8">
                <link rel="stylesheet" href="style.css" type="text/css" />
        </head>
        
<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://localhost/diasinfo/piwik/" : "http://localhost/diasinfo/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://localhost/diasinfo/piwik/piwik.php?idsite=1" style="border:0" alt="accueil" /></p></noscript>
<!-- End Piwik Tracking Code -->        
        
        <body>
                <div id="container">
                <? session_start() ;?> <!--il sauvgardes des variable dans un fichier qu il va creer-->
                <header> 
                        <table >
                                <tr>
                                        <td style="width:20%">
						<!--<a href='index.php'><img src="images/logo3.jpg" alt="Accueil" width="290px" height="170px"></img></a></td> -->
					<td style="width:50%">
						<!-- <a href='index.php'><img src="images/DIAS.png" alt="Accueil" background-color="#808000" width="590px" height="170px"></img></a></td> -->
             
                                        <td style="width:30%"><div class="formulaire" style="display:<? if(isset($_SESSION['login']) and $_SESSION['login'] != ''){echo 'none';} else {echo '';}?>">
                                <table>
                                        <tr>
                                        <form action="connexion.php" method="post">
                                                <td><label for="login">Login</label></td>
					        <td><input type="text" size="23" id="login" name="login" placeholder="exemple@domaine.com"></input></td></tr>
					        <tr><td><label for="psw">Mot de passe</label></td>
					        <td><input type="password" id="psw" name="psw" size="14"></input>
					            <input type="submit" value="Entrer"></input></td>
					</form>
                                        </tr>
                                        <tr><td></td><td><a href="inscription.php">Inscription</a></td></tr>
                                </table>
                                </div>
                                <div class="formulaire" style="display:<? if(isset($_SESSION['login']) and $_SESSION['login'] != ''){echo '';} else {echo 'none';}?>">
                                <table><tr><td><a href="profile.php"><? echo $_SESSION['login']; ?></a></td><td><a href="panier.php">Panier</a></td><td><a href="comm.php">Mes commandes</a></td><td><a href="deconnexion.php">Déconnexion</a></td></tr>
</table>
                                </div></td>
                                </tr>
                        </table>
                
                        
                        
                       <nav>
                       <table>
                        <tr>
                                <td>
                                        <form action="catalogue.php" method="post" name="form_menu1">
                                                <input type="hidden" name="cat" value="1"></input>
                                                <a href="javascript:;" onclick="document.form_menu1.submit();">Ordinateurs portables</a>
                                        </form>
                                </td>
                                <td>
                                        <form action="catalogue.php" method="post" name="form_menu2">
                                                <input type="hidden" name="cat" value="2"></input>
                                                <a href="javascript:;" onclick="document.form_menu2.submit();">Ordinateurs bureaux</a>
                                        </form>
                                </td>
                                <td>
                                        <form action="catalogue.php" method="post" name="form_menu3">
                                                <input type="hidden" name="cat" value="3"></input>
                                                <a href="javascript:;" onclick="document.form_menu3.submit();">Mac</a>
                                        </form>
                                </td>                                
                                <td>
                                        <form action="catalogue.php" method="post" name="form_menu4">
                                                <input type="hidden" name="cat" value="4"></input>
                                                <a href="javascript:;" onclick="document.form_menu4.submit();">Tablettes</a>
                                        </form>
                                </td>
                                <td>
                                        <form action="catalogue.php" method="post" name="form_menu5">
                                                <input type="hidden" name="cat" value="5"></input>
                                                <a href="javascript:;" onclick="document.form_menu5.submit();">Smartphones</a>
                                        </form>
                                </td>
                                <td>
                                        <form action="catalogue.php" method="post" name="form_menu6">
                                                <input type="hidden" name="cat" value="6"></input>
                                                <a href="javascript:;" onclick="document.form_menu6.submit();">Logiciel</a>
                                        </form>
                                </td>       
                                <td>
                                        <form action="catalogue.php" method="post" name="form_menu7">
                                                <input type="hidden" name="cat" value="7"></input>
                                                <a href="javascript:;" onclick="document.form_menu7.submit();">Smartphones</a>
                                        </form>
                                </td>                                                         
                                <td>
                                        <form action="catalogue.php" method="post" name="form_menu8">
                                                <input type="hidden" name="cat" value="8"></input>
                                                <a href="javascript:;" onclick="document.form_menu8.submit();">Accessoires et consomables</a>
                                        </form> 
                                </td>
                                <td>
                                        <a href="contact.php">Contact</a>

                                </td>
                        </tr>
                       </table>
                                
                                
                                
                                
                                
                                
                                
                              
                                                                       
                       </nav>
                
                </header>
