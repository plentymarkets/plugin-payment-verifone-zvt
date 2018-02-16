<?php
/**
 * author: ninoplettenberg
 */
namespace VerifoneZvt\Helper;


use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;

class VerifoneZvtHelper
{
	const PLUGIN_NAME = 'VerifoneZVT';
	
	const PLUGIN_KEY = "plenty_verifone_zvt";
	
	const NO_PAYMENTMETHOD_FOUND = 'no_paymentmethod_found';
	
	private $paymentMethodRepository;
	
	public static $paymentMethods = [
		'UNKNOWN' => 'VerifoneZvt Unknown',
		'GIROCARD' => 'VerifoneZvt girocard',
		'ELECTRONIC-CASH' => 'VerifoneZvt Electronic-Cash',
		'MAESTRO' => 'VerifoneZvt Maestro',
		'VPAY' => 'VerifoneZvt V PAY',
		'GELDKARTE-GIROGO' => 'VerifoneZvt GeldKarte/Girogo',
		'MASTERCARD' => 'VerifoneZvt Mastercard',
		'VISA' => 'VerifoneZvt Visa',
		'VISA_ELECTRON' => 'VerifoneZvt Visa Electron',
		'AMERICAN-EXPRESS' => 'VerifoneZvt American Express',
		'JCB' => 'VerifoneZvt JCB'
		];
		
	public function __construct(PaymentMethodRepositoryContract $paymentMethodRepositoryContract)
	{
		$this->paymentMethodRepository = $paymentMethodRepositoryContract;
	}
	
	public function createMopIfNotExist()
	{
		foreach (self::$paymentMethods as $paymentKey => $paymentName)
		{
			if ($this->getPaymentMethod($paymentKey) == self::NO_PAYMENTMETHOD_FOUND)
			{
				$paymentMethodData = array(
					'pluginKey' => self::PLUGIN_KEY,
					'paymentKey' => $paymentKey,
					'name' => $paymentName
				);
				
				$this->paymentMethodRepository->createPaymentMethod($paymentMethodData);
			}
		}
	}
	
	private function getPaymentMethod($method)
	{
		$paymentMethods = $this->paymentMethodRepository->allForPlugin(self::PLUGIN_KEY);
		
		if(!is_null($paymentMethods))
		{
			foreach ($paymentMethods as $paymentMethod)
			{
				if ($paymentMethod->paymentKey == $method)
				{
					return $paymentMethod->id;
				}
			}
		}
		
		return self::NO_PAYMENTMETHOD_FOUND;
	}
}