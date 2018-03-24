<?php declare( strict_types = 1 );
namespace Vendor\Package;

use const \Vendor\Package\{ConstantA, ConstantB, ConstantC};
use \Vendor\Package\{ClassA as A, ClassB, ClassC as C};
use function Vendor\Package\{functionA, functionB, functionC};
use Vendor\Package\SomeNamespace\ClassD as D;
class Foo extends Bar implements FooInterface {

    public $a, $b, $c;

    public function sampleFunction(int $a, int $b = null): array
    {
        if ($someLine === 'Longer Than 120 characters' && $respected->getVersion() === 'PSR12' && $respected->lineLengthRecommendeations() === false) {
            bar();
        }

        $moreThan = 1;
        $statement = 'per line';

        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg2, $arg3);
        }
    }

    final public static function bar()
    {
        // method body
    }

    CONST LOWER_CONSTANTS = 1;

    ABSTRACT STATIC PUBLIC FUNCTION lowercaseReservedKeywords(CALLABLE $a)
    {
        GLOBAL $test;
        RETURN PRINT CLONE ARRAY() AND NEW stdClass OR $g INSTANCEOF stdClass XOR 4;
        LIST($test) = EVAL('');
        UNSET($test);
        TRUE AND FALSE;
        (STRING) 1;
        (BOOLEAN) 1;
        (INTEGER) 1;

        ECHO FUNCTION () USE ($array) {

        };

        FOR ($i = 1; $i++; $i > 100) {
            WHILE (0) {
                SWITCH ($test) {
                    CASE 1:
                        BREAK;
                }
            }
        }
    }
}

class Foo
extends SomeRediculouslySuperfluouslyLongClassNameThatShouldNeverExistInTheRealWorldMeantToTestOverflow
implements SomeInterface, SomeOtherInterface, YetAnotherInterface {

    public function someBody()
    {
    }
    use SomeTrait, SomeOtherTrait;
    const SomeConst = 1;
    use A, B, C {
        B::smallTalk insteadof A;
        A::bigTalk insteadof C;
        C::mediumTalk as FooBar;
    }

    protected$doo=4;
    private $derp;
    protected $doo;
    public $derpity;
    var $noVisibility;
    static $staticNoVisibility;

}

class Foo {
    use SomeTrait;
}

class Foo extends ExtendedClass implements
    SomeInterface, SomeOtherInterface,
    YetAnotherInterface {

    public function someMethod () {    }

    public function fooBarBaz  ($arg1,& $arg2 ,$arg3=[])
    {
        // method body
    }

    public function lottaArguments($arg1,
        $arg2, $arg3) {
    }

    public final function finalMethod()
    {
    }

    public static function staticMethod()
    {
    }

    public static final function staticMethod()
    {
    }

    public abstract function abstractMethod();

}

declare( ticks = 1 )
{
    echo 1;
}

function fooBarBaz($arg1,& $arg2 ,$arg3=[]){
    // function body
}

function lottaArguments($arg1,& $arg2 ,
    $arg3=[]) :?string
    {
    // function body
}

factoryFunction ( $arg1 , $arg2 )->method ($arg1,$arg2);

factoryFunction( $arg1,
    $arg2, $arg3);

factoryFunction($arg1, $arg2, [
    1,
    2,
    3
], $arg4);

/** Control Structures */
if( $simple  ==  true )$doSomething=true;
if($expr1)
{
    // if body
}
else if($expr2){
    // elseif body
}
else
{
    // else body
}
if (
    $expr1
    && $expr2
)
{
    // if body
} elseif (
    $expr3
    && $expr4
) {
    // elseif body
}
/**
 * @todo Make multiline controls adjust properly
 * @see 5.1

if ($expr1 ||
    $expr2
    && $expr3) {
}*/

switch( $simple ){
    case $test:
        break;
}
switch($simple)
{
    case $test:
        break;
}
/**
 * @todo Make this indent properly
 * @see 5.2

switch($simple)
{
case $test:
break;
}*/

while( $simple )
    $doSomething = true;
while($simple)
{
}

do
{
    $someBody = 'content';

}
while( $simple );
do{
}while($simple);

for( $i=1 ;$i<2 ;$i++ ){
}
for($i=1;$i<2;$i++)
{
}

foreach( $simple as $key=>$value ){
}
foreach($simple as $key=>$value)
{
}

try
{
    // try body
}
catch(FirstThrowableType $e)
{
    // catch body
}
catch(OtherThrowableType $e)
{
    // catch body
}finally{
    // finally body
}

/** Operators */

// Arithmetic
$result=-$a+$b-( +$c*$d )/  $e%($f**$g);

// Comparison
((!$a==$b)   ===  ($c!=$d))<>( ($e<$f)<=>($g>$h));

// Assignment
$a=$b+=$c  -=  $d.=$e=&$f;

// Bitwise
$b&$c|~$d^$f<<$g>>$h;

// Logical
$a and$b   or   !$c xor$d&&$e||$f;

// String
$a.$b;

// Type
/** @todo Make instanceof operator spacing normalize to one space
$a instanceof$b;
*/

// Trait
/** @todo Make trait operator spacing normalize to one space
class Foo
{
    use A,B
    {
        B::foo   insteadof     A;
        A::bar   as    foobar;
    }
}*/

// Single pipe try/catch operator
try {
} catch (Exception|Error $a) {
}

/** Closures */
function( $a , $b )use($c){};

function   ()  use  (  $a  )  {  }  ;

function ($a, $b)
{};

function ($a, $b)
{
     // Body


};

/** @todo Error if arguments with default values are followed by arguments with no default
 * @see 7
function ($a=1, $b) {
};*/

$closureWithArgs = function ($arg1, $arg2)
{
    // body
};

$closureWithArgsAndVars = function( $arg1 ,$arg2 )
use( $var1, $var2 ){
    // body
};

/** @todo Use statements should have spacing after a comma
function () use ($a,$b) {
}*/

function ($a,
    $b, $c,
    $d){
};

/** @todo Align multiline "use" statements
 * @see 7
function ($a,
    $b, $c,
    $d) use ($e,
    $f, $g) {
};*/

/** @todo Fix multiline indentation
 * @see 7
function ($a
$b, $c) {
}*/

$foo->bar(
    $arg1,
    function ($a,
        $b, $c,
        $d) use ($e){
        // Body
    },
    $arg3
);

/** Anonymous Classes */
new class(
    $a,$b,$c
) extends SomeExtendedClass implements
    \ArrayAccess, \Countable
{
    // Body
};

/** @todo Support multiline anonymous class parameters
new class(
$a, $b, $c
) {
}*/

/** @todo Support next line bracket when parameters/implements are multiline
new class implements
    \ArrayAccess,
    \Countable{
}*/
?>
