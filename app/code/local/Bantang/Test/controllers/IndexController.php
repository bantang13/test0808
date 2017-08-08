<?php
	class Bantang_Test_IndexController extends Mage_Core_Controller_Front_Action{
		public function indexAction(){
			//以下2行用意為引用原生頁面
			$this->loadLayout();
			$this->renderLayout();
		}
	}




?>