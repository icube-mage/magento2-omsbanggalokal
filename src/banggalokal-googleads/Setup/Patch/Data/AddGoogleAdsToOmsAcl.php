<?php
/**
 * Copyright &copy; Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Banggalokal\Googleads\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Banggalokal\Googleads\Helper\Acl;

class AddGoogleAdsToOmsAcl implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * @inheritdoc
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        $data = [
            // Configuration
            [
                'acl_code' => Acl::CONFIGURATION_PYB_GOOGLE_ADS,
                'acl_name' => 'Configuration Google Ads',
                'acl_header' => Acl::OMS_LITE_HEADER_CONFIGURATIONS,
                'acl_label' => 'Google Ads',
                'used_in_pwa' => 1,
                'is_seller' => 1
            ],
            // Seller
            [
                'acl_code' => Acl::SELLER_GOOGLE_ADS,
                'acl_name' => 'Seller Google Ads',
                'acl_header' => 'seller',
                'acl_label' => 'Google Ads',
                'used_in_pwa' => 1,
                'is_seller' => 1
            ],
            [
                'acl_code' => Acl::SELLER_GOOGLE_ADS_CREATE,
                'acl_name' => 'Seller Google Ads Create',
                'acl_header' => Acl::SELLER_GOOGLE_ADS,
                'acl_label' => 'Create Campaign',
                'used_in_pwa' => 1,
                'is_seller' => 1
            ],
            [
                'acl_code' => Acl::SELLER_GOOGLE_ADS_UPDATE,
                'acl_name' => 'Seller Google Ads Update',
                'acl_header' => Acl::SELLER_GOOGLE_ADS,
                'acl_label' => 'Update Campaign',
                'used_in_pwa' => 1,
                'is_seller' => 1
            ],
            [
                'acl_code' => Acl::SELLER_GOOGLE_ADS_VIEW,
                'acl_name' => 'Seller Google Ads View',
                'acl_header' => Acl::SELLER_GOOGLE_ADS,
                'acl_label' => 'View Campaign',
                'used_in_pwa' => 1,
                'is_seller' => 1
            ],
            [
                'acl_code' => Acl::SELLER_GOOGLE_ADS_REPORT,
                'acl_name' => 'Seller Google Ads Report',
                'acl_header' => Acl::SELLER_GOOGLE_ADS,
                'acl_label' => 'Report',
                'used_in_pwa' => 1,
                'is_seller' => 1
            ],
        ];

        $this->moduleDataSetup->getConnection()->insertOnDuplicate(
            $this->moduleDataSetup->getConnection()->getTableName('oms_acl'),
            $data
        );
        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
}
