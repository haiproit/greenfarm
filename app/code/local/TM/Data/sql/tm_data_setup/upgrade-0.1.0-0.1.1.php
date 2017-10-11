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

//content

$installer->endSetup();