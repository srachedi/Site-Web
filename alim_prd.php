

<?php
        include('diasinfo.php');		

	


        if(isset($_FILES['img']))
        {
                $fichier=$prd_img=str_replace(' ','_',$_POST[prd]); //Remplace toutes les occurrences dans une chaîne
                if(move_uploaded_file($_FILES['img']['tmp_name'],'images/'. $fichier)) // Déplace un fichier téléchargé
                {
                        echo 'Upload effectué avec succès ! <br/>';
                        
                }
                else
                {
                        echo 'Echec de l\'upload !';
                }
        }

        //$prd_img=str_replace(' ','_',$_POST[prd]);
	$prd_img="images/".$_POST['img'];

        $prd_date=date('Y-m-d');
        //echo "cat = $_POST[cat] - $_POST[prd] - $_POST[desc] - $_POST[prix] - $_POST[qte] - $prd_img - $prd_date";
        add_prd($_POST[cat],$_POST[prd],$_POST[desc],$_POST[prix],$_POST[qte],$prd_img,$prd_date);
        header('location:admin2.php')
?>
