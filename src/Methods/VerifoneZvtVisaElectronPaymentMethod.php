<?php

namespace VerifoneZvt\Methods;

use VerifoneZvt\Helper\VerifoneZvtHelper;

class VerifoneZvtVisaElectronPaymentMethod extends VerifoneZvtPaymentMethod
{
    public function getName(): string
    {
        return VerifoneZvtHelper::$paymentMethods['VISA_ELECTRON'];
    }
}
