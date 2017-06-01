<?php

namespace Msng\GmoPaymentGateway\Entities;

class Card extends ResourceEntity
{
    const SEQ_MODE = 'SeqMode';
    const SEQ = 'CardSeq';
    const NUMBER = 'CardNo';
    const DEFAULT_FLAG = 'DefaultFlag';
    const NAME = 'CardName';
    const EXPIRE = 'Expire';
    const HOLDER_NAME = 'HolderName';
    const DELETE_FLAG = 'DeleteFlag';
}
