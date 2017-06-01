<?php

namespace Msng\GmoPaymentGateway\Responses;

use Illuminate\Support\Collection;

abstract class ResponseCollection extends Collection
{
    const VALUE_SEPARATOR = '|';

    protected $itemClass;

    public function __construct(array $responseValues = [])
    {
        $items = [];
        $itemClass = $this->itemClass;

        $parsedValues = $this->parseResponseValues($responseValues);

        foreach ($parsedValues as $parsedValue) {
            $items[] = new $itemClass($parsedValue);
        }

        parent::__construct($items);
    }

    /**
     * @param array $responseValues
     * @return array
     */
    private function parseResponseValues(array $responseValues)
    {
        $result = [];

        foreach ($responseValues as $responseKey => $responseValue) {
            $responseItems = explode(static::VALUE_SEPARATOR, $responseValue);

            foreach ($responseItems as $index => $responseItem) {
                $result[$index][$responseKey] = $responseItem;
            }
        }

        return $result;
    }

}