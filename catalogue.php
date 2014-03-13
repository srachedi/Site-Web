<?php
        include('diasinfo.php');
        include('header.php');
        
        echo "<section>" ;
        session_start();
        if(isset($_POST['cat']) and ($_POST['cat']!='')){
            get_list_prd($_POST['cat']);    
                }
        else {
                echo "
                        <table>
                                <tr><td><img src=\"images/my_laptop.png\"></img></td><td></td></tr>
                                <tr><td><img src=\"images/my_caddie.png\"></img</td><td></td></tr>
                                <tr><td><img src=\"images/my_tablet.png\"></img</td><td></td></tr>

                                <tr><td><img src=\"images/my_smartphone.png\"></img></td><td></td></tr>
                                <tr><td><img src=\"images/my_printer.png\"></img</td><td></td></tr>
                                <tr><td><img src=\"images/my_cdrom.png\"></img</td><td></td></tr>
                             
                        </table>
                ";
                }
        
        
        echo "</section>";
        include('footer.php');

?>
