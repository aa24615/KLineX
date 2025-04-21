<?php

namespace App\Common\Lists;

use Illuminate\Support\Facades\Log;

trait ListsSortTrait
{

    protected string $orderBy;
    protected string $field;

    /**
     * @notes 生成排序条件
     * @param $sortField
     * @param $defaultOrder
     * @return array|string[]
     */
    private function createOrder($sortField, $defaultOrder)
    {
        if (empty($sortField) || empty($this->orderBy) || empty($this->field) || !in_array($this->field, array_keys($sortField))) {
            return $defaultOrder;
        }

        if (isset($sortField[$this->field])) {
            $field = $sortField[$this->field];
            Log::info($field);
        } else {
            Log::info($defaultOrder);
            return $defaultOrder;
        }

        if (strpos($this->orderBy,'desc')!==false) {
            return [$field => 'desc'];
        }
        if (strpos($this->orderBy,'asc')!==false) {
            return [$field => 'asc'];
        }
        return $defaultOrder;
    }
}
