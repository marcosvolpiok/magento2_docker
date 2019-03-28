<?php 
namespace Prisma\TodoPago\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Payment\Gateway\Config\ConfigFactory;

use Magento\Framework\App\Config\ScopeConfigInterface as ScopeConfig;

class CustomConfigProvider implements ConfigProviderInterface
{

	/**
	* @var \Magento\Framework\App\Config\ScopeConfigInterface
	*/
	protected $scopeConfig;
	/**
	* first config value config path
	*/
	const FIRST_CONFIG_VALUE = 'payment/todopago/bannerbille';
	const HIBRIDO = 'payment/todopago/hibrido';


	/**
	* @param ScopeConfig $scopeConfig
	*/
	public function __construct(
	ScopeConfig $scopeConfig
	) {
		$this->scopeConfig = $scopeConfig;
	}



    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {

    	$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
    	$bannerBille = $this->scopeConfig->getValue(self::FIRST_CONFIG_VALUE, $storeScope);
    	$hibrido = $this->scopeConfig->getValue(self::HIBRIDO, $storeScope);


    	if(empty($bannerBille)){
    		$bannerBille=1;
    	}

    	$url = "https://todopago.com.ar/sites/todopago.com.ar/files/billetera/pluginstarjeta". $bannerBille .".jpg";
        $config = [];
        $config['bannerBilleUrl'] = $url;
        $config['hibrido'] = $hibrido;


        return $config;
    }
}

