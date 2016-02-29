<?php

class AM_SubCatMode_Model_Catalog_Category_Attribute_Source_Mode extends Mage_Catalog_Model_Category_Attribute_Source_Mode
{
    
    public function getAllOptions()
    {
        $listModes = parent::getAllOptions();
        
        $newlistmodes[] = array(
                    'value' => AM_SubCatMode_Model_Catalog_Category::DM_SUBCATEGORIES,
                    'label' => Mage::helper('catalog')->__('Subcategories only')
                    );

        return array_merge($listModes,$newlistmodes);;
    }
}
