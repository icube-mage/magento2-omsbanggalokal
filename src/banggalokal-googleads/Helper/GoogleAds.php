<?php

namespace Banggalokal\Googleads\Helper;

use Magento\Store\Model\ScopeInterface;
use Google\Auth\CredentialsLoader;
use Google\Auth\OAuth2;
use Google\Ads\GoogleAds\Lib\V15\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V15\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\Configuration;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Magento\Config\Model\ResourceModel\Config as ConfigResource;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Cache\Manager;
use Magento\Framework\App\Cache\Type\Config as CacheTypeConfig;

/**
 * Google Ads helper
 */
class GoogleAds extends \Magento\Framework\App\Helper\AbstractHelper
{
    public const XML_PATH_GOOGLE_ADS_ENABLED = 'banggalokal_googleads/general/enabled';
    public const XML_PATH_GOOGLE_ADS_DEVELOPER_TOKEN = 'banggalokal_googleads/general/developer_token';
    public const XML_PATH_GOOGLE_ADS_MANAGER_ID = 'banggalokal_googleads/general/manager_id';
    public const XML_PATH_GOOGLE_ADS_CLIENT_ID = 'banggalokal_googleads/general/client_id';
    public const XML_PATH_GOOGLE_ADS_CLIENT_SECRET = 'banggalokal_googleads/general/client_secret';
    public const XML_PATH_GOOGLE_ADS_REFRESH_TOKEN = 'banggalokal_googleads/general/refresh_token';

    /**
     * @var string the OAuth2 scope for the Google Ads API
     * @see https://developers.google.com/google-ads/api/docs/oauth/internals#scope
     */
    private const SCOPE = 'https://www.googleapis.com/auth/adwords';

    /**
     * @var string the Google OAuth2 authorization URI for OAuth2 requests
     * @see https://developers.google.com/identity/protocols/OAuth2InstalledApp#step-2-send-a-request-to-googles-oauth-20-server
     */
    private const AUTHORIZATION_URI = 'https://accounts.google.com/o/oauth2/v2/auth';

    private const REDIRECT_PATH = 'gads/response/index';

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
     * Get is enabled for Google Ads Integration
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return (bool) $this->scopeConfig->getValue(self::XML_PATH_GOOGLE_ADS_ENABLED, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * Get developer token for Google Ads Integration
     *
     * @return string
     */
    public function getDeveloperToken()
    {
        return (string) $this->scopeConfig->getValue(self::XML_PATH_GOOGLE_ADS_DEVELOPER_TOKEN, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * Get manager id for Google Ads Integration
     *
     * @return string
     */
    public function getManagerId()
    {
        return str_replace("-", "", (string) $this->scopeConfig->getValue(self::XML_PATH_GOOGLE_ADS_MANAGER_ID, ScopeInterface::SCOPE_WEBSITE));
    }

    /**
     * Get client id for Google Ads Integration
     *
     * @return string
     */
    public function getClientId()
    {
        return (string) $this->scopeConfig->getValue(self::XML_PATH_GOOGLE_ADS_CLIENT_ID, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * Get client secret for Google Ads Integration
     *
     * @return string
     */
    public function getClientSecret()
    {
        return (string) $this->scopeConfig->getValue(self::XML_PATH_GOOGLE_ADS_CLIENT_SECRET, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * Get refresh token for Google Ads Integration
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return (string) $this->scopeConfig->getValue(self::XML_PATH_GOOGLE_ADS_REFRESH_TOKEN, ScopeInterface::SCOPE_WEBSITE);
    }

    /**
     * Set refresh token for Google Ads Integration
     *
     * @param string $refreshToken
     * @return void
     */
    public function setRefreshToken($refreshToken)
    {
        $this->configResource->saveConfig(self::XML_PATH_GOOGLE_ADS_REFRESH_TOKEN, $refreshToken);
        $this->cacheManager->flush([CacheTypeConfig::CACHE_TAG]);
    }

    /**
     * Get OAuth2 object
     *
     * @return OAuth2|null
     */
    public function getOAuth2()
    {
        $redirectUrl = $this->storeManager->getStore()->getBaseUrl() . self::REDIRECT_PATH;
        $oauth2 = new OAuth2(
            [
                'clientId' => $this->getClientId(),
                'clientSecret' => $this->getClientSecret(),
                'authorizationUri' => self::AUTHORIZATION_URI,
                'redirectUri' => $redirectUrl,
                'tokenCredentialUri' => CredentialsLoader::TOKEN_CREDENTIAL_URI,
                'scope' => self::SCOPE,
                // Create a 'state' token to prevent request forgery. See
                // https://developers.google.com/identity/protocols/OpenIDConnect#createxsrftoken
                // for details.
                'state' => sha1(openssl_random_pseudo_bytes(1024))
            ]
        );
        return $oauth2;
    }

    public function getGoogleAdsClient() : GoogleAdsClient
    {
        $configuration = new Configuration([
            'OAUTH2' => [
                'clientId' => $this->getClientId(),
                'clientSecret' => $this->getClientSecret(),
                'refreshToken' => $this->getRefreshToken()
            ],
            'GOOGLE_ADS' => [
                'developerToken' => $this->getDeveloperToken(),
                'loginCustomerId' => $this->getManagerId()
            ]
        ]);
        $oAuth2Credential = (new OAuth2TokenBuilder())
            ->from($configuration)->build();
        $googleAdsClient = (new GoogleAdsClientBuilder())
            ->from($configuration)
            ->withOAuth2Credential($oAuth2Credential)
            ->usingGapicV2Source(true)
            ->build();
        
        return $googleAdsClient;
    }
}
