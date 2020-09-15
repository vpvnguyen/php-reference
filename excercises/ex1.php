<?php

class Foo {
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';
   
   
    function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }

    function getVarName() { 
        return 'aMemberVar'; 
    }
}

$foo = new Foo; 

$element = 'aMemberVar';
print $foo->$element; // aMemberVar Member Variable
print "\n";
print $foo->getVarName(); // aMemberVar