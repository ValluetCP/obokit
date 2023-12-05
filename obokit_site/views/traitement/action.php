
<?php
require_once "../../models/classModel.php";

if(isset($_POST[''])){
    $variable = htmlspecialchars($_POST['variable']);

    // apeler la methode inscription de la classe NomDeLaClass
    NomDeLaClass::nomMethod($variable);
    // cette syntaxe uniquement pour appeler les méthodes static.
    // la méthode nomMethod étant static donc on utilise le nom de la classe suivi de "::" ensuite le nom de la méthode qui est nomMethod.

}


