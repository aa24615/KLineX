<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

//每10分钟更新一次最新股票 (开市期间)
Schedule::command('update:stock_list sza')->cron("*/10 9-12,13-15 * * 1-5")->runInBackground();
Schedule::command('update:stock_list szb')->cron("*/10 9-12,13-15 * * 1-5 ")->runInBackground();
Schedule::command('update:stock_list sha')->cron("*/10 9-12,13-15 * * 1-5")->runInBackground();
Schedule::command('update:stock_list shb')->cron("*/10 9-12,13-15 * * 1-5")->runInBackground();
Schedule::command('update:stock_list hk')->cron("*/10 9-12,13-16 * * 1-5")->runInBackground();
//Schedule::command('update:stock_list us')->cron("*/10 21-23,0-5 * * 1-5")->runInBackground();

//每晚6点将最新的股票拷贝到每天记录表中 (美股除外)
Schedule::command('update:stock_record')->cron("1 18 * * 1-5")->runInBackground();
