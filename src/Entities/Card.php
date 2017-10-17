<?php

namespace msng\GmoPaymentGateway\Entities;

use msng\GmoPaymentGateway\Values\Card\DefaultFlag;

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

    /**
     * @return bool
     */
    public function isDefaultCard()
    {
        $defaultFlag = $this->get(static::DEFAULT_FLAG);

        if ($defaultFlag instanceof DefaultFlag && $defaultFlag->isDefault()) {
            return true;
        }

        return false;
    }
}
