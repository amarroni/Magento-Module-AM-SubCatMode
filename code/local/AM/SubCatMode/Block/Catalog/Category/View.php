<?php

class AM_SubCatMode_Block_Catalog_Category_View extends Mage_Catalog_Block_Category_View
{
   protected $_bodyClass = true;

    /**
     * Check if category display mode is "Subcategoires"
     * @return bool
     */
    public function isSubcategoriesMode()
    {
        return $this->getCurrentCategory()->getDisplayMode()==AM_SubCatMode_Model_Catalog_Category::DM_SUBCATEGORIES;
    }

    public function getIsBrowseStyle(){
    	if ($root = $this->getLayout()->getBlock('root')) {

        	if(stristr($root->getBodyClass(), 'browse')===false){
        		$this->_bodyClass = false;
        	}
        }
    	return $this->_bodyClass;
    }

    public function getSubcategoriesHtml()
    {
        if (!$this->getData('subcategories_block_html')) {
            $html = $this->getLayout()->createBlock('catalog/navigation')
            	->setColumnCount('3')
                ->setTemplate('am/subcatmode/catalog/category/categories.phtml')
                ->toHtml();
            $this->setData('subcategories_block_html', $html);
        }
        return $this->getData('subcategories_block_html');
    }
}
