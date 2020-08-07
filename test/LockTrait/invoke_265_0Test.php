<?php

namespace xltxlm\pattern\test\LockTrait;

use PHPUnit\Framework\TestCase;
use xltxlm\pattern\LockTrait;
use xltxlm\pattern\PatternLockTrait;

/**
 *
 */
class invoke_265_0Test extends TestCase
{
    use invoke_265_0Test\invoke_265_0Provider; #<---本次测试的数据供给来源

    /**
     * @test
     * @dataProvider MyProvider <---本次测试的数据供给来源,3个索引分别对准本函数的3个参数
     * $input 输入值
     * $expected 期望的结果
     */
    public function __invoke($input, $expected, $args)
    {

        $result = $this->runcode($input, $args);
        //最终进行判断
        $this->assertEquals($expected, $result);
    }

    /**
     * 真正的逻辑计算
     * $input 输入值
     * $expected 期望的结果
     */
    private function runcode($input, $args)
    {
        $name = "-";
        ob_start();
        $locka = new locka();
        $locka->CallBack("hello",function () use ($name) {
            echo $name;
        });
        return ob_get_clean();
    }

}


class locka
{
    use PatternLockTrait;

    /**
     *  开始创建锁，如果失败就异常，gg;
     *
     * @return ;
     */
    public function Lock_Open(string $key = null)
    {
        echo "Lock_Start";
    }

    /**
     *  解锁，解锁失败，也是gg掉;
     *
     * @return ;
     */
    public function Lock_Close(string $key = null)
    {
        echo "Lock_End";
        return true;
    }

}