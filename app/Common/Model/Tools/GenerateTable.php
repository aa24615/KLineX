<?php

namespace App\Common\Model\Tools;

use App\Common\Enum\GeneratorEnum;
use App\Common\Model\BaseModel;

/**
 * 代码生成器-数据表信息模型
 *
 * @property int $id id
 * @property string $table_name 表名称
 * @property string $table_comment 表描述
 * @property int $template_type 模板类型 0-单表(curd) 1-树表(curd)
 * @property string|null $author 作者
 * @property string|null $remark 备注
 * @property int $generate_type 生成方式  0-压缩包下载 1-生成到模块
 * @property string|null $module_name 模块名
 * @property string|null $class_dir 类目录名
 * @property string|null $class_comment 类描述
 * @property int|null $admin_id 管理员id
 * @property array<array-key, mixed>|null $menu 菜单配置
 * @property array<array-key, mixed>|null $delete 删除配置
 * @property array<array-key, mixed>|null $tree 树表配置
 * @property array<array-key, mixed>|null $relations 关联配置
 * @property \Illuminate\Support\Carbon $create_time 创建时间
 * @property \Illuminate\Support\Carbon|null $update_time 修改时间
 * @property-read mixed $template_type_desc
 * @property string $image
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Common\Model\Tools\GenerateColumn> $tableColumn
 * @property-read int|null $table_column_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereClassComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereClassDir($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereGenerateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereModuleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereRelations($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereTableComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereTemplateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereTree($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GenerateTable whereUpdateTime($value)
 * @mixin \Eloquent
 */
class GenerateTable extends BaseModel
{
    protected $table = 'generate_table';

    public $casts = [
        'menu' => 'array',
        'tree' => 'array',
        'relations' => 'array',
        'delete' => 'array',
    ];

    protected $appends = ['template_type_desc'];

    /**
     * @notes 关联数据表字段
     */
    public function tableColumn()
    {
        return $this->hasMany(GenerateColumn::class, 'table_id', 'id');
    }

    /**
     * @notes 模板类型描述
     */
    public function getTemplateTypeDescAttribute($value)
    {
        return GeneratorEnum::getTemplateTypeDesc($this->attributes['template_type']);
    }

}
