<?php
/**
 * 2001-2017 PH2M
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is available
 * through the world-wide-web at this URL: http://www.opensource.org/licenses/OSL-3.0
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to agence@reflet-digital.com so we can send you a copy immediately.
 *
 * @author PH2M - contact@ph2m.com
 * @copyright 2001-2017 PH2M
 * @license http://www.opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace PH2M\RemoveHomeFromSitemap\Model\Override\Sitemap;

/**
 * Class Sitemap
 * @package PH2M\RemoveHomeFromSitemap\Model\Override\Sitemap
 */
class Sitemap extends \Magento\Sitemap\Model\Sitemap
{
    /**
     * Get url
     * Rewrite modification: if the $url is home, replace it with ''
     *
     * @param string $url
     * @param string $type
     * @return string
     */
    protected function _getUrl($url, $type = \Magento\Framework\UrlInterface::URL_TYPE_LINK)
    {
        if ('home' === $url) {
            $url = '';
        }
        return $this->_getStoreBaseUrl($type) . ltrim($url, '/');
    }
}