<?php

namespace App\Common\Lists;

use Illuminate\Support\Facades\DB;

trait ListsSearchTrait
{

    protected array $params;
    protected $searchWhere = [];


    /**
     * @notes 搜索条件生成
     * @param $search
     * @return array
     */
    private function createWhere($search)
    {
        if (empty($search)) {
            return [];
        }
        $where = [];
        foreach ($search as $whereType => $whereFields) {
            switch ($whereType) {
                case '=':
                case '<>':
                case '>':
                case '>=':
                case '<':
                case '<=':
//                case 'in': // todo Laravel不支持
                    foreach ($whereFields as $whereField) {
                        $paramsName = substr_symbol_behind($whereField);
                        if (!isset($this->params[$paramsName]) || $this->params[$paramsName] == '') {
                            continue;
                        }
                        $where[] = [$whereField, $whereType, $this->params[$paramsName]];
                    }
                    break;
                case '%like%':
                    foreach ($whereFields as $whereField) {
                        $paramsName = substr_symbol_behind($whereField);
                        if (!isset($this->params[$paramsName]) || empty($this->params[$paramsName])) {
                            continue;
                        }
                        $where[] = [$whereField, 'like', '%' . $this->params[$paramsName] . '%'];
                    }
                    break;
                case '%like':
                    foreach ($whereFields as $whereField) {
                        $paramsName = substr_symbol_behind($whereField);
                        if (!isset($this->params[$paramsName]) || empty($this->params[$paramsName])) {
                            continue;
                        }
                        $where[] = [$whereField, 'like', '%' . $this->params[$paramsName]];
                    }
                    break;
                case 'like%':
                    foreach ($whereFields as $whereField) {
                        $paramsName = substr_symbol_behind($whereField);
                        if (!isset($this->params[$paramsName]) || empty($this->params[$paramsName])) {
                            continue;
                        }
                        $where[] = [$whereField, 'like', $this->params[$paramsName] . '%'];
                    }
                    break;
                case 'between_time': // todo Laravel不支持
                    if (!is_numeric($this->startTime) || !is_numeric($this->endTime)) {
                        break;
                    }
                    $where[] = [$whereFields, 'between', [$this->startTime, $this->endTime]];
                    break;
                case 'between': // Laravel 已支持 以,号隔开

                    foreach ($whereFields as $whereField) {
                        $paramsName = substr_symbol_behind($whereField);
                        if (!isset($this->params[$paramsName]) || empty($this->params[$paramsName])) {
                            continue;
                        }

                        $values = explode(',',$this->params[$paramsName]);

                        if(count($values) >= 2){
                            $this->start = trim($values[0]);
                            $this->end = trim($values[1]);
//                            $where[] = [$paramsName, 'between', "{$this->start} and {$this->end}"];
//                            $where[] = [DB::raw("{$paramsName} between {$this->start} and {$this->end}")];
                            $where[] = [$paramsName, '>=', $this->start];
                            $where[] = [$paramsName, '<=', $this->end];
                        }else{
                            $where[] = [$paramsName, '=', $this->params[$paramsName]];
                        }
                    }

                    break;
                case 'find_in_set': // todo Laravel不支持
                    foreach ($whereFields as $whereField) {
                        $paramsName = substr_symbol_behind($whereField);
                        if (!isset($this->params[$paramsName]) || $this->params[$paramsName] == '') {
                            continue;
                        }
                        $where[] = [$whereField, 'find in set', $this->params[$paramsName]];
                    }
                    break;
            }
        }
        return $where;
    }
}
