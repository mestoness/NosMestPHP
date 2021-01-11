<?php  



/*



	
-----------------------------------------------------------------------------------------

           _                    _       ____        _    _      __  __                _     
     /\   | |                  | |     |  _ \      | |  (_)    |  \/  |              (_)    
    /  \  | |__  _ __ ___   ___| |_    | |_) | __ _| | ___     | \  / | ___ _ __ ___  _ ___ 
   / /\ \ | '_ \| '_ ` _ \ / _ \ __|   |  _ < / _` | |/ / |    | |\/| |/ _ \ '_ ` _ \| / __|
  / ____ \| | | | | | | | |  __/ |_    | |_) | (_| |   <| |    | |  | |  __/ | | | | | \__ \
 /_/    \_\_| |_|_| |_| |_|\___|\__|   |____/ \__,_|_|\_\_|    |_|  |_|\___|_| |_| |_|_|___/
                                                                                            
                                                
-----------------------------------------------------------------------------------------
                                                                                               
  _   _           __  __           _   
 | \ | |         |  \/  |         | |  
 |  \| | ___  ___| \  / | ___  ___| |_ 
 | . ` |/ _ \/ __| |\/| |/ _ \/ __| __|
 | |\  | (_) \__ \ |  | |  __/\__ \ |_ 
 |_| \_|\___/|___/_|  |_|\___||___/\__|
                                       
                                       
-----------------------------------------------------------------------------------------
                                                                                          
*/




function includePage($directory){
require_once $_SERVER['DOCUMENT_ROOT'] . $directory;
return;
//example => includePage('/example/s.php');
}
function stringGen($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    //@ahmetbakimms

}
function shorterString($string, $str = 10)
	{
	if (strlen($string) > $str)
	{
	if (function_exists("mb_substr")) $string = mb_substr($string, 0, $str, "UTF-8").'..';
	else $string = substr($string, 0, $str).'..';
	}
	return $string;
	//@ahmetbakimms

	}
function trimData($query)
{
//Blank Delete
$query = str_replace("/s+/","",$query);
$query = str_replace(" ","",$query);
$query = str_replace(" ","",$query);
$query = str_replace(" ","",$query);
$query = str_replace("/s/g","",$query);
$query = str_replace("/s+/g","",$query);    
$query = trim($query);
return $query; 
};
function sefUrl($text) {
    $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
    $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
    $text = strtolower(str_replace($find, $replace, $text));
    $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    $text = str_replace(' ', '-', $text);
    return $text;
    //@ahmetbakimms

}
function filterHtml($data){
$result = htmlspecialchars(strip_tags($data));
return $result;
//@ahmetbakimms
}

function jsAlert($text){
$alert="<script>alert('".$text."')</script>";
return $alert;
//@ahmetbakimms
}
function dbSelectWhere($db,$tableName,$whereQuery,$chosenQuery){
$variable = $db ->prepare("SELECT * FROM $tableName where $whereQuery=:$whereQuery");
$variable->execute(array("$whereQuery" => $chosenQuery));
return $variable;
//@ahmetbakimms
}
function dbSelectWhere2($db,$tableName,$whereQuery,$chosenQuery,$whereQuery2,$chosenQuery2){
$variable = $db ->prepare("SELECT * FROM $tableName where $whereQuery=:$whereQuery");
$variable->execute(array("$whereQuery" => $chosenQuery,"$whereQuery2" => $chosenQuery2));
return $variable;
//@ahmetbakimms
}
function dbSelect($db,$tableName){
$variable = $db ->prepare("SELECT * FROM $tableName");
$variable->execute(array());
return $variable;
//@ahmetbakimms
}

function sweatAlert($text,$title,$icon){
//icon varieties = success,error,warning,info,question
//@ahmetbakimms

	$sweatAlert = 
	"<script>
	Swal.fire(

 	'".$title."',
    '".$text."',
    '".$icon."'
  );
	</script>";
	return $sweatAlert;
}


function sessionControl($db,$tableName,$tableQueryName,$sessionName,$headerLocation){
  //example => sessionControl($db,"users","id","logged","login.php");
  /*********************************************************************************************/
  if (isset($_SESSION["$sessionName"])) {
  $sessionControl=$db->prepare("SELECT * FROM $tableName where $tableQueryName=:$tableQueryName");
  $sessionControl->execute(array("$tableQueryName" => $sessionName));
  $sessionControlCounter=$sessionControl->rowCount();
  if ($sessionControlCounter != 1) {
    header("$headerLocation");
    exit;
  }
  }
  else {
   header("$headerLocation");
   exit;
  }
}

function sessionControl2($db,$tableName,$tableQueryName,$tableQueryName2,$sessionName,$sessionName2,$headerLocation){
  //example => sessionControl($db,"users","id","logged","login.php");
  /*********************************************************************************************/
  if (isset($_SESSION["$sessionName"])) {
  $sessionControl=$db->prepare("SELECT * FROM $tableName where $tableQueryName=:$tableQueryName and $tableQueryName2=:$tableQueryName2");
  $sessionControl->execute(array("$tableQueryName" => $sessionName,"$tableQueryName2"=>$sessionName2));
  $sessionControlCounter=$sessionControl->rowCount();
  if ($sessionControlCounter == 0) {
    header("$headerLocation");
    exit;
  }
  }
  else {
   header("$headerLocation");
   exit;
  }
}


