<?php

/**
 * @author Kashyap Team
 * @copyright Copyright (c) 2018 Kashyap (http://kashyapsoftware.com/)
 * @package Kashyap_GoogleAnalytics
*/


namespace Kashyap\GoogleAnalytics\Block;


class GoogleAnalytics extends \Magento\Framework\View\Element\Template 
{
	protected $helperData;
	protected $objectFactory;
	/**
	 * @var \Magento\Checkout\Model\Session
	 */
	protected $_checkoutSession;


	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Kashyap\GoogleAnalytics\Helper\Data $helperData,
		\Magento\Framework\ObjectManagerInterface $objectManager,
		\Magento\Checkout\Model\Session $checkoutSession,
		array $data = []
	)
	{
		$this->helperData       = $helperData;
		$this->objectManager    = $objectManager;
		$this->_checkoutSession = $checkoutSession;

		parent::__construct($context, $data);
	}

	public function getHelperObject()
	{
		return $this->helperData;
	}

	public function getOrder()
	{
		$order = $this->_checkoutSession->getLastRealOrder();

		return $order;
	}

	public function cleanUpValue($str)
	{
		$str = trim(htmlspecialchars(strip_tags($str)));

		return $str;

	}

	public function getOrderId()
	{
		return $this->getOrder()->getIncrementId();
	}

	public function getGrandTotal()
	{
		return $this->getOrder()->getGrandTotal();
	}


	public function getShippingAmount()
	{
		return $this->getOrder()->getShippingAmount();
	}

	public function getTaxAmount()
	{
		return $this->getOrder()->getTaxAmount();
	}

	public function getOrderStoreName()
	{
		$name = $this->cleanUpValue($this->getOrder()->getStoreName());
		$name = preg_replace("/\r|\n/", "", $name);
		return $name;


	}

	public function getOrderItems()
	{
		/** @Magento/Sales/Model/Order/Items */
		return $this->getOrder()->getAllVisibleItems();
	}


}