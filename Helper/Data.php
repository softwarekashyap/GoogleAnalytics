<?php

/**
 * @author Kashyap Team
 * @copyright Copyright (c) 2018 Kashyap (http://kashyapsoftware.com/)
 * @package Kashyap_GoogleAnalytics
*/

namespace Kashyap\GoogleAnalytics\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	const XML_PATH_GENERAL_ENABLED = 'googleanalytics/general/is_enabled';
	const XML_PATH_GENERAL_MAIN_TRACKING = 'googleanalytics/general/tracking_id';
	const XML_PATH_GENERAL_SECOND_TRACKING = 'googleanalytics/general/tracking_id2';
	const XML_PATH_GENERAL_LINK_ATTRIBUTION = 'googleanalytics/general/link_attribution';
	const XML_PATH_GENERAL_IP_ANONYMIZATION = 'googleanalytics/general/ip_anonymization';
	const XML_PATH_GENERAL_DEBUG = 'googleanalytics/general/debug';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
    
	public function isEnabled()
	{
		return $this->scopeConfig->getValue(self::XML_PATH_GENERAL_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

	}

	public function getMainTracking()
	{
		return $this->scopeConfig->getValue(self::XML_PATH_GENERAL_MAIN_TRACKING, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getSecondTracking()
	{
		return $this->scopeConfig->getValue(self::XML_PATH_GENERAL_SECOND_TRACKING, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getLinkAttribution()
	{
		return $this->scopeConfig->getValue(self::XML_PATH_GENERAL_LINK_ATTRIBUTION, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getIpAnonymization()
	{
		return $this->scopeConfig->getValue(self::XML_PATH_GENERAL_IP_ANONYMIZATION, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getDebug()
	{
		return $this->scopeConfig->getValue(self::XML_PATH_GENERAL_DEBUG, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
}
