<?php

namespace VerifoneZvt\Methods;

use VerifoneZvt\Helper\VerifoneZvtHelper;

class VerifoneZvtGiroPaymentMethod extends VerifoneZvtPaymentMethod
{
    public function getName(): string
    {
        return VerifoneZvtHelper::$paymentMethods['GIROCARD'];
    }
}
