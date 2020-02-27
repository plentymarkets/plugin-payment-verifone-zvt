<?php
/**
 * author: ninoplettenberg
 */
namespace VerifoneZvt\Providers;


use VerifoneZvt\Helper\VerifoneZvtHelper;
use VerifoneZvt\Methods\VerifoneZvtPaymentMethod;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodContainer;
use Plenty\Plugin\ServiceProvider;

class VerifoneZvtServiceProvider extends ServiceProvider
{
	public function register()
	{
	
	}
	
	public function boot(VerifoneZvtHelper $helper, PaymentMethodContainer $container)
	{
		//Create new payment methods
		$helper->createMopIfNotExist();
		
		//Register new PaymentMethods
		foreach (VerifoneZvtHelper::$paymentMethods as $paymentKey => $paymentName)
		{
		    if(isset(VerifoneZvtHelper::$paymentMethodClasses[$paymentKey])){
                $container->register(VerifoneZvtHelper::PLUGIN_KEY.'::'.$paymentKey,
                    VerifoneZvtHelper::$paymentMethodClasses[$paymentKey],
                    []
                );
            }
		}
	}
}
