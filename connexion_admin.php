<?php
        session_start() ;
	$admin = $_POST['admin']; 
	$password = md5($_POST['psw']); 
	
        include('diasinfo.php');
        connexion();
	if (($admin) AND ($password)) {
		$query = "SELECT admin_pseudo, admin_psw FROM tbl_admin WHERE admin_pseudo ='$admin'"; 
		$result = mysql_query ($query); //Envoie une requête à un serveur MySQL
		
		if( mysql_num_rows ($result)) { //Retourne le nombre de lignes d'un résultat MySQL envoyé par select
						// verification de l'existance de l'utilisateur
		     $_SESSION['admin']=$admin;			
			} 
		else { 
		       $_SESSION['admin']='';}
			
	               
			}
	header ('location:admin2.php');
	deconnexion();	
	
	
?>
