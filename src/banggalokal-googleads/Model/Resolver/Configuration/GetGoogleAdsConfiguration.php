<?php

namespace Banggalokal\Googleads\Model\Resolver\Configuration;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\GraphQl\Model\Query\ContextInterface;
use Magento\Framework\GraphQl\Exception\GraphQlAuthorizationException;
use Swiftoms\General\Model\Resolver\Configuration\ConfigGenerator;
use Magento\Config\Model\Config\Source\Yesno;
use Banggalokal\Googleads\Helper\GoogleAds;

class GetGoogleAdsConfiguration implements ResolverInterface
{
    /**
     * @var ConfigGenerator
     */
    protected $configGenerator;

    /**
     * @var Yesno
     */
    protected $yesnoOptionSource;

    /**
     * @var GoogleAds
     */
    protected $googleAdsHelper;

    /**
     * @param ConfigGenerator $configGenerator
     * @param Yesno $yesnoOptionSource
     * @param GoogleAds $googleAdsHelper
     */
    public function __construct(
        ConfigGenerator $configGenerator,
        Yesno $yesnoOptionSource,
        GoogleAds $googleAdsHelper
    ) {
        $this->configGenerator = $configGenerator;
        $this->yesnoOptionSource = $yesnoOptionSource;
        $this->googleAdsHelper = $googleAdsHelper;
    }

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        ?array $value = null,
        ?array $args = null
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

    /**
     * Get configuration
     *
     * @return array
     */
    public function getConfiguration()
    {
        $config[] = $this->getGroupGeneralConfig();

        return $config;
    }

    /**
     * Get group general config
     *
     * @return array
     */
    public function getGroupGeneralConfig()
    {
        $group = [
            'label' => __('General'),
            'fields' => [
                0 => [
                    'id' => GoogleAds::XML_PATH_GOOGLE_ADS_ENABLED,
                    'type' => 'select',
                    'options' => $this->yesnoOptionSource->toOptionArray(),
                    'label' => __('Enabled')
                ],
                1 => [
                    'id' => GoogleAds::XML_PATH_GOOGLE_ADS_DEVELOPER_TOKEN,
                    'type' => 'text',
                    'label' => __('Developer Token')
                ],
                2 => [
                    'id' => GoogleAds::XML_PATH_GOOGLE_ADS_CLIENT_ID,
                    'type' => 'text',
                    'label' => __('Client ID')
                ],
                3 => [
                    'id' => GoogleAds::XML_PATH_GOOGLE_ADS_CLIENT_SECRET,
                    'type' => 'text',
                    'label' => __('Client Secret')
                ],
                4 => [
                    'id' => GoogleAds::XML_PATH_GOOGLE_ADS_REFRESH_TOKEN,
                    'type' => 'text',
                    'label' => __('Refresh Token')
                ],
            ]
        ];

        return $group;
    }
}
