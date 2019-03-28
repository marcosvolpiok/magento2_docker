<?php
namespace Prisma\TodoPago\Model;

class Transaccion extends \Magento\Framework\Model\AbstractModel implements TransaccionInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'todopago_transaccion';
 
    protected function _construct()
    {
        $this->_init('Prisma\TodoPago\Model\ResourceModel\Transaccion');
    }
 
    public function getIdentities()
    {
        return array(self::CACHE_TAG . '_' . $this->getId());
    }
}