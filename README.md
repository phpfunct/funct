Funct
=====

[![Build Status](https://travis-ci.org/phpfunct/funct.svg?branch=master)](https://travis-ci.org/phpfunct/funct)
[![Coverage Status](https://coveralls.io/repos/phpfunct/funct/badge.svg?branch=master&service=github)](https://coveralls.io/github/phpfunct/funct?branch=master)


A PHP library with commonly used code blocks

Requirements
------------

* PHP > 5.5 (5.6 if you would like to use function namespace)


Usage
-----

```
composer require funct/funct "dev-master"
```

Include namespace alias:

```php
use Funct\CodeBlocks as Funct

Funct\invoke_if(...);
```

Or just a single function if you have PHP > 5.6

```php
use function Funct\CodeBlocks\Invoke\invoke_if;

invoke_if(...)
```


Contribution
------------

Please follow contribution [guide here](CONTRIBUTION.md)