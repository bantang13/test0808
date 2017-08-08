<?php
class Mic_Faq_FaqsController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		//echo 'faq';
		$this->loadLayout();
		$this->renderLayout();
	}
	
	protected function _isAllowed(){
		return Mage::getSingleton('admin/session')->isAllowed('micfaq/awfaq_list');
	}
		
}

?>