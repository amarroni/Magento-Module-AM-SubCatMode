<?php

class AM_SubCatMode_Model_Resource_Catalog_Category extends Mage_Catalog_Model_Resource_Category
{
    /**
     * Prepare base collection setup for get categories list
     *
     * @param Mage_Catalog_Model_Category $category
     * @return Mage_Catalog_Model_Resource_Category_Collection
     */
    protected function _getChildrenCategoriesBase($category)
    {
        $collection = $category->getCollection();
        $collection->addAttributeToSelect('url_key')
            ->addAttributeToSelect('name')
            /*[START] Adding image to select*/
            ->addAttributeToSelect('image')
            /*[END]*/
            ->addAttributeToSelect('all_children')
            ->addAttributeToSelect('is_anchor')
            ->setOrder('position', Varien_Db_Select::SQL_ASC)
            ->joinUrlRewrite();

        return $collection;
    }
}
