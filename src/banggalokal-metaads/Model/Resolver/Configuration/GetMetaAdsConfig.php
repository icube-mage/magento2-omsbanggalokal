<?php

namespace Banggalokal\Metaads\Model\Resolver\Configuration;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;
use Swiftoms\General\Model\Resolver\Configuration\ConfigGenerator;
use Magento\Config\Model\Config\Source\Yesno;
use Banggalokal\Metaads\Helper\MetaAds;

class GetMetaAdsConfig implements ResolverInterface
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;
 
    /**
     * @var ConfigGenerator
     */
    protected $configGenerator;

    /**
     * @var Yesno
     */
    protected $yesnoOptionSource;

    /**
     * @var MetaAds
     */
    protected $metaAdsHelper;


    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        ConfigGenerator $configGenerator,
        Yesno $yesnoOptionSource,
        MetaAds $metaAdsHelper
    ) {
        $this->_scopeConfig = $scopeConfig;
        $this->configGenerator = $configGenerator;
        $this->yesnoOptionSource = $yesnoOptionSource;
        $this->metaAdsHelper = $metaAdsHelper;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {

        /** @var ContextInterface $context */
        if (false === $context->getExtensionAttributes()->getIsCustomer()) {
            throw new GraphQlAuthorizationException(
                __('The request is allowed for logged in.')
            );
        }

        $configs = $this->getConfiguration();
        $configs = $this->configGenerator->formatConfig($configs);

        return $configs;
    }

    public function getConfiguration()
    {
        $config[] = $this->getGroupGeneralConfig();

        return $config;
    }

    public function getGroupGeneralConfig()
    {
        $group = [
            'label' => __('General'),
            'fields' => [
                0 => [
                    'id' => MetaAds::XML_PATH_META_ADS_ENABLED,
                    'type' => 'select',
                    'options' => $this->yesnoOptionSource->toOptionArray(),
                    'label' => __('Enabled')
                ],
                1 => [
                    'id' => MetaAds::XML_PATH_META_ADS_APPS_ID,
                    'type' => 'text',
                    'label' => __('Apps ID')
                ],
                2 => [
                    'id' => MetaAds::XML_PATH_META_ADS_SECRET_ID,
                    'type' => 'text',
                    'label' => __('Secret ID')
                ],
                3 => [
                    'id' => MetaAds::XML_PATH_META_ADS_ACCESS_TOKEN,
                    'type' => 'text',
                    'label' => __('Access Token')
                ],
            ]
        ];

        return $group;
    }

}