<?php
        session_start();
        include('diasinfo.php');
        include('header.php');
        $pseudo=$_SESSION['login'];

                        $adresse=$_POST['nom']." ". $_POST['prenom']." ". $_POST['adresse'];
                        $cmd_date=date('Y-m-d');
                        add_cmd($_SESSION['login'],'ok',$cmd_date,$adresse);
                        $cmd_id=get_cmd_id($pseudo,$cmd_date);                        
                        $montant=0;
                        connexion();
                        $requete="      select p.prd_id, p.prd_nom , p.prd_prix, c.pan_qte, c.pan_date, c.pan_id
                                        from tbl_prd p, tbl_pan c 
                                        where p.prd_id=c.prd_id and c.pan_ses_id='$pseudo'";
                        $result = mysql_query($requete);
                        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                        {   
                                $sous_total=$row[prd_prix]*$row[pan_qte];
                                $montant=$montant+$sous_total;
                                $prd=$row[prd_id];
                                $qte=$row[pan_qte] ;
                                //add_elts_cmd($cmd_id,$prd,$qte);   
                        }
                        echo "Montant total = $montant €";
                        deconnexion();  

        
?>
        <center><h1>Paypal s'en charge du reste.</h1>
        <img src="images/paypal.png"></img>
        <h1>MERCI.</h1>
        <h3><a href="index.php">Revenir sur BootiKa</a></h3>
        </center>
        
<?
        include('footer.php');
?>
