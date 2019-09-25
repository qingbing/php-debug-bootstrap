<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/9/25
 * Time: 下午3:02
 */

namespace Test;


use DBootstrap\Abstracts\Tester;

class DebugWeb extends Tester
{
    public function run()
    {
        var_dump(111);
    }
}