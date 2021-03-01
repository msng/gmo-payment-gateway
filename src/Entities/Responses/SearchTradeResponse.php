<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Access;
use msng\GmoPaymentGateway\Entities\Card;
use msng\GmoPaymentGateway\Entities\Client;
use msng\GmoPaymentGateway\Entities\Forward;
use msng\GmoPaymentGateway\Entities\Item;
use msng\GmoPaymentGateway\Entities\Member;
use msng\GmoPaymentGateway\Entities\Payment;
use msng\GmoPaymentGateway\Entities\Site;
use msng\GmoPaymentGateway\Entities\Transaction;

class SearchTradeResponse extends Response
{
    protected $fields = [
        Transaction::ORDER_ID,
        Transaction::STATUS,
        Transaction::PROCESS_DATE,
        Transaction::JOB_CD,
        Access::ID,
        Access::PASS,
        Item::CODE,
        Transaction::AMOUNT,
        Transaction::TAX,
        Site::ID,
        Member::ID,
        Card::NUMBER,
        Card::EXPIRE,
        Transaction::METHOD,
        Payment::TIMES,
        Forward::CODE,
        Transaction::TRAN_ID,
        Transaction::APPROVE,
        Client::FIELD_1,
        Client::FIELD_2,
        Client::FIELD_3
    ];
}
