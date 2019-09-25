<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 2019/9/25
 * Time: 下午2:47
 */

namespace DBootstrap;

use DBootstrap\Abstracts\Tester;

class TestHelper extends Tester
{
    /**
     * 执行函数
     * @return mixed|void
     */
    public function run()
    {
        $urls = [];
        $dir = realpath('.') . "/src";
        // 将目录文件读取成链接数组
        $op = opendir($dir);
        while ($fp = readdir($op)) {
            // 排除当前和上级目录
            if ('.' === $fp || '..' === $fp) {
                continue;
            }
            // 排除目录，只读取文件
            if (!is_file("{$dir}/{$fp}")) {
                continue;
            }
            $className = pathinfo($fp, PATHINFO_FILENAME);
            array_push($urls, $this->getBaseUri() . $className);
        }
        closedir($op);

        // 制作链接视图
        if (isset($_SERVER['argc']) && $_SERVER['argc'] > 0) {
            echo implode("\r\n", $urls) . "\r\n\r\n";
        } else {
            $aString = [];
            foreach ($urls as $url) {
                array_push($aString, "<a href='{$url}' target='_blank'>{$url}</a>");
            }
            echo implode("\r\n<br/>", $aString);
        }
    }

    /**
     * 获取测试访问链接
     * @return string
     */
    protected function getBaseUri()
    {
        static $_baseUri;
        if (null === $_baseUri) {
            if (isset($_SERVER['argc']) && $_SERVER['argc'] > 0) {
                $_baseUri = "php {$_SERVER['SCRIPT_NAME']} --c=";
            } else {
                $_baseUri = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['SCRIPT_NAME']}?c=";
            }
        }
        return $_baseUri;
    }
}