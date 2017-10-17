# Description
This module remove the `home` URL from the home page to have only `https://www.yoursite.com/` instead of `https://www.yoursite.com/home`.

# Installation

Go to your Magento 2 folder.

```
composer require "ph2m/remove-home-from-sitemap"
php bin/magento module:enable PH2M_RemoveHomeFromSitemap
php bin/magento setup:upgrade
``` 