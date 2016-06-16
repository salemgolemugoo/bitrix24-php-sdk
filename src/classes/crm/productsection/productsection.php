<?php

namespace Bitrix24\CRM;

use Bitrix24\Bitrix24Entity;

class ProductSection extends Bitrix24Entity
{
    public function getList($order = array(), $filter = array(), $select = array())
    {
        $fullResult = $this->client->call(
            'crm.productsection.list',
            array(
                'order' => $order,
                'filter' => $filter,
                'select' => $select
            )
        );

        return $fullResult;
    }

    public function add($fields = array())
    {
        $fullResult = $this->client->call(
            'crm.productsection.add',
            array(
                'fields' => $fields
            )
        );

        return $fullResult;
    }

    public function update($productSectionId, $fields = array())
    {
        $fullResult = $this->client->call(
            'crm.productsection.update',
            array(
                'id' => $productSectionId,
                'fields' => $fields
            )
        );

        return $fullResult;
    }
}