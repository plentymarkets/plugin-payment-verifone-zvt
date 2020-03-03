<?php
/**
 * author: ninoplettenberg
 */
namespace VerifoneZvt\Helper;


use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use VerifoneZvt\Methods\VerifoneZvtAmericanExpressPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtElectronicCashPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtGirogoPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtGiroPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtJcbPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtMaestroPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtMastercardPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtUnknownPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtVisaElectronPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtVisaPaymentMethod;
use VerifoneZvt\Methods\VerifoneZvtVPayPaymentMethod;

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

    public static $paymentMethodClasses = [
        'UNKNOWN' => VerifoneZvtUnknownPaymentMethod::class,
        'GIROCARD' => VerifoneZvtGiroPaymentMethod::class,
        'ELECTRONIC-CASH' => VerifoneZvtElectronicCashPaymentMethod::class,
        'MAESTRO' => VerifoneZvtMaestroPaymentMethod::class,
        'VPAY' =>VerifoneZvtVPayPaymentMethod::class,
        'GELDKARTE-GIROGO' => VerifoneZvtGirogoPaymentMethod::class,
        'MASTERCARD' => VerifoneZvtMastercardPaymentMethod::class,
        'VISA' => VerifoneZvtVisaPaymentMethod::class,
        'VISA_ELECTRON' => VerifoneZvtVisaElectronPaymentMethod::class,
        'AMERICAN-EXPRESS' => VerifoneZvtAmericanExpressPaymentMethod::class,
        'JCB' => VerifoneZvtJcbPaymentMethod::class
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
