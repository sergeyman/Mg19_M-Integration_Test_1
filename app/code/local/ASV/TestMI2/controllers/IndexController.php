<?php
class ASV_TestMI2_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  /*$this->getLayout()->getBlock("head")->setTitle($this->__("TestMI FrontEnd"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("testmi frontend", array(
                "label" => $this->__("TestMI FrontEnd"),
                "title" => $this->__("TestMI FrontEnd")
		   ));*/

	  echo('In IndexCtrl.index()');

      $this->renderLayout(); 
	  
    }

    public function simpleAction() {
        //die('simple');
        //$this->loadLayout();
        echo "<h1>Simple Action!</h1>";
        //$this->renderLayout();
    }

    public function slider1Action() {
        //die('simple');
        $this->loadLayout();
        echo "<h1>Slider1 Action!</h1>";
        $this->renderLayout();
    }

    public function slider2Action() {
        //die('simple');
        $this->loadLayout();
        echo "<h1>Slider2 Action!</h1>";
        $this->renderLayout();
    }
}