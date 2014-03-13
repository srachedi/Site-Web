function verif_formulaire()
{
         if(document.form_inscription.pseudo.value == \"\")  {
           alert(\"Pseudo invalide !\");
           document.form_inscription.pseudo.focus();
           return false;
          }
         if( document.form_inscription.email1 == \"\") {
           alert(\"Email invalide!\");
           document.form_inscription.email1.focus();
           return false;
          }
         if( document.form_inscription.email2 != document.form_inscription.email1 == \"\") {
           alert(\"Les emails ne sont pas identiques!\");
           document.form_inscription.email2.focus();
           document.form_inscription.email1.focus();
           return false;
          }  
         if( document.form_inscription.psw1.value == \"\") {
           alert(\"Mot de passe invalide!\");
           document.form_inscription.psw1.focus();
           return false;
          }
         if( document.form_inscription.psw2 != document.form_inscription.psw1 == \"\") {
           alert(\"Les mots de passe ne sont pas identiques!\");
           document.form_inscription.psw2.focus();
           document.form_inscription.psw1.focus();
           return false;
          } 
}
