<?php
	class Mic_Faq_Model_Resource_Faqs_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract{
		public function _construct(){
			$this->_init('micfaq/faqs');
		}
	}

?>