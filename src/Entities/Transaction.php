<?php

namespace msng\GmoPaymentGateway\Entities;

class Transaction extends ResourceEntity
{
    const AMOUNT = 'Amount';
    const TAX = 'Tax';
    const APPROVE = 'Approve';
    const CHECK_STRING = 'CheckString';
    const FORWARD = 'Forward';
    const JOB_CD = 'JobCd';
    const METHOD = 'Method';
    const ORDER_ID = 'OrderID';
    const TRAN_DATE = 'TranDate';
    const TRAN_ID = 'TranID';
    const STATUS = 'Status';
    const PROCESS_DATE = 'ProcessDate';
}
