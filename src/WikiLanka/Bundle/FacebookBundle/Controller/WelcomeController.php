<?php

namespace WikiLanka\Bundle\FacebookBundle\Controller;

use WikiLanka\Bundle\FacebookBundle\API\Facebook;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller {

    public function startAction(Request $request) {
        $number = $request->get('number');
        $token = $request->get('token');
        $user = $request->get('user');
        $username = "adminpixelz";
        $password = "pixelz313";
        $hostname = "mysql.pixelzexplorer.org";
         $dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

        if ($user) {
            
            $query = mysql_query("SELECT PIN FROM `wikilanka`.`database`");
            $pin = 1;
            $array = array();
            $counter = 1;
            while ($row = mysql_fetch_array($query)) {

                $array[$counter] = $row['PIN'];
                //echo $array[$counter];
                $counter++;
            }
            
            while (array_search($pin, $array)) {
                $pin = rand(1000, 9999);
            };
            //echo $pin;
            mysql_query("UPDATE `wikilanka`.`database` SET `pin`='{$pin}' WHERE `mobile`='{$number}'", $dbhandle);
            mysql_query("UPDATE `wikilanka`.`database` SET `token`='{$token}' WHERE `mobile`='{$number}'", $dbhandle);
            mysql_query("UPDATE `wikilanka`.`database` SET `user`='{$user}' WHERE `mobile`='{$number}'", $dbhandle);
            return $this->render('WikiLankaFacebookBundle:Welcome:welcomeNew.html.twig', array('user' => $user, 'pin' => $pin));
        }
            return $this->render('WikiLankaFacebookBundle:Welcome:facebook.html.twig');
       
    }

}


