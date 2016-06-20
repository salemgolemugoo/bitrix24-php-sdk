<?php

namespace Bitrix24\CRM\Deal;

use Bitrix24\Bitrix24Entity;

class ProductRow extends Bitrix24Entity
{
    public function get($dealId)
    {
        $fullResult = $this->client->call(
            'crm.deal.productrows.get',
            array(
                'id' => $dealId
            )
        );

        return $fullResult;
    }

    public function set($dealId, $rows = array())
    {
        $fullResult = $this->client->call(
            'crm.deal.productrows.set',
            array(
                'id' => $dealId,
                'rows' => $rows
            )
        );

        return $fullResult;
    }
}