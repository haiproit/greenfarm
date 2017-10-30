<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

$footerInfoLeftVN = <<<EOD
<div class="links">
<ul>
<li><span>Địa chỉ: 123/2/3, Đường Lý Thường Kiết, Quận Tân Bình, Tp. Hồ Chí Minh</span></li>
<li><span>Điện thoại: </span><a href="tel: +84 0123 456 7891">+84 0123 456 7891</a></li>
<li><span>Email: greenfarm@gmail.com</span><span>greenfarm@gmail.com</span></li>
</ul>
</div>
EOD;

$footerInfoLeftEN = <<<EOD
<div class="links">
<ul>
<li><span>Address: 123/2/3, Ly Thuong Kiet Street, Tan Binh Ward, Ho Chi Minh City</span></li>
<li><span>Phone: </span><a href="tel: +84 0123 456 7891">+84 0123 456 7891</a></li>
<li><span>Email: greenfarm@gmail.com</span><span>greenfarm@gmail.com</span></li>
</ul>
</div>
EOD;

$footerLinksAboutVN = <<<EOD
<div class="links">
<ul>
<li><a href="{{store direct_url=""}}">Về chúng tôi</a></li>
<li><a href="{{store direct_url=""}}">Tầm nhìn - sứ mệnh</a></li>
<li><a href="{{store direct_url=""}}">Bộ máy tổ chức</a></li>
<li><a href="{{store direct_url=""}}">Hệ thống phân phối</a></li>
<li><a href="{{store direct_url=""}}"> Đối tác</a></li>
</ul>
</div>
EOD;

$footerLinksAboutEN = <<<EOD
<div class="links">
<ul>
<li><a href="{{store direct_url=""}}">About Us</a></li>
<li><a href="{{store direct_url=""}}">Vision - Mission</a></li>
<li><a href="{{store direct_url=""}}">Organization</a></li>
<li><a href="{{store direct_url=""}}">Distribution System</a></li>
<li><a href="{{store direct_url=""}}"> Our Partners</a></li>
</ul>
</div>
EOD;

$footerLinksPolicyVN = <<<EOD
<div class="links">
<ul>
<li><a href="{{store direct_url=""}}">Chính Sách Riêng Tư</a></li>
<li><a href="{{store direct_url=""}}">Điều Khoản & Điều Kiện</a></li>
<li><a href="{{store direct_url=""}}">Thỏa Thuận Người Dùng</a></li>
<li><a href="{{store direct_url=""}}">Chính sách đổi trả</a></li>
<li><a href="{{store direct_url=""}}">Chính sách bảo hành</a></li>
</ul>
</div>
EOD;

$footerLinksPolicyEN = <<<EOD
<div class="links">
<ul>
<li><a href="{{store direct_url=""}}">Privacy</a></li>
<li><a href="{{store direct_url=""}}">Term & Conditions</a></li>
<li><a href="{{store direct_url=""}}">User Agreement</a></li>
<li><a href="{{store direct_url=""}}">Payment policy</a></li>
<li><a href="{{store direct_url=""}}">Warranty Policy</a></li>
</ul>
</div>
EOD;

$footerFollowUS = <<<EOD
<span class="tm-social-tit">Follow us on</span><br class="visible-xs">
<a href="{{store direct_url=" "}}"><span class="icon-social icon-social-facebook">Facebook</span></a>
<a href="{{store direct_url=" "}}"><span class="icon-social icon-social-instagram">Instagram</span></a>
<a href="{{store direct_url=" "}}"><span class="icon-social icon-social-youtube">Youtube</span></a>
EOD;

$mainMenuVN = <<<EOD
<li class="active">Trang Chủ</li>
<li>Rau Củ</li>
<li>
    <div>Sản Phẩm</div>Khác
    <ul>
        <li>Rau Củ Sạch</li>
        <li>Thịt Sạch</li>
        <li>Gạo</li>
        <li>Đặc Sản</li>
        <li>Sản Phẩm </li>
    </ul>
</li>
<li>Tin Tức</li>
<li>Giới thiệu</li>
<li>Liên Hệ</li>
EOD;

$mainMenuEN = <<<EOD
<li class="active">Home</li>
<li>Vegetables</li>
<li>
    <div>Products</div>
    <ul>
        <li>Vegetables</li>
        <li>Meal</li>
        <li>Rice</li>
        <li>Specialties</li>
        <li>Others</li>
    </ul>
</li>
<li>News</li>
<li>About Us</li>
<li>Contact</li>
EOD;


