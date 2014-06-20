<?php

namespace Harp\Money\Test\Model;

use Harp\Harp\AbstractModel;
use Harp\Money\Test\Repo;
use Harp\Money\Model\FreezableValueTrait;
use Harp\Money\Model\CurrencyTrait;


class PurchaseItem extends AbstractModel
{
    use CurrencyTrait;
    use FreezableValueTrait;

    public function getRepo()
    {
        return Repo\PurchaseItem::get();
    }

    public $product;

    public function getSourceValue()
    {
        return $this->product->getValue();
    }

    public function getProduct()
    {
        return $this->product;
    }
}
