<?php

namespace Mbagri\Discount;

use Illuminate\Support\Facades\Facade;

class DiscountFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'discount';
    }
}
