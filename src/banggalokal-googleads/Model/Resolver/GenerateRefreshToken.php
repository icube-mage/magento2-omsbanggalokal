<?php

namespace Banggalokal\Googleads\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\GraphQl\Model\Query\ContextInterface;
use Magento\Framework\GraphQl\Exception\GraphQlAuthorizationException;
use Magento\Framework\GraphQl\Exception\GraphQlAlreadyExistsException;
use Banggalokal\Googleads\Helper\GoogleAds;
use Magento\Store\Model\StoreManagerInterface;

class GenerateRefreshToken implements ResolverInterface
{
    /**
     * @var GoogleAds
     */
    protected $googleAdsHelper;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @param GoogleAds $googleAdsHelper
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        GoogleAds $googleAdsHelper,
        StoreManagerInterface $storeManager
    ) {
        $this->googleAdsHelper = $googleAdsHelper;
        $this->storeManager = $storeManager;
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
        if (!$this->googleAdsHelper->getIsEnabled()) {
            throw new GraphQlAuthorizationException(
                __('Enable Google Ads Integration to generate refresh token.')
            );
        }
        if ($this->googleAdsHelper->getRefreshToken()) {
            throw new GraphQlAlreadyExistsException(
                __('Refresh Token Already Set.')
            );
        }

        $oauth2 = $this->googleAdsHelper->getOAuth2();
        $url = $oauth2->buildFullAuthorizationUri(['access_type' => 'offline']);

        return $url;
    }
}
