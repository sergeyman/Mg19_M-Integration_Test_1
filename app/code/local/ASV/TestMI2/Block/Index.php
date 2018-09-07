<?php   
class ASV_TestMI2_Block_Index extends Mage_Core_Block_Template {

    protected function _prepareLayout()
    {
        $this->getLayout()->getBlock('head')->addCss('css/productslider.css');

        $this->getLayout()->getBlock('head')->addItem('skin_js', 'js/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1-packed.js');

        parent::_prepareLayout();
    }

    public function indexAction() {
        $this->loadLayout();

        $this->renderLayout();
    }

    public function getData() {
        echo("In /Block/Index.getData() <br />");
    }




}