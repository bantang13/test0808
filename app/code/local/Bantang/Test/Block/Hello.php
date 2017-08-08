<?php
class Bantang_Test_Block_Hello extends Mage_Core_Block_Template{//module name(Bantang)，目錄name(Test)，Block(固定，目錄名)，name(Hello.php)
	
	public function sayHello(){
		echo $this->__("Hello World");
	}
	
	public function saySomething($str=''){
		echo $str;
	}
	
	public function plus($a,$b){
		echo $a.'+'.$b.'='.($a+$b);
	}
	
}
?>