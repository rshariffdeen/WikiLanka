<?php

namespace WikiLanka\Bundle\StyleBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller {
    

    public function indexAction() {        
            return $this->render('WikiLankaStyleBundle:Index:index.html.twig');                  
    }
    
    public function indexNumberAction(Request $request){
            $number = $request->get('number');
            ini_set('display_errors', 0);
            $username = "adminpixelz";
            $password = "pixelz313";
            $hostname = "mysql.pixelzexplorer.org";

            $Enumber = preg_replace("/[^0-9]/", "", $number);
            $dbhandle = mysql_connect($hostname, $username, $password)
                    or die("Unable to connect to MySQL");

            $result = mysql_query("SELECT * FROM `wikilanka`.`database` where `mobile`='{$Enumber}'", $dbhandle);
            $token;
            $user;
            $count = 0;

            $num_rows = mysql_num_rows($result);
            if ($num_rows > 0) {
                while ($row = mysql_fetch_array($result)) {
// echo $row['mobile']. " " . $row['ID']. "<br>";
                    $count = $count + 1;
                    $token = $row['token'];
                    $user = $row['user'];
                }
            }
            if ($count == 0) {
                mysql_query("INSERT INTO `wikilanka`.`database` (`mobile`,`token`) VALUES ($number,$number)", $dbhandle);
                mysql_close($dbhandle);
                
            }
            
            return $this->render('WikiLankaStyleBundle:Index:facebook.html.twig',array('number' => $Enumber));
        }
    
}




        