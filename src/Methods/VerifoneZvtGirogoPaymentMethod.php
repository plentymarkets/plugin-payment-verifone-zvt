<?php

namespace VerifoneZvt\Methods;

use VerifoneZvt\Helper\VerifoneZvtHelper;

class VerifoneZvtGirogoPaymentMethod extends VerifoneZvtPaymentMethod
{
    public function getName(): string
    {
        return VerifoneZvtHelper::$paymentMethods['GELDKARTE-GIROGO'];
    }
}
