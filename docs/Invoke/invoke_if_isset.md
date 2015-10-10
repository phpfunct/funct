invoke_if_isset
===============

A function witch invokes a object function/static function with value from collection if its isset.

Examples
--------

### Invoke object public method

```
use Funct\CodeBlocks as Funct;

$object = new SomeClass();

$data = [
    'foo' => 'bar'
];

Funct\invoke_if_isset($object, 'someMethod', $data, 'foo');
```

### Invoke object static method

```
use Funct\CodeBlocks as Funct;

$data = [
    'foo' => 'bar'
];

Funct\invoke_if(SomeClass, 'someStaticMethod', ['first_argument', $data, 'foo');
```
