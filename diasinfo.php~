<?php

/* -------------------------------------------------------------------
pour utiliser la librairie ilfaut ajouter la ligne :
        include("diasinfo.php");
aux debuts de vos scripts PHP.

Date de la version : 12/12/2012 -
------------------------------------------------------------------- */



/* Connexion à la abse de données */
	function 	connexion(){
			$user 	="root";
			$passwd ="DIASDIAS";
			$host 	="localhost";
			$bdd 	="diasinfo";

			$mysql_link = mysql_connect($host,$user,$passwd) or die("erreur de connexion au serveur $host");
			mysql_select_db("$bdd",$mysql_link) or die("erreur de connexion a la base de données");
			

	}

/* Deconnexion de la base de données */
	function 	deconnexion(){
			mysql_close();
			
	}

// TABLE : tbl_cat
        // Ajouter une catégorie
        function        add_cat($cat_nom,$cat_desc,$cat_img){
                        connexion();
                        $requete="insert into tbl_cat values('','$cat_nom','$cat_desc','$cat_img')";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        }

        // Editer une catégorie
        function        edit_cat($cat_id,$cat_nom,$cat_desc,$cat_img){
                        connexion();
			//metre a jour 
                        $requete="UPDATE tbl_cat SET  
                                        cat_nom='$cat_nom' , 
                                        cat_desc='$cat_desc' , 
                                        cat_img='$cat_img' 
                                        where cat_id='$cat_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        }  

        // Supprimer une catégorie        
        function        del_cat($cat_id){
                        connexion();
                        $requete="delete from tbl_cat where cat_id='$cat_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        } 
             
        
// TABLE : tbl_prd
        // Ajouter un produit
        function        add_prd($cat_id,$prd_nom,$prd_desc,$prd_prix,$prd_qte,$prd_img,$prd_date){
                        connexion();
                        $requete="insert into tbl_prd values('','$cat_id','$prd_nom','$prd_desc','$prd_prix','$prd_qte','$prd_img','$prd_date')";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        }

        // Editer un produit
        function        edit_prd($prd_id,$cat_id,$prd_nom,$prd_desc,$prd_prix,$prd_qte,$prd_img,$prd_date){
                        connexion();
                        $requete="UPDATE tbl_prd SET 
                                        cat_id='$cat_id',
                                        prd_nom='$prd_nom',                                        
                                        prd_desc='$prd_desc',                                         
                                        prd_prix='$prd_prix', 
                                        prd_qte='$prd_qte', 
                                        prd_img='$prd_img', 
                                        prd_date='$prd_date'
                                        where prd_id='$prd_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        } 
        // Editer un produit
        function        edit_prd_img($prd_id,$prd_img){
                        connexion();
                        $requete="UPDATE tbl_prd SET prd_img='$prd_img' where prd_id='$prd_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        }        

        // Lire un produit
        function        get_prd($prd_id){
                        connexion();
                        $requete="select * from tbl_prd where prd_id ='$prd_id'";
                        $result = mysql_query($requete);
                        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                        {
                               $prd=$row;
                        } 
                        deconnexion();
                        return $prd;
        }        
         
        

        // Supprimer un produit       
        function        del_prd($prd_id){
                        connexion();
                        $requete="delete from tbl_prd where prd_id='$prd_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        }                  

        // Lire les produit d'une catégorie
        function        get_prd_cat($cat_id){
                        connexion();
                        $requete="select prd_id from tbl_prd where cat_id ='$cat_id'";
                        $result = mysql_query($requete);
                        $i=0;
                        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                        {       $pr[$i]= $row[prd_id];    
                                $i++;} 
                        deconnexion();  
                        return $pr ;                   
        } 
        
        // Récuperer la liste des produit d'une même catégorie        
        function        get_list_prd($cat_id)   {     
                        $list_prd= get_prd_cat($cat_id);
                        echo "<table class=\"catalogue\"><tr>
                        <tr><th style=\"width:70px\">Référence</th><th>Produit</th><th style=\"width:600px\">Déscription</th><th style=\"width:70px\">Prix</th><th style=\"width:100px\">Image</th><th style=\"width:120px\"></th></tr>";
                        foreach($list_prd as $val1){
                                $prd=get_prd($val1);
                                echo "  <tr><td>{$prd['prd_id']}</td>
                                        <td>{$prd['prd_nom']}</td>
                                        <td>{$prd['prd_desc']}</td>
                                        <td>{$prd['prd_prix']} €</td>
                                        <td>
                                                <a href=\"images/{$prd['prd_img']}\" target=\"_blank\">
                                                <img src=\"images/{$prd['prd_img']}\" width=\"150px\" ></img></a>
                                        </td>
                                        <td>
                                                <form action=\"ajouter_panier.php\" method=\"post\">
                                                        <input type=\"hidden\" name=\"prd\" value=\"{$prd['prd_id']}\"></input>
                                                        <input type=\"submit\" value=\"Ajouter au panier\"></input>
                                                </form>
                                        </td>";
                        }
                        echo "</tr></table>";
                }        

        // Récuperer la liste des produit d'une même catégorie        
        function        adm_get_list_prd($cat_id)   {     
                        $list_prd= get_prd_cat($cat_id);
                        echo "<table class=\"catalogue\"><tr>
                        <tr><th style=\"width:70px\">Référence</th><th>Produit</th><th style=\"width:600px\">Déscription</th><th style=\"width:70px\">Prix</th><th style=\"width:100px\">Image</th><th style=\"width:120px\"></th></tr>";
                        foreach($list_prd as $val1){
                                $prd=get_prd($val1);
                                echo "  <tr><td>{$prd['prd_id']}</td>
                                        <td>{$prd['prd_nom']}</td>
                                        <td>{$prd['prd_desc']}</td>
                                        <td>{$prd['prd_prix']} €</td>
                                        <td>
                                                <a href=\"images/{$prd['prd_img']}\" target=\"_blank\">
                                                <img src=\"images/{$prd['prd_img']}\" width=\"150px\" ></img></a>
                                        </td>
                                        <td>
                                                
                                                <form action=\"edit_prd.php\" method=\"post\">
                                                        <input type=\"hidden\" name=\"prd\" value=\"{$prd['prd_id']}\"></input>
                                                        <input type=\"submit\" value=\"Modifier\"></input>
                                                </form>                                               
                                                
                                                <form action=\"supp_prd.php\" method=\"post\">
                                                        <input type=\"hidden\" name=\"prd1\" value=\"{$prd['prd_id']}\"></input>
                                                        <input type=\"submit\" value=\"Supprimer\"></input>
                                                </form>
                                        

                                        </td>                                        ";
                        }
                        echo "</tr></table>";
                }  

// TABLE : tbl_cmd
        // Ajouter une commande
        function        add_cmd($cmd_session,$cmd_etat,$cmd_date,$cmd_adrs_liv){
                        connexion();
                        $requete="insert into tbl_cmd values('','$cmd_session','$cmd_etat','$cmd_date','$cmd_adrs_liv')";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        }

        // Editer une commande
        function        edit_cmd($cmd_id,$cmd_session,$cmd_etat,$cmd_date,$cmd_adrs_liv){
                        connexion();
                        $requete="UPDATE tbl_cmd SET 
                                cmd_session='$cmd_session' , 
                                cmd_etat='$cmd_etat' , 
                                cmd_date='$cmd_date', 
                                cmd_adrs_liv='$cmd_adrs_liv' 
                                where cmd_id='$cmd_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                        
        }


        // Supprimer une commande        
        function        del_cmd($cmd_id){
                        connexion();
                        $requete="delete from tbl_cmd where cmd_id='$cmd_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        }   
        
// TABLE : tbl_pan
        // Ajouter au panier
        function        add_cart($prd_id,$pan_qte){
                        $pan_ses_id =$_SESSION['login'];
                        $pan_date=date('Y-m-d');
                        connexion();
                        $requete="insert into tbl_pan values('','$prd_id','$pan_ses_id','$pan_qte','$pan_date')";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }             

        // Retirer du panier
        function        del_cart($pan_id){
                        connexion();
                        $requete="delete from tbl_pan where pan_id='$pan_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }
        
        // Modifier quantité dans le panier
        function        edit_qte_cart($pan_id,$pan_qte){
                        connexion();
                        $requete="update tbl_pan set pan_qte='$pan_qte' where pan_id='$pan_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();   
        }       
        
        // Lire le panier
        function        read_cart(){
                        $user=$_SESSION['login'];
                        $montant=0;
                        connexion();
                        $requete="      select p.prd_nom, p.prd_prix, c.pan_qte, c.pan_date, c.pan_id
                                        from tbl_prd p, tbl_pan c 
                                        where p.prd_id=c.prd_id and c.pan_ses_id='$user'";
                        $result = mysql_query($requete);
                        echo "<table style=\"width:100%\"><tr><th>Article</th><th>Prix</th><th>Quantité</th><th>Sous montant</th><th>Ajouté le</th></tr>";
                        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                        {   
                                

                                $sous_total=$row[prd_prix]*$row[pan_qte];
                                $montant=$montant+$sous_total; 
                                
                                echo "  <tr><td>{$row[prd_nom]}</td>
                                        <td>{$row[prd_prix]}</td>
                                        <td>                                        
                                        <form  action=\"modifier_qte_pan.php\" method=\"post\">
                                                <input type=\"hidden\" name=\"pan_id\" value=\"{$row[pan_id]}\"></input>
                                                <input style=\"width:20px\" type=\"numeric\" name=\"pan_qte\" value=\"{$row[pan_qte]}\"></input>
                                                <input type=\"submit\" value=\"Changer\"></input>
                                        </form>
                                        
                                        
                                        </td>
                                        <td>$sous_total €</td>
                                        <td>{$row[pan_date]}</td>
                                        <td>
                                        <form  action=\"retirer_pan.php\" method=\"post\">
                                                <input type=\"hidden\" name=\"pan_id\" value=\"{$row[pan_id]}\"></input>
                                                <input type=\"submit\" value=\"Retirer\"></input>
                                        </form>
                                        </td>
                                        
                                        </tr>";    
                        }
                        echo "</table>";
                        echo "Montant total = $montant €";
                        deconnexion();  
        }      
 
// TABLE : tbl_user             
        // Ajouter un utilisateur
        function        add_user($user_pseudo,$user_email,$user_psw){
                        connexion();
                        $requete="insert into tbl_user values('','$user_pseudo','$user_email','$user_psw','')";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        } 

       

        // Supprimer un utilisateur
        function        del_user($user_id){
                        connexion();
                        $requete="delete from tbl_user where user_id = $user_id";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        } 
        
        // Modifier un utilisateur
        function        edit_user($user_id,$user_pseudo,$user_email,$user_psw){
                        connexion();
                        $requete="update tbl_user set user_pseudo='$user_pseudo', user_email='$user_email', user_psw='$user_psw' where user_id='$user_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }
        
        // Modifier le pseudo d'un utilisateur
        function        edit_user_pseudo($user_pseudo_old,$user_pseudo_new){
                        connexion();
                        $requete="update tbl_user set user_pseudo='$user_pseudo_new' where user_pseudo='$user_pseudo_old'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        } 
        
        // Modifier le mot de passe d'un utilisateur
        function        edit_user_psw($user_pseudo,$user_psw){
                        connexion();
                        $requete="update tbl_user set user_psw='$user_psw' where user_pseudo='$user_pseudo'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }                
        
        // Dérnière connexion utilisateur
        function        user_last_login(){
                        connexion();
                        $last_date=date('Y-m-d H:i:s');
                        $user_pseudo=$_SESSION['login'];
                        $requete="update tbl_user set user_derniere_connexion ='$last_date' where user_pseudo='$user_pseudo' ";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }        
// TABLE : tbl_admin             
        // Ajouter un adminstrateur
        function        add_admin($admin_pseudo,$admin_email,$admin_psw){
                        connexion();
                        $requete="insert into tbl_admin values('','$admin_pseudo','$admin_email','$admin_psw','')";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }        

        // Supprimer un adminstrateur
        function        del_admin($admin_id){
                        connexion();
                        $requete="delete from tbl_admin where admin_id = $admin_id";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        } 
        
        // Modifier un adminstrateur
        function        edit_admin($admin_id,$admin_pseudo,$admin_email,$admin_psw){
                        connexion();
                        $requete="update tbl_admin set admin_pseudo='$admin_pseudo', admin_email='$admin_email', admin_psw='$admin_psw' where admin_id='$admin_id'";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }
        
        // Dérnière connexion adminstrateur
        function        admin_last_login(){
                        connexion();
                        $last_date=date('Y-m-d H:i:s');
                        $admin_pseudo=$_SESSION['login'];
                        $requete="update tbl_admin set admin_derniere_connexion ='$last_date' where admin_pseudo='$admin_pseudo' ";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }     
        
        // Récupérer l'id d'une commande
        function        get_cmd_id($cmd_session,$cmd_date){
                        connexion();
                        $requete="select cmd_id from tbl_cmd where cmd_session ='$cmd_session' and cmd_date='$cmd_date'";
                        $result = mysql_query($requete);

                        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                        {       $pr= $row[cmd_id]; }  
                        deconnexion();  
                        return $pr ;                   
        }   
        
        function        add_elts_cmd($cmd_id,$prd_id,$cmd_elts_qte){
                        connexion();
                        $requete="insert into tbl_elts_cmd values('$cmd_id','$prd_id','$cmd_elts_qte')";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();
                        
        }

        // Ajouter un utilisateur
        function        add_contact($user_pseudo,$user_titre){
                        connexion();			
                        $requete="insert into tbl_contact values('','$user_pseudo','$user_titre')";
                        mysql_query($requete) or die('Erreur '.mysql_errno().' : ' . mysql_error()); 
                        deconnexion();                
        }                                                  		
?>	
