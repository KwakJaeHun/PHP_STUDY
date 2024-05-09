<?php
abstract class ParentClassAb {
    public function a(){
        echo "a";
    }

    public abstract function b();
}

class ChildClassAb extends ParentClassAb{

    public function b(){

    }
}