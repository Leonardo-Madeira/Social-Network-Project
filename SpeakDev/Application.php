<?php
	namespace SpeakDev;
	class Application{
		private $controller;
		private function setApp(){
			$loadName = 'SpeakDev\Controllers\\';
			$url = explode('/',@$_GET['url']);

			if($url[0] == ''){
				$loadName.='Home';
			}else{
				$loadName.=ucfirst(strtolower($url[0]));
			}

			$loadName.='Controller';

			if(file_exists($loadName.'.php')){
				$this->controller = new $loadName();
			}else{
				die('Não existe essa página!');
			}
		}
		public function run(){
			$this->setApp();
			$this->controller->index();
		}	
	}
?>