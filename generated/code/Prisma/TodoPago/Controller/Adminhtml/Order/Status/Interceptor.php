<?php
namespace Prisma\TodoPago\Controller\Adminhtml\Order\Status;

/**
 * Interceptor class for @see \Prisma\TodoPago\Controller\Adminhtml\Order\Status
 */
class Interceptor extends \Prisma\TodoPago\Controller\Adminhtml\Order\Status implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Psr\Log\LoggerInterface $logger, \Magento\Framework\View\Result\PageFactory $pageFactory, \Prisma\TodoPago\Model\Factory\Connector $tpc)
    {
        $this->___init();
        parent::__construct($context, $scopeConfig, $logger, $pageFactory, $tpc);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
