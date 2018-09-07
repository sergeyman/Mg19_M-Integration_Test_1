<?php
class ASV_TestMI_Adminhtml_TestmibackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('testmi/testmibackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("TestMI BackEnd"));
	   $this->renderLayout();
    }
}