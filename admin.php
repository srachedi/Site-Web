 <?php
        session_start();
        include('header.php');
?>               

<h1>Accès administrateur</h1>
<table>
        <form action="connexion_admin.php" method="post">
        <tr><td>Login</td><td><input type="login" name='admin'></input></td></tr>
        <tr><td>Mot de passe</td><td><input type="password" name='psw'></input></td></tr>
        <tr><td></td><td><input type="submit" value="Entrer"></input></td></tr>
        </form>
</table>

        
        
