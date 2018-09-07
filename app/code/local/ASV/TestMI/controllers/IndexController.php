<?php

class ASV_TestMI_IndexController extends Mage_Core_Controller_Front_Action
{
    public function IndexAction()
    {
        //die('testmi');
       /* $this->loadLayout();
        $this->getLayout()->getBlock("head")->setTitle($this->__("TestMI FrontEnd"));
        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
        $breadcrumbs->addCrumb("home", array(
            "label" => $this->__("Home Page"),
            "title" => $this->__("Home Page"),
            "link" => Mage::getBaseUrl()
        ));

        $breadcrumbs->addCrumb("testmi frontend", array(
            "label" => $this->__("TestMI FrontEnd"),
            "title" => $this->__("TestMI FrontEnd")
        ));*/

        echo 'Hello';

    /*    $this->renderLayout();*/
    }

    public function viewAction() {
        //die('view');

        //$products = Mage::getModel('catalog/product')->load();
/*        $products = Mage::getModel('catalog/product')->getCollection()
            ->addAttributeToSelect('*')
            ->setOrder('created_at')
            ->setPageSize(5);
*/
        //print_r($products);
        //die();

        $this->loadLayout();
        $listBlock = $this->getLayout()->getBlock('testmi_index');
        print_r($listBlock);
        die();

        /*
        $this->getLayout()->getBlock('testmi_index')->assign(array("item" => $products,));
        $this->renderLayout();
*/
        echo "<h1>View Action!</h1>";
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
}