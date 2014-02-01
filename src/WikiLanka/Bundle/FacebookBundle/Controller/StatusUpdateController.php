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

        $token;
        $user;

        $counter = 1;

        while ($row = mysql_fetch_array($query)) {


            $token = $row['token'];
            $user = $row['user'];

        }

     
        

        $facebook_id = $user;
        $params = array(
            'access_token' => $token,
            'message' => $status
        );
        $appId= '453545681427596';
        $secret = '9885617e068739cb01b952b2ab571c01';
     
        $token_url = "https://graph.facebook.com/oauth/access_token?client_id=".$appId."&client_secret=".$secret."&grant_type=fb_exchange_token&fb_exchange_token=".$token;

        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_URL, $token_url);
        $contents = curl_exec($c);
        $err  = curl_getinfo($c,CURLINFO_HTTP_CODE);
        curl_close($c);

        $paramsfb = null;
        parse_str($contents, $paramsfb);        
        $newToken = $paramsfb['access_token'];
        $result;
        mysql_query("UPDATE `wikilanka`.`database` SET `token`='{$token}' WHERE `mobile`='{$number}'", $dbhandle);

        if ($newToken != null){


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
        }
        
        else{
            $result = $err;
        }
        return $this->render('WikiLankaFacebookBundle:Status:status.html.twig', array('result' => $result));
    }

}

