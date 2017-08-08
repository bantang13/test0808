<?php
$installer = new Mage_Sales_Model_Mysql4_Setup;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$installer->addAttribute(
    'order',
    'sync_status',
    array(
        'group'                => 'Default',
        'input'                => 'boolean',
        'source'               => 'eav/entity_attribute_source_boolean',
        'type'                 => 'int',
        'label'                => 'Order Sync Status',
        'global'               => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'required'             => 0,
        'default'              => 0,
        'visible_on_front'     => 0,
        'used_for_price_rules' => 0,
        'adminhtml_only'       => 1,
    )
);

$installer->endSetup();