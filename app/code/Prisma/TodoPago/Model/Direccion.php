<?php
namespace Prisma\TodoPago\Model;

class Direccion extends \Magento\Framework\Model\AbstractModel implements DireccionInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'todopago_direccion';
 
    protected function _construct()
    {
        $this->_init('Prisma\TodoPago\Model\ResourceModel\Direccion');
    }
 
    public function getIdentities()
    {
        return array(self::CACHE_TAG . '_' . $this->getId());
    }
}