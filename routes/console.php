<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();



Schedule::command('update:stock_list sza')->cron("*/10 9-12,13-15 * * 1-5")->runInBackground();
Schedule::command('update:stock_list szb')->cron("*/10 9-12,13-15 * * 1-5 ")->runInBackground();
Schedule::command('update:stock_list sha')->cron("*/10 9-12,13-15 * * 1-5")->runInBackground();
Schedule::command('update:stock_list shb')->cron("*/10 9-12,13-15 * * 1-5")->runInBackground();
Schedule::command('update:stock_list hk')->cron("*/10 9-12,13-16 * * 1-5")->runInBackground();
Schedule::command('update:stock_list us')->cron("*/10 21-23,0-5 * * 1-5")->runInBackground();



