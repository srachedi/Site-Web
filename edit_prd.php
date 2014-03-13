<?php
        include('diasinfo.php');
        
        if (    isset($_POST[prd_id]) && 
                isset($_POST[cat_id]) && 
                isset($_POST[prd_nom]) && 
                isset($_POST[prd_desc]) &&
                isset($_POST[prd_prix]) && 
                isset($_POST[prd_qte]) && 
                isset($_POST[prd_img]) && 
                isset($_POST[prd_date]) && 
                
                $_POST[prd_id] !="" && 
                $_POST[cat_id] !="" &&
                $_POST[prd_nom] !="" && 
                $_POST[prd_desc] !="" && 
                $_POST[prd_prix] !="" && 
                $_POST[prd_qte] !="" && 
                $_POST[prd_img]!="" &&
                $_POST[prd_date]!="")
                {
                        edit_prd($_POST[prd_id],$_POST[cat_id],$_POST[prd_nom],$_POST[prd_desc],$_POST[prd_prix],$_POST[prd_qte],$_POST[prd_img],$_POST[prd_date]);
                        header('location:gestion_prd.php');
                }
        else {
                if( isset($_POST[prd]) && $_POST[prd]!="" ){
                $prd=get_prd($_POST[prd]);
                echo "  
                <fieldset><legend>Modification du produit réf $prd</legend>
                <form action=\"edit_prd.php\" method=\"post\">
                <table>
                <tr>
                        <td><label for=\"prd_id\">Référence du produit</label></td>
                        <td><label>{$prd['prd_id']}</label> 
                            <input type=\"hidden\" value=\"{$prd['prd_id']}\" name=\"prd_id\"></input>
                            <input type=\"hidden\" value=\"{$prd['cat_id']}\" name=\"cat_id\"></input>
                            <input type=\"hidden\" value=\"{$prd['prd_img']}\" name=\"prd_img\"></input>
                            <input type=\"hidden\" value=\"{$prd['prd_date']}\" name=\"prd_date\"></input></td>
                </tr>
                <tr>
                        <td><label for=\"prd_nom\">Nom du produit</label></td>
                        <td><input type=\"text\" name=\"prd_nom\" value=\"{$prd['prd_nom']}\"></input></td>
                </tr>
                
                <tr>
                        <td><label for=\"prd_des\">Déscription du produit</label></td>
                        <td><textarea name=\"prd_desc\" cols=\"50\" rows=\"4\">{$prd['prd_desc']}></textarea></td>
                </tr> 
                <tr>
                        <td><label for=\"prd_prix\">Prix</label></td>
                        <td><input type=\"numeric\" name=\"prd_prix\" value=\"{$prd['prd_prix']}\">€</input></td>
                </tr>
                <tr>
                        <td><label for=\"prd_qte\">Quantité</label></td>
                        <td><input type=\"numeric\" name=\"prd_qte\" value=\"{$prd['prd_qte']}\"></input></td>
                </tr> 
                <tr>
                        <td><label>Photo</label></td>
                        <td><img src=\"images/{$prd['prd_img']}\" width=\"200px\"></img></td>
                </tr> 
                <tr>
                        <td></td>
                        <td><input type=\"submit\" value=\"Valider\"></input></td>
                </tr> 
                </table>
                </form>
                
                <form action=\"edit_img.php\" method=\"post\" enctype=\"multipart/form-data\">

                        <input type=\"hidden\" value=\"{$prd['prd_img']}\" name=\"prd_img1\"></input>
                        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\">
                        <input type=\"file\" name=\"img\"></input>
                        <input type=\"submit\" value=\"Valider la photo\"></input>
                </form>
                
                </fieldset>
                
                
        "; 
          }      
        }

?>
