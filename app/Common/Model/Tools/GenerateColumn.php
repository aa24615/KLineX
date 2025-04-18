<?php

namespace App\Common\Model\Tools;

use App\Common\Model\BaseModel;

/**
 * 代码生成器-数据表字段信息模型
 *
 * @property int $id id
 * @property int $table_id 表id
 * @property string $column_name 字段名称
 * @property string $column_comment 字段描述
 * @property string $column_type 字段类型
 * @property int|null $is_required 是否必填 0-非必填 1-必填
 * @property int|null $is_pk 是否为主键 0-不是 1-是
 * @property int|null $is_insert 是否为插入字段 0-不是 1-是
 * @property int|null $is_update 是否为更新字段 0-不是 1-是
 * @property int|null $is_lists 是否为列表字段 0-不是 1-是
 * @property int|null $is_query 是否为查询字段 0-不是 1-是
 * @property string|null $query_type 查询类型
 * @property string|null $view_type 显示类型
 * @property string|null $dict_type 字典类型
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property-read \App\Common\Model\Tools\GenerateTable|null $generateTable
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereColumnComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereColumnType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereDictType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsInsert($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsLists($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsPk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereIsUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereQueryType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereUpdateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateColumn whereViewType($value)
 * @mixin \Eloquent
 */
class GenerateColumn extends BaseModel
{
    protected $table = 'generate_column';

    /**
     * @notes 关联table表
     */
    public function generateTable()
    {
        return $this->belongsTo(GenerateTable::class, 'id', 'table_id');
    }

}
