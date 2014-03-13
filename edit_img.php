<?php
        include('diasinfo.php');
        if(isset($_FILES['img']))// si l image a eté telechargée
        {
                if(move_uploaded_file($_FILES['img']['tmp_name'],'images/'. $_POST[prd_img1])) // Déplace un fichier téléchargé
                {
                        echo 'Upload effectué avec succès ! <br/>';
                        
                }
                else
                {
                        echo 'Echec de l\'upload !';
                }
        }
      header('location:gestion_prd.php');
?>
