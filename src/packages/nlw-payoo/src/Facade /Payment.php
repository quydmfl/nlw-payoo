<?php

namespace Quydmfl\NlwPayoo\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Payment
 *
 * @package Quydmfl\NlwPayoo\Facade
 * @see \Quydmfl\NlwPayoo\PaymentManager
 */
class Payment extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'Payoo-payment';
    }
}