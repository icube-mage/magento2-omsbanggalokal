SETUP PROJECT WITH NEW DEPLOYMENT
- git clone git@github.com:icube-mage/swiftoms.git
- git checkout tags/4.1.0
- Use following composer file https://sirclo.slack.com/files/UTF75DJG0/F06G2JGQSH2/composer.json
- composer install
- Import db and copy media (edit base URL config)
- sh full_deploy.sh

ADD BCA BANGGA LOKAL REPO AFTER SETUP BASIC SWIFTHUB OMS
- composer config repositories.icube-magento2-omsbanggalokal git git@github.com:icube-mage/magento2-omsbanggalokal.git
- composer require icube-mage/magento2-omsbanggalokal:dev-develop
- sh full_deploy.sh