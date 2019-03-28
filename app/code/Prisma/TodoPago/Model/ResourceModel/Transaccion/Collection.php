<?php
namespace Prisma\TodoPago\Model\ResourceModel\Transaccion;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Prisma\TodoPago\Model\Transaccion','Prisma\TodoPago\Model\ResourceModel\Transaccion');
    }
}