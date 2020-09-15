<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';
    public static $var4 = 'public static';
    public static $var5 = 100;
    public static $var6 = false;

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
       echo "MyClass::iterateVisible:\n";
       foreach ($this as $key => $value) {
           print "$key => $value\n";
       }
    }

    function iterateValues() {
        echo "MyClass::iterateValues:\n";
        foreach ($this as $value) {
            print "$value\n";
        }
    }

    function getPublicVar($i) {
        echo "MyClass::getPublicVar:\n";
        switch ($i) {
            case 0:
                echo self::$var4."\n";
                break;
            case 1:
                echo self::$var5."\n";
                break;
            case 2:
                echo self::$var6."\n";
                if (self::$var6 == false) {
                    echo 'false';
                }
                break;
        }
    }
}

$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value\n";
}
echo "\n";


$class->iterateVisible();
// var1 => value 1
// var2 => value 2
// var3 => value 3

// MyClass::iterateVisible:
// var1 => value 1
// var2 => value 2
// var3 => value 3
// protected => protected var
// private => private var

$class->iterateValues();
// value 1
// value 2
// value 3
// protected var
// private var

$class->getPublicVar(0); // public static
$class->getPublicVar(1); // 100
$class->getPublicVar(2); // false