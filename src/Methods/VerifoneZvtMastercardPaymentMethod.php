<?php

namespace VerifoneZvt\Methods;

use VerifoneZvt\Helper\VerifoneZvtHelper;

class VerifoneZvtMastercardPaymentMethod extends VerifoneZvtPaymentMethod
{
    public function getName(): string
    {
        return VerifoneZvtHelper::$paymentMethods['MASTERCARD'];
    }
}
