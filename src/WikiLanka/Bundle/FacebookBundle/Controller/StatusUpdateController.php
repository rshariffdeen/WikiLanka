<?php

namespace WikiLanka\Bundle\FacebookBundle\Controller;

use WikiLanka\Bundle\FacebookBundle\API\Facebook;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatusUpdateController extends Controller {

    public function updateStatusAction(Request $request) {
        $number = $request->get('number');
        $status = $request->get('message');


        $username = "adminpixelz";
        $password = "pixelz313";
        $hostname = "mysql.pixelzexplorer.org";

        $dbhandle = mysql_connect($hostname, $username, $password)
                or die("Unable to connect to MySQL");

        $query = mysql_query("SELECT token, user FROM `wikilanka`.`database` where mobile = '{$number}'");

        $tokenArray = array();
        $userArray = array();

        $counter = 1;

        while ($row = mysql_fetch_array($query)) {


            $tokenArray[$counter] = $row['token'];
            $userArray[$counter] = $row['user'];

            $counter++;
        }

        $token = $tokenArray[$counter - 1];
        $user = $userArray[$counter - 1];
        

        $facebook_id = $user;
        $params = array(
            'access_token' => $token,
            'message' => $status
        );
        $appId= '453545681427596';
        $secret = '9885617e068739cb01b952b2ab571c01';
        $url = "https://graph.facebook.com/oauth/access_token?client_id=".$appId."&client_secret=". $secret."&grant_type=fb_exchange_token& fb_exchange_token=". $token;
   
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
// Set so curl_exec returns the result instead of outputting it.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Get the response and close the channel.
        $response = curl_exec($ch);
        $access = $response['access_token'];
        echo $access;
        $url = "https://graph.facebook.com/$facebook_id/feed";
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_VERBOSE => true
        ));
        $result = curl_exec($ch);
        return $this->render('WikiLankaFacebookBundle:Status:status.html.twig', array('result' => $access));
    }

}

