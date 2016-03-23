[![Build Status](https://travis-ci.org/mundanity/specification.svg?branch=master)](https://travis-ci.org/mundanity/specification)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mundanity/specification/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mundanity/specification/?branch=master)

A simple PHP based implementation of the specification pattern.

## Usage

For basic usage, implement the [SpecificationInterface](src/SpecificationInterface.php) or subclass [AbstractSpecification](src/AbstractSpecification.php).

```php
<?php

class CanDoFoo implements SpecificationInterface
{
    public function isSatisfiedBy($candidate)
    {
        if ($candidate == 'some value') {
            return true;
        }
        return false;
    }
}
```

Specifications can be evaluated together using the methods `andWith()`, `orWith()`, and `not()`.

```php
<?php

class BusinessRuleOne extends AbstractSpecification {}
class BusinessRuleTwo extends AbstractSpecification {}

$spec1 = new BusinessRuleOne();
$spec2 = new BusinessRuleTwo();

$specification = $spec1->andWith($spec2);

// True if $spec1 and $spec2 are true.
$specification->isSatisfiedBy('candidate');

```
