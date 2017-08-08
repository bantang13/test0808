<?php
class Bantang_Test_Block_Message extends Mage_Core_Block_Template{//module name(Bantang)，目錄name(Test)，Block(固定，目錄名)，name(Message.php)
	
	public function getPostActionUrl(){
		return Mage::getUrl('mitachello/message/post');
	}
	
	public function getMessages(){
		$messages = Mage::getModel('mitachello/message')->getCollection();
		return $messages;
	}
	
}
?>