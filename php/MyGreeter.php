<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/25 0025
 * Time: 14:17
 */
class MyGreeter
{
    public function timeCheck()
    {
        date_default_timezone_set('Asia/Shanghai');
        $now = date("H", time());
        $this->greeter($now);
    }

    public function greeter($time)
    {
        switch ($time) {
            case($time < 12);
                echo "Good morning";
                break;
            case($time < 18);
                echo "Good afternoon";
                break;
            case($time >18 );
                echo "Good evening";
                break;
        }
    }
}

$MyGreeter = new MyGreeter();
$MyGreeter->timeCheck();