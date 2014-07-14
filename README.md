Money
=====

[![Build Status](https://travis-ci.org/harp-orm/money.png?branch=master)](https://travis-ci.org/harp-orm/money)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/harp-orm/money/badges/quality-score.png)](https://scrutinizer-ci.com/g/harp-orm/money/)
[![Code Coverage](https://scrutinizer-ci.com/g/harp-orm/money/badges/coverage.png)](https://scrutinizer-ci.com/g/harp-orm/money/)
[![Latest Stable Version](https://poser.pugx.org/harp-orm/money/v/stable.png)](https://packagist.org/packages/harp-orm/money)

Helper Traits for Sebastian Bergmann's Money

Usage
-----

This adds "value" properties to your models, using traits. This is accomplished with ValueTrait and CurrencyTrait. The first adds the methods responsible for working with the Money objects, while CurencyTrait handles keeping tabs on which currency to use.

```
// Model Class
use Harp\Harp\AbstractModel;
use Harp\Money\ValueTrait;
use Harp\Money\CurrencyTrait;

class User extends AbstractModel
{
    use ValueTrait;
    use CurrencyTrait;

    public static function initialize($config)
    {
        // ...
        ValueTrait::initialize($config)
        CurrencyTrait::initialize($config)
    }
    // ...
}
```

__Database Table:__

```
┌─────────────────────────┐
│ Table: User             │
├─────────────┬───────────┤
│ id          │ ingeter   │
│ name        │ string    │
│ currency*   │ string    │
│ value*      │ integer   │
└─────────────┴───────────┘
* Required fields
```

Methods
-------

__ValueTrait Methods__

Method                     | Description
---------------------------|--------------------------------------------------
__getValue__()             | Return a new Money object that represents the value property in the model, using the currency object returned from a "getCurrency" method.
__setValue__(Money $money) | Set the parent model

__CurrencyTrait Methods__

Method                     | Description
---------------------------|--------------------------------------------------
__getCurrency__()          | Return a new Currency object, based on the currency property in the model


Freezable
---------

Using the FreezableTrait will allow you to easily freeze values in the database.
You will need to implement performFreeze and performUnfreeze methods.
__Database Table:__

```
┌─────────────────────────┐
│ Table: User             │
├─────────────┬───────────┤
│ id          │ ingeter   │
│ name        │ string    │
│ isFrozen*   │ integer   │
└─────────────┴───────────┘
* Required fields
```

__FreezableTrait Methods__

Method         | Description
---------------|--------------------------------------------------
__freeze__()   | call the ``performFreeze`` method if the model is not "frozen", e.g. isFrozen property is false. And set isFrozen to true after ``performFreeze`` is called
__unfreeze__() | call the ``performUnfreeze`` method if the model is "frozen", e.g. isFrozen property is true. And set isFrozen to false after ``performUnfreeze`` is called

Freezable Value
---------------

This combines ValueTrait and FreezableTrait to allow you to "freeze" values in the model. It requires a ``getSourceValue`` which returns the dynamic value as a Money object. After "freeze" is called the result of ``getSourceValue`` is stored in the database, and subsequent calls to "getValue" will return the frozen value.

Additionally if the price from ``getSourceValue`` is with a different currency, use Converter class to convert the to the target currency.

__FreezableTrait Methods__

Method         | Description
---------------|--------------------------------------------------
__freeze__()                  | From FreezableTrait
__unfreeze__()                | From FreezableTrait
__setValue__()                | From ValueTrait
__getValue__(Money $money)    | From ValueTrait
__getConvertedSourceValue__() | return a Money object from getSourceValue converted to a proper currency with
__performFreeze__()           | implements a FreezableTrait requirement, saves the value
__performUnfreeze__()         | implements a FreezableTrait requirement, clears the value frozen in the database

License
-------

Copyright (c) 2014, Clippings Ltd. Developed by Ivan Kerin

Under BSD-3-Clause license, read LICENSE file.
