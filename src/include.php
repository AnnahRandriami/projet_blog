<?php
define("SRC" ,  dirname(__FILE__));
define("ROOT" ,  dirname(SRC));
define("SP" ,  DIRECTORY_SEPARATOR);
define("CONFIG", ROOT.SP."config");
define("RESS", ROOT.SP."src".SP."css");
define("VIEWS", ROOT.SP."views");
define("MODEL", ROOT.SP."model");
define("BASE_URL", dirname(dirname($_SERVER['SCRIPT_NAME'])));
// liaison avec config et datalayer
require CONFIG.SP."config.php";
require MODEL.SP."DataLayer.class.php";
$model = new DataLayer();

//$var = $model->afficheRecent();
//print_r($var);
require "function.php";
?>