<?php
namespace Prisma\TodoPago\Model\ResourceModel;

class Transaccion extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('todopago_transacciones','id');
    }
}