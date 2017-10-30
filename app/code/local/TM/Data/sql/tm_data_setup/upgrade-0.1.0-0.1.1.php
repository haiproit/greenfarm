<?php
/**
 * Created by PhpStorm.
 * User: hop
 * Date: 21/12/2016
 * Time: 22:00
 */
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

// add category
$categories = array(
    TM_Data_Helper_Data::CAT_VEGETABLE_ID => array(
        'name' => 'Vegetable',
        'url_key' => TM_Data_Helper_Data::CAT_VEGETABLE_SLUG,
        'parent_id' => 2,
        'level' => 2,
        'child_count' => 10,
    ),
    TM_Data_Helper_Data::CAT_MEAL_ID => array(
        'name' => 'Meal',
        'url_key' => TM_Data_Helper_Data::CAT_MEAL_SLUG,
        'parent_id' => 2,
        'level' => 2,
        'child_count' => 10,
    ),
    TM_Data_Helper_Data::CAT_FRUIT_ID => array(
        'name' => 'Fruit',
        'url_key' => TM_Data_Helper_Data::CAT_FRUIT_SLUG,
        'parent_id' => 2,
        'level' => 2,
        'child_count' => 10,
    ),
    TM_Data_Helper_Data::CAT_RICE_ID => array(
        'name' => 'Rice',
        'url_key' => TM_Data_Helper_Data::CAT_RICE_SLUG,
        'parent_id' => 2,
        'level' => 2,
        'child_count' => 10,
    ),
    TM_Data_Helper_Data::CAT_SPECIALTIES_ID => array(
        'name' => 'Specialties',
        'url_key' => TM_Data_Helper_Data::CAT_SPECIALTIES_SLUG,
        'parent_id' => 2,
        'level' => 2,
        'child_count' => 10,
    ),
    TM_Data_Helper_Data::CAT_OTHERS_ID => array(
        'name' => 'Others',
        'url_key' => TM_Data_Helper_Data::CAT_OTHERS_SLUG,
        'parent_id' => 2,
        'level' => 2,
        'child_count' => 10,
    )
);

/**
 * @var Mage_Catalog_Model_Category $category
 */
$category = Mage::getModel('catalog/category');
$categoryCollection = $category->getCollection()
    ->addFieldToFilter('entity_id',
        ['gt' => 2]
    );
//delete before insert new category
Mage::register('isSecureArea', true); /* set secure admin area*/
foreach ($categoryCollection as $category) {
    $category->delete();
}
Mage::unregister('isSecureArea'); /* un set secure admin area*/
//insert new category
foreach ($categories as $cat_id => $cat_data) {
    // unset before save
    $category->unsetData();
    $category->setId($cat_id);
    $category->setName($cat_data['name']);
    $category->setUrlKey($cat_data['url_key']);
    $category->setIsActive(1);
    $category->setLevel($cat_data['level']);
    $category->setChildrenCount($cat_data['child_count']);
    $category->setCreatedAt(date('Y-m-d h:i:s'));
    $category->setDisplayMode(Mage_Catalog_Model_Category::DM_PRODUCT);
    $category->setIsAnchor(0); //for active achor
    $category->setStoreId(Mage::app()->getStore()->getId());
    if ($cat_data['parent_id']) {
        $parentCategory = Mage::getModel('catalog/category')->load($cat_data['parent_id']);
        $category->setPath($parentCategory->getPath() . '/' . $cat_id);
    }
    $category->save();
}

$installer->endSetup();