<?php
	class Bantang_Test_Helper_Data extends Mage_Core_Helper_Abstract{
		public function getMessageUrl(){
			return Mage::getUrl('mitachello/message/index');//post後導向的page
		}
	}
	
	
?>