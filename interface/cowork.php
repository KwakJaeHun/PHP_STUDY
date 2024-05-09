<?php

/** 
* PHP 7이상에서만 인자 형식 지정 가능 / array는 5버전에서도 사용가능
**/

interface ContractInterfaceCo
{
    public function compare($str1, $str2);
}

class Concreate implements ContractInterfaceCo
{
    public function compare($str1, $str2){
        if($str1 === $str2){
            return true;
        }
        else
        {
            return false;
        }
    }
}

class Dummy implements ContractInterfaceCo{
    public function compare($str1, $str2){
        return true;
    
    }
}

$obj = new Concreate();
if($obj->compare("test1", "test2")){
    echo "<h1>Same</h1>";
}
else{
    echo "<h1>different</h1>";
}