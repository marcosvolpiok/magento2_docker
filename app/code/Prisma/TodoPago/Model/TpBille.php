<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Prisma\TodoPago\Model;

/**
 * Pay In Store payment method model
 */
//class TpBille extends \Magento\Payment\Model\Method\AbstractMethod
class TpBille extends TodoPago
{
	
    protected $_code = 'tpbille';
	protected $hibrido_flag = false;

	public function getCustomUrl()
	{
		return $this->_urlInterface->getBaseUrl().'todopago/payment/formcustom/id/' . $this->_order->getId();
	}

	public function getErrorUrl()
	{
		return $this->_urlInterface->getBaseUrl().'checkout/cart';
	}
}
