<?php
	class Bantang_Test_LoginController extends Mage_Core_Controller_Front_Action{
		public function indexAction(){
			//以下2行用意為引用原生頁面
			$this->loadLayout();
			$this->renderLayout();
		}
		
		public function successAction(){
			echo 'success ^_____________^';
		}
		
		
		public function failAction(){
			echo 'fail 一一"';
		}
		
	}




?>