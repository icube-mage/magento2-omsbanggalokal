<?php 

namespace Banggalokal\Googleads\Controller\Response;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\ResultFactory;
use Banggalokal\Googleads\Helper\GoogleAds;

class Index implements HttpGetActionInterface
{
    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var GoogleAds
     */
    private $googleAdsHelper;

    public function __construct(
        ResultFactory $resultFactory,
        RequestInterface $request,
        GoogleAds $googleAdsHelper
    ) {
        $this->resultFactory = $resultFactory;
        $this->request = $request;
        $this->googleAdsHelper = $googleAdsHelper;
    }

    public function execute()
    {
        $data = [];
        if ($this->googleAdsHelper->getRefreshToken()) {
            $data["message"] = "Refresh token already set.";
            return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($data);
        }
        $state = $this->request->getParam('state');
        
        $oauth2 = $this->googleAdsHelper->getOAuth2();
        if (!$oauth2) {
            $data["message"] = "Data not found. Please regenerate refresh token.";
            return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($data);
        }
        // if (empty($state) || ($state !== $oauth2->getState())) {
        //     $data["message"] = "The state is empty or doesn't match expected one.";
        //     return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($data);
        // }

        // Set the authorization code and fetch refresh and access tokens.
        $code = $this->request->getParam('code');
        $oauth2->setCode($code);
        $authToken = $oauth2->fetchAuthToken();

        if (isset($authToken['refresh_token'])) {
            $refreshToken = $authToken['refresh_token'];
            $this->googleAdsHelper->setRefreshToken($refreshToken);
            $data["message"] = "Refresh token fetched successfully.";
        } else {
            $data["message"] = "Error fetching new refresh token. Please regenerate refresh token.";
        }

        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($data);
    }
}