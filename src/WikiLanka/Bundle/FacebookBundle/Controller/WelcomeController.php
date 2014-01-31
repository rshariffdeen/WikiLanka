<?php

namespace WikiLanka\Bundle\FacebookBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller {

    public function startAction(Request $request) {
        $number = $request->get('number');
        $token = $request->get('token');
        $user = $request->get('user');

        require 'facebook.php';
        $facebook = new Facebook(array(
                    'appId' => '453545681427596',
                    'secret' => '9885617e068739cb01b952b2ab571c01',
                ));


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
            return $this->render('WikiLankaFacebookBundle:Welcome:welcome.html.twig', array('user' => $user, 'pin' => $pin));
        }
    }

}
