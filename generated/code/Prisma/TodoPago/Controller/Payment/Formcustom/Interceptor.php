<?php
namespace Prisma\TodoPago\Controller\Payment\Formcustom;

/**
 * Interceptor class for @see \Prisma\TodoPago\Controller\Payment\Formcustom
 */
class Interceptor extends \Prisma\TodoPago\Controller\Payment\Formcustom implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Checkout\Model\Session $checkoutSession, \Psr\Log\LoggerInterface $logger, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Sales\Api\TransactionRepositoryInterface $transactionRepository, \Magento\Sales\Model\Order\Payment\Transaction\BuilderInterface $transactionBuilder, \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($context, $scopeConfig, $checkoutSession, $logger, $paymentHelper, $transactionRepository, $transactionBuilder, $pageFactory);
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
