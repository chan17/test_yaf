<?php
class IndexController extends Yaf_Controller_Abstract {
   /* default action */
   public function indexAction() {
       $this->_view->word = "hello world";
       //or
// print_r($_SERVER);
       // $this->getView()->word = "hello world";
   }

   public function useMetooAction(){
   		$database = Yaf_Registry::get('db');
   		$datas = $database->select("test_table","*"
,array('aaa'=>'dfdf'));
   		print_r($datas);

   		$datas2 = $database->get("test_table","*"
,array('aaa'=>'dfdf'));
   		print_r($datas2);
   		exit();
   }

}
?>