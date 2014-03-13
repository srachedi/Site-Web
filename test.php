<?
        include('diasinfo.php');
        $cmd_date=date('Y-m-d');
        add_cmd('TOTO','TITI',$cmd_date,'Montpellier 34000');
        $cmd_id=get_cmd_id('TOTO',$cmd_date);

       add_elts_cmd($cmd_id,'15','21');


                        $adresse=$_POSTE['nom']." ".$_POSTE['nom']." ".$_POST['adresse'];
                        $cmd_date=date('Y-m-d');
                        add_cmd($_SESSION['login'],'ok',$cmd_date,$adresse);
                        $cmd_id=get_cmd_id($_SESSION['login'],$cmd_date);
                        $montant=0;
                        connexion();
                        $requete="      select p.prd_nom, p.prd_prix, c.pan_qte, c.pan_date, c.pan_id
                                        from tbl_prd p, tbl_pan c 
                                        where p.prd_id=c.prd_id and c.pan_ses_id='$user'";
                        $result = mysql_query($requete);
                        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                        {   
                                $sous_total=$row[prd_prix]*$row[pan_qte];
                                $montant=$montant+$sous_total; 
                                add_elts_cmd($cmd_id,$row['prd_id'],$row['pan_qte']);   
                        }

                        echo "Montant total = $montant";
                        
                        deconnexion();  
        }     
?>
