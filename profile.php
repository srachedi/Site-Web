<?php

               session_start();
               $pseudo=$_SESSION['login'];
               


?>

<script language="javascript" scr="diasinfo.js"></script>

<div id="div_pseudo">
        <div id="div1">
                <table><tr><td>Pseudo : </td><td><? echo $pseudo;?></td><td><a href="javascript:affichier(div2)">Modifier</a></td></tr></table>
        </div>
        <div id="div2" style="display:none">
                <form action="modifier_pseudo.php" method="post">
                <table><tr>     <td>Nouveu pseudo : </td><td><input type="text" name="pseudo2"></input>
                                </td><td><input type="submit" value="Valider"></input></td></tr></table>
              <input type="hidden" name="pseudo1" value="<?echo $pseudo;?>"  ></input>                       
                                                  
                                                
        </form>                                        
        </div>
</div>

<div id="div_pass">
        <div id="div3">
                <table><tr><td>Email : </td><td><? echo $email;?></td><td><a href="javascript:affichier(div2)">Modifier</a></td></tr></table>
        </div>
        <div id="div4" style="display:none">
                <form action="modifier_pseudo.php" method="post">
                <table><tr>     <td>Nouveu pseudo : </td><td><input type="text" name="pseudo2"></input>
                                </td><td><input type="submit" value="Valider"></input></td></tr></table>
              <input type="hidden" name="pseudo1" value="<?echo $pseudo;?>"  ></input>                       
                                                  
                                                
        </form>                                        
        </div>
</div>

<?
        include('footer.php');
?>
