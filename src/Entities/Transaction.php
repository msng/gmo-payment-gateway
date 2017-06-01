<?php

namespace Msng\GmoPaymentGateway\Entities;

class Transaction extends ResourceEntity
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
}
