<?php

namespace App\Services;

use Guanguans\Notify\Factory;
use Illuminate\Support\Facades\DB;

class StockNotificationService
{
    public function sendNotification($type, $message)
    {
        $config = DB::table('stock_notice')->where('type', $type)->first();

        if (!$config) {
            return false;
        }

        $notify = Factory::{$type}([
            // 根据实际配置字段修改
            'key' => $config->key,
            'secret' => $config->secret,
        ]);

        return $notify->send($message);
    }
}