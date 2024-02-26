<?php

namespace Banggalokal\Metaads\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Config\Model\ResourceModel\Config as ConfigResource;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Cache\Manager;
use Magento\Framework\App\Cache\Type\Config as CacheTypeConfig;

/**
 * Meta Ads helper
 */
class MetaAds extends \Magento\Framework\App\Helper\AbstractHelper
{
    public const XML_PATH_META_ADS_ENABLED = 'metaads_section/general/enable';
    public const XML_PATH_META_ADS_APPS_ID = 'metaads_section/general/apps_id';
    public const XML_PATH_META_ADS_SECRET_ID = 'metaads_section/general/secret_id';
    public const XML_PATH_META_ADS_ACCESS_TOKEN = 'metaads_section/general/access_token';

    /**
     * @var ConfigResource
     */
    private $configResource;

    /**
     * @var Manager
     */
    private $cacheManager;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    public function __construct(
        Context $context,
        ConfigResource $configResource,
        Manager $cacheManager,
        StoreManagerInterface $storeManager
    ) {
        $this->configResource = $configResource;
        $this->cacheManager = $cacheManager;
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    /**
     * Get is enabled for Meta Ads Integration
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return (bool) $this->scopeConfig->getValue(self::XML_PATH_META_ADS_ENABLED, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * Get Apps id for Meta Ads Integration
     *
     * @return string
     */
    public function getAppId()
    {
        return (string) $this->scopeConfig->getValue(self::XML_PATH_META_ADS_APPS_ID, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * Get secret id for Meta Ads Integration
     *
     * @return string
     */
    public function getSecretId()
    {
        return (string) $this->scopeConfig->getValue(self::XML_PATH_META_ADS_SECRET_ID, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * Get access token for Meta Ads Integration
     *
     * @return string
     */
    public function getAccessToken()
    {
        return (string) $this->scopeConfig->getValue(self::XML_PATH_META_ADS_ACCESS_TOKEN, ScopeInterface::SCOPE_WEBSITE);
    }
}
