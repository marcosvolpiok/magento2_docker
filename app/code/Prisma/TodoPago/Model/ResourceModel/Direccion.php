<?php
namespace Prisma\TodoPago\Model\ResourceModel;

class Direccion extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('todopago_direcciones_googemaps','id');
    }
}