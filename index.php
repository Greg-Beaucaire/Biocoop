<?php
// Fais un fichier index qui redirige en fonction du $moisActuel. Ensuite tu fais 12 pages avec comme nom les mois.
// Comme ça c'est généré dynamiquement pour le contenu et le bouton de merde en bas à droite est hard codé
include("backoffice.php");
switch($moisActuel){
    case "janvier":
        header("Location: 01.php");
        break;
    case "février":
        header("Location: 02.php");
        break;
    case "mars":
        header("Location: 03.php");
        break;
    case "avril":
        header("Location: 04.php");
        break;
    case "mai":
        header("Location: 05.php");
        break;
    case "juin":
        header("Location: 06.php");
        break;
    case "juillet":
        header("Location: 07.php");
        break;
    case "août":
        header("Location: 08.php");
        break;
    case "septembre":
        header("Location: 09.php");
        break;
    case "octobre":
        header("Location: 10.php");
        break;
    case "novembre":
        header("Location: 11.php");
        break;
    case "décembre":
        header("Location: 12.php");
        break;
}
?>