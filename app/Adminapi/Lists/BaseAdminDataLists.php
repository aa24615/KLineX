<?php

namespace App\Adminapi\Lists;

use App\Common\Lists\BaseDataLists;

/**
 * 管理员模块数据列表基类
 */
abstract class BaseAdminDataLists extends BaseDataLists
{
    protected array $adminInfo;
    protected int $adminId;

    public function __construct()
    {
        parent::__construct();
        $this->adminInfo = $this->request->attributes->get('adminInfo');
        $this->adminId = $this->request->attributes->get('adminId');
    }

    /**
     * @notes  设置支持排序字段
     */
    public function setSortFields(): array
    {
        return ['create_time' => 'create_time', 'id' => 'id'];
    }

    /**
     * @notes  设置默认排序
     */
    public function setDefaultOrder(): array
    {
        return ['sort' => 'desc', 'id' => 'desc'];
    }


}
