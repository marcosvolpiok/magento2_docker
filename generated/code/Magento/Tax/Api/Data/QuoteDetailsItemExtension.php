<?php
namespace Magento\Tax\Api\Data;

/**
 * Extension class for @see \Magento\Tax\Api\Data\QuoteDetailsItemInterface
 */
class QuoteDetailsItemExtension extends \Magento\Framework\Api\AbstractSimpleObject implements QuoteDetailsItemExtensionInterface
{
    /**
     * @return string|null
     */
    public function getVertexProductCode()
    {
        return $this->_get('vertex_product_code');
    }

    /**
     * @param string $vertexProductCode
     * @return $this
     */
    public function setVertexProductCode($vertexProductCode)
    {
        $this->setData('vertex_product_code', $vertexProductCode);
        return $this;
    }
}
