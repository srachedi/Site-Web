<?
        session_start() ;
	$login = $_POST['login']; //post pour envoyer les donner au serveur http, et  ne pas afficher les paramettres sur la bare URL(get fait la meme chose mais il les affiche sur la bare URL) 
	$password = md5($_POST['psw']); //md5 pour cripter le mot de passe 

        include('diasinfo.php');
        connexion();
	if (($login) AND ($password)) {
		$query = "SELECT user_pseudo, user_psw FROM tbl_user WHERE user_pseudo = '$login' AND user_psw = '$password'"; 
		$result = mysql_query ($query);//Envoie une requête à un serveur MySQL 
		
		if( mysql_num_rows ($result)) {  //Retourne le nombre de lignes d'un résultat MySQL envoyé par select
						 // verification de l'existance de l'utilisateur
		        $_SESSION['login']=$login; } 
		else { 
		        $_SESSION['login']='';}
	}
	deconnexion();
	header ('location: index.php');
	
	
	
	
?>
