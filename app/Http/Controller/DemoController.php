<?php declare(strict_types=1);
/**
 * DemoController.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2019/6/7 16:09
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace App\Http\Controller;

use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;

/**
 *
 * Class DemoController
 * @package App\Http\Controller
 *
 * @Controller("demo")
 *
 */
class DemoController
{
    /**
     *
     * Author: wangyi <chunhei2008@qq.com>
     *
     * @RequestMapping("test")
     *
     */
    public function test(): string
    {
        return "this is demo test";
    }
}