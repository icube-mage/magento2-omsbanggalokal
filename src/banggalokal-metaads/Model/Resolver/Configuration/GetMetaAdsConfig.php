<?php

namespace Banggalokal\Metaads\Model\Resolver\Configuration;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

class GetMetaAdsConfig implements ResolverInterface
{
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
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
        
        $result["enable"] = $this->getConfigValue('metaads_section/general/enable');
        $result["apps_id"] = $this->getConfigValue('metaads_section/general/apps_id');
        $result["secret_id"] = $this->getConfigValue('metaads_section/general/secret_id');
        $result["access_token"] = $this->getConfigValue('metaads_section/general/access_token');

        return $result;
    }

    /**
     * Get config value based on store scope
     */
    private function getConfigValue($field){
        return $this->_scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE);
    }
}