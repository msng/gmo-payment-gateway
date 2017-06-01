<?php

namespace Msng\GmoPaymentGateway\Configs;

use Msng\GmoPaymentGateway\Entities\Access;
use Msng\GmoPaymentGateway\Entities\Card;
use Msng\GmoPaymentGateway\Entities\Error;
use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Shop;
use Msng\GmoPaymentGateway\Entities\Site;
use Msng\GmoPaymentGateway\Entities\Transaction;
use Msng\GmoPaymentGateway\Values\Access\AccessId;
use Msng\GmoPaymentGateway\Values\Access\AccessPass;
use Msng\GmoPaymentGateway\Values\Card\CardName;
use Msng\GmoPaymentGateway\Values\Card\CardNumber;
use Msng\GmoPaymentGateway\Values\Card\CardSeq;
use Msng\GmoPaymentGateway\Values\Card\DefaultFlag;
use Msng\GmoPaymentGateway\Values\Card\DeleteFlag;
use Msng\GmoPaymentGateway\Values\Card\Expire;
use Msng\GmoPaymentGateway\Values\Card\HolderName;
use Msng\GmoPaymentGateway\Values\Card\SeqMode;
use Msng\GmoPaymentGateway\Values\Error\ErrorCode;
use Msng\GmoPaymentGateway\Values\Error\ErrorInfo;
use Msng\GmoPaymentGateway\Values\Member\MemberId;
use Msng\GmoPaymentGateway\Values\Member\MemberName;
use Msng\GmoPaymentGateway\Values\Shop\ShopId;
use Msng\GmoPaymentGateway\Values\Shop\ShopPass;
use Msng\GmoPaymentGateway\Values\Site\SiteId;
use Msng\GmoPaymentGateway\Values\Site\SitePass;
use Msng\GmoPaymentGateway\Values\Transaction\Amount;
use Msng\GmoPaymentGateway\Values\Transaction\Approve;
use Msng\GmoPaymentGateway\Values\Transaction\CheckString;
use Msng\GmoPaymentGateway\Values\Transaction\Forward;
use Msng\GmoPaymentGateway\Values\Transaction\JobCd;
use Msng\GmoPaymentGateway\Values\Transaction\Method;
use Msng\GmoPaymentGateway\Values\Transaction\OrderId;
use Msng\GmoPaymentGateway\Values\Transaction\TranDate;
use Msng\GmoPaymentGateway\Values\Transaction\TranId;

class ValueMap
{
    public static $map = [
        Access::ID => AccessId::class,
        Access::PASS => AccessPass::class,

        Card::SEQ => CardSeq::class,
        Card::SEQ_MODE => SeqMode::class,
        Card::NUMBER => CardNumber::class,
        Card::DEFAULT_FLAG => DefaultFlag::class,
        Card::DELETE_FLAG => DeleteFlag::class,
        Card::NAME => CardName::class,
        Card::EXPIRE => Expire::class,
        Card::HOLDER_NAME => HolderName::class,
        Card::DELETE_FLAG => DeleteFlag::class,

        Error::CODE => ErrorCode::class,
        Error::INFO => ErrorInfo::class,

        Member::ID => MemberId::class,
        Member::NAME => MemberName::class,

        Shop::ID => ShopId::class,
        Shop::PASS => ShopPass::class,

        Site::ID => SiteId::class,
        Site::PASS => SitePass::class,

        Transaction::AMOUNT => Amount::class,
        Transaction::APPROVE => Approve::class,
        Transaction::CHECK_STRING => CheckString::class,
        Transaction::FORWARD => Forward::class,
        Transaction::JOB_CD => JobCd::class,
        Transaction::METHOD => Method::class,
        Transaction::ORDER_ID => OrderId::class,
        Transaction::TRAN_DATE => TranDate::class,
        Transaction::TRAN_ID => TranId::class,
    ];
}