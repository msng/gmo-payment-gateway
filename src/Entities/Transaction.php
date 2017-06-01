<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Transaction\Amount;
use Msng\GmoPaymentGateway\Values\Transaction\Approve;
use Msng\GmoPaymentGateway\Values\Transaction\CheckString;
use Msng\GmoPaymentGateway\Values\Transaction\Forward;
use Msng\GmoPaymentGateway\Values\Transaction\JobCd;
use Msng\GmoPaymentGateway\Values\Transaction\Method;
use Msng\GmoPaymentGateway\Values\Transaction\OrderId;
use Msng\GmoPaymentGateway\Values\Transaction\TranDate;
use Msng\GmoPaymentGateway\Values\Transaction\TranId;

class Transaction extends Entity
{
    const AMOUNT = 'Amount';
    const APPROVE = 'Approve';
    const CHECK_STRING = 'CheckString';
    const FORWARD = 'Forward';
    const JOB_CD = 'JobCd';
    const METHOD = 'Method';
    const ORDER_ID = 'OrderID';
    const TRAN_DATE = 'TranDate';
    const TRAN_ID = 'TranID';

    protected $valueMap = [
        self::AMOUNT => Amount::class,
        self::APPROVE => Approve::class,
        self::CHECK_STRING => CheckString::class,
        self::FORWARD => Forward::class,
        self::JOB_CD => JobCd::class,
        self::METHOD => Method::class,
        self::ORDER_ID => OrderId::class,
        self::TRAN_DATE => TranDate::class,
        self::TRAN_ID => TranId::class
    ];
}