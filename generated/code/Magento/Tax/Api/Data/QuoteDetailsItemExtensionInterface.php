<?php
namespace Magento\Tax\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Tax\Api\Data\QuoteDetailsItemInterface
 */
interface QuoteDetailsItemExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getVertexProductCode();

    /**
     * @param string $vertexProductCode
     * @return $this
     */
    public function setVertexProductCode($vertexProductCode);
}
