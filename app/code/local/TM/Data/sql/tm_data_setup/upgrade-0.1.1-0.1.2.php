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

$headerSlider = <<<EOD
// html slider here
EOD;

$homeComboProduct = <<<EOD
// html of combo here
EOD;

$homeLastestProduct = <<<EOD
// html of lastest products here
EOD;

$staticBlocks = [
    [
        'title' => '[Header] Main Slider',
        'identifier' => 'header_main_slider',
        'content' => $headerSlider,
        'is_active' => 1,
        'stores' => [1,6]
    ],
    [
        'title' => '[Homepage] Combo Products',
        'identifier' => 'home_combo_products',
        'content' => $homeComboProduct,
        'is_active' => 1,
        'stores' => [1,6]
    ],
    [
        'title' => '[Homepage] Lastest Products',
        'identifier' => 'home_lastest_products',
        'content' => $homeLastestProduct,
        'is_active' => 1,
        'stores' => [1,6]
    ]
];

$cmsModel = Mage::getModel('cms/block');

foreach ($staticBlocks as $staticBlock) {
    $blockExist = $cmsModel->load($staticBlock['identifier'], 'identifier');
    if($blockExist){
        $cmsModel->delete();
    }

    $cmsModel->unsetData();
    $cmsModel->setData($staticBlock);
    $cmsModel->save();
}


$installer->endSetup();