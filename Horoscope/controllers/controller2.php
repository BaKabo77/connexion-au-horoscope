<?php
switch($action)
{
    case 'reponse':
        {
            $key = $_REQUEST['horoscope'];
            echo $signe[$key] ;
            break;
        }
    case 'connexion':
        {
        $cnx=$_REQUEST['cnx'];
        $mdp=$_REQUEST['mdp'];
        $flag = false;

        foreach($login as $value){
            foreach($value as $login=>$password){
            if ($login == $cnx && $password == $mdp){
                $flag = true;
            }
        }

        if($flag = true){
            include 'views/choix.php';
        }
        }

        break;
        }

    default:
    {
        include 'views/connexion.php';
    }
}
