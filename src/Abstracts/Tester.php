<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Date         :   2019-09-25
 * Version      :   1.0
 */

namespace DBootstrap\Abstracts;

use Abstracts\SingleTon;

/**
 * Class Tester
 * @package DBootstrap\Abstracts
 */
abstract class Tester extends SingleTon
{
    /**
     * 执行函数
     */
    abstract public function run();
}