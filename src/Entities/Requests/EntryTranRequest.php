<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\Shop;
use msng\GmoPaymentGateway\Entities\ThreeDSecure;
use msng\GmoPaymentGateway\Entities\Transaction;

class EntryTranRequest extends Request
{
    protected $params = [
        Shop::ID => self::REQUIRED,
        Shop::PASS => self::REQUIRED,

        Transaction::ORDER_ID => self::REQUIRED,
        Transaction::JOB_CD => self::REQUIRED,
        Transaction::AMOUNT => self::REQUIRED,
	    Transaction::TAX => self::OPTIONAL,

        ThreeDSecure::TD_FLAG => self::OPTIONAL,
        ThreeDSecure::TD_TENANT_NAME => self::OPTIONAL,
        ThreeDSecure::TDS_2_TYPE => self::OPTIONAL,
        ThreeDSecure::TD_REQUIRED => self::OPTIONAL
    ];
}
