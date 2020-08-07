<?php

namespace xltxlm\pattern;


/**
 * 最基础的锁模式;
 */
Trait PatternLockTrait
{
    use PatternLockTrait\PatternLockTrait_implements;

    /**
     * @return bool;
     * @var callable $func
     *  执行流程逻辑，内置;
     * @var string   $key
     */
    public function CallBack(string $key = null, callable $func = null): bool
    {
        $this->Lock_Open($key);
        //调起业务代码
        call_user_func($func);
        return $this->Lock_Close($key);
    }


}