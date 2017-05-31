<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Card\CardName;
use Msng\GmoPaymentGateway\Values\Card\CardNumber;
use Msng\GmoPaymentGateway\Values\Card\CardSeq;
use Msng\GmoPaymentGateway\Values\Card\DefaultFlag;
use Msng\GmoPaymentGateway\Values\Card\DeleteFlag;
use Msng\GmoPaymentGateway\Values\Card\Expire;
use Msng\GmoPaymentGateway\Values\Card\HolderName;
use Msng\GmoPaymentGateway\Values\Card\SeqMode;

class Card extends Entity
{
    const SEQ_MODE = 'SeqMode';
    const SEQ = 'CardSeq';
    const NUMBER = 'CardNo';
    const DEFAULT_FLAG = 'DefaultFlag';
    const NAME = 'CardName';
    const EXPIRE = 'Expire';
    const HOLDER_NAME = 'HolderName';
    const DELETE_FLAG = 'DeleteFlag';

    protected $valueMap = [
        self::SEQ_MODE => SeqMode::class,
        self::SEQ => CardSeq::class,
        self::NUMBER => CardNumber::class,
        self::DEFAULT_FLAG => DefaultFlag::class,
        self::NAME => CardName::class,
        self::EXPIRE => Expire::class,
        self::HOLDER_NAME => HolderName::class,
        self::DELETE_FLAG => DeleteFlag::class
    ];
}
