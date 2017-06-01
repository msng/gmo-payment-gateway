<?php

namespace Msng\GmoPaymentGateway\Entities\Response;

use Msng\GmoPaymentGateway\Entities\Entity;
use Msng\GmoPaymentGateway\Entities\Transaction;
use Msng\GmoPaymentGateway\Values\Transaction\Approve;
use Msng\GmoPaymentGateway\Values\Transaction\CheckString;
use Msng\GmoPaymentGateway\Values\Transaction\Forward;
use Msng\GmoPaymentGateway\Values\Transaction\Method;
use Msng\GmoPaymentGateway\Values\Transaction\OrderId;
use Msng\GmoPaymentGateway\Values\Transaction\TranDate;

class ExecTranResponse extends Entity
{
    protected $valueMap = array(
        Transaction::ORDER_ID => OrderId::class,
        Transaction::FORWARD => Forward::class,
        Transaction::METHOD => Method::class,
        Transaction::APPROVE => Approve::class,
        Transaction::TRAN_DATE => TranDate::class,
        Transaction::CHECK_STRING => CheckString::class
    );
}