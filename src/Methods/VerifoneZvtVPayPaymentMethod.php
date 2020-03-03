<?php

namespace VerifoneZvt\Methods;

use VerifoneZvt\Helper\VerifoneZvtHelper;

class VerifoneZvtVPayPaymentMethod extends VerifoneZvtPaymentMethod
{
    public function getName(): string
    {
        return VerifoneZvtHelper::$paymentMethods['VPAY'];
    }
}
