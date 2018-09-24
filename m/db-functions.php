<?php
/*db connect*/
function connect_db (){
	$db = new PDO('mysql:host=localhost;dbname=questionnaire', 'root', '');
    $db->exec("SET NAMES UTF8");
    return $db;
}
/*end of db connect*/

?>