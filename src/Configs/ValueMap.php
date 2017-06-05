<?php

namespace msng\GmoPaymentGateway\Configs;

use msng\GmoPaymentGateway\Entities\Access;
use msng\GmoPaymentGateway\Entities\Card;
use msng\GmoPaymentGateway\Entities\CardToken;
use msng\GmoPaymentGateway\Entities\Error;
use msng\GmoPaymentGateway\Entities\Member;
use msng\GmoPaymentGateway\Entities\Shop;
use msng\GmoPaymentGateway\Entities\Site;
use msng\GmoPaymentGateway\Entities\Transaction;
use msng\GmoPaymentGateway\Values\Access\AccessId;
use msng\GmoPaymentGateway\Values\Access\AccessPass;
use msng\GmoPaymentGateway\Values\Card\CardName;
use msng\GmoPaymentGateway\Values\Card\CardNumber;
use msng\GmoPaymentGateway\Values\Card\CardSeq;
use msng\GmoPaymentGateway\Values\Card\DefaultFlag;
use msng\GmoPaymentGateway\Values\Card\DeleteFlag;
use msng\GmoPaymentGateway\Values\Card\Expire;
use msng\GmoPaymentGateway\Values\Card\HolderName;
use msng\GmoPaymentGateway\Values\Card\SeqMode;
use msng\GmoPaymentGateway\Values\Card\Token;
use msng\GmoPaymentGateway\Values\Error\ErrorCode;
use msng\GmoPaymentGateway\Values\Error\ErrorInfo;
use msng\GmoPaymentGateway\Values\Member\MemberId;
use msng\GmoPaymentGateway\Values\Member\MemberName;
use msng\GmoPaymentGateway\Values\Shop\ShopId;
use msng\GmoPaymentGateway\Values\Shop\ShopPass;
use msng\GmoPaymentGateway\Values\Site\SiteId;
use msng\GmoPaymentGateway\Values\Site\SitePass;
use msng\GmoPaymentGateway\Values\Transaction\Amount;
use msng\GmoPaymentGateway\Values\Transaction\Approve;
use msng\GmoPaymentGateway\Values\Transaction\CheckString;
use msng\GmoPaymentGateway\Values\Transaction\Forward;
use msng\GmoPaymentGateway\Values\Transaction\JobCd;
use msng\GmoPaymentGateway\Values\Transaction\Method;
use msng\GmoPaymentGateway\Values\Transaction\OrderId;
use msng\GmoPaymentGateway\Values\Transaction\TranDate;
use msng\GmoPaymentGateway\Values\Transaction\TranId;

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

        CardToken::TOKEN => Token::class,

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