<?php   
class ASV_TestMI_Block_Index extends Mage_Core_Block_Template {

    public function getProducts()
    {
        die('Block/Index.getProducts()');
        $products = Mage::getModel('catalog/product')->getCollection()
            ->addAttributeToSelect('*')
            ->setOrder('created_at')
            ->setPageSize(5);
        return $products;
    }


    public function getProductsByParameters() {

        var_dump($this->getData('amount'));
        var_dump($this->getData('category_id'));
        //die('I\'m in getProductsByParameters()');
        //die('$this->getData(amount)');
        //die('$this->getData(category_id)');

        $categoryId = $this->getData('category_id');

        //die('List.php block = ' . $block);

        //return Mage::getResourceModel('siteblocks/block_collection');

        /*
        return Mage::getModel('siteblocks/block')->getCollection()
            ->addFieldToFilter('block_status',array('eq'=>IGN_Siteblocks_Model_Source_Status::ENABLED));
        */

        /*        return Mage::getModel('catalog/product')
                    ->getCollection()
                    ->addAttributeToSort('created_at', 'DESC')
                    ->addAttributeToSelect('*')
                    ->load($product_id);*/

        $category = Mage::getModel('catalog/category')->load($categoryId);

        $result = $category->getProductCollection()
            ->joinField('category_id', 'catalog/category_product', 'category_id', 'product_id = entity_id', null, 'left')
            ->addAttributeToFilter('category_id', array('in' => array(1 ,2 ,3)))
            //->addAttributeToSelect(array('name', 'price'));
            ->addAttributeToSelect('*');

        $result->getSelect()->limit($this->getData('amount'));

        //var_dump($this->getData('amount'));
        var_dump($this->getCategoryId());
        return $result;
    }


}