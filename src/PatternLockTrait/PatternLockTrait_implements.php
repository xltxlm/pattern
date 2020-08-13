<?php
namespace xltxlm\pattern\PatternLockTrait;

/**
 * :Trait;
 * 最基础的锁模式;
*/
Trait PatternLockTrait_implements
{


/**
* @var string $key  
*  开始创建锁，如果失败就异常，gg;
*  @return bool;
*/
abstract protected function Lock_Open(string $key = null):bool;
/**
* @var string $key  
*  解锁，解锁失败，也是gg掉;
*  @return bool;
*/
abstract protected function Lock_Close(string $key = null):bool;
/**
* @var string $key  
* @var callable $func  
*  执行流程逻辑，内置;
*  @return bool;
*/
abstract public function CallBack(string $key = null,callable $func = null):bool;
}