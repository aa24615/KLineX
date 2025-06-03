<?php

namespace App\Utils;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Formatter\OutputFormatter;

/**
 * Class ConsoleOutputUtil.
 *
 * @package App\Utils
 *
 * @author 读心印 <aa24615@qq.com>
 */
class ConsoleOutputUtil
{

    public static function br(int $n=40,string $symbol='-'):void{
        $str = str_repeat($symbol, $n);
        self::printColoredText($str,'info');
    }

    public static function info($text){
        self::printColoredText($text,'info');
    }

    public static function error($text){
        self::printColoredText($text,'info');
    }

    public static function comment($text){
        self::printColoredText($text,'comment');
    }

    // 使用 formatter 输出带有颜色和样式的文本
    public static function printColoredText($text, $style)
    {
        if(App::runningInConsole()){
            $formatter = new OutputFormatter(true);
            echo $formatter->format("<{$style}>{$text}</>");
            echo PHP_EOL;
            Log::info($text);

            unset($formatter);
        }
    }

}
