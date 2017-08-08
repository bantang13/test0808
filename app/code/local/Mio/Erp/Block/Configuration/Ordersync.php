<?php
class Mio_Erp_Block_Configuration_Ordersync extends Mage_Adminhtml_Block_System_Config_Form_Field
{
	protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);
        $url = $this->getUrl('mioerp/sync/orders'); 
        $html = $this->getLayout()->createBlock('adminhtml/widget_button')
                    ->setType('button')
                    ->setClass('scalable')
                    ->setLabel('Run Now !')
                    ->setOnClick("setLocation('$url')")                    ->toHtml();
        return $html;
    }
}
    