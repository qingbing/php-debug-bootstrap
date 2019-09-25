<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/9/25
 * Time: 下午3:14
 */

namespace Test;


use DBootstrap\Abstracts\Tester;
use DBootstrap\TestCommand;

/**
 * Class DebugCommand
 * @package Test
 */
class DebugCommand extends Tester
{
    /**
     * 执行函数
     */
    public function run()
    {
        // 查找所有的参数
        print_r(TestCommand::getInstance()->getParams());
        // 查找具体的某个参数值
        var_dump(TestCommand::getInstance()->getParam('id', 'null'));
    }
}