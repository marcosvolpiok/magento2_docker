<?php
namespace Magento\Sales\Model\Order\CreditmemoRepository;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\CreditmemoRepository
 */
class Interceptor extends \Magento\Sales\Model\Order\CreditmemoRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Metadata $metadata, \Magento\Sales\Api\Data\CreditmemoSearchResultInterfaceFactory $searchResultFactory, \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null)
    {
        $this->___init();
        parent::__construct($metadata, $searchResultFactory, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Sales\Api\Data\CreditmemoInterface $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($entity);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }
}
