invoke_if
=========

A function witch invokes a object function/static function with specified arguments if condition is true.

Examples
--------

### Invoke object public method

```
use Funct\CodeBlocks as Funct;

$object = new SomeClass();

$foo = 'bar';

Funct\invoke_if($object, 'someMethod', ['first_argument', 'second_argument'], $foo === 'bar');
```

### Invoke object static method

```
use Funct\CodeBlocks as Funct;

$foo = 'bar';

Funct\invoke_if(SomeClass, 'someStaticMethod', ['first_argument', 'second_argument'], $foo === 'bar');
```
