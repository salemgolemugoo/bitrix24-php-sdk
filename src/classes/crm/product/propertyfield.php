<?php

namespace Bitrix24\CRM\Product;

use Bitrix24\Bitrix24Entity;

class PropertyField extends Bitrix24Entity
{
    public function getList($order = array(), $filter = array())
    {
        $fullResult = $this->client->call(
            'crm.product.property.list',
            array(
                'order' => $order,
                'filter' => $filter
            )
        );

        return $fullResult;
    }

    public function get($propertyId)
    {
        $fullResult = $this->client->call(
            'crm.product.property.get',
            array(
                'id' => $propertyId
            )
        );

        return $fullResult;
    }

    public function add($fields = array())
    {
        $fullResult = $this->client->call(
            'crm.product.property.add',
            array(
                'fields' => $fields
            )
        );

        return $fullResult;
    }
}