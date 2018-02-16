<?php
/**
 * author: ninoplettenberg
 */
namespace VerifoneZvt\Methods;


use VerifoneZvt\Helper\VerifoneZvtHelper;
use VerifoneZvt\Helper\StringHelper;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodService;
use Plenty\Plugin\ConfigRepository;

class VerifoneZvtPaymentMethod extends PaymentMethodService
{
	private $configRepository;
	
	public function __construct(ConfigRepository $configRepository)
	{
		$this->configRepository = $configRepository;
	}
	
	public function isActive():bool
	{
		return false;
	}
	
	public function getName():string
	{
		return VerifoneZvtHelper::PLUGIN_NAME;
	}
}