$staticBlocks = [
    [
        'title' => '[Footer] Footer Information Left EN',
        'identifier' => 'footer_information_left_en',
        'content' => $footerInfoLeftEN,
        'is_active' => 1,
        'stores' => [1]
    ],
    [
        'title' => '[Footer] Footer Information Left VN',
        'identifier' => 'footer_information_left_vn',
        'content' => $footerInfoLeftVN,
        'is_active' => 1,
        'stores' => [6]
    ],
    [
        'title' => '[Footer] Footer Links About Us EN',
        'identifier' => 'footer_links_about_us_en',
        'content' => $footerLinksAboutEN,
        'is_active' => 1,
        'stores' => [1]
    ],
    [
        'title' => '[Footer] Footer Links About Us VN',
        'identifier' => 'footer_links_about_us_vn',
        'content' => $footerLinksAboutVN,
        'is_active' => 1,
        'stores' => [6]
    ],
    [
        'title' => '[Footer] Footer Links Policy EN',
        'identifier' => 'footer_links_policy_en',
        'content' => $footerLinksPolicyEN,
        'is_active' => 1,
        'stores' => [1]
    ],
    [
        'title' => '[Footer] Footer Links Policy VN',
        'identifier' => 'footer_links_policy_vn',
        'content' => $footerLinksPolicyVN,
        'is_active' => 1,
        'stores' => [6]
    ],
    [
        'title' => '[Footer] Footer Links Follow Us',
        'identifier' => 'footer_links_follow_us',
        'content' => $footerFollowUS,
        'is_active' => 1,
        'stores' => [6,1]
    ],
    [
        'title' => '[Top] Main Menu EN',
        'identifier' => 'top_main_menu_en',
        'content' => $mainMenuEN,
        'is_active' => 1,
        'stores' => [1]
    ],
    [
        'title' => '[Top] Main Menu VN',
        'identifier' => 'top_main_menu_vn',
        'content' => $mainMenuVN,
        'is_active' => 1,
        'stores' => [6]
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

    $setup = new Mage_Catalog_Model_Resource_Setup('core_setup');

// add attributes group
    $setup->addAttributeGroup(
        Mage_Catalog_Model_Product::ENTITY,   // Entity type
        'Default',                            // Attribute set name
        'GreenFarm',                           // Attribute set group name
        1                                     // Position on the attribute set group
    );

    // add attributes
    $attributes = array(
        array(
            'code'      => TM_Catalog_Helper_Data::PRODUCT_COMBO_CODE,
            'label'     => 'Combo',
            'option' => array(
                'values' => array(
                    'Combo'  => 'Combo' ,
                    'Normal' => 'Normal'
                )
            )
        )
    );

    $sort = 100;
    foreach ($attributes as $attr_data) {
        $setup->removeAttribute(Mage_Catalog_Model_Product::ENTITY, $attr_data['code']);

        $sort++;
        $setup->addAttribute(Mage_Catalog_Model_Product::ENTITY, $attr_data['code'], array(
            'label'                      => $attr_data['label'],             // Default label
            'type'                       => 'varchar',             // Attribute type (varchar, text, int, decimal...)
            'note'                       => '',                 // Note below the input field on admin area
            'visible'                    => true,               // Is the attribute visible? If true the field appears in admin product page.
            'user_defined'               => true,               // Is the attribute user defined? If false the attribute isn't removable. TRUE needed if configurable attribute.
            'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL, // Attribute scope
            'input'                      => 'select',      // Input type (text, textarea, select...)
            'backend'                    => 'eav/entity_attribute_backend_array',
            'source'                     => '',
            'frontend'                   => '',
            'unique'                     => false,              // Must attribute values be unique?
            'required'                   => true,              // Is the attribute mandatory?
            'frontend_class'             => '',                 // Validate input
            //'source'                     => 'sourcetype/attribute_source_type',
            'apply_to'                   => implode(',', array(Mage_Catalog_Model_Product_Type::TYPE_SIMPLE, Mage_Catalog_Model_Product_Type::TYPE_CONFIGURABLE)), // Product types
            'is_configurable'            => true,               // Can the attribute be used to create configurable products?

            'searchable'                 => true,               // Is the attribute searchable?
            'visible_in_advanced_search' => true,               // Is the attribute visible on advanced search?
            'comparable'                 => true,               // Is the attribute comparable? (on frontend).
            'filterable'                 => true,               // Is the attribute filterable? (on frontend, in category view)
            'filterable_in_search'       => true,               // Is the attribute filterable? (on frontend, in search view)
            'used_for_promo_rules'       => true,               // Do we need that attribute for specific promo rules?
            'position'                   => $sort,              // Which position on the admin area form group?
            'is_html_allowed_on_front'   => false,              // Is HTML allowed on frontend?
            'visible_on_front'           => true,               // Is the attribute visible on front?
            'used_in_product_listing'    => true,               // Should we flat this attribute?
            'used_for_sort_by'           => false,              // Can the attribute be used for the 'sort by' select on catalog/search views?
            'wysiwyg_enabled'            => false,              // Is Wysiwyg enabled? (use `textarea` input if you put that value to true)
            'option'                     => $attr_data['option'],
        ));
        $setup->addAttributeToSet(
            Mage_Catalog_Model_Product::ENTITY,   // Entity type
            'Default',                            // Attribute set name
            'GreenFarm',                           // Attribute set group name
            $attr_data['code'],                   // Attribute code to add
            $sort                                 // Position on the attribute set group
        );
    }

$installer->endSetup();