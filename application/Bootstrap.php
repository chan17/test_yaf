<?php
  /* bootstrap class should be defined under ./application/Bootstrap.php */
   class Bootstrap extends Yaf_Bootstrap_Abstract {
        public function _initConfig(Yaf_Dispatcher $dispatcher) {
            // var_dump(__METHOD__);
          // var_dump($dispatcher);
          print('11117777');
        }
        public function _initPlugin(Yaf_Dispatcher $dispatcher) {
            // var_dump(__METHOD__);

        }
        public function _initMysql(Yaf_Dispatcher $dispatcher){
          require_once(APPLICATION_PATH.'/application/library/Medoo/medoo.php');
          $database = new medoo(array(
              'database_type' => 'mysql',
              'database_name' => 'test',
              'server' => 'localhost',
              'username' => 'root',
              'password' => 'root',
              'charset' => 'utf8'
          ));
          Yaf_Registry::set('db', $database);
        }
   }


?>