Recursive PHP `array_keys()`!
=============================

[![Build Status](https://img.shields.io/travis/lucasantarella/php-array-keys-recursive/master.svg)](https://travis-ci.org/lucasantarella/php-array-keys-recursive)
![License](https://img.shields.io/github/license/lucasantarella/php-array-keys-recursive.svg)
![Issues](https://img.shields.io/bitbucket/issues/lucasantarella/php-array-keys-recursive.svg)

## Description
A simple library for getting the `array_keys()` of a multidimensional array.

## Installation
#### Composer
```bash
$ composer require lucasantarella/php-array-keys-recursive
```

## Usage
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$input = [
    'person' => [
        'name' => [
            'first' => 'Luca',
            'middle' => 'Michele',
            'last' => 'Santarella'
        ],
        'dob' => '11/11/1999',
        'knowledge' => [
            'programming' => [
                'languages' => [
                    'PHP',
                    'JS',
                    'HTML',
                    'SQL',
                    'JAVA'
                ]
            ]
        ]
    ]
];

$output = \LucaSantarella\ArrayKeysRecursive::getKeys($input);
```
#### Result
```text
array (
  'person' => 
  array (
    'name' => 
    array (
      0 => 'first',
      1 => 'middle',
      2 => 'last',
    ),
    0 => 'dob',
    'knowledge' => 
    array (
      'programming' => 
      array (
        'languages' => 
        array (
          0 => 0,
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
        ),
      ),
    ),
  ),
)
```