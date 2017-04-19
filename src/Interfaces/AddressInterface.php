<?php

namespace WTG\Address\Interfaces;

use Illuminate\Database\Eloquent\Builder;

/**
 * Interface AddressInterface
 *
 * @package     WTG\Address
 * @subpackage  Interfaces
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
interface AddressInterface
{
    /**
     * Customer scope.
     *
     * @param  Builder  $query
     * @param  string  $customerId
     * @return Builder
     */
    public function scopeCustomer(Builder $query, string $customerId): Builder;
}