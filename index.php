<?php
// var_dump('expression');exit();
define("APPLICATION_PATH",  dirname(__FILE__));
$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap() //call bootstrap methods defined in Bootstrap.php
 ->run();

// $configs = array(
// "application" => array(
//     "directory" => dirname(__FILE__) . "/application/",
//     "dispatcher" => array(
//           "catchException" => 0,
//         ),
//     "view" => array(
//            "ext" => "phtml",
//         ),
//     ),
// );
// $app = new Yaf_Application($config)
?>