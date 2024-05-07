<?php


/** 
* PHP 7이상에서만 반환 타입 힌트 사용 불가
**/
interface ContractInterface
{
    public function promiseMethod(array $param);
}

interface ContractInterface2
{
    public function promiseMethod2(array $param);
}

class ConcreateClass implements ContractInterface, ContractInterface2
{
    public function promiseMethod(array $param)
    {
        return 1;
    }

    public function promiseMethod2(array $param)
    {
        return 2;
    }

}


$obj = new ConcreateClass();
echo $obj->promiseMethod([1,2]);
echo $obj->promiseMethod2([1,2]);