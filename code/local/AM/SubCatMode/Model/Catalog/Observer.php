<?php

class AM_SubCatMode_Model_Catalog_Observer
{
    /**
     * Add image filed to flat select
     *
     * @param Varien_Event_Observer $observer
     */
    public function customSelect(Varien_Event_Observer $observer){
        $select = $observer->getSelect();
        $select->columns('image');
    }
}